<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>DINAMED | Soluciones en insumos de salud</title>
		<meta name="keywords" content="DINAMED Soluciones en insumos de salud S.A. de C.V." />
		<meta name="description" content="" />
		<meta name="Author" content="Reynaldo y César" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

		<!-- REVOLUTION SLIDER -->
		<link href="assets/plugins/slider.revolution/css/extralayers.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/slider.revolution/css/settings.css" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout.css" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="assets/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />
	</head>
	<!-- Chatra {literal} -->
<script>
    (function(d, w, c) {
        w.ChatraID = 'TQRtiS8jaCcBKAd4g';
        var s = d.createElement('script');
        w[c] = w[c] || function() {
            (w[c].q = w[c].q || []).push(arguments);
        };
        s.async = true;
        s.src = 'https://call.chatra.io/chatra.js';
        if (d.head) d.head.appendChild(s);
    })(document, window, 'Chatra');
</script>
<!-- /Chatra {/literal} -->

	<!--
		AVAILABLE BODY CLASSES:

		smoothscroll 			= create a browser smooth scroll
		enable-animation		= enable WOW animations

		bg-grey					= grey background
		grain-grey				= grey grain background
		grain-blue				= blue grain background
		grain-green				= green grain background
		grain-blue				= blue grain background
		grain-orange			= orange grain background
		grain-yellow			= yellow grain background

		boxed 					= boxed layout
		pattern1 ... patern11	= pattern background
		menu-vertical-hide		= hidden, open on click

		BACKGROUND IMAGE [together with .boxed class]
		data-background="assets/images/boxed_background/1.jpg"
	-->
	<body class="smoothscroll enable-animation">

    <?php

      try {
        require_once("php/conexion.php");
        $sql = "SELECT c.cantidad,p.nombreProd, p.precio ";
        $sql .= " FROM carrito c ";
        $sql .= " RIGHT OUTER JOIN producto p ";
        $sql .= " ON c.idProducto = p.idProducto ";
        $sql .= " WHERE c.idUsuario = 1 ";
        $resultado = $conn->query($sql);
      } catch (Exception $e) {
        echo $e->getMessage();
      }
     ?>
    <?php
      $carrito = array();
      while ($temp = $resultado->fetch_assoc()) {
        $carrito [] = $temp;
    } ?>
<!-- SLIDE TOP -->
		<div id="slidetop">

			<div class="container">

				<div class="row">

					<div class="col-md-4">
						<h6><i class="icon-heart"></i> MISIÓN</h6>
						<p>Ser una empresa responsable que cuida el medio ambiente, y que entiende las necesidades del cliente. </p>
					</div>

					<div class="col-md-4">
						<h6><i class="icon-attachment"></i> VISIÓN</h6>
						<p>Ofrecer a nuestros clientes calidad. </p>
					</div>

					<div class="col-md-4">
						<h6><i class="icon-envelope"></i> CONTACTO</h6>
						<ul class="list-unstyled">
							<li><b>Dirección:</b> Sta Cruz Acatlán, <br /> Naucalpan de Juarez</li>
							<li><b>Telefono:</b> 55 6085 5500</li>
							<li><b>Email:</b> <a href="mailto:support@yourname.com">contacto@dinamed.com.mx</a></li>
						</ul>
					</div>

				</div>

			</div>

			<a class="slidetop-toggle" href="#"><!-- toggle button --></a>

		</div>
		<!-- /SLIDE TOP -->


		<!-- wrapper -->
		<div id="wrapper">

			<!-- Top Bar -->
			<div id="topBar">
				<div class="container">

					<!-- right -->
					<ul class="top-links list-inline pull-right">
						<li class="text-welcome hidden-xs">Bienvenido a DINAMED, <strong>David Garcia</strong></li>
						<li>
							<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><i class="fa fa-user hidden-xs"></i> Mi Cuenta</a>
							<ul class="dropdown-menu pull-right">
								<li><a tabindex="-1" href="#"><i class="fa fa-history"></i> Historial de Compras</a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="#"><i class="fa fa-cog"></i> Configuracion</a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="#"><i class="glyphicon glyphicon-off"></i> SALIR</a></li>
							</ul>
						</li>
					</ul>

					<!-- left -->
					<ul class="top-links list-inline">
						<li class="hidden-xs"><a href="page-contact-1.html">CONTACTO</a></li>
					</ul>

				</div>
			</div>
			<!-- /Top Bar -->


			<!--
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.noborder 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom

				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent noborder"
			-->
			<div id="header" class="sticky shadow-after-3 clearfix">

				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- BUTTONS -->
						<ul class="pull-right nav nav-pills nav-second-main">

							<!-- SEARCH -->
							<li class="search">
								<a href="javascript:;">
									<i class="fa fa-search"></i>
								</a>
								<div class="search-box">
									<form action="page-search-result-1.html" method="get">
										<div class="input-group">
											<input type="text" name="src" placeholder="Search" class="form-control" />
											<span class="input-group-btn">
												<button class="btn btn-primary" type="submit">Search</button>
											</span>
										</div>
									</form>
								</div>
							</li>
							<!-- /SEARCH -->

							<!-- QUICK SHOP CART -->
							<li class="quick-cart">
								<a href="#">
									<span class="badge badge-aqua btn-xs badge-corner"><?php echo sizeof($carrito); ?></span>
									<i class="fa fa-shopping-cart"></i>
								</a>
								<div class="quick-cart-box">
									<h4>Carrito de compras</h4>

									<div class="quick-cart-wrapper">
                    <?php
                    $total=0;
                    if (sizeof($carrito)>0) {
                      foreach ($carrito as $value) {?>
                        <a href="#"><!-- /cart item -->
                          <img src="assets/images/productos/jeringaInsulina.jpg" width="45" height="45" alt="" />
                          <h6><span><?php echo $value["cantidad"] ?>x</span><?php echo $value["nombreProd"] ?></h6>
                          <?php
                            $cantidad = (int)$value["cantidad"];
                            $precio = (float)$value["precio"];
                            $totalprod = $precio*$cantidad;
                            $total+=$totalprod;
                          ?>
                          <small>$ <?php echo $totalprod; ?></small>
                        </a><!-- /cart item -->
                      <?php }
                    } ?>
										<!-- cart no items example -->
										<!--
										<a class="text-center" href="#">
											<h6>0 ITEMS ON YOUR CART</h6>
										</a>
										-->

									</div>

									<!-- quick cart footer -->
									<div class="quick-cart-footer clearfix">
										<a href="shop-cart.html" class="btn btn-primary btn-xs pull-right">VER CARRITO</a>
										<span class="pull-left"><strong>TOTAL:</strong> $ <?php echo $total ?></span>
									</div>
									<!-- /quick cart footer -->

								</div>
							</li>
							<!-- /QUICK SHOP CART -->

						</ul>
						<!-- /BUTTONS -->


						<!-- Logo -->
						<a class="logo pull-left" href="index.html">
							<img src="assets/images/logo/dinamed_logo.png" alt="" />
						</a>

						<!--
							Top Nav

							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
							<nav class="nav-main">

								<!--
									NOTE

									For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
									Direct Link Example:

									<li>
										<a href="#">HOME</a>
									</li>
								-->
								<ul id="topMain" class="nav nav-pills nav-main">
									<li class="dropdown active"><!-- HOME -->
										<a class="dropdown-toggle" href="#">
											INICIO
										</a>

									</li>
									<li class="dropdown"><!-- PAGES -->
										<a class="dropdown-toggle" href="#">
											NOSOTROS
										</a>

									</li>
									<li class="dropdown mega-menu"><!-- PORTFOLIO -->
										<a class="dropdown-toggle" href="#">
											PROVEDORES
										</a>

									</li>
									<li class="dropdown"><!-- BLOG -->
										<a class="dropdown-toggle" href="#">
											CLIENTES
										</a>

									</li>
									<li class="dropdown"><!-- SHOP -->
										<a class="dropdown-toggle" href="#">
											TIENDA
										</a>
									</li>


								</ul>

							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->

			</div>



			<!-- REVOLUTION SLIDER -->
			<div class="slider fullwidthbanner-container roundedcorners">
				<!--
					Navigation Styles:

						data-navigationStyle="" theme default navigation

						data-navigationStyle="preview1"
						data-navigationStyle="preview2"
						data-navigationStyle="preview3"
						data-navigationStyle="preview4"

					Bottom Shadows
						data-shadow="1"
						data-shadow="2"
						data-shadow="3"

					Slider Height (do not use on fullscreen mode)
						data-height="300"
						data-height="350"
						data-height="400"
						data-height="450"
						data-height="500"
						data-height="550"
						data-height="600"
						data-height="650"
						data-height="700"
						data-height="750"
						data-height="800"
				-->
				<div class="fullwidthbanner" data-height="600" data-shadow="0" data-navigationStyle="preview2">
					<ul class="hide">

						<!-- SLIDE  -->
						<li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-delay="10000" data-saveperformance="off" data-title="Slide 1" style="background-color: #F6F6F6;">

							<img src="assets/images/productos/insumosMedicos.jpeg" alt="video" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat">

							<div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text uppercase"
								data-x="left" data-hoffset="0"
								data-y="70"
								data-customin="x:-200;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="400"
								data-start="1000"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn">
								<img src="assets/images/productos/insumosMedicos.jpeg" alt="">
							</div>

							<div class="tp-caption large_bold_grey skewfromrightshort customout font-open-sans"
								data-x="645"
								data-y="70"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="500"
								data-start="800"
								data-easing="Back.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								data-captionhidden="off"
								style="z-index: 4; font-weight:bold;">DINAMED
							</div>

							<div class="tp-caption large_bold_grey skewfromleftshort customout font-open-sans"
								data-x="645"
								data-y="133"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="300"
								data-start="1100"
								data-easing="Back.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								data-captionhidden="off"
								style="z-index: 7; font-weight:bold !important;">Insumos Médicos
							</div>

							<div class="tp-caption ltl customin customout small_light_white font-lato"
								data-x="650"
								data-y="235"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="500"
								data-start="1300"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="500"
								data-endeasing="Power4.easeIn" style=" color: #333; font-size:20px; max-width: 550px; white-space: normal; text-shadow:none;">
								El mejor proveedor de insumos médicos en AL<br />
								<strong>Tu mejor opción</strong>
							</div>



						</li>

						<!-- SLIDE  -->
						<li data-transition="random" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide 2">

							<img src="assets/images/1x1.png" data-lazyload="assets/images/productos/insumosMedicos.jpeg" alt="" data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat" />

							<div class="overlay dark-1"><!-- dark overlay [1 to 9 opacity] --></div>

							<div class="tp-caption customin ltl tp-resizeme text_white"
								data-x="center"
								data-y="155"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1000"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10;">
								<span class="weight-300">TODO / TIPO / DE / INSUMOS</span>
							</div>

							<div class="tp-caption customin ltl tp-resizeme large_bold_white"
								data-x="center"
								data-y="205"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1200"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10;">
								BIENVENIDOS A DINAMED
							</div>

							<div class="tp-caption customin ltl tp-resizeme small_light_white font-lato"
								data-x="center"
								data-y="295"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1400"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10; width: 100%; max-width: 750px; white-space: normal; text-align:center; font-size:20px;">
								Insumos Médicos S.A. de C.V.
							</div>

							<div class="tp-caption customin ltl tp-resizeme"
								data-x="center"
								data-y="383"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1550"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10;">
								<a href="#purchase" class="btn btn-default btn-lg">
									<span>Ver productos</span>
								</a>
							</div>

						</li>

					</ul>

					<div class="tp-bannertimer"><!-- progress bar --></div>
				</div>
			</div>
			<!-- /REVOLUTION SLIDER -->


			<!-- INFO BAR -->
			<section class="info-bar info-bar-clean">
				<div class="container">

					<div class="row">

						<div class="col-sm-4">
							<i class="glyphicon glyphicon-globe"></i>
							<h3>ENVÍOS NACIONALES</h3>
							<p>Envíos a toda la república</p>
						</div>

						<div class="col-sm-4">
							<i class="glyphicon glyphicon-usd"></i>
							<h3>EXCELENTES PRECIOS</h3>
							<p>Los precios más bajos</p>
						</div>

						<div class="col-sm-4">
							<i class="glyphicon glyphicon-flag"></i>
							<h3>ASISTENCIA 24/7</h3>
							<p>Contactanos en nuestro chat</p>
						</div>

					</div>

				</div>
			</section>
			<!-- /INFO BAR -->



			<!-- WELCOME -->
			<section class="nopadding-bottom">
				<div class="container">
					<header class="text-center margin-bottom-40">
						<h1 class="weight-300">DINAMED Insumos Médicos</h1>
						<h2 class="weight-300 letter-spacing-1 size-13"><span>El mejor proveedor de México</span></h2>
					</header>

					<div class="text-center">
						<p class="lead">
							DINAMED es el provedor de insumos médicos ubicado en México con el mejor sevicio y la gama mas alta de productos, tenemos envíos a toda la república méxicana, y parte de AL
						</p>

						<div class="margin-top-40">
							<img class="img-responsive" src="assets/images/demo/index/ipad.jpg" alt="welcome" />
						</div>

					</div>
				</div>
			</section>
			<!-- /WELCOME -->




			<!-- -->
			<section class="alternate">
				<div class="container">

					<div class="row">

						<div class="col-md-4">

							<div class="box-icon box-icon-side box-icon-color box-icon-round">
								<i class="fa fa-tablet"></i>
								<a class="box-icon-title" href="#">
									<h2>Fully Reposnive</h2>
								</a>
								<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
								<a class="box-icon-more font-lato weight-300" href="#">Learn More</a>
							</div>

						</div>

						<div class="col-md-4">

							<div class="box-icon box-icon-side box-icon-color box-icon-round">
								<i class="fa fa-tint"></i>
								<a class="box-icon-title" href="#">
									<h2>Reusable Elements</h2>
								</a>
								<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
								<a class="box-icon-more font-lato weight-300" href="#">Learn More</a>
							</div>

						</div>

						<div class="col-md-4">

							<div class="box-icon box-icon-side box-icon-color box-icon-round">
								<i class="fa fa-cogs"></i>
								<a class="box-icon-title" href="#">
									<h2>Multipurpose</h2>
								</a>
								<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
								<a class="box-icon-more font-lato weight-300" href="#">Learn More</a>
							</div>

						</div>

					</div>

				</div>
			</section>
			<!-- / -->




			<!-- -->
			<section>
				<div class="container">
					<header class="text-center margin-bottom-40">
						<h1 class="weight-300">Real Support. Real People.</h1>
						<h2 class="weight-300 letter-spacing-1 size-13"><span>THE MOST COMPLETE TEMPLATE EVER</span></h2>
					</header>

					<div class="row">

						<div class="col-sm-6">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quod consequuntur quibusdam, enim expedita sed quia nesciunt incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosam!</p>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti vero, animi suscipit id facere officia. Aspernatur, quo, quos nisi dolorum aperiam fugiat deserunt velit rerum laudantium cum magnam.</p>

							<a class="btn btn-default" href="#">LEARN MORE</a>
						</div>

						<div class="col-sm-6">
							<img class="img-responsive" src="assets/images/demo/index/support.jpg" alt="support" />
						</div>

					</div>
				</div>
			</section>
			<!-- / -->




			<!-- COLOR BOXES -->
			<section class="nopadding noborder">
				<!--
					.box-pink
					.box-blue
					.box-orange
					.box-yellow
					.box-purple
					.box-red
					.box-brown
					.box-green
					.box-black
					.box-gray
					.box-teal



				CREATE YOUR OWN COLORS - CSS EXAMPLE:
					.box-pink>div:nth-child(1) {
						background-color:#e2476b;
					}
					.box-pink>div:nth-child(2) {
						background-color:#e9738f;
					}
					.box-pink>div:nth-child(3) {
						background-color:#f09fb2;
					}
					.box-pink>div:nth-child(4) {
						background-color:#f7cbd5;
					}

				-->
				<div class="row box-gradient box-gray">
					<div class="col-xs-6 col-sm-3">
						<i class="fa fa-child fa-4x"></i>
						<h2 class="countTo font-raleway" data-speed="3000">8165</h2>
						<p>HAPPY CUSTOMERS</p>
					</div>

					<div class="col-xs-6 col-sm-3">
						<i class="fa fa-smile-o fa-4x"></i>
						<h2 class="countTo font-raleway" data-speed="3000">1033</h2>
						<p>FACIALS</p>
					</div>

					<div class="col-xs-6 col-sm-3">
						<i class="fa fa-heart fa-4x"></i>
						<h2 class="countTo font-raleway" data-speed="3000">24567</h2>
						<p>MASSAGES</p>
					</div>

					<div class="col-xs-6 col-sm-3">
						<i class="fa fa-female fa-4x"></i>
						<h2 class="countTo font-raleway" data-speed="3000">68</h2>
						<p>MOTHERS TO BE</p>
					</div>
				</div>
			</section>
			<!-- /COLOR BOXES -->




			<!-- Features -->
			<section>
				<div class="container">

					<header class="text-center margin-bottom-40">
						<h1 class="weight-300">Smarty Features</h1>
						<h2 class="weight-300 letter-spacing-1 size-13"><span>WE TRULY CARE ABOUT OUR CUSTOMERS</span></h2>
					</header>

					<div class="row margin-top-80">

						<div class="col-lg-4 col-md-4 col-md-push-4 text-center">

							<img class="img-responsive" src="assets/images/demo/iphone-min.png" alt="" />

						</div>

						<div class="col-lg-4 col-md-4 col-sm-6 col-md-pull-4">

							<div class="box-icon box-icon-right">
								<a class="box-icon-title" href="#">
									<i class="fa fa-eye"></i>
									<h2>Retina Ready</h2>
								</a>
								<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
							</div>

							<div class="box-icon box-icon-right">
								<a class="box-icon-title" href="#">
									<i class="fa fa-check"></i>
									<h2>Unlimited Options</h2>
								</a>
								<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
							</div>

							<div class="box-icon box-icon-right">
								<a class="box-icon-title" href="#">
									<i class="fa fa-rocket"></i>
									<h2>Premium Sliders</h2>
								</a>
								<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
							</div>

							<div class="box-icon box-icon-right">
								<a class="box-icon-title" href="#">
									<i class="fa fa-flash"></i>
									<h2>performance</h2>
								</a>
								<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
							</div>

						</div>

						<div class="col-lg-4 col-md-4 col-sm-6">

							<div class="box-icon box-icon-left">
								<a class="box-icon-title" href="#">
									<i class="fa fa-tablet"></i>
									<h2>Fully Reposnive</h2>
								</a>
								<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
							</div>

							<div class="box-icon box-icon-left">
								<a class="box-icon-title" href="#">
									<i class="fa fa-random"></i>
									<h2>Clean Design</h2>
								</a>
								<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
							</div>

							<div class="box-icon box-icon-left">
								<a class="box-icon-title" href="#">
									<i class="fa fa-tint"></i>
									<h2>Reusable Elements</h2>
								</a>
								<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
							</div>

							<div class="box-icon box-icon-left">
								<a class="box-icon-title" href="#">
									<i class="fa fa-cogs"></i>
									<h2>Multipurpose</h2>
								</a>
								<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
							</div>

						</div>

					</div>


				</div>
			</section>
			<!-- /Features -->




			<!-- CALLOUT -->
			<section class="callout-dark heading-title heading-arrow-bottom">
				<div class="container">

					<header class="text-center">
						<h1 class="weight-300 size-40">Our Latest Works</h1>
						<h2 class="weight-300 letter-spacing-1 size-13"><span>WE TRULY CARE ABOUT OUR CUSTOMERS</span></h2>
					</header>

				</div>
			</section>
			<!-- /CALLOUT -->




			<!-- WORK -->
			<section class="nopadding">
				<div id="portfolio" class="portfolio-nogutter">
					<div class="row mix-grid">

						<div class="col-md-3 col-sm-3 mix development"><!-- item -->

							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/1-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>

									<img class="img-responsive" src="assets/images/demo/mockups/600x399/1-min.jpg" width="600" height="399" alt="">
								</figure>

								<div class="item-box-desc">
									<h3>Nature Photography</h3>
									<ul class="list-inline categories nomargin">
										<li><a href="#">Photography</a></li>
										<li><a href="#">Design</a></li>
									</ul>
								</div>

							</div>

						</div><!-- /item -->


						<div class="col-md-3 col-sm-3 mix development"><!-- item -->

							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/11-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>

									<img class="img-responsive" src="assets/images/demo/mockups/600x399/11-min.jpg" width="600" height="399" alt="">
								</figure>

								<div class="item-box-desc">
									<h3>Nature Photography</h3>
									<ul class="list-inline categories nomargin">
										<li><a href="#">Photography</a></li>
										<li><a href="#">Design</a></li>
									</ul>
								</div>

							</div>

						</div><!-- /item -->


						<div class="col-md-3 col-sm-3 mix photography"><!-- item -->

							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/20-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>

									<img class="img-responsive" src="assets/images/demo/mockups/600x399/20-min.jpg" width="600" height="399" alt="">
								</figure>

								<div class="item-box-desc">
									<h3>Fashion Design</h3>
									<ul class="list-inline categories nomargin">
										<li><a href="#">Photography</a></li>
										<li><a href="#">Design</a></li>
									</ul>
								</div>

							</div>

						</div><!-- /item -->


						<div class="col-md-3 col-sm-3 mix design"><!-- item -->

							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/19-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>

									<img class="img-responsive" src="assets/images/demo/mockups/600x399/19-min.jpg" width="600" height="399" alt="">
								</figure>

								<div class="item-box-desc">
									<h3>Ocean Project</h3>
									<ul class="list-inline categories nomargin">
										<li><a href="#">Photography</a></li>
										<li><a href="#">Design</a></li>
									</ul>
								</div>

							</div>

						</div><!-- /item -->


						<div class="col-md-3 col-sm-3 mix design"><!-- item -->

							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/12-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>

									<img class="img-responsive" src="assets/images/demo/mockups/600x399/12-min.jpg" width="600" height="399" alt="">
								</figure>

								<div class="item-box-desc">
									<h3>Architect Project</h3>
									<ul class="list-inline categories nomargin">
										<li><a href="#">Architecture</a></li>
										<li><a href="#">Design</a></li>
									</ul>
								</div>

							</div>

						</div><!-- /item -->


						<div class="col-md-3 col-sm-3 mix development"><!-- item -->

							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/13-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>

									<img class="img-responsive" src="assets/images/demo/mockups/600x399/13-min.jpg" width="600" height="399" alt="">
								</figure>

								<div class="item-box-desc">
									<h3>Speaker Design</h3>
									<ul class="list-inline categories nomargin">
										<li><a href="#">Audio</a></li>
										<li><a href="#">Design</a></li>
									</ul>
								</div>

							</div>

						</div><!-- /item -->


						<div class="col-md-3 col-sm-3 mix photography"><!-- item -->

							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/14-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>

									<img class="img-responsive" src="assets/images/demo/mockups/600x399/14-min.jpg" width="600" height="399" alt="">
								</figure>

								<div class="item-box-desc">
									<h3>Mobile Development</h3>
									<ul class="list-inline categories nomargin">
										<li><a href="#">Development</a></li>
										<li><a href="#">Design</a></li>
									</ul>
								</div>

							</div>

						</div><!-- /item -->


						<div class="col-md-3 col-sm-3 mix design"><!-- item -->

							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/15-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>

											<!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal size-20"></span>
											</a>

										</span>
									</span>

									<img class="img-responsive" src="assets/images/demo/mockups/600x399/15-min.jpg" width="600" height="399" alt="">
								</figure>

								<div class="item-box-desc">
									<h3>Nature Art</h3>
									<ul class="list-inline categories nomargin">
										<li><a href="#">Nature</a></li>
										<li><a href="#">Art</a></li>
									</ul>
								</div>

							</div>

						</div><!-- /item -->

					</div>

				</div>
			</section>
			<!-- /WORK -->




			<!-- -->
			<section>
				<div class="container">

					<div class="row">

						<!-- toggle -->
						<div class="col-md-4 col-sm-4">
							<div class="toggle toggle-accordion toggle-transparent toggle-bordered-full">

								<div class="toggle active">
									<label>Lorem ipsum dolor.</label>
									<div class="toggle-content">
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
									</div>
								</div>

								<div class="toggle">
									<label>Sit amet, consectetur.</label>
									<div class="toggle-content">
										<p>Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc.</p>
									</div>
								</div>

								<div class="toggle">
									<label>Consectetur adipiscing elit.</label>
									<div class="toggle-content">
										<p>Ut enim massa, sodales tempor convallis et, iaculis ac massa.</p>
									</div>
								</div>

							</div>
						</div>
						<!-- /toggle -->

						<!-- skills -->
						<div class="col-md-4 col-sm-4">
							<h4>Our Skills</h4>

							<label>
								<span class="pull-right">60%</span>
								MARKETING
							</label>
							<div class="progress progress-xxs">
								<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%; min-width: 2em;"></div>
							</div>

							<label>
								<span class="pull-right">88%</span>
								SALES
							</label>
							<div class="progress progress-xxs">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 88%; min-width: 2em;"></div>
							</div>

							<label>
								<span class="pull-right">93%</span>
								DESIGN
							</label>
							<div class="progress progress-xxs">
								<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 93%; min-width: 2em;"></div>
							</div>

							<label>
								<span class="pull-right">77%</span>
								DEVELOPMENT
							</label>
							<div class="progress progress-xxs">
								<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 77%; min-width: 2em;"></div>
							</div>

							<label>
								<span class="pull-right">99%</span>
								OTHER
							</label>
							<div class="progress progress-xxs">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 99%; min-width: 2em;"></div>
							</div>

						</div>
						<!-- /skills -->

						<!-- recent news -->
						<div class="col-md-4 col-sm-4">
							<h4>Recent News</h4>

							<div class="row tab-post"><!-- post -->
								<div class="col-md-2 col-sm-2 col-xs-2">
									<a href="blog-sidebar-left.html">
										<img src="assets/images/demo/people/300x300/1-min.jpg" width="50" alt="" />
									</a>
								</div>
								<div class="col-md-10 col-sm-10 col-xs-10">
									<a href="blog-sidebar-left.html" class="tab-post-link">Maecenas metus nulla</a>
									<small>June 29 2014</small>
								</div>
							</div><!-- /post -->

							<div class="row tab-post"><!-- post -->
								<div class="col-md-2 col-sm-2 col-xs-2">
									<a href="blog-sidebar-left.html">
										<img src="assets/images/demo/people/300x300/2-min.jpg" width="50" alt="" />
									</a>
								</div>
								<div class="col-md-10 col-sm-10 col-xs-10">
									<a href="blog-sidebar-left.html" class="tab-post-link">Curabitur pellentesque neque eget</a>
									<small>June 29 2014</small>
								</div>
							</div><!-- /post -->

							<div class="row tab-post"><!-- post -->
								<div class="col-md-2 col-sm-2 col-xs-2">
									<a href="blog-sidebar-left.html">
										<img src="assets/images/demo/people/300x300/3-min.jpg" width="50" alt="" />
									</a>
								</div>
								<div class="col-md-10 col-sm-10 col-xs-10">
									<a href="blog-sidebar-left.html" class="tab-post-link">Nam et lacus neque. Ut enim massa</a>
									<small>June 29 2014</small>
								</div>
							</div><!-- /post -->

						</div>
						<!-- /recent news -->

					</div>

				</div>
			</section>
			<!-- / -->




			<!-- PARALLAX -->
			<section class="parallax parallax-2" style="background-image: url('assets/images/demo/1200x800/3-min.jpg');">
				<div class="overlay dark-8"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="container">

					<div class="text-center">
						<h3 class="nomargin">Smarty Inside</h3>
						<p class="font-lato weight-300 lead nomargin-top">We can't solve problems by using the same kind of thinking we used when we created them.</p>
					</div>

					<ul class="margin-top-80 social-icons list-unstyled list-inline">
						<li>
							<a target="_blank" href="#">
								<i class="fa fa-facebook"></i>
								<h4>Facebook</h4>
								<span>Be Our Friend</span>
							</a>
						</li>
						<li>
							<a target="_blank" href="#">
								<i class="fa fa-twitter"></i>
								<h4>Twitter</h4>
								<span>Follow Us</span>
							</a>
						</li>
						<li>
							<a target="_blank" href="#">
								<i class="fa fa-youtube"></i>
								<h4>Youtube</h4>
								<span>Our Videos</span>
							</a>
						</li>
						<li>
							<a target="_blank" href="#">
								<i class="fa fa-instagram"></i>
								<h4>Instagram</h4>
								<span>See Our Images</span>
							</a>
						</li>
						<li>
							<a target="_blank" href="#">
								<i class="fa fa-linkedin"></i>
								<h4>Linkedin</h4>
								<span>Check Our Identity</span>
							</a>
						</li>
						<li>
							<a target="_blank" href="#">
								<i class="fa fa-pinterest"></i>
								<h4>Pinterest</h4>
								<span>Visual Discovery</span>
							</a>
						</li>
					</ul>

				</div>

			</section>
			<!-- /PARALLAX -->




			<!-- TEAM -->
			<section>
				<div class="container">

					<header class="text-center margin-bottom-60">
						<h1 class="weight-300">Smarty Team</h1>
						<h2 class="weight-300 letter-spacing-1 size-13"><span>WE TRULY CARE ABOUT OUR CUSTOMERS</span></h2>
					</header>

					<div class="row">

						<!-- item -->
						<div class="col-md-3 col-sm-6">

							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1 box-default">
										<div class="box-icon-title">
											<img class="img-responsive" src="assets/images/demo/people/460x700/7-min.jpg" alt="" />
											<h2>Felica Doe</h2>
											<small>CEO</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-default">
										<h4 class="nomargin">Felica Doe</h4>
										<small>CEO</small>

										<hr />

										<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>

										<hr />

										<a href="#" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-linkedin">
											<i class="fa fa-linkedin"></i>
											<i class="fa fa-linkedin"></i>
										</a>
									</div>
								</div>
							</div>

						</div>
						<!-- /item -->

						<!-- item -->
						<div class="col-md-3 col-sm-6">

							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1 box-default">
										<div class="box-icon-title">
											<img class="img-responsive" src="assets/images/demo/people/460x700/12-min.jpg" alt="" />
											<h2>Joana Doe</h2>
											<small>Art Director</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-default">
										<h4 class="nomargin">Joana Doe</h4>
										<small>Art Director</small>

										<hr />

										<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>

										<hr />

										<a href="#" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-linkedin">
											<i class="fa fa-linkedin"></i>
											<i class="fa fa-linkedin"></i>
										</a>
									</div>
								</div>
							</div>

						</div>
						<!-- /item -->

						<!-- item -->
						<div class="col-md-3 col-sm-6">

							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1 box-default">
										<div class="box-icon-title">
											<img class="img-responsive" src="assets/images/demo/people/460x700/10-min.jpg" alt="" />
											<h2>Melissa Doe</h2>
											<small>Web Developer</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-default">
										<h4 class="nomargin">Melissa Doe</h4>
										<small>Web Developer</small>

										<hr />

										<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>

										<hr />

										<a href="#" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-linkedin">
											<i class="fa fa-linkedin"></i>
											<i class="fa fa-linkedin"></i>
										</a>
									</div>
								</div>
							</div>

						</div>
						<!-- /item -->

						<!-- item -->
						<div class="col-md-3 col-sm-6">

							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1 box-default">
										<div class="box-icon-title">
											<img class="img-responsive" src="assets/images/demo/people/460x700/8-min.jpg" alt="" />
											<h2>Jessica Doe</h2>
											<small>Manager</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-default">
										<h4 class="nomargin">Jessica Doe</h4>
										<small>Manager</small>

										<hr />

										<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>

										<hr />

										<a href="#" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-linkedin">
											<i class="fa fa-linkedin"></i>
											<i class="fa fa-linkedin"></i>
										</a>
									</div>
								</div>
							</div>

						</div>
						<!-- /item -->

					</div>


				</div>
			</section>
			<!-- /TEAM -->




			<!-- RECENT NEWS -->
			<section>
				<div class="container">

					<header class="text-center margin-bottom-60">
						<h1 class="weight-300">Recent News</h1>
						<h2 class="weight-300 letter-spacing-1 size-13"><span>WE TRULY CARE ABOUT OUR CUSTOMERS</span></h2>
					</header>

					<!--
						controlls-over		= navigation buttons over the image
						buttons-autohide 	= navigation buttons visible on mouse hover only

						data-plugin-options:
							"singleItem": true
							"autoPlay": true (or ms. eg: 4000)
							"navigation": true
							"pagination": true
							"items": "4"

						owl-carousel item paddings
							.owl-padding-0
							.owl-padding-3
							.owl-padding-6
							.owl-padding-10
							.owl-padding-15
							.owl-padding-20
					-->
					<div class="owl-carousel owl-padding-10 buttons-autohide controlls-over" data-plugin-options='{"singleItem": false, "items":"4", "autoPlay": 4000, "navigation": true, "pagination": false}'>
						<div class="img-hover">
							<a href="blog-single-default.html">
								<img class="img-responsive" src="assets/images/demo/451x300/24-min.jpg" alt="">
							</a>

							<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
							<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
							<ul class="text-left size-12 list-inline list-separator">
								<li>
									<i class="fa fa-calendar"></i>
									29th Jan 2015
								</li>
								<li>
									<a href="blog-single-default.html#comments">
										<i class="fa fa-comments"></i>
										3
									</a>
								</li>
							</ul>
						</div>
						<div class="img-hover">
							<a href="blog-single-default.html">
								<img class="img-responsive" src="assets/images/demo/451x300/17-min.jpg" alt="">
							</a>

							<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
							<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
							<ul class="text-left size-12 list-inline list-separator">
								<li>
									<i class="fa fa-calendar"></i>
									29th Jan 2015
								</li>
								<li>
									<a href="blog-single-default.html#comments">
										<i class="fa fa-comments"></i>
										3
									</a>
								</li>
							</ul>
						</div>
						<div class="img-hover">
							<a href="blog-single-default.html">
								<img class="img-responsive" src="assets/images/demo/451x300/30-min.jpg" alt="">
							</a>

							<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
							<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
							<ul class="text-left size-12 list-inline list-separator">
								<li>
									<i class="fa fa-calendar"></i>
									29th Jan 2015
								</li>
								<li>
									<a href="blog-single-default.html#comments">
										<i class="fa fa-comments"></i>
										3
									</a>
								</li>
							</ul>
						</div>
						<div class="img-hover">
							<a href="blog-single-default.html">
								<img class="img-responsive" src="assets/images/demo/451x300/26-min.jpg" alt="">
							</a>

							<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
							<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
							<ul class="text-left size-12 list-inline list-separator">
								<li>
									<i class="fa fa-calendar"></i>
									29th Jan 2015
								</li>
								<li>
									<a href="blog-single-default.html#comments">
										<i class="fa fa-comments"></i>
										3
									</a>
								</li>
							</ul>
						</div>
						<div class="img-hover">
							<a href="blog-single-default.html">
								<img class="img-responsive" src="assets/images/demo/451x300/18-min.jpg" alt="">
							</a>
							<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
							<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
							<ul class="text-left size-12 list-inline list-separator">
								<li>
									<i class="fa fa-calendar"></i>
									29th Jan 2015
								</li>
								<li>
									<a href="blog-single-default.html#comments">
										<i class="fa fa-comments"></i>
										3
									</a>
								</li>
							</ul>
						</div>
						<div class="img-hover">
							<a href="blog-single-default.html">
								<img class="img-responsive" src="assets/images/demo/451x300/34-min.jpg" alt="">
							</a>
							<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
							<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
							<ul class="text-left size-12 list-inline list-separator">
								<li>
									<i class="fa fa-calendar"></i>
									29th Jan 2015
								</li>
								<li>
									<a href="blog-single-default.html#comments">
										<i class="fa fa-comments"></i>
										3
									</a>
								</li>
							</ul>
						</div>
						<div class="img-hover">
							<a href="blog-single-default.html">
								<img class="img-responsive" src="assets/images/demo/451x300/37-min.jpg" alt="">
							</a>
							<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
							<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
							<ul class="text-left size-12 list-inline list-separator">
								<li>
									<i class="fa fa-calendar"></i>
									29th Jan 2015
								</li>
								<li>
									<a href="blog-single-default.html#comments">
										<i class="fa fa-comments"></i>
										3
									</a>
								</li>
							</ul>
						</div>
						<div class="img-hover">
							<a href="blog-single-default.html">
								<img class="img-responsive" src="assets/images/demo/451x300/23-min.jpg" alt="">
							</a>
							<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
							<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
							<ul class="text-left size-12 list-inline list-separator">
								<li>
									<i class="fa fa-calendar"></i>
									29th Jan 2015
								</li>
								<li>
									<a href="blog-single-default.html#comments">
										<i class="fa fa-comments"></i>
										3
									</a>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</section>
			<!-- /RECENT NEWS -->


			<!--
				controlls-over		= navigation buttons over the image
				buttons-autohide 	= navigation buttons visible on mouse hover only

				data-plugin-options:
					"singleItem": true
					"autoPlay": true (or ms. eg: 4000)
					"navigation": true
					"pagination": true
			-->
			<div class="text-center margin-top-30 margin-bottom-30">
				<div class="owl-carousel nomargin" data-plugin-options='{"items":6, "singleItem": false, "autoPlay": true}'>
					<div>
						<img class="img-responsive" src="assets/images/demo/brands/1.jpg" alt="">
					</div>
					<div>
						<img class="img-responsive" src="assets/images/demo/brands/2.jpg" alt="">
					</div>
					<div>
						<img class="img-responsive" src="assets/images/demo/brands/3.jpg" alt="">
					</div>
					<div>
						<img class="img-responsive" src="assets/images/demo/brands/4.jpg" alt="">
					</div>
					<div>
						<img class="img-responsive" src="assets/images/demo/brands/5.jpg" alt="">
					</div>
					<div>
						<img class="img-responsive" src="assets/images/demo/brands/6.jpg" alt="">
					</div>
					<div>
						<img class="img-responsive" src="assets/images/demo/brands/7.jpg" alt="">
					</div>
					<div>
						<img class="img-responsive" src="assets/images/demo/brands/8.jpg" alt="">
					</div>
				</div>
			</div>


			<!-- FOOTER -->
			<footer id="footer">
				<div class="container">

					<div class="row">

						<div class="col-md-3">
							<!-- Footer Logo -->
							<img class="footer-logo" src="assets/images/logo-footer.png" alt="" />

							<!-- Small Description -->
							<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

							<!-- Contact Address -->
							<address>
								<ul class="list-unstyled">
									<li class="footer-sprite address">
										PO Box 21132<br>
										Here Weare St, Melbourne<br>
										Vivas 2355 Australia<br>
									</li>
									<li class="footer-sprite phone">
										Phone: 1-800-565-2390
									</li>
									<li class="footer-sprite email">
										<a href="mailto:support@yourname.com">support@yourname.com</a>
									</li>
								</ul>
							</address>
							<!-- /Contact Address -->

						</div>

						<div class="col-md-3">

							<!-- Latest Blog Post -->
							<h4 class="letter-spacing-1">LATEST NEWS</h4>
							<ul class="footer-posts list-unstyled">
								<li>
									<a href="#">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue</a>
									<small>29 June 2015</small>
								</li>
								<li>
									<a href="#">Nullam id dolor id nibh ultricies</a>
									<small>29 June 2015</small>
								</li>
								<li>
									<a href="#">Duis mollis, est non commodo luctus</a>
									<small>29 June 2015</small>
								</li>
							</ul>
							<!-- /Latest Blog Post -->

						</div>

						<div class="col-md-2">

							<!-- Links -->
							<h4 class="letter-spacing-1">EXPLORE SMARTY</h4>
							<ul class="footer-links list-unstyled">
								<li><a href="#">Home</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Our Services</a></li>
								<li><a href="#">Our Clients</a></li>
								<li><a href="#">Our Pricing</a></li>
								<li><a href="#">Smarty Tour</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
							<!-- /Links -->

						</div>

						<div class="col-md-4">

							<!-- Newsletter Form -->
							<h4 class="letter-spacing-1">KEEP IN TOUCH</h4>
							<p>Subscribe to Our Newsletter to get Important News &amp; Offers</p>

							<form class="validate" action="php/newsletter.php" method="post" data-success="Subscribed! Thank you!" data-toastr-position="bottom-right">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="email" id="email" name="email" class="form-control required" placeholder="Enter your Email">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
								</div>
							</form>
							<!-- /Newsletter Form -->

							<!-- Social Icons -->
							<div class="margin-top-20">
								<a href="#" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">

									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
									<i class="icon-rss"></i>
									<i class="icon-rss"></i>
								</a>

							</div>
							<!-- /Social Icons -->

						</div>

					</div>

				</div>

				<div class="copyright">
					<div class="container">
						<ul class="pull-right nomargin list-inline mobile-block">
							<li><a href="#">Terms &amp; Conditions</a></li>
							<li>&bull;</li>
							<li><a href="#">Privacy</a></li>
						</ul>
						&copy; All Rights Reserved, Company LTD
					</div>
				</div>
			</footer>
			<!-- /FOOTER -->

		</div>
		<!-- /wrapper -->


		<!--
			SIDE PANEL

				sidepanel-dark 			= dark color
				sidepanel-light			= light color (white)
				sidepanel-theme-color		= theme color

				sidepanel-inverse		= By default, sidepanel is placed on right (left for RTL)
								If you add "sidepanel-inverse", will be placed on left side (right on RTL).
		-->
		<div id="sidepanel" class="sidepanel-light">
			<a id="sidepanel_close" href="#"><!-- close -->
				<i class="glyphicon glyphicon-remove"></i>
			</a>

			<div class="sidepanel-content">
				<h2 class="sidepanel-title">Explore Smarty</h2>

				<!-- SIDE NAV -->
				<ul class="list-group">

					<li class="list-group-item">
						<a href="#">
							<i class="ico-category et-heart"></i>
							ABOUT US
						</a>
					</li>
					<li class="list-group-item list-toggle"><!-- add "active" to stay open on page load -->
						<a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-1" class="collapsed">
							<i class="ico-dd icon-angle-down"><!-- Drop Down Indicator --></i>
							<i class="ico-category et-strategy"></i>
							PORTFOLIO
						</a>
						<ul id="collapse-1" class="list-unstyled collapse"><!-- add "in" to stay open on page load -->
							<li><a href="#"><i class="fa fa-angle-right"></i> 1 COLUMN</a></li>
							<li class="active">
								<span class="badge">New</span>
								<a href="#"><i class="fa fa-angle-right"></i> 2 COLUMNS</a>
							</li>
							<li><a href="#"><i class="fa fa-angle-right"></i> 3 COLUMNS</a></li>
						</ul>
					</li>
					<li class="list-group-item list-toggle"><!-- add "active" to stay open on page load -->
						<a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-2" class="collapsed">
							<i class="ico-dd icon-angle-down"><!-- Drop Down Indicator --></i>
							<i class="ico-category et-trophy"></i>
							PORTFOLIO
						</a>
						<ul id="collapse-2" class="list-unstyled collapse"><!-- add "in" to stay open on page load -->
							<li><a href="#"><i class="fa fa-angle-right"></i> SLIDER</a></li>
							<li class="active"><a href="#"><i class="fa fa-angle-right"></i> HEADERS</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> FOOTERS</a></li>
						</ul>
					</li>
					<li class="list-group-item">
						<a href="#">
							<i class="ico-category et-happy"></i>
							BLOG
						</a>
					</li>
					<li class="list-group-item">
						<a href="#">
							<i class="ico-category et-beaker"></i>
							FEATURES
						</a>
					</li>
					<li class="list-group-item">
						<a href="#">
							<i class="ico-category et-map-pin"></i>
							CONTACT
						</a>
					</li>

				</ul>
				<!-- /SIDE NAV -->

				<!-- social icons -->
				<div class="text-center margin-bottom-30">

					<a href="#" class="social-icon social-icon-sm social-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>

					<a href="#" class="social-icon social-icon-sm social-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
						<i class="icon-twitter"></i>
						<i class="icon-twitter"></i>
					</a>

					<a href="#" class="social-icon social-icon-sm social-linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin">
						<i class="icon-linkedin"></i>
						<i class="icon-linkedin"></i>
					</a>

					<a href="#" class="social-icon social-icon-sm social-rss" data-toggle="tooltip" data-placement="top" title="RSS">
						<i class="icon-rss"></i>
						<i class="icon-rss"></i>
					</a>

				</div>
				<!-- /social icons -->

			</div>

		</div>
		<!-- /SIDE PANEL -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->


		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
		<script type="text/javascript" src="assets/plugins/jquery/jquery-2.2.3.min.js"></script>

		<script type="text/javascript" src="assets/js/scripts.js"></script>


		<!-- REVOLUTION SLIDER -->
		<script type="text/javascript" src="assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="assets/js/view/demo.revolution_slider.js"></script>

	</body>
</html>
