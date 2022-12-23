<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
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

<div class="container">
  <h2>LISTES USERS</h2>
  <div class="form-group  ">
        <form class="example" method="get" action="{{action('UserController@findUsers')}}">
            <input type="text" placeholder="Search.." name="q">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
  <p></p>            
  <table class="table table-striped">
    <thead>
   <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
       @foreach ($users as $user)
         <tr>  
          <td>{{ $user->firstname }} </td>
          <td>{{ $user->lastname }} </td>
          <td>{{ $user->email }} </td>
         <td><a href ="{{ URL::action('UserController@update', $user->id) }}" class="btn btn-warning">Modifier</a></td>
           <td><a href ="{{ URL::action('UserController@destroy', $user->id) }}"class="btn btn-danger"  onclick="return confirm('Voulez-vous supprimer ?');">supprimer</a></td>
          </tr>
      @endforeach 
      <td class="text-center" colspan="8"><a href ="{{ URL::action('UserController@add_users')}}" class="btn btn-info">AJOUTER</a> 
        
    </tbody>
  </table>
</div>
</body>
</html>
