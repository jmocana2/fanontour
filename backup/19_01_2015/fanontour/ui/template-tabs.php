<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BKOOL</title>
	<link rel="stylesheet" href="css/bkool_bootstrap.css">
	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>
<body id="store" class="apps">
	<header id="main_nav">

	<script type="text/javascript">
	/* ------- MENU PRIVADO RESPONSIVE ------- */
		jQuery(function($) {
			$('li.shopping-cart a.dropdown-toggle').on("click", function(){
				if($('div.shopping-cart-open').hasClass( "open" )){
					$('div.shopping-cart-open').removeClass("open");
				}else{
					$('div.shopping-cart-open').addClass("open");
				}

				return false;
			});
			$("a.removeFromCart").on("click",function(){
				$(".shopping-cart").load($(this).attr('href'), function(){
					$("div.shopping-cart-open").addClass('open');
					checkGiftStatus();
					});
				return false;
			});

			$('li.search a.search-toggle').on("click", function(){
				if($('div.search-form').hasClass( "open" )){
					$('div.search-form').removeClass("open");
				}else{
					$('div.search-form').addClass("open");
				}

				return false;
			});

			$('body').on("click", function(event){
	    		if(!$("div.search-form").find(event.target).length){
	               	$('div.search-form').removeClass("open");
	    		}
	    		if(!$("div.shopping-cart-body").find(event.target).length){
					$('div.shopping-cart-open').removeClass("open");
				}
	    	});

	    	$('li.store a.hamb, li.user-list a.hamb, li.sessions a.hamb').on("click", function(event){
	    		if($(window).width()<768){
	    			if($(this).parent().find('ul').hasClass('hide')){
	        			$('li.store ul, li.sessions ul, li.user-list ul').removeClass('visible-xs').addClass('hide')
	        			$(this).parent().find('ul').removeClass('hide').addClass('visible-xs')
	    			} else {
	        			$(this).parent().find('ul').removeClass('visible-xs').addClass('hide')
	    			}

	    			return false;
	    		}
	    	});
		});
	/* ------- MENU PRIVADO RESPONSIVE ------- */
	</script>

		<nav class="container" role="navigation">

			<button type="button" class="hamburger navbar-toggle pull-left" data-toggle="collapse" data-target="#bs-navbar-collapse">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		    </button>

		<!-- LOGOTIPO -->
			<div class="navbar-header">
				<div class="logo">
					<a href="/">
						<img src="http://s2.staticbkool.com/imagenes/bkool__header_logo_w__v8175.png" alt="Logotipo BKOOL" class="hidden-xs">
						<img src="http://s3.staticbkool.com/imagenes/bkool__header_logo_w_mobile__v8175.png" alt="Logotipo BKOOL" class="visible-xs">
					</a>
				</div>
			</div>
		<!-- // LOGOTIPO -->
			<div class="navbar-collapse collapse in" id="bs-navbar-collapse" style="height: auto;">
				<ul class="nav navbar-nav nav-main">
					<li class="home"><a class="uppercase-txt" href="/user/home">inicio <span class="glyphicon glyphicon glyphicon-play small_text pull-right visible-xs"></span></a></li>
					<!-- INICIO SHOPPING CART -->
					<li class="visible-xs"><!-- shopping-cart -->
						<a href="/store">
							<span class="glyphicon bkool-icon-shopping-cart "></span>
							<span class="uppercase-txt">Revisar pedido</span> (0)
							<span class="glyphicon glyphicon glyphicon-play small_text pull-right visible-xs"></span>
						</a>
					</li>
					<!-- FIN SHOPPING CART -->
					<!-- INICIO SUBMENU USUARIO -->
					<li class="visible-xs user-list"><!-- User Menu -->
						<a class="hamb uppercase-txt" href="#">
							<span class="uppercase-txt">Nombre de usuario</span>
							<span class="glyphicon glyphicon bkool-icon-chevron-down small_text pull-right visible-xs"></span>
						</a>
						<ul class="nav navbar-nav submenu dropdown-menu hide">
							<li class="uppercase-txt"><a href="/personalProfile/show"><span class="glyphicon bkool-icon-user"></span>Perfil</a></li>
							<li class="uppercase-txt"><a href="/memberConfig/edit"><span class="glyphicon bkool-icon-preferences"></span>Configuración</a></li>
							<li class="uppercase-txt"><a href="/friendship/inviteFriends"><span class="glyphicon bkool-icon-friend"></span>Invitar amigos</a></li>
							<li class="uppercase-txt"><a href="/subscription/show"><span class="glyphicon bkool-icon-subscription"></span>Premium</a></li>
							<li class="uppercase-txt"><a href="/friendship/listInvitations" class="bubble "><span style="width: 30px">0</span></a>
							<li class="uppercase-txt"><a href="/logout/index"><span class="glyphicon bkool-icon-logout"></span>Salir</a></li>
						</ul>
					</li>
					<!-- FIN SUBMENU USUARIO -->
					<li class="sessions">				    
				    	<a class="hamb uppercase-txt" href="/bkoolSession/configure">Sesiones <span class="glyphicon glyphicon bkool-icon-chevron-down small_text pull-right visible-xs"></span></a>
				    	<!-- INICIO SUBMENU SESIONES -->
						<ul class="nav navbar-nav submenu dropdown-menu hide">
							<li class="home"><a href="/store">Crear sesión<span class="glyphicon glyphicon glyphicon-play small_text pull-right visible-xs"></span></a></li>
							<li class="home_trainer"><a href="/home-trainer">Tus sesiones <span class="glyphicon glyphicon glyphicon-play small_text pull-right visible-xs"></span></a></li>
							<li class="premium"><a href="/bike-premium">Tu historial <span class="glyphicon glyphicon glyphicon-play small_text pull-right visible-xs"></span></a></li>

							<li class="apps"><a href="apps-bike">Ranking <span class="glyphicon glyphicon glyphicon-play small_text pull-right visible-xs"></span></a></li>
							<li class="coupons"><a href="/coupon/index">Multiplayer <span class="glyphicon glyphicon glyphicon-play small_text pull-right visible-xs"></span></a></li>
							<li class=""><a href="/store/listOrders">Importar datos <span class="glyphicon glyphicon glyphicon-play small_text pull-right visible-xs"></span></a></li>
							<li class=""><a href="/store/listOrders">Importar perfiles <span class="glyphicon glyphicon glyphicon-play small_text pull-right visible-xs"></span></a></li>
							<li class=""><a href="/store/listOrders">Tus rutas <span class="glyphicon glyphicon glyphicon-play small_text pull-right visible-xs"></span></a></li>
							<li class=""><a href="/store/listOrders">Perfiles de vídeo <span class="glyphicon glyphicon glyphicon-play small_text pull-right visible-xs"></span></a></li>
							<li class=""><a href="/store/listOrders">Buscar rutas <span class="glyphicon glyphicon glyphicon-play small_text pull-right visible-xs"></span></a></li>
						</ul>
						<!-- FIN SUBMENU SESIONES -->
					</li>
					<li class="plan">
						<a class="uppercase-txt" href="/plan/show">Planes <span class="glyphicon glyphicon glyphicon-play small_text pull-right visible-xs"></span></a>
					</li>
					<li class="group"><a class="uppercase-txt" href="/group/list">Grupos <span class="glyphicon glyphicon glyphicon-play small_text pull-right visible-xs"></span></a></li>
					<li class="store">
						<a class="hamb uppercase-txt" href="/store">Tienda <span class="glyphicon glyphicon bkool-icon-chevron-down small_text pull-right visible-xs"></span></a>
						<!-- INICIO SUBMENU TIENDA -->
						<ul class="nav navbar-nav submenu dropdown-menu hide">
							<li class="home"><a href="/store">Inicio Tienda<span class="glyphicon glyphicon glyphicon-play small_text pull-right visible-xs"></span></a></li>
							<li class="home_trainer"><a href="/home-trainer">Rodillo <span class="glyphicon glyphicon glyphicon-play small_text pull-right visible-xs"></span></a></li>
							<li class="premium"><a href="/bike-premium">Premium <span class="glyphicon glyphicon glyphicon-play small_text pull-right visible-xs"></span></a></li>

							<li class="apps"><a href="apps-bike">Apps <span class="glyphicon glyphicon glyphicon-play small_text pull-right visible-xs"></span></a></li>
							<li class="coupons"><a href="/coupon/index">Cupones <span class="glyphicon glyphicon glyphicon-play small_text pull-right visible-xs"></span></a></li>
							<li class=""><a href="/store/listOrders">Mis pedidos <span class="glyphicon glyphicon glyphicon-play small_text pull-right visible-xs"></span></a></li>
						</ul>
						<!-- FIN SUBMENU TIENDA -->
					</li>
					<li class="search">
						<a href="#" class="search-toggle">
							<span class="glyphicon glyphicon-search"></span>
							<span class="uppercase-txt hidden-lg hidden-md hidden-sm">Búsqueda avanzada</span>
							<span class="glyphicon glyphicon glyphicon-play small_text pull-right visible-xs"></span>
						</a>
						<form action="/search/global" method="post">
							<div class="search-form dropdown-search dropdown-menu">
								<div class="search-form-bar">
									<div class="input-group">
										<input type="text" class="form-control without-right-line" placeholder="Buscar en Bkool" name="q">
										<button class="btn btn-default without-left-line">
											<span class="sr-only">Buscar</span>
											<span class="glyphicon glyphicon-search"></span>
										</button>
									</div>
									<span class="sr-only">SEARCH</span>
								</div>
								<ul class="uppercase-txt">
									<li class="checkbox"><label><input name="showUsers" id="show_users" type="checkbox" value="true" checked="checked"> Gente</label></li>
									<li class="checkbox"><label><input name="showProfiles" id="show_profiles" type="checkbox" value="true" checked="checked"> Perfiles</label>
									<a href="/search/searchTracks" class="btn btn-xs btn-default pull-right uppercase-txt">Avanzado</a></li>
									<li class="checkbox"><label><input name="showGroups" id="show_groups" type="checkbox" value="true" checked="checked"> Grupos</label></li>
									<li class="checkbox"><label><input name="showContents" id="show_contents" type="checkbox" value="true" checked="checked"> Contenidos</label></li>
									<li class="checkbox"><label><input type="checkbox"> Tiendas</label>
									<a href="/help/shops-near-you" class="btn btn-xs btn-default pull-right uppercase-txt">Avanzado</a></li>
								</ul>
							</div>
						</form>
					</li>
				</ul>
			</div>
			
			<ul class="nav navbar-nav visible-xs responsive-right-options">
				<li class="promo-responsive"><a href="/bike-premium" class="uppercase-txt"><img class="img-responsive" width="46px" height="50px" src="imagenes/icons/premium_header.png" alt="Hazte premium"></a></li>
			</ul>
		
			
			<ul class="nav navbar-nav navbar-right hidden-xs">
				<!-- INICIO SHOPPING CART / Hay cambios de clases para ocultar elementos segun grid -->
				<li class="shopping-cart">
					<a href="#" class="dropdown-toggle">
						<span class="text">0</span>
						<span class="glyphicon bkool-icon-shopping-cart "></span>
					</a>
					<form action="/store/updateCart" method="post" name="cart" id="cart">
						<div class="dropdown-menu shopping-cart-open">
							<div class="shopping-cart-bar">
								<span class="text">0</span>
								<span class="glyphicon bkool-icon-shopping-cart "></span> 
								<span class="uppercase-txt title">MI CESTA</span>
							</div>
							<div class="shopping-cart-body">
								<div class="alert alert-info bkool-info"><p>Tu cesta está vacía.</p></div>
								<a href="/store" class="btn btn-convert btn-block uppercase-txt">Tienda</a>      
							</div>
						</div>
					</form>
				</li>
				<!-- FIN SHOPPIN CART -->
				<!-- INICIO USER BOX / Hay cambios de clases para ocultar elementos segun grid -->
				<li class="dropdown user-box">
					<a class="visible-sm" href="/personalProfile/show"><span class="glyphicon bkool-icon-user"></span></a>
					<a href="#" class="hidden-sm dropdown-toggle user-name uppercase-txt"><div class="">Usuario</div> <span class="glyphicon bkool-icon-chevron-down"></span></a>
					<a href="/friendship/listInvitations" class="bubble "><span>0</span></a>
					<ul class="dropdown-menu">
						<li class="uppercase-txt"><a href="/personalProfile/show"><span class="glyphicon bkool-icon-user"></span>Perfil</a></li>
						<li class="uppercase-txt"><a href="/memberConfig/edit"><span class="glyphicon bkool-icon-preferences"></span>Configuración</a></li>
						<li class="uppercase-txt"><a href="/friendship/inviteFriends"><span class="glyphicon bkool-icon-friend"></span>Invitar amigos</a></li>
						<li class="uppercase-txt"><a href="/subscription/show"><span class="glyphicon bkool-icon-subscription"></span>Premium</a></li>
						<li class="uppercase-txt"><a href="/logout/index"><span class="glyphicon bkool-icon-logout"></span>Salir</a></li>
					</ul>
				</li>
				
				<!-- FIN USER BOX -->
				<li class="promo-header promo-premium">
					<a href="/bike-premium">Hazte Premium</a>
				</li>
			</ul>
		</nav>
	</header>

	<!-- SUBMENU -->
	<nav id="second_nav" class="second_nav">
		<nav class="container">
			<ul class="nav navbar-nav">
				<li class="home"><a href="#">Home tienda</a></li>
				<li class="home_trainer"><a href="#">Rodillo</a></li>
				<li class="premium"><a href="#">Premium</a></li>
				<li class="equipamiento"><a href="#">Equipamiento</a></li>
				<li class="apps"><a href="#">Apps</a></li>
				<li class="cupons"><a href="#">Cupones</a></li>
				<li><a href="#">Más pedidos</a></li>
		 	 </ul>
		 </nav>
	</nav>
	<!-- // SUBMENU -->

