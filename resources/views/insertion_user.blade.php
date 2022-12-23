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

     <div class="row">
                        <div class="col-md-12">
                            <h6 class="page-head-line"></h6>
                            <h1 class="page-subhead-line"> </h1>
                        </div>
                    </div>
                    <!-- /. ROW  -->
               <div class="container">
               <div class="row" style="padding-bottom: 100px; `">
                    <div class="col-md-12">
                        <div id="comments-sec" class="form-horizotal">
							<!--form action="/insert" method="post">
                                {{csrf_field()}}-->
                        <form action="{{route('add.users')}}" 
                            method="post">{{csrf_field()}}
                                    <h4><strong>Insertion users </strong></h4>
                                    <hr />
                                    <!--input id="invisible_id" name="invisible" type="hidden" value="secret"-->
                                    <input type="hidden" name="id" value="" class="form-control">
                                    
									<div class="form-group  ">
                                         <label>Nom:</label>
                                        <input type="text" name="lastname" class="form-control" required="required" placeholder="Tapez votre nom" /></div>
                                    </div>
									<div class="form-group  ">
                                        <label>Prénom:</label>
                                        <input type="text" name="firstname" class="form-control" required="required" placeholder="Tapez votre prénom" />
                                    </div>
                                    <div class="form-group  ">
                                        <label>Username:</label>
                                        <input type="text" name="username" class="form-control" required="required" placeholder="Tapez votre username" />
                                    </div>
									<div class="form-group  ">
                                        <label>Adresse email:</label>
                                        <input type="email" name="email" class="form-control" required="required" placeholder="Tapez votre Adresse email" />
                                    </div>
								
									<div class="form-group  ">
                                        <label>Mot de passe:</label>
                                        <input type="password" name="password" pattern=".{4,}" title="Entrez quatre caractère minimum" class="form-control" required="required" placeholder="Tapez votre Mot de passe" />
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">Enregistrer</button>                                        
                                    </div>
                            </form>
                            </div>
                        </div>
                </div>        
                 
                        <div class="row">
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <ol class="carousel-indicators">
                                        <li data-target="#reviews" data-slide-to="0" class="active"></li>
                                        <li data-target="#reviews" data-slide-to="1"></li>
                                        <li data-target="#reviews" data-slide-to="2"></li>
                                    </ol>
                                    <!--PREVIUS-NEXT BUTTONS-->
                                </div>
                            </div>
                        </div>
                        <!-- /. ROW  -->
                        <hr />
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
