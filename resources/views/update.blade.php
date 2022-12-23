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
<body>
<div class="container">
<form class="col-md-12" action="<?php echo URL::to('/');?>/edit/<?=$users->id?>" method="put">  
                            <h4><strong>Modification </strong></h4>
                            <hr/>
                            
							<div class="form-group  ">
                               
                                <input type="hidden" name="id" value="" class="form-control"></input>
                            </div>
							
                            <div class="form-group  ">
                                <label>Prénom:</label>
                                   <textarea type="text" class="form-control input-lg" placeholder="Text Here" name="lastname"><?=$users->lastname?></textarea> 

                            </div>
							<div class="form-group  ">
                                <label>Nom:</label>
                                <textarea type="text" class="form-control input-lg" placeholder="Text Here" name="firstname"><?=$users->firstname?></textarea> 

                            </div>
                            <div class="form-group  ">
                                <label>Email:</label>
                                <textarea type="text" class="form-control input-lg" placeholder="Text Here" name="email"><?=$users->email?></textarea> 

                            </div>
                             <div class="form-group  ">
                                <label>Mot de pass:</label>
                                <textarea type="text" class="form-control input-lg" placeholder="Text Here" name="password"><?=$users->password?></textarea> 

                            </div>
                            <div class="form-group">
                                     <button type="submit" id="submit" class="btn btn-success" value="Modifier">Modifier</button>		
                   		 </div>
            		</form>
</div>    

	 
         
        <!--/div>
     </div-->	
</body>
</html>