<!-- MAIN -->
	<main id="main"> 
		<div class="container">
			<div id="breadcrumb" class="col col-xs-12">
				<ol class="">
				  <li><a href="#">Inicio</a></li>
				  <li class="active">Tienda</li>
				</ol>
			</div>
			<div class="help-contact">
				<span class="glyphicon bkool-icon-help"></span> ¿Necesitas ayuda? <a href="#">Contáctanos <span class="glyphicon bkool-icon-next small_text"></span></a>
			</div>
		</div>

		<!-- EDITOR -->
		<div class="row row-padding-small no-padding-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="tab compact-tab ">
<div class="main-tab">
<!-- Nav tabs -->
<ul class="nav nav-tabs">
<li class="active"><a href="#tab-1" data-toggle="tab" class="uppercase-txt" rel="nofollow">Tab1</a></li>
<li><a href="#tab-2" data-toggle="tab" class="uppercase-txt" rel="nofollow">Tab2</a></li>
<li><a href="#tab-3" data-toggle="tab" class="uppercase-txt" rel="nofollow">Tab3</a></li>

</ul>
</div>
<!-- Tab panes -->
<div class="tab-content clearfix">
<div class="tab-pane active" id="tab-1">
<div class="secondary-nav">
<!-- Nav tabs -->

<!-- Tab panes -->
<div class="tab-content">
<div class="tab-pane active panel-box-block" id="tab-11">
<p>texto de prueba</p>
</div>
<div class="tab-pane panel-box-block" id="tab-12">
<p>texto de prueba</p>
</div>
<div class="tab-pane panel-box-block" id="tab-13" rel="nofollow">
<p>texto de prueba</p>
</div>

</div>
</div>
</div>
<div class="tab-pane panel-box-block clearfix" id="tab-2">
<p>sdsdsds</p>
</div>
<div class="tab-pane panel-box-block" id="tab-3">
<p>sdsdsds</p>
</div>
</div>
</div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- EDITOR -->

	</main>

<!-- // FOOTER -->
	<footer id="main_footer">
		<div class="container">
			<nav role="navigation">
				<div class="navbar-header">
					<div class="logo">
						<img src="imagenes/bkool__header_logo_w.png" alt="Logotipo BKOOL">
					</div>
				</div>
				<form class="form-inline pull-left" role="form">
					<div class="form-group form-newsletter">
						<label class="sr-only" for="">Email address</label>
						<input type="text" class="form-control newsletter" placeholder="Recibe nuestra newsletter">
						<span class="glyphicon glyphicon-envelope"></span>
						<button class="btn btn-convert uppercase-txt">Enviar</button>
					</div>
				</form>
				<div class="social pull-left">
					<strong class="uppercase-txt pull-left title">Siguenos</strong>
					<ul class="pull-left">
						<li class="facebook"><span></span> <a href="#" class="btn btn-social btn-facebook"><span class="glyphicon bkool-icon-social-facebook"></span><span class="sr-only">Facebook</span></a></li>
						<li class="twitter"><a href="#" class="btn btn-social btn-twitter"><span class="glyphicon bkool-icon-social-twitter"></span><span class="sr-only">Twitter</span></a></li>
						<li class="googleplus"><a href="#" class="btn btn-social btn-googleplus"><span class="glyphicon bkool-icon-social-googleplus"></span><span class="sr-only">Google Plus</span></a></li>
						<li class="pinterest"><a href="#" class="btn btn-social btn-pinterest"><span class="glyphicon bkool-icon-social-pinterest"></span><span class="sr-only">Pinterest</span></a></li>
						<li class="youtube"><a href="#" class="btn btn-social btn-youtube"><span class="glyphicon bkool-icon-social-youtube"></span><span class="sr-only">You Tube</span></a></li>
						<li class="blogger"><a href="#" class="btn btn-social btn-blogger"><span class="glyphicon bkool-icon-social-blogger"></span><span class="sr-only">Blogger</span></a></li>
						
						<li class="dropdown language">
				          <a href="#" class="dropdown-toggle"><span class="flag ES"></span> ES <span class="glyphicon bkool-icon-chevron-down"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#"><span class="flag UK"></span> UK</a></li>
				            <li><a href="#"><span class="flag FR"></span> FR</a></li>
				            <li><a href="#"><span class="flag DE"></span> DE</a></li>
				            <li><a href="#"><span class="flag IT"></span> IT</a></li>
				          </ul>
				        </li>
					</ul>
				</div>
			</nav>
		<!-- MENU FOOTER -->
			<div class="row links_footer">
				<div class="col col-sm-2">
					<strong class="uppercase-txt">Conócenos</strong>
						<ul>
							<li><a href="#">Tour</a></li>
							<li><a href="#">Contact </a></li>
							<li><a href="#">Prensa</a></li>
							<li><a href="#">Empleo</a></li>
							<li><a href="#">Blog Bkool</a></li>
						</ul>
				</div>
				<div class="col col-sm-2">
					<strong class="uppercase-txt">Sesiones</strong>
						<ul>
							<li><a href="#">Listar sesiones</a></li>
							<li><a href="#">Crear test</a></li>
							<li><a href="#">Historial</a></li>
							<li><a href="#">Ranking</a></li>
							<li><a href="#">Crear plan</a></li>
							<li><a href="#">Ligas activas</a></li>
						</ul>
				</div>
				<div class="col col-sm-2">
					<strong class="uppercase-txt">Tienda</strong>
						<ul>
							<li><a href="#">Rodillo</a></li>
							<li><a href="#">Premium</a></li>
							<li><a href="#">Equipamiento</a></li>
							<li><a href="#">Pedido</a></li>
							<li><a href="#">Cupones</a></li>
							<li><a href="#">Distribuidores</a></li>
							<li><a href="#">Tiendas cerca de ti</a></li>
						</ul>
				</div>
				<div class="col col-sm-2">
					<strong class="uppercase-txt">Asesoramiento</strong>
						<ul>
							<li><a href="#">Sesiones Tonificación </a></li>
							<li><a href="#">Entrenamiento </a></li>
							<li><a href="#">Técnica </a></li>
							<li><a href="#">Material </a></li>
							<li><a href="#">Taller </a></li>
							<li><a href="#">Ejercicios </a></li>
						</ul>
				</div>
				<div class="col col-sm-2">
					<strong class="uppercase-txt">Descargas</strong>
						<ul>
							<li><a href="#">Editor de video</a></li>
							<li><a href="#">Simulador</a></li>
							<li><a href="#">Apliación móvil</a></li>
						</ul>
				</div>
				<div class="col col-sm-2">
					<strong class="uppercase-txt">Ayuda</strong>
						<ul>
							<li><a href="#">Contacto</a></li>
							<li><a href="#">Incidencias</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="#">Manuales</a></li>
							<li><a href="#">Política de privacidad</a></li>
							<li><a href="#">Términos de uso</a></li>
						</ul>
				</div>
			</div>
		<!-- //MENU FOOTER -->
		<!-- SEO FOOTER -->
			<div class="row text_footer">
				<div class="col col-sm-2">
					<strong>Outdoor</strong>
						<p>Graba tus sesiones con tu GPS o móvil y súbelas a la nube para su análisis.</p>
				</div>
				<div class="col col-sm-2">
					<strong>Home trainer</strong>
						<p>El más  avanzado, con él experimentarás las sensaciones más reales.</p>
				</div>
				<div class="col col-sm-2">
					<strong>Análisis avanzado en la nube</strong>
						<p>Interpretaremos tus parámetros de entrenamiento para que alcances tus objetivos.</p>
				</div>
				<div class="col col-sm-2">
					<strong>Social</strong>
						<p>Corre con tus amigos, no importa en que parte del mundo estén. Crea y participa en ligas, grupos o rankings.</p>
				</div>
				<div class="col col-sm-2">
					<strong>Test y planes estructurados</strong>
						<p>Supérate. Nuestros planes de entrenamiento personalizados te ayudará a alcanzar tu objetivo.</p>
				</div>
				<div class="col col-sm-2">
					<strong>Lorem ipsum</strong>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, asperiores explicabo minus qui vero dignissimos facere doloremque eligendi quis</p>
				</div>
			</div>
		<!-- // SEO FOOTER -->
		</div>
		<!-- COPY -->
		<div class="copy">
			Copyright © 2009-2014. BKOOL.com. All rights reserved. <a href="#">Política de privacidad</a> | <a href="#">Términos de uso</a>
		</div>
	</footer>
</body>
</html>