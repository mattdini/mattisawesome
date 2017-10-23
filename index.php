<!DOCTYPE html>
<html lang="en">
	<head>
	<?php require_once("header.php"); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Matt Carter : The Webpage : The Flamethrower</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
	 <link rel="stylesheet" href="assets/css/animate.css">


    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/hover.zoom.js"></script>
    <script src="assets/js/hover.zoom.conf.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.typeit/4.4.0/typeit.min.js"></script> 
	
	<script src="https://use.fontawesome.com/7a8dfde674.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container centered">

        
          <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>-->
						<div class="logoDiv animated fadeInDown">
							<a href="index.php"><img class="img-responsive" src="assets/img/mattisawesomelogo.png"></a>
						</div>	  

        
      </div>
    </div>

	<!-- +++++ Welcome Section +++++ -->
	<div id="ww">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 centered">
					<img src="assets/img/matt.png" alt="Matt" class="animated fadeIn">
					<h1>Hi, I am Matt!</h1>
					<p>Hello everybody. I like to <span id="typeMe"></span></p>
					<p>
						I call myself a programming systems administrator.
					</p>
					<p>
						Need to change a property across hundreds of users? Deploy software to thousands of computers? Spin up and configure a NGINX webserver in the cloud?
						<p> I wrote a script for that... </p>
					</p>
					
				</div><!-- /col-lg-8 -->
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /ww -->
	
	
	<!-- +++++ Projects Section +++++ -->
	
	<div class="container pt">
		<div class="row mt centered">	
			<div class="col-lg-4">
				<a class="zoom green" href="api.php"><img class="img-responsive" src="assets/img/portfolio/api.png" alt="" /></a>
				<p>Project / Employee API</p>
			</div>
			<div class="col-lg-4">
				<a class="zoom green" href="vrar.php"><img class="img-responsive" src="assets/img/portfolio/ar.png" alt="" /></a>
				<p>VR / AR</p>
			</div>
			<div class="col-lg-4">
				<a class="zoom green" href="ps.php"><img class="img-responsive" src="assets/img/portfolio/powershell.png" alt="" /></a>
				<p>Powershell / Sysadmin</p>
			</div>
		</div><!-- /row -->
		<div class="row mt centered">	
			<div class="col-lg-4">
			</div>
			<div class="col-lg-4">
				<a class="zoom green" href="misc.php"><img class="img-responsive" src="assets/img/portfolio/misc.png" alt="" /></a>
				<p>Miscellaneous Projects</p>
			</div>
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
	
	
	<!-- +++++ Footer Section +++++ -->
	
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<h4></h4>
				</div><!-- /col-lg-4 -->
				
				<div class="col-lg-4">
					<h4>Links</h4>
					<p>
						<a href="https://www.linkedin.com/in/mattcarterpdx">LinkedIn</a><br/>
						<a href="https://github.com/mattdini">GitHub</a><br/>
						<a href="mailto:matt@mattisawesome.com">matt@mattisawesome.com</a>
					</p>
				</div><!-- /col-lg-4 -->
				
				<div class="col-lg-4">
					<h4>About This Page</h4>
					<p>Needed somewhere to show off some projects, ideas, technologies I <i class="fa fa-heart" aria-hidden="true"></i></p>
				</div><!-- /col-lg-4 -->
			
			</div>
		
		</div>
	</div>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
	
	<script>
	$('#typeMe').typeIt({
		 strings: ["solve problems.", "automate everything.","bring information together."],
		 speed: 100,
		 breakLines: false,
		 autoStart: false,
		 loop: false,
		 deleteDelay: 2000
}); 
</script>
  </body>
<?php require_once("footer.php"); ?>
</html>
