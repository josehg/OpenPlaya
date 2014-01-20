<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="favicon.png">

		<title>OpenPlaya</title>

		<!-- Bootstrap core CSS -->
		<link href="../css/bootstrap.css" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700' rel='stylesheet' type='text/css'>
		<!-- Just for debugging purposes. Don't actually copy this line! -->
		<!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>

		<body>
<!-- NAVBAR
================================================== -->
  <body data-spy="scroll" data-target="#navbar" >
    <div class="navbar-wrapper">
      <div class="container">

        <div id="navbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
				<a class="navbar-brand" href="/"><img style="height: 40px" src="../images/logo.png" alt="Open Playa" /></a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="/">Inicio</a></li>
				<li><a href="/playas">Playas</a></li>
				<li><a href="http://openplaya.tumblr.com/">Blog</a></li>
                <li><a href="/acerca-de">Acerca de...</a></li>
                <li><a href="/contacto">Contacto</a></li>
<!--                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>-->
			  </ul>
				<ul class="nav navbar-nav navbar-right">
				<li ><a href="/usuario/login">Login</a></li>
				<li ><a href="/usuario/registro">Registro</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


   @yield('content')

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer class="footer">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; <?php echo date('Y') ?> Open Playa &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
	<script src="../js/holder.js"></script>
  </body>
</html>
