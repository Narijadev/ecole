<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
<body>
@include('include.header')
<div class="container">
  <h2>LISTES ETUDIANTS</h2>
  <div class="form-group  ">
        <form class="example" method="get" action="{{action('ParentController@search')}}">
            <input type="text" placeholder="Search.." name="q">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>    
  <p></p> 
  <div class="row col-lg-12">
    <div class="link d-flex justify-content-center">{{ $etudiants->links() }}</div>
</div>  
<!--delete à cocher-->
<button  class="btn btn-danger btn-xs delete-all" data-url="">Supprimer les sélections</button>         
  <table class="table table-striped">
    <thead>
   <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
       @foreach ($etudiants as $user)
         <tr>  
            <td>{{ $user->prenom }} </td>
            <td>{{ $user->nom }} </td>
            <td>{{ $user->sexe}} </td>
            <td>{{ $user->dateNaissance}} </td>
            <td><a href ="{{ URL::action('ParentController@add_users', $user->id) }}" class="btn btn-info">AJOUT</a></td>
            <td><a href ="{{ URL::action('ParentController@profil', $user->id) }}" class="btn btn-info">Profil</a></td>
            <td><a href ="{{ URL::action('ParentController@update', $user->id) }}" class="btn btn-warning">Modifier</a></td>
            <td><a href ="{{ URL::action('ParentController@destroy', $user->id) }}"class="btn btn-danger"  onclick="return confirm('Voulez-vous supprimer {{ $user->nom }}?');">supprimer</a></td>
            <td><input type="checkbox" class="sub_chk checkbox" data-id="{{$user->id}}"></td>  
        </tr>
      @endforeach 
      <td class="text-center" colspan="8"><a href ="{{ URL::action('ParentController@add_users')}}" class="btn btn-info">AJOUTER</a> 
      <!--td class="text-center" colspan="8"><a href ="{{ URL::action('ParentController@add_etudiants')}}" class="btn btn-succes">AJOUTER ETUDIANTS</a--> 
    </tbody>
  </table>
  <div class="row col-lg-12">
    <div class="link d-flex justify-content-center">{{ $etudiants->links() }}</div>
</div>
</div>
 
</body>
</html>
<script>
    /* deleteAll checkbox*/  
    $(document).ready(function () {
       $('.checkbox').on('click',function(){           
            const i = $(this).attr('data-id');
            if($('.checkbox:checked').length === 0) {            
                $('.tr-' + i).removeClass('checkedDelete');
            } else {  
                $('.tr-' + i).addClass('checkedDelete');
            }
         });
        $('.delete-all').on('click', function(e) {
            var idsArr = [];  
            $(".checkbox:checked").each(function() {  
                idsArr.push($(this).attr('data-id'));
            });
            if(idsArr.length <=0)  
            {  
                alert("Veuillez sélectionner au moins un enregistrement à supprimer.");  
            }  else {  
                if (confirm("Êtes-vous sûr de vouloir supprimer les offres sélectionnées?")) {  
                    var strIds = idsArr.join(","); 
                    $.ajax({
                        url: "{{ route('deleteAll.users')}}",
                        type: 'GET',
                        data: 'ids=' + strIds,
                        success: function (data) {
                            $('.checkedDelete').hide()
                        },
                        error: function (data) {
                          alert('error');
                        }
                    });
                }  
            }  
        });         
    });
/* deleteAll checkbox*/ 
</script>