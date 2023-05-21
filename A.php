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






	<br><br>
	<div class="poto">
  <div class="containerr">
    <!-- AQUÍ INICIA CON LA PRIMERA IMAGEN QUE VA ESTÁTICA -->
    <div class="panel active" style="background-image: url('https://images.unsplash.com/photo-1558979158-65a1eaa08691?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80')">
      <h3>Explore The World</h3>
    </div>

    <!-- EN ESTA PARTE ESTÁ LA LLAMADA A LA BD SOLO DE LAS PRIMERAS 5 FOTOS -->
    <?php
    include 'conexion.php';
    $sql = "SELECT
	fotos.Ruta AS Ruta1,
	producto.idProducto,
	fotos.Producto_idProducto AS Producto_idProducto1,
	producto.Descripccion,
	producto.Estado,
	producto.Precio,
	producto.Nombre,
	producto.Tipo,
	producto.*
  FROM
	fotos
	INNER JOIN producto ON fotos.Producto_idProducto =
	  producto.idProducto LIMIT 5";
    $result = mysqli_query($conn, $sql);
    while ($datos = mysqli_fetch_array($result)) {
    ?>
      <div class="panel" >
	  <img style=" background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  object-fit: cover;
  height: 80vh;
  border-radius: 50px;
  color: #fff;
  cursor: pointer;
  flex: 0.5;
  margin: 10px;
  position: relative;
  -webkit-transition: all 700ms ease-in;" src="resource\imgproductos\<?php echo $datos['Ruta1'] ?>" alt="new-arrivals images">
        <h3><?php echo $datos['Producto_idProducto1'] ?></h3>
      </div>
    <?php
    }
    ?>
  </div>
  <!-- SE LLAMA AL SCRIPT -->
  <script src="carr.js"></script>
</div>








			<div class="container">
				<div class="section-header">
					<h2>Tipos Productos</h2>
				</div><!--/.section-header-->
				<div class="new-arrivals-content">
					<div class="row">


					<?php
						include 'conexion.php';
						$sql="SELECT
						fotos.Ruta AS Ruta1,
						producto.idProducto,
						fotos.Producto_idProducto AS Producto_idProducto1,
						producto.Descripccion,
						producto.Estado,
						producto.Precio,
						producto.Nombre,
						producto.Tipo,
						producto.*
					  FROM
						fotos
						INNER JOIN producto ON fotos.Producto_idProducto =
						  producto.idProducto LIMIT 4";
						$result=mysqli_query($conn, $sql);
						while($datos=mysqli_fetch_array($result)){
					?>


						<!--Productos aqui -->
						<div class="col-md-3 col-sm-4">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">

									<img src="resource\imgproductos\<?php echo $datos['Ruta1'] ?>" alt="new-arrivals images">
									
									<div class="single-new-arrival-bg-overlay"></div>
									<div class="sale bg-1">
										<p><?php echo $datos['Tipo']?></p>
									</div>
								
								</div>
								<h4><a href="B.html"><?php echo $datos['Nombre']?></a></h4>
								<p class="arrival-product-price"><?php echo $datos['Precio']?></p>
							</div>
						</div>
						
					<?php        
				
						}
					?>
	
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