<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">        
        <!-- title of site -->
        <title>Mármol Jadanes</title>
        <!-- For favicon png -->
		<link rel="icon" type="image/x-icon" href="resource/img/favicon2.ico">       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <!--linear icon css-->
		<link rel="stylesheet" href="assets/css/linearicons.css">
		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">   
		<link rel="stylesheet" href="carr.css" />
    </head>
	
	<body>	
		<!--welcome-hero start -->
		<header id="home" class="welcome-hero">


			<!-- top-area Start -->
			<div class="top-area">
				<div class="header-area">
					<!-- Start Navigation -->
				    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

				        <!-- Busqueda -->
				        <div class="top-search">
				            <div class="container">
				                <div class="input-group">
				                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
				                    <input type="text" class="form-control" placeholder="Search">
				                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
				                </div>
				            </div>
				        </div>
				        <!-- End Top Search -->

				        <div class="container">            
				            <!-- Start Atribute Navigation -->
				            <div class="attr-nav">
				                <ul>
				                	<li class="search">
				                		<a href="#"><span class="lnr lnr-magnifier"></span></a>
									</li><!--/.search-->
				                	<li class="nav-user">
				                		<a href="login.php"><span class="lnr lnr-user"></span></a>
				                	</li><!--/.search-->
				        
				                 
				                </ul>
				            </div><!--/.attr-nav-->
				            <!-- End Atribute Navigation -->

				            <!-- Start Header Navigation -->
				            <div class="navbar-header">
				                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
				                    <i class="fa fa-bars"></i>
				                </button>
				                <a class="navbar-brand" href="index.html">Mj<span>Marmol</span></a>

				            </div><!--/.navbar-header-->
				            <!-- End Header Navigation -->

				            <!-- Collect the nav links, forms, and other content for toggling -->
				            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
				                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
				                    <li class=" scroll active"><a href="#home">Inicio</a></li>
				                    <li class="scroll"><a href="#new-arrivals">Productos</a></li>

				                    <li class="scroll"><a href="#sofa-collection">¿Quienes Somos? </a></li>
				                    <li class="scroll"><a href="#newsletter">Contactos</a></li>
				                </ul><!--/.nav -->
				            </div><!-- /.navbar-collapse -->
				        </div><!--/.container-->
				    </nav><!--/nav-->
				    <!-- End Navigation -->
				</div><!--/.header-area-->
			    <div class="clearfix"></div>

			</div><!-- /.top-area-->
			<!-- top-area End -->

		</header><!--/.welcome-hero-->
		<!--welcome-hero end -->






	<br><br><br><br>

	<?php
                       include 'conexion.php';
                       $sql="SELECT * FROM fotos LIMIT 5";
                       
                       $result=mysqli_query($conn, $sql);
                       
                       while($datos=mysqli_fetch_array($result)){
                       ?>
		
		<div class="containerr">
      <div class="panel active" style="background-image: url('<?php echo $datos['foto1']?>')">
        <h3>peroo</h3>
      </div>
    </div>
	<?php
                   
				}
			 ?>
		<script src="carr.js"></script>
















		<!--Productos-->
		<section id="new-arrivals" class="new-arrivals">
			<div class="container">
				<div class="section-header">
					<h2>Tipos Productos</h2>
				</div><!--/.section-header-->
				<div class="new-arrivals-content">
					<div class="row">


						<!--Productos aqui -->
						<div class="col-md-3 col-sm-4">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<img src="resource/images/conjunto/model1.png" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay"></div>
									<div class="sale bg-1">
										<p>Lapidas</p>
									</div>
								
								</div>
								<h4><a href="B.html">Lapidas</a></h4>
								<p class="arrival-product-price">$650.00</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-4">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<img src="resource/images/conjunto/model1.png" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay"></div>
									<div class="sale bg-1">
										<p>Lapidas</p>
									</div>
								</div>
								<h4><a href="B.html">Lapidas</a></h4>
								<p class="arrival-product-price">$650.00</p>
							</div>
						</div>
						
					
						
	
					</div>
				</div>
			</div><!--/.container-->
		
		</section><!--/.new-arrivals-->
		<!--new-arrivals end -->


  








		<!--newsletter strat -->
		<section id="newsletter"  class="newsletter">
			<div class="container">
				<div class="hm-footer-details">
					
					
					
					<!--newsletter strat -->
					<div class="row">
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>information</h4>
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-menu">
									<ul>
										<li><a href="#new-arrivals">Porductos</a></li><!--/li-->
										<li><a href="#sofa-collection">Quienes Somos?</a></li><!--/li-->
										<li><a href="#home">Inicio</a></li><!--/li-->
										
									</ul><!--/ul-->
								</div><!--/.hm-foot-menu-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->

						<!--newsletter strat -->
					<div class="row">
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4> Contactos</h4>

								</div><!--/.hm-foot-title-->
								<div class="hm-foot-menu">
									<ul>
										<li><a href="#">Correo</a></li><!--/li-->
										<li><a href="#">Numero</a></li><!--/li-->
										<li><a href="#">Coquimbo</a></li><!--/li-->
										
									</ul><!--/ul-->
								</div><!--/.hm-foot-menu-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
						


		
					</div><!--/.row-->
				</div><!--/.hm-footer-details-->

			</div><!--/.container-->

		</section><!--/newsletter-->	
		<!--newsletter end -->

		<!--footer start-->
		<footer id="footer"  class="footer">
			<div class="container">
				<div class="hm-footer-copyright text-center">
					<div class="footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>	
						<a href="#"><i class="fa fa-instagram"></i></a>
					</div>
					<p>
						&copy;copyright. designed and developed by <a href="https://www.themesine.com/">GAMBERSOFT</a>
					</p><!--/p-->
				</div><!--/.text-center-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>				
			</div><!--/.scroll-Top-->	

        </footer><!--/.footer-->
		<!--footer end-->
		<script src="assets/js/jquery.js"></script>
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>
		<!--owl.carousel.js-->
        <script src="assets/js/owl.carousel.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>        
        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
        
    </body>
	
</html>