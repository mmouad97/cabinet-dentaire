<?php
	
?>


<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>DOCTOR - Responsive HTML &amp; Bootstrap Template</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="js/modernizr.js"></script>
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	
	<!-- ====================================================
	header section -->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 header-logo">
					<br>
					<a href="index.html"><img src="img/logo.png" alt="" class="img-responsive logo"></a>
				</div>

				<div class="col-md-7">
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      
					      <ul class="nav navbar-nav navbar-right">
					        <li><a class="menu active" href="#home" >Home</a></li>
					        <li><a class="menu" href="#about">about us</a></li>
					        <li><a class="menu" href="#service">our services </a></li>
					        <li><a class="menu" href="#team">our team</a></li>
					        <li><a class="menu" href="#contact">contact us</a></li>
					        <li class="dropdown">
                                <a class="menu" href="#" data-toggle="dropdown">login</a>
                                <ul class="dropdown-menu">
                                    <li><a class="connecter" href="loginMedecin.php">medecin</a></li>
                                    <li><a class="connecter" href="loginPatient.php">patient</a></li>
                                </ul>
                            </li>
					      </ul>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->

     <section >
        <div class="login">
            <div div="info">
                <h2 class="title">Connexion sécurisée</h2>
                <h4>Votre nom d'utilisateur et votre mot de passe vous donnent accès à tous nos services en ligne.<br>Connectez-vous maintenant pour commencer à utiliser l'accès au compte patient</h4>
            </div>
            <div class="loginForm">
                <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                    <div class="row">
                        <div class="col1">
                            <label for="adressemail">Adresse email</label>
                        </div>
                        <div class="col2 input-group">
                            <input type="text" name="adressemail" class="form-control">           
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-envelope"></span>
                            </div> 
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col1">
                            <label for="motdepasse">Mot de passe</label>
                        </div>
                        <div class="col2 input-group" >
                            <input type="password" name="motdepasse" class="form-control">                           
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-lock"></span>
                            </div> 
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col2">
                            <a href="#" class="oublie">Mot de passe oublié</a><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col2">
                            <input type = "submit" value="Se connecter" name = "submit"><br>
                        </div>
                    </div>                    
                    
                    
                    
                </form>
                <h4>Pas encore membre ?<a href="inscription.html">Inscrivez-vous</a> gratuitement en 30s</h4>
            </div>
        </div>       
    </section>
    
    <!-- script tags
	============================================================= -->
	<script src="js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>