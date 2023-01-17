<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\User;
    use App\Etudiant;
    use Illuminate\Support\Facades\Input;
    use DB;
    //use App\Http\Controllers\Auth;
    use Illuminate\Support\Facades\Auth;


class ParentController extends Controller {

       
        public function seConnecter(){
            return view('Auth.login');
        }
        public function authenticate(Request $request)
            {  
                /* 
                if (!auth()->user() || !auth()->user()->id) {
                    redirect('/');
                }
                
                $email = auth()->user()->email;
                $password = auth()->user()->password;
                $liste = auth()->user()->liste;

                */
                //$id = auth()->user()->id;
                /*$userId = Auth::check() ? Auth::id() : true;
                Auth::user()->id;*/
                
               
                $lastname = $request->lastname;
                $email = $request->email;
                $password = $request->password;
                $result = DB::select('select * from users where  password= :password AND email = :email LIMIT 1', ['password' => $password, 'email'=> $email]);
               // dd($result);
              // dd($userId);
                if(sizeof ($result)>0){
                   // if (!auth()->user() || !auth()->user()->id) {
                     //   redirect('/liste');
                    //}
                   
                   return redirect('/liste');
                    //return redirect('/profil');

                }else{
                    return redirect('/');
                }
             
            }
            public function listeEtudiants(){
                //$users = User::all()->paginate(8);
               // $etudiants = DB::table('etudiant')->where('parentId', '19')->paginate(4);
                $etudiants = DB::table('etudiants')->where('parentId', '18')->paginate(4);
                //dd($etudiants);
                return view('liste_etudiants',['etudiants' => $etudiants]);
                }

        public function logout()
        {
            Auth::logout();
            return redirect('/');
        }

        public function register(){
            return view('Auth.register');
        }
        public function home(){
            //$users = User::all()->paginate(8);
            $users = DB::table('users')->orderBy('lastname', 'asc')->paginate(4);
            return view('liste_users',['users' => $users]);
            }
        public function add_users(){
            return view('insertion_user');
            } 
        public function profil($id)
            {
            $users = User::find($id);
            return view('profil',['users' => $users]);
            }     
        public function add_etudiants(){
            return view('add_etudiant');
         }      
        public function insert(Request $request)
        {
        $lastname = $request->input('lastname');
        $firstname = $request->input('firstname');
        $email = $request->input('email');
        $username = $request->input('username');
        $password = $request->input('password');
        $data=array(
            'lastname'=> $lastname,
            'firstname'=>$firstname,
            'email'=> $email,
            'username'=> $username,
            'password'=>$password
        );
        DB::table('users')->insert($data);
        /*echo "Record inserted successfully.<br/>";
        /*echo '<a href = "/insert">Click Here</a> to go back.';*/
                //print_r($user);
        return redirect()->action('ParentController@home');       
        }     
        public function update($id)
            {
            $users = User::find($id);
            return view('update',['users' => $users]);
            }
        public function edit(Request $request, $id)
            {
            $users = User::find($id);
            $users->lastname = $request->lastname;
            $users->firstname = $request->firstname;
            $users->email = $request->email;
            $users->password = $request->password;
            $users->save(); 
            return redirect()->action('ParentController@home');       
            }

        public function destroy($id)
            {
            // delete
            $users = User::find($id);
            $users->delete();
            return redirect()->action('ParentController@home');
         
            }   
        public function getUrlUser($lastname){
        //var_dump($name);
            $users =User::where('lastname',$lastname)->first(); 
       // return  $users ; 
      return view('profil',['users' => $users]);
    } 
    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        $users= DB::table("users")->whereIn('id',explode(",",$ids))->delete();
       // return response()->json(['success'=>"Products Deleted successfully."]);
        return view('liste_users',['users' => $users]);
    }
    public function search(Request $request){
        $search=$request->query();   
       // if (isset($search['q'])) {
        $searcharticles = User::orWhere('lastname', 'LIKE', '%' . $search['q'] . '%')
        ->orWhere('firstname', 'LIKE', '%' . $search['q'] . '%')
        ->orWhere('email', 'LIKE', '%' . $search['q'] . '%')
        ->paginate(2);
        return view('liste_users',['users' => $searcharticles]);
       // dd($searcharticles); 
       // } 
       /* if (isset($search['q'])) {
            $searcharticles = User::orWhere('lastname', 'LIKE', '%' . $search['q'] . '%')
            // ->orWhere('prix', 'LIKE', '%' . $term . '%')
            //->orWhere('listeId', $request->listeId)
            //->paginate(3);
            ->get();
            $key = $search['q'];
            return view('liste_users', compact('searcharticles', 'key'));
           
        } else {
            $searcharticles = [];
            $key = '';
            return view('liste_users', compact('searcharticles', 'key'));
          
        }*/
    } 
    public function add_etudiant(Request $request,$id)
        {
        $parent = new Parents();
        $parent->parentId= $id ;    
       // $parentId = $request->input('parentId');
        $avatar = $request->input('avatar');
        $prenom = $request->input('prenom');
        $nom = $request->input('nom');
        $sexe = $request->input('sexe');
        $dateNaissance = $request->input('dateNaissance');
       
        $data=array(
            'parentId'=> $parent->parentId,
            'avatar'=>$avatar,
            'prenom'=> $prenom,
            'nom'=> $nom,
            'sexe'=> $sexe,
            'dateNaissance'=>$dateNaissance
        );
        DB::table('etudiants')->insert($data);
        /*echo "Record inserted successfully.<br/>";
        /*echo '<a href = "/insert">Click Here</a> to go back.';*/
                //print_r($user);
        return redirect()->action('ParentController@home');       
        }  
} 