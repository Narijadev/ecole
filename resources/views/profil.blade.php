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
@include('include.header')
<div class="container">

	<form class="col-md-12" action="<?php echo URL::to('/');?>/edit/<?=$users->id?>" method="put">  
            <h4><strong>FICHE PARENTS</strong></h4>
            <hr/>
            <div class="row">
                <div class = "col-sm-2">
                <img src="/img/defaut.png" class="rounded float-left" alt="...">
                </div>
                <div class = "col-sm-8">
                <div class="form-group  ">
                
               
            </div>
            
            <div class="form-group  ">
                <label>Prénom:</label>
                <strong><?=$users->lastname?></strong>
            </div>
            <div class="form-group  ">
                <label>Nom:</label>
                <strong><?=$users->firstname?></strong>
            </div>
            <div class="form-group  ">
                <label>Email:</label>
                <strong><?=$users->email?></strong>
            </div>
                <!--div class="form-group  ">
                <label>Mot de pass:</label>
                <textarea type="text" disabled="" class="form-control input-lg" placeholder="Text Here" name="password"><?=$users->password?></textarea> 

            </div-->
            <div class="form-group">
                @foreach ($users as $user)

                @endforeach 
                        <!--button type="submit" id="submit" class="btn btn-success" value="Modifier">Modifier</button-->		
            </div>
                </div>     
            </div>
            
            
    </form> 
</body>
</html>