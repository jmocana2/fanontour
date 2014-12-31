<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Fanontour</title>
	<link rel="stylesheet" href="../public/vendor/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="ui-css/ui-styles.css">
	<script src="../public/vendor/jquery/jquery.js"></script>
	<script src="../public/vendor/bootstrap/bootstrap.js"></script>
</head>
<body>
<!-- MAIN -->
	<main id="main">
		<div  class="container">
			<div class="row row-padding-mid">
					<!-- MENU -->
				<div class="col-md-3 col-sm-12">
					<?php

						include_once('menu.php');

					?>
				</div>
					<!-- MENU -->

					<!-- CONTENIDO -->
				<div class="col-md-9 col-sm-12">
					<h1>Back-end Help</h1>


					<div class="panel-group" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="collapsed">Template layout</a>
								</h4>
							</div>
						<div id="collapse1" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%">
&lt;!DOCTYPE html&gt;
&lt;!--[if IE 8 ]&gt;    &lt;html class="ie8" lang="es"&gt; &lt;![endif]--&gt;
&lt;!--[if IE 9 ]&gt;    &lt;html class="ie9" lang="es"&gt; &lt;![endif]--&gt;
&lt;!--[if (gt IE 9)|!(IE)]&gt;&lt;!--&gt; &lt;html lang="es"&gt; &lt;!--&lt;![endif]--&gt;

&lt;head&gt;    
    &lt;title&gt;FanOnTour.com&lt;/title&gt;
	&lt;meta charset="utf-8"&gt;
	&lt;link rel="shortcut icon" href="img/icons/favicon.ico" type="image/x-icon"&gt;
	&lt;link rel="icon" href="img/icons/favicon.ico" type="image/x-icon"&gt;
	
	&lt;!-- CONFIG --&gt;
	&lt;meta name="author" content="Events Tickets Services S.L.U" /&gt;
	&lt;meta name="description" content="Descripción de la página" /&gt;
	&lt;meta name="keywords" content="etiqueta1, etiqueta2, etiqueta3" /&gt;
	&lt;meta name="robots" content="follow, index" /&gt;
	&lt;meta name="viewport" content="width=device-width, initial-scale=1"/&gt;
	&lt;!--     --&gt;

	&lt;!-- SEO --&gt;	
	&lt;meta name="revisit-after" content="1 days"&gt;
	&lt;meta name="robots" content="INDEX,FOLLOW,NOODP"&gt;	
	&lt;meta name="twitter:card" content="photo"&gt;
	&lt;meta name="twitter:site" content="@FANONTOUR"&gt;
	&lt;meta name="twitter:creator" content="@FANONTOUR"&gt;
	&lt;meta name="twitter:title" content="fanOnTour title"&gt;
	&lt;meta name="twitter:image:src" content="img/social/twitter-card.jpg"&gt;
	&lt;meta name="twitter:domain" content="www.fanontour.com"&gt;
	&lt;meta property="og:title" content="FanOnTour"&gt;
	&lt;meta property="og:type" content="website"&gt;
	&lt;meta property="og:description" content="descripción"&gt;
	&lt;meta property="og:url" content="http://www.fanontour.com"&gt;
	&lt;meta property="og:site_name" content="fanOnTour"&gt;
	&lt;meta property="og:image" content="img/social/og-facebook.jpg"&gt;
	&lt;!--     --&gt;


	&lt;!-- CSS --&gt;
	&lt;link rel="stylesheet" href="public/vendor/bootstrap/bootstrap.css"&gt;
	&lt;link rel="stylesheet" href="css/main.css"&gt;
	&lt;!--     --&gt;
	
	&lt;!-- JS --&gt;	
	&lt;script src="public/vendor/modernizr/modernizr_2.8.3.js"&gt;&lt;/script&gt;	
	&lt;!--    --&gt;

&lt;/head&gt;
&lt;body id="home"&gt;
	&lt;!-- HEADER --&gt;
	&lt;?php include('include/template/header.html'); ?&gt;
	&lt;!-- --&gt;
	&lt;!-- MAIN --&gt;
	&lt;main&gt;
		&lt;div class="bg-container absolute"&gt;

		&lt;/div&gt;
		&lt;div class="content"&gt;
			
			&lt;!-- ========== (MODAL) TERMS AND CONDITIONS ========= --&gt;
			&lt;?php
				$modal = "modal-conditions";
				include('include/modals/modal-box.html'); 
			?&gt;
			&lt;!-- ================================================= --&gt;
			&lt;!-- =========== (MODAL) PRIVACY POLICY ============== --&gt;
			&lt;?php
				$modal = "modal-policy";
				include('include/modals/modal-box.html'); 
			?&gt;
			&lt;!-- ================================================= --&gt;
						
		&lt;/div&gt;
	&lt;/main&gt;
	&lt;!-- --&gt;
	&lt;!-- FOOTER --&gt;
	&lt;?php include('include/template/footer.html'); ?&gt;
	&lt;!-- --&gt;

	&lt;!-- JS --&gt;
	&lt;script src="public/vendor/jquery/jquery.js"&gt;&lt;/script&gt;
	&lt;script src="public/vendor/bootstrap/bootstrap.js"&gt;&lt;/script&gt;
	&lt;script src="js/main.js"&gt;&lt;/script&gt;

	&lt;!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --&gt;
    &lt;!--[if lt IE 9]&gt;
        &lt;script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"&gt;&lt;/script&gt;
    &lt;![endif]--&gt;	
	&lt;!--    --&gt;
&lt;/body&gt;
&lt;/html&gt;							
</pre>
						</div>
							</div>
						</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Public header</a>
								</h4>
							</div>
						<div id="collapse2" class="panel-collapse collapse">
							<div class="panel-body">
								<pre class="bg-light-blue" style="margin: 0; line-height: 125%">
&lt;header id="header"&gt;
	&lt;div class="sup clearfix"&gt;
		&lt;div class="container relative"&gt;
		
			&lt;h1 class="no-margin"&gt;&lt;a href="/fanontour/00_home.html" title="Ir a la página de inicio"&gt;&lt;img src="img/logos/logo.png" alt="FanOnTour"&gt;&lt;/a&gt;&lt;/h1&gt;
			&lt;div id="dropdown-language-01" class="dropdown dropdown-language"&gt;
			 	&lt;a data-toggle="dropdown" href="#" title="see FanOnTour in english" class="main-link shape-arrow"&gt;&lt;img src="img/icons/flags/english.png" alt="English"&gt; &lt;span&gt;en&lt;/span&gt;&lt;/a&gt;
			 	&lt;ul class="dropdown-menu no-padding" role="menu" aria-labelledby="dropdown-language-01"&gt;
			    	&lt;li&gt;&lt;a href="#" title="ver FanOnTour en español"&gt;&lt;img src="img/icons/flags/spain.png" alt="Español"&gt; es&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href="#" title="siehe fanontour in Deutsch"&gt;&lt;img src="img/icons/flags/deutch.png" alt="Deutsch"&gt; de&lt;/a&gt;&lt;/li&gt;
			  	&lt;/ul&gt;			  	
			&lt;/div&gt;
			&lt;nav class="hidden-xs"&gt;
				&lt;ul class="list-point list-inline"&gt;		
					&lt;li&gt;&lt;a href="/fanontour/02_how-it-works.html" title="To see how it work Fanontour.com"&gt;How it works&lt;/a&gt;&lt;/li&gt;					
					&lt;li class="clearfix"&gt;
						&lt;ul class="list-inline list-login"&gt;
							&lt;li&gt;&lt;a href="template-login.html" title="iniciar sesión"&gt;Log in&lt;/a&gt;&lt;/li&gt;
							&lt;li&gt;&lt;a href="#" title="iniciar sesión con facebook"&gt;&lt;img src="img/icons/social/icon_facebook_header.png" alt="facebook"&gt;&lt;/a&gt;&lt;/li&gt;
						&lt;/ul&gt;
					&lt;/li&gt;
					&lt;li class="highlight"&gt;&lt;a class="btn btn-primary" href="#" &gt;Register&lt;/a&gt;&lt;/li&gt;											
				&lt;/ul&gt;			
			&lt;/nav&gt;
			&lt;nav class="visible-xs"&gt;
				&lt;div id="dropdown-mobile-01" class="dropdown dropdown-mobile-menu"&gt;
				 	&lt;a data-toggle="dropdown" href="#" title="ver menu"&gt;&lt;span class="fanontour-icon icon-icons-fanontour_menu"&gt;&lt;/span&gt;&lt;/a&gt;
				 	&lt;ul class="dropdown-menu no-padding" role="menu" aria-labelledby="dropdown-mobile-01"&gt;
				    	&lt;li&gt;&lt;a href="/fanontour/02_how-it-works.html" title="To see how it work Fanontour.com"&gt;How it works&lt;/a&gt;&lt;/li&gt;
				    	&lt;li&gt;&lt;a href="template-login.html" title="Init session"&gt;Log in&lt;/a&gt;&lt;/li&gt;
				    	&lt;li&gt;&lt;a href="#" title="Conect with facebook"&gt;Conect with facebook&lt;/a&gt;&lt;/li&gt;						
						&lt;li class="highlight"&gt;&lt;a class="btn btn-primary" href="#" &gt;Register&lt;/a&gt;&lt;/li&gt;	
				  	&lt;/ul&gt;
				&lt;/div&gt;
			&lt;/nav&gt;			
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="inf padding-v-10 clearfix"&gt;
		&lt;div class="container"&gt;
			&lt;p class="text-hide no-margin" lang="en"&gt;Do it your way!&lt;/p&gt;
		&lt;/div&gt;
	&lt;/div&gt;						
&lt;/header&gt;
</pre>
								</div>
							</div>

						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Private header</a>
								</h4>
							</div>
						<div id="collapse3" class="panel-collapse collapse">
							<div class="panel-body">
								<pre class="bg-light-blue" style="margin: 0; line-height: 125%">
&lt;header id="header"&gt;
	&lt;div class="sup clearfix"&gt;
		&lt;div class="container relative"&gt;
			&lt;h1 class="no-margin"&gt;&lt;a href="/fanontour/" title="Ir a la página de inicio"&gt;&lt;img src="img/logos/logo.png" alt="FanOnTour"&gt;&lt;/a&gt;&lt;/h1&gt;
			&lt;div id="dropdown-language-01" class="dropdown dropdown-language"&gt;
			 	&lt;a data-toggle="dropdown" href="#" title="see FanOnTour in english" class="main-link shape-arrow"&gt;&lt;img src="img/icons/flags/english.png" alt="English"&gt; &lt;span&gt;en&lt;/span&gt;&lt;/a&gt;
			 	&lt;ul class="dropdown-menu no-padding" role="menu" aria-labelledby="dropdown-language-01"&gt;
			    	&lt;li&gt;&lt;a href="#" title="ver FanOnTour en español"&gt;&lt;img src="img/icons/flags/spain.png" alt="Español"&gt; es&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href="#" title="siehe fanontour in Deutsch"&gt;&lt;img src="img/icons/flags/deutch.png" alt="Deutsch"&gt; de&lt;/a&gt;&lt;/li&gt;
			  	&lt;/ul&gt;			  	
			&lt;/div&gt;		
			&lt;nav class="logged hidden-xs hidden-sm"&gt;
				&lt;ul class="list-point list-inline no-margin"&gt;		
					&lt;li&gt;&lt;a href="#" title="How it works"&gt;How it works&lt;/a&gt;&lt;/li&gt;
					&lt;li class="fanontour-mod-user clearfix not-point"&gt;
						&lt;div class="mod-img"&gt;
							&lt;a href="#" title="editar perfil"&gt;
								&lt;img src="/fanontour/img/avatar/user.jpg" alt="usuario"&gt;
							&lt;/a&gt;
						&lt;/div&gt;
						&lt;div class="mod-txt"&gt;
							&lt;a href="#" title="edit profile"&gt;&lt;span&gt;jmocana&lt;/span&gt;&lt;/a&gt;
						&lt;/div&gt;
						&lt;nav class="no-margin"&gt;
							&lt;ul class="list-inline"&gt;
								&lt;li class="active"&gt;&lt;a href="#" title="ir a la página de inicio"&gt;Home&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="#" title="ir a mi perfil"&gt;Profile&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="#" title="ver mis FanFriends"&gt;FanFriends&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="#" title="próximos viajes planeados"&gt;Next tours&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="#" title="ver mis alertas"&gt;Alerts&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="#" title="ver mis últimos viajes"&gt;Lastest tours&lt;/a&gt;&lt;/li&gt;
							&lt;/ul&gt;
						&lt;/nav&gt;
					&lt;/li&gt;
					&lt;li class="not-point no-margi no-padding"&gt;&lt;a href="#" title="cerrar sesión"&gt;Log out&lt;/a&gt;&lt;/li&gt;																								
				&lt;/ul&gt;			
			&lt;/nav&gt;
			&lt;nav class="logged visible-xs visible-sm"&gt;
				&lt;div id="dropdown-mobile-02" class="dropdown dropdown-mobile-menu"&gt;
				 	&lt;a data-toggle="dropdown" href="#" title="ver menu"&gt;&lt;img src="/fanontour/img/avatar/user.jpg" alt="user"&gt;&lt;/a&gt;
				 	&lt;ul class="dropdown-menu no-padding" role="menu" aria-labelledby="dropdown-mobile-02"&gt;
				    	&lt;li class="active"&gt;&lt;a href="#" title="go to the init page"&gt;Home&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href="#" title="go to my profile"&gt;Profile&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href="#" title="view my FanFriends"&gt;FanFriends&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href="#" title="next tours planed"&gt;Next tours&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href="#" title="view my alertas"&gt;Alerts&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href="#" title="view my lastest tours"&gt;Lastest tours&lt;/a&gt;&lt;/li&gt;
						&lt;li class="not-point no-margin"&gt;&lt;a href="#" title="close session"&gt;Log out&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href="#" title="How it works"&gt;How it works&lt;/a&gt;&lt;/li&gt;
				  	&lt;/ul&gt;
				&lt;/div&gt;							
			&lt;/nav&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="inf padding-v-10 clearfix"&gt;
		&lt;div class="container"&gt;
			&lt;p class="text-hide no-margin" lang="en"&gt;Do it your way!&lt;/p&gt;
		&lt;/div&gt;
	&lt;/div&gt;						
&lt;/header&gt;
</pre>
								</div>
							</div>
							
						</div>
					</div>
<h1>Home</h1>


					<div class="panel-group" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="collapsed">Customized Tour (Sending activate panel variables)</a>
								</h4>
							</div>
						<div id="collapse1" class="panel-collapse collapse in">
							<div class="panel-body">
								<div class="col-md-12 row-padding-v-small">

								<p>For control which section are active we use inputs type hidden that can have the true or false value. We should send only the information of the panels with
								the true value.</p>

							<pre class="bg-light-blue" style="margin: 0; line-height: 125%">
&lt;input type="hidden" name="customized_01" class="panel_activate" value=false&gt;
&lt;input type="hidden" name="customized_02" class="panel_activate" value=false&gt;
&lt;input type="hidden" name="customized_03" class="panel_activate" value=false&gt;
&lt;input type="hidden" name="customized_04" class="panel_activate" value=false&gt;
&lt;input type="hidden" name="customized_05" class="panel_activate" value=false&gt;
&lt;input type="hidden" name="customized_06" class="panel_activate" value=false&gt;
</pre>
<br>
						<ul class="list-disc margin-left-mid">
							<li>Tickets &raquo; customized_01</li>
							<li>Hotels &raquo; customized_02</li>
							<li>Flights &raquo; customized_03</li>
							<li>Activities &raquo; customized_04</li>
							<li>Restaurants &raquo; customized_05</li>
							<li>Rental car &raquo; customized_06</li>
						</ul>

						</div>
							</div>
						</div>
						</div>					
										
				</div>

				<h1>Results</h1>
				<p>To filter the results we need to generate a xml document with all information of the search. We must also enter values in the "Your search details" box.
				<strong>Is important to load the cheapest offer in the first position of &lt;sources&gt;</strong><br>Pagination, items per page and order of results is done in the front side.</p>
				<p>Next i show all models of xml to generate</p>
				<h2>Basic XML Models</h2>
				<div class="panel-group" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#cm1" class="collapsed">XML Model Tickets</a>
								</h4>
							</div>
						<div id="cm1" class="panel-collapse collapse in">
							<div class="panel-body">
								<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%">
&lt;?xml version="1.0" encoding="utf-8" ?&gt;
&lt;Tickets&gt;
	&lt;ticket&gt;
		&lt;name&gt;&lt;/name&gt;
		&lt;description&gt;&lt;/description&gt;
		&lt;date&gt;&lt;/date&gt;
		&lt;place&gt;&lt;/place&gt;
		&lt;city&gt;&lt;/city&gt;
		&lt;image&gt;&lt;/image&gt;
		&lt;sources&gt;
			&lt;source&gt;
				&lt;source_name&gt;&lt;/source_name&gt;
				&lt;url&gt;&lt;/url&gt;
				&lt;price&gt;&lt;/price&gt;
			&lt;/source&gt;			
		&lt;/sources&gt;		
	&lt;/ticket&gt;
&lt;/Tickets&gt;
</pre>
			</div>
							</div>
						</div>
						</div>	
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#cm2">XML Model Hotels</a>
								</h4>
							</div>
						<div id="cm2" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="col-md-12 row-padding-v-small">
								<p><strong>properties values:</strong></p>
								<ul>
									<li>persons="1" (simple room), persons="2" (double room), persons="3" (triple room)</li>
								</ul>
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%">
&lt;hotel persons=""&gt;
	&lt;name&gt;&lt;/name&gt;
	&lt;address&gt;&lt;/address&gt;
	&lt;city&gt;&lt;/city&gt;
	&lt;image&gt;&lt;/image&gt;		
	&lt;sources&gt;
		&lt;source&gt;
			&lt;source_name&gt;&lt;/source_name&gt;
			&lt;url&gt;&lt;/url&gt;
			&lt;price&gt;&lt;/price&gt;
		&lt;/source&gt;									
	&lt;/sources&gt;
&lt;/hotel&gt;
</pre>
			</div>
							</div>
						</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#cm3">XML Model Flights</a>
								</h4>
							</div>
						<div id="cm3" class="panel-collapse collapse">
							<div class="panel-body">
								<p><strong>properties values:</strong></p>
								<ul>
									<li>scale_outbund="0" scale_return="0" (0=no scales ; 1=with scales)</li>
								</ul>
								<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%">
&lt;?xml version="1.0" encoding="utf-8" ?&gt;
&lt;Flights&gt;
	&lt;flight scale_outbund="0" scale_return="0"&gt;
		&lt;route1&gt;BCN To FEZ&lt;/route1&gt;
		&lt;route2&gt;FEZ To BCN&lt;/route2&gt;
		&lt;image&gt;/fanontour/img/results/wegolo.png&lt;/image&gt;
		&lt;outbund_time1&gt;07:30&lt;/outbund_time1&gt;
		&lt;outbund_time2&gt;08:30&lt;/outbund_time2&gt;
		&lt;return_time1&gt;19:00&lt;/return_time1&gt;	
		&lt;return_time2&gt;19:30&lt;/return_time2&gt;
		&lt;sources&gt;
			&lt;source&gt;
				&lt;source_name&gt;wegolo&lt;/source_name&gt;
				&lt;url&gt;http://www.wegolo.com/&lt;/url&gt;
				&lt;price&gt;50&lt;/price&gt;
			&lt;/source&gt;					
		&lt;/sources&gt;		
	&lt;/flight&gt;
&lt;/Flights&gt;
</pre>
			</div>
							</div>
						</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#cm4">XML Model Activities</a>
								</h4>
							</div>
						<div id="cm4" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%">
&lt;?xml version="1.0" encoding="utf-8" ?&gt;
&lt;Activities&gt;
	&lt;activity&gt;
		&lt;name&gt;&lt;/name&gt;
		&lt;description&gt;&lt;/description&gt;
		&lt;image&gt;&lt;/image&gt;		
		&lt;duration&gt;&lt;/duration&gt;
		&lt;sources&gt;
			&lt;source&gt;
				&lt;source_name&gt;&lt;/source_name&gt;
				&lt;url&gt;&lt;/url&gt;
				&lt;price&gt;&lt;/price&gt;
			&lt;/source&gt;			
		&lt;/sources&gt;		
	&lt;/activity&gt;	
&lt;/Activities&gt;
</pre>
			</div>
							</div>
						</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#cm5">XML Model Restaurants</a>
								</h4>
							</div>
						<div id="cm5" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%">
&lt;?xml version="1.0" encoding="utf-8" ?&gt;
&lt;Restaurants&gt;
	&lt;restaurant&gt;
		&lt;name&gt;&lt;/name&gt;
		&lt;description&gt;&lt;/description&gt;
		&lt;address&gt;&lt;/address&gt;
		&lt;city&gt;&lt;/city&gt;
		&lt;image&gt;&lt;/image&gt;	
		&lt;cousine&gt;&lt;/cousine&gt;		
		&lt;source&gt;&lt;/source&gt;
		&lt;url&gt;&lt;/url&gt;
	&lt;/restaurant&gt;
&lt;/Restaurants&gt;
</pre>
			</div>
							</div>
						</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#cm6">XML Model Rental Cars</a>
								</h4>
							</div>
						<div id="cm6" class="panel-collapse collapse">
							<div class="panel-body">
								<p><strong>properties values:</strong></p>
								<ul>
									<li>type="1" (Full to Full), type="2" (Pre-purchase (Refunds)), type="3" (Pre-purchase (partial refund)), type="4" (Pre-purchase), type="5" (Free tank)</li>
									<li>air-conditioning="0" (No air conditioning), air-conditioning="1" (with air conditioning)</li>
									<li>gearstick="0" (automatic transmission), gearstick="1" (manual transmission)</li>
								</ul>
								<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%">
&lt;car&gt;
	&lt;name&gt;&lt;/name&gt;		
	&lt;image&gt;&lt;/image&gt;
	&lt;address&gt;&lt;/address&gt;		
	&lt;petrol type="2"&gt;&lt;/petrol&gt;
	&lt;specifications air-conditioning="0" gearstick="0"&gt;			
		&lt;doors&gt;&lt;/doors&gt;
		&lt;seats&gt;&lt;/seats&gt;
		&lt;insurance&gt;&lt;/insurance&gt;
	&lt;/specifications&gt;	
	&lt;sources&gt;
		&lt;source&gt;
			&lt;source_name&gt;&lt;/source_name&gt;
			&lt;url&gt;&lt;/url&gt;
			&lt;price&gt;&lt;/price&gt;
		&lt;/source&gt;									
	&lt;/sources&gt;
&lt;/car&gt;
</pre>
			</div>
							</div>
						</div>
						</div>				
										
				</div>
<h2>XML Examples (Simple results and customized tour)</h2>
				<div class="panel-group" id="accordion">
						
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#cme1">Example: XML Model Tickets</a>
								</h4>
							</div>
						<div id="cme1" class="panel-collapse collapse in">
							<div class="panel-body">
								<div class="col-md-12 row-padding-v-small">
								<p>Full example: <a href="http://www.jmocana.eu/fanontour/xml/results/tickets.xml" title="see example">http://www.jmocana.eu/fanontour/xml/results/tickets.xml</a></p>
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%">
&lt;?xml version="1.0" encoding="utf-8" ?&gt;
&lt;Tickets&gt;
	&lt;ticket&gt;
		&lt;name&gt;Entradas FC Barcelona&lt;/name&gt;
		&lt;description&gt;La pasión con la que este equipo es apoyado y respetado allá donde va es una prueba de la grandeza de este club. Su casa, el Camp Nou, esta considerado uno de los mas prestigiosos campos europeos. &lt;/description&gt;
		&lt;date&gt;sab 17 ene 2015 21:30&lt;/date&gt;
		&lt;place&gt;Camp Nou&lt;/place&gt;
		&lt;city&gt;Barcelona&lt;/city&gt;
		&lt;image&gt;/fanontour/img/results/ticket.jpg&lt;/image&gt;
		&lt;sources&gt;
			&lt;source&gt;
				&lt;source_name&gt;seatwave&lt;/source_name&gt;
				&lt;url&gt;http://www.seatwave.es/&lt;/url&gt;
				&lt;price&gt;300&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;seatwave&lt;/source_name&gt;
				&lt;url&gt;http://www.seatwave.es/&lt;/url&gt;
				&lt;price&gt;1500&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;entradas.com&lt;/source_name&gt;
				&lt;url&gt;http://www.entradas.com/&lt;/url&gt;
				&lt;price&gt;1600&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;seatwave&lt;/source_name&gt;
				&lt;url&gt;http://www.seatwave.es/&lt;/url&gt;
				&lt;price&gt;1700&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;seatwave&lt;/source_name&gt;
				&lt;url&gt;http://www.seatwave.es/&lt;/url&gt;
				&lt;price&gt;1900&lt;/price&gt;
			&lt;/source&gt;
		&lt;/sources&gt;		
	&lt;/ticket&gt;
	&lt;ticket&gt;
		&lt;name&gt;Entradas Atlético de Madrid&lt;/name&gt;
		&lt;description&gt;La pasión con la que este equipo es apoyado y respetado allá donde va es una prueba de la grandeza de este club. Su casa, el Camp Nou, esta considerado uno de los mas prestigiosos campos europeos. &lt;/description&gt;
		&lt;date&gt;sab 17 ene 2015 21:30&lt;/date&gt;
		&lt;place&gt;Vicente Calderón&lt;/place&gt;
		&lt;city&gt;Madrid&lt;/city&gt;
		&lt;image&gt;/fanontour/img/results/ticket.jpg&lt;/image&gt;
		&lt;sources&gt;
			&lt;source&gt;
				&lt;source_name&gt;seatwave&lt;/source_name&gt;
				&lt;url&gt;http://www.seatwave.es/&lt;/url&gt;
				&lt;price&gt;1000&lt;/price&gt;
			&lt;/source&gt;			
		&lt;/sources&gt;		
	&lt;/ticket&gt;
	&lt;ticket&gt;
		&lt;name&gt;Entradas FC Barcelona&lt;/name&gt;
		&lt;description&gt;La pasión con la que este equipo es apoyado y respetado allá donde va es una prueba de la grandeza de este club. Su casa, el Camp Nou, esta considerado uno de los mas prestigiosos campos europeos. &lt;/description&gt;
		&lt;date&gt;sab 17 ene 2015 21:30&lt;/date&gt;
		&lt;place&gt;Camp Nou&lt;/place&gt;
		&lt;city&gt;Barcelona&lt;/city&gt;
		&lt;image&gt;/fanontour/img/results/ticket.jpg&lt;/image&gt;
		&lt;sources&gt;
			&lt;source&gt;
				&lt;source_name&gt;seatwave&lt;/source_name&gt;
				&lt;url&gt;http://www.seatwave.es/&lt;/url&gt;
				&lt;price&gt;20&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;seatwave&lt;/source_name&gt;
				&lt;url&gt;http://www.seatwave.es/&lt;/url&gt;
				&lt;price&gt;1500&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;entradas.com&lt;/source_name&gt;
				&lt;url&gt;http://www.entradas.com/&lt;/url&gt;
				&lt;price&gt;1600&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;seatwave&lt;/source_name&gt;
				&lt;url&gt;http://www.seatwave.es/&lt;/url&gt;
				&lt;price&gt;1700&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;seatwave&lt;/source_name&gt;
				&lt;url&gt;http://www.seatwave.es/&lt;/url&gt;
				&lt;price&gt;1900&lt;/price&gt;
			&lt;/source&gt;
		&lt;/sources&gt;		
	&lt;/ticket&gt;
	&lt;ticket&gt;
		&lt;name&gt;Entradas FC Barcelona&lt;/name&gt;
		&lt;description&gt;La pasión con la que este equipo es apoyado y respetado allá donde va es una prueba de la grandeza de este club. Su casa, el Camp Nou, esta considerado uno de los mas prestigiosos campos europeos. &lt;/description&gt;
		&lt;date&gt;sab 17 ene 2015 21:30&lt;/date&gt;
		&lt;place&gt;Camp Nou&lt;/place&gt;
		&lt;city&gt;Barcelona&lt;/city&gt;
		&lt;image&gt;/fanontour/img/results/ticket.jpg&lt;/image&gt;
		&lt;sources&gt;
			&lt;source&gt;
				&lt;source_name&gt;seatwave&lt;/source_name&gt;
				&lt;url&gt;http://www.seatwave.es/&lt;/url&gt;
				&lt;price&gt;300&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;seatwave&lt;/source_name&gt;
				&lt;url&gt;http://www.seatwave.es/&lt;/url&gt;
				&lt;price&gt;1500&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;entradas.com&lt;/source_name&gt;
				&lt;url&gt;http://www.entradas.com/&lt;/url&gt;
				&lt;price&gt;1600&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;seatwave&lt;/source_name&gt;
				&lt;url&gt;http://www.seatwave.es/&lt;/url&gt;
				&lt;price&gt;1700&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;seatwave&lt;/source_name&gt;
				&lt;url&gt;http://www.seatwave.es/&lt;/url&gt;
				&lt;price&gt;1900&lt;/price&gt;
			&lt;/source&gt;
		&lt;/sources&gt;		
	&lt;/ticket&gt;	
&lt;/Tickets&gt;		


							</pre>
			</div>
							</div>
						</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#cme2">Example: XML Model Hotels</a>
								</h4>
							</div>
						<div id="cme2" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="col-md-12 row-padding-v-small">
								<p>Full example: <a href="http://www.jmocana.eu/fanontour/xml/results/hotels.xml" title="see example">http://www.jmocana.eu/fanontour/xml/results/hotels.xml</a></p>
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%">

&lt;?xml version="1.0" encoding="utf-8" ?&gt;
&lt;Hotels&gt;
	&lt;hotel persons="3"&gt;
		&lt;name&gt;Petit Palace President Castellana&lt;/name&gt;
		&lt;address&gt;Calle del Marques de Villamagna, 4&lt;/address&gt;
		&lt;city&gt;Madrid&lt;/city&gt;
		&lt;image&gt;/fanontour/img/results/hotel.jpg&lt;/image&gt;		
		&lt;sources&gt;
			&lt;source&gt;
				&lt;source_name&gt;hoteles.com&lt;/source_name&gt;
				&lt;url&gt;http://es.hoteles.com/&lt;/url&gt;
				&lt;price&gt;100&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;hoteles.com&lt;/source_name&gt;
				&lt;url&gt;http://es.hoteles.com/&lt;/url&gt;
				&lt;price&gt;1700&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;hoteles.com&lt;/source_name&gt;
				&lt;url&gt;http://es.hoteles.com/&lt;/url&gt;
				&lt;price&gt;1800&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;hoteles.com&lt;/source_name&gt;
				&lt;url&gt;http://es.hoteles.com/&lt;/url&gt;
				&lt;price&gt;1900&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;hoteles.com&lt;/source_name&gt;
				&lt;url&gt;http://es.hoteles.com/&lt;/url&gt;
				&lt;price&gt;1700&lt;/price&gt;
			&lt;/source&gt;						
		&lt;/sources&gt;
	&lt;/hotel&gt;
	&lt;hotel persons="1"&gt;
		&lt;name&gt;Petit Palace President Castellana&lt;/name&gt;
		&lt;address&gt;Calle del Marques de Villamagna, 4&lt;/address&gt;
		&lt;city&gt;Madrid&lt;/city&gt;
		&lt;image&gt;/fanontour/img/results/hotel.jpg&lt;/image&gt;		
		&lt;sources&gt;
			&lt;source&gt;
				&lt;source_name&gt;hoteles.com&lt;/source_name&gt;
				&lt;url&gt;http://es.hoteles.com/&lt;/url&gt;
				&lt;price&gt;1500&lt;/price&gt;
			&lt;/source&gt;									
		&lt;/sources&gt;
	&lt;/hotel&gt;
	&lt;hotel persons="2"&gt;
		&lt;name&gt;Petit Palace President Castellana&lt;/name&gt;
		&lt;address&gt;Calle del Marques de Villamagna, 4&lt;/address&gt;
		&lt;city&gt;Madrid&lt;/city&gt;
		&lt;image&gt;/fanontour/img/results/hotel.jpg&lt;/image&gt;		
		&lt;sources&gt;
			&lt;source&gt;
				&lt;source_name&gt;hoteles.com&lt;/source_name&gt;
				&lt;url&gt;http://es.hoteles.com/&lt;/url&gt;
				&lt;price&gt;200&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;hoteles.com&lt;/source_name&gt;
				&lt;url&gt;http://es.hoteles.com/&lt;/url&gt;
				&lt;price&gt;1700&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;hoteles.com&lt;/source_name&gt;
				&lt;url&gt;http://es.hoteles.com/&lt;/url&gt;
				&lt;price&gt;1800&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;hoteles.com&lt;/source_name&gt;
				&lt;url&gt;http://es.hoteles.com/&lt;/url&gt;
				&lt;price&gt;1900&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;hoteles.com&lt;/source_name&gt;
				&lt;url&gt;http://es.hoteles.com/&lt;/url&gt;
				&lt;price&gt;1700&lt;/price&gt;
			&lt;/source&gt;						
		&lt;/sources&gt;
	&lt;/hotel&gt;		
&lt;/Hotels&gt;		


							</pre>
			</div>
							</div>
						</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#cme3">Example: XML Model Flights</a>
								</h4>
							</div>
						<div id="cme3" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="col-md-12 row-padding-v-small">
								<p>Full example: <a href="http://www.jmocana.eu/fanontour/xml/results/flights.xml" title="see example">http://www.jmocana.eu/fanontour/xml/results/flights.xml</a></p>
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%">

&lt;?xml version="1.0" encoding="utf-8" ?&gt;
&lt;Flights&gt;
	&lt;flight scale_outbund="0" scale_return="0"&gt;
		&lt;route1&gt;BCN To FEZ&lt;/route1&gt;
		&lt;route2&gt;FEZ To BCN&lt;/route2&gt;
		&lt;image&gt;/fanontour/img/results/wegolo.png&lt;/image&gt;
		&lt;outbund_time1&gt;07:30&lt;/outbund_time1&gt;
		&lt;outbund_time2&gt;08:30&lt;/outbund_time2&gt;
		&lt;return_time1&gt;19:00&lt;/return_time1&gt;	
		&lt;return_time2&gt;19:30&lt;/return_time2&gt;
		&lt;sources&gt;
			&lt;source&gt;
				&lt;source_name&gt;wegolo&lt;/source_name&gt;
				&lt;url&gt;http://www.wegolo.com/&lt;/url&gt;
				&lt;price&gt;50&lt;/price&gt;
			&lt;/source&gt;					
		&lt;/sources&gt;		
	&lt;/flight&gt;
	&lt;flight scale_outbund="0" scale_return="1"&gt;
		&lt;route1&gt;BCN To FEZ&lt;/route1&gt;
		&lt;route2&gt;FEZ To BCN&lt;/route2&gt;
		&lt;image&gt;/fanontour/img/results/wegolo.png&lt;/image&gt;
		&lt;outbund_time1&gt;07:30&lt;/outbund_time1&gt;
		&lt;outbund_time2&gt;08:30&lt;/outbund_time2&gt;
		&lt;return_time1&gt;19:00&lt;/return_time1&gt;	
		&lt;return_time2&gt;19:30&lt;/return_time2&gt;
		&lt;sources&gt;
			&lt;source&gt;
				&lt;source_name&gt;wegolo&lt;/source_name&gt;
				&lt;url&gt;http://www.wegolo.com/&lt;/url&gt;
				&lt;price&gt;50&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;wegolo&lt;/source_name&gt;
				&lt;url&gt;http://www.wegolo.com/&lt;/url&gt;
				&lt;price&gt;3500&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;wegolo&lt;/source_name&gt;
				&lt;url&gt;http://www.wegolo.com/&lt;/url&gt;
				&lt;price&gt;3600&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;wegolo&lt;/source_name&gt;
				&lt;url&gt;http://www.wegolo.com/&lt;/url&gt;
				&lt;price&gt;3700&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;wegolo&lt;/source_name&gt;
				&lt;url&gt;http://www.wegolo.com/&lt;/url&gt;
				&lt;price&gt;3800&lt;/price&gt;
			&lt;/source&gt;			
		&lt;/sources&gt;		
	&lt;/flight&gt;
	&lt;flight scale_outbund="1" scale_return="1"&gt;
		&lt;route1&gt;BCN To FEZ&lt;/route1&gt;
		&lt;route2&gt;FEZ To BCN&lt;/route2&gt;
		&lt;image&gt;/fanontour/img/results/wegolo.png&lt;/image&gt;
		&lt;outbund_time1&gt;07:30&lt;/outbund_time1&gt;
		&lt;outbund_time2&gt;08:30&lt;/outbund_time2&gt;
		&lt;return_time1&gt;19:00&lt;/return_time1&gt;	
		&lt;return_time2&gt;19:30&lt;/return_time2&gt;
		&lt;sources&gt;
			&lt;source&gt;
				&lt;source_name&gt;wegolo&lt;/source_name&gt;
				&lt;url&gt;http://www.wegolo.com/&lt;/url&gt;
				&lt;price&gt;50&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;wegolo&lt;/source_name&gt;
				&lt;url&gt;http://www.wegolo.com/&lt;/url&gt;
				&lt;price&gt;3500&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;wegolo&lt;/source_name&gt;
				&lt;url&gt;http://www.wegolo.com/&lt;/url&gt;
				&lt;price&gt;3600&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;wegolo&lt;/source_name&gt;
				&lt;url&gt;http://www.wegolo.com/&lt;/url&gt;
				&lt;price&gt;3700&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;wegolo&lt;/source_name&gt;
				&lt;url&gt;http://www.wegolo.com/&lt;/url&gt;
				&lt;price&gt;3800&lt;/price&gt;
			&lt;/source&gt;			
		&lt;/sources&gt;		
	&lt;/flight&gt;		
&lt;/Flights&gt;		
		


							</pre>
			</div>
							</div>
						</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#cme4">Example: XML Model Activities</a>
								</h4>
							</div>
						<div id="cme4" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="col-md-12 row-padding-v-small">
								<p>Full example: <a href="http://www.jmocana.eu/fanontour/xml/results/activity.xml" title="see example">http://www.jmocana.eu/fanontour/xml/results/activity.xml</a></p>
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%">
&lt;?xml version="1.0" encoding="utf-8" ?&gt;
&lt;Activities&gt;
	&lt;activity&gt;
		&lt;name&gt;Popovich Comedy Pet Theater at Planet Hollywood Resort and Casino&lt;/name&gt;
		&lt;description&gt;Gregory Popovich's Comedy Pet Theater is an extravaganza of juggling, European-style comedy and afurry entourage of performing cats and dogs. This unique and hilarious show featuring cats and amazing dogs, all who have been rescued from animal shelters. The ring-leader is Moscow Circus Superstar and master juggler Gregory Popovich. Bring the whole family for an afternoon of fun!&lt;/description&gt;
		&lt;image&gt;/fanontour/img/results/recorte_154x102.jpg&lt;/image&gt;		
		&lt;duration&gt;70 minutes&lt;/duration&gt;
		&lt;sources&gt;
			&lt;source&gt;
				&lt;source_name&gt;Viator&lt;/source_name&gt;
				&lt;url&gt;http://prelive.partner.viator.com/&lt;/url&gt;
				&lt;price&gt;75&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;Viator&lt;/source_name&gt;
				&lt;url&gt;http://prelive.partner.viator.com/&lt;/url&gt;
				&lt;price&gt;200&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;Viator&lt;/source_name&gt;
				&lt;url&gt;http://prelive.partner.viator.com/&lt;/url&gt;
				&lt;price&gt;300&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;Viator&lt;/source_name&gt;
				&lt;url&gt;http://prelive.partner.viator.com/&lt;/url&gt;
				&lt;price&gt;400&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;Viator&lt;/source_name&gt;
				&lt;url&gt;http://prelive.partner.viator.com/&lt;/url&gt;
				&lt;price&gt;500&lt;/price&gt;
			&lt;/source&gt;			
		&lt;/sources&gt;		
	&lt;/activity&gt;
	&lt;activity&gt;
		&lt;name&gt;Popovich Comedy Pet Theater at Planet Hollywood Resort and Casino&lt;/name&gt;
		&lt;description&gt;Gregory Popovich's Comedy Pet Theater is an extravaganza of juggling, European-style comedy and afurry entourage of performing cats and dogs. This unique and hilarious show featuring cats and amazing dogs, all who have been rescued from animal shelters. The ring-leader is Moscow Circus Superstar and master juggler Gregory Popovich. Bring the whole family for an afternoon of fun!&lt;/description&gt;
		&lt;image&gt;/fanontour/img/results/recorte_154x102.jpg&lt;/image&gt;		
		&lt;duration&gt;70 minutes&lt;/duration&gt;
		&lt;sources&gt;
			&lt;source&gt;
				&lt;source_name&gt;Viator&lt;/source_name&gt;
				&lt;url&gt;http://prelive.partner.viator.com/&lt;/url&gt;
				&lt;price&gt;100&lt;/price&gt;
			&lt;/source&gt;			
		&lt;/sources&gt;		
	&lt;/activity&gt;
	&lt;activity&gt;
		&lt;name&gt;Popovich Comedy Pet Theater at Planet Hollywood Resort and Casino&lt;/name&gt;
		&lt;description&gt;Gregory Popovich's Comedy Pet Theater is an extravaganza of juggling, European-style comedy and afurry entourage of performing cats and dogs. This unique and hilarious show featuring cats and amazing dogs, all who have been rescued from animal shelters. The ring-leader is Moscow Circus Superstar and master juggler Gregory Popovich. Bring the whole family for an afternoon of fun!&lt;/description&gt;
		&lt;image&gt;/fanontour/img/results/recorte_154x102.jpg&lt;/image&gt;		
		&lt;duration&gt;70 minutes&lt;/duration&gt;
		&lt;sources&gt;
			&lt;source&gt;
				&lt;source_name&gt;Viator&lt;/source_name&gt;
				&lt;url&gt;http://prelive.partner.viator.com/&lt;/url&gt;
				&lt;price&gt;75&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;Viator&lt;/source_name&gt;
				&lt;url&gt;http://prelive.partner.viator.com/&lt;/url&gt;
				&lt;price&gt;200&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;Viator&lt;/source_name&gt;
				&lt;url&gt;http://prelive.partner.viator.com/&lt;/url&gt;
				&lt;price&gt;300&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;Viator&lt;/source_name&gt;
				&lt;url&gt;http://prelive.partner.viator.com/&lt;/url&gt;
				&lt;price&gt;400&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;Viator&lt;/source_name&gt;
				&lt;url&gt;http://prelive.partner.viator.com/&lt;/url&gt;
				&lt;price&gt;500&lt;/price&gt;
			&lt;/source&gt;			
		&lt;/sources&gt;		
	&lt;/activity&gt;		
&lt;/Activities&gt;
</pre>
			</div>
							</div>
						</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#cme5">Example: XML Model Restaurants</a>
								</h4>
							</div>
						<div id="cme5" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="col-md-12 row-padding-v-small">
								<p>Full example: <a href="http://www.jmocana.eu/fanontour/xml/results/restaurants.xml" title="see example">http://www.jmocana.eu/fanontour/xml/results/restaurants.xml</a></p>
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%">

&lt;?xml version="1.0" encoding="utf-8" ?&gt;
&lt;Restaurants&gt;
	&lt;restaurant&gt;
		&lt;name&gt;La Parrilla de Leganes&lt;/name&gt;
		&lt;description&gt;En el interior del Hotel Parquesur, en la localidad madrileña de Leganés, se encuentra situado el restaurante La Parrilla de Leganés.&lt;/description&gt;
		&lt;address&gt;Avenida Gran Bretaña s/n, (Hotel Parquesur), 28916, Leganes&lt;/address&gt;
		&lt;city&gt;Madrid&lt;/city&gt;
		&lt;image&gt;/fanontour/img/results/restaurant.jpg&lt;/image&gt;	
		&lt;cousine&gt;Spanish&lt;/cousine&gt;		
		&lt;source&gt;bookatable&lt;/source&gt;
		&lt;url&gt;http://www.bookatable.es/&lt;/url&gt;
	&lt;/restaurant&gt;
	&lt;restaurant&gt;
		&lt;name&gt;La Parrilla de Leganes&lt;/name&gt;
		&lt;description&gt;En el interior del Hotel Parquesur, en la localidad madrileña de Leganés, se encuentra situado el restaurante La Parrilla de Leganés.&lt;/description&gt;
		&lt;address&gt;Avenida Gran Bretaña s/n, (Hotel Parquesur), 28916, Leganes&lt;/address&gt;
		&lt;city&gt;Madrid&lt;/city&gt;
		&lt;image&gt;/fanontour/img/results/restaurant.jpg&lt;/image&gt;	
		&lt;cousine&gt;Spanish&lt;/cousine&gt;		
		&lt;source&gt;bookatable&lt;/source&gt;
		&lt;url&gt;http://www.bookatable.es/&lt;/url&gt;
	&lt;/restaurant&gt;
	&lt;restaurant&gt;
		&lt;name&gt;La Parrilla de Leganes&lt;/name&gt;
		&lt;description&gt;En el interior del Hotel Parquesur, en la localidad madrileña de Leganés, se encuentra situado el restaurante La Parrilla de Leganés.&lt;/description&gt;
		&lt;address&gt;Avenida Gran Bretaña s/n, (Hotel Parquesur), 28916, Leganes&lt;/address&gt;
		&lt;city&gt;Madrid&lt;/city&gt;
		&lt;image&gt;/fanontour/img/results/restaurant.jpg&lt;/image&gt;	
		&lt;cousine&gt;Spanish&lt;/cousine&gt;		
		&lt;source&gt;bookatable&lt;/source&gt;
		&lt;url&gt;http://www.bookatable.es/&lt;/url&gt;
	&lt;/restaurant&gt;
&lt;/Restaurants&gt;

							</pre>
			</div>
							</div>
						</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#cme6">Example: XML Model Rental Cars</a>
								</h4>
							</div>
						<div id="cme6" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="col-md-12 row-padding-v-small">
								<p>Full example: <a href="http://www.jmocana.eu/fanontour/xml/results/cars.xml" title="see example">http://www.jmocana.eu/fanontour/xml/results/cars.xml</a></p>
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%">

&lt;?xml version="1.0" encoding="utf-8" ?&gt;
&lt;Cars&gt;
	&lt;car&gt;
		&lt;name&gt;Mercedes-Benz Viano&lt;/name&gt;		
		&lt;image&gt;/fanontour/img/results/car.jpg&lt;/image&gt;
		&lt;address&gt;Avenida Gran Bretaña s/n, (Hotel Parquesur), Madrid&lt;/address&gt;	
		&lt;petrol type="1"&gt;Full to Full&lt;/petrol&gt;	
		&lt;specifications air-conditioning="1" gearstick="1"&gt;			
			&lt;doors&gt;5&lt;/doors&gt;
			&lt;seats&gt;4&lt;/seats&gt;
			&lt;insurance&gt;at any risk&lt;/insurance&gt;
		&lt;/specifications&gt;	
		&lt;sources&gt;
			&lt;source&gt;
				&lt;source_name&gt;rentalCars&lt;/source_name&gt;
				&lt;url&gt;http://www.rentalcars.com/&lt;/url&gt;
				&lt;price&gt;150.25&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;rentalCars&lt;/source_name&gt;
				&lt;url&gt;http://www.rentalcars.com/&lt;/url&gt;
				&lt;price&gt;1500.25&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;rentalCars&lt;/source_name&gt;
				&lt;url&gt;http://www.rentalcars.com/&lt;/url&gt;
				&lt;price&gt;1600.25&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;rentalCars&lt;/source_name&gt;
				&lt;url&gt;http://www.rentalcars.com/&lt;/url&gt;
				&lt;price&gt;1750.25&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;rentalCars&lt;/source_name&gt;
				&lt;url&gt;http://www.rentalcars.com/&lt;/url&gt;
				&lt;price&gt;1850.25&lt;/price&gt;
			&lt;/source&gt;						
		&lt;/sources&gt;
	&lt;/car&gt;
	&lt;car&gt;
		&lt;name&gt;Mercedes-Benz Viano&lt;/name&gt;		
		&lt;image&gt;/fanontour/img/results/car.jpg&lt;/image&gt;
		&lt;address&gt;Avenida Gran Bretaña s/n, (Hotel Parquesur), Madrid&lt;/address&gt;		
		&lt;petrol type="2"&gt;Pre-purchase (Refunds)&lt;/petrol&gt;
		&lt;specifications air-conditioning="0" gearstick="0"&gt;			
			&lt;doors&gt;5&lt;/doors&gt;
			&lt;seats&gt;4&lt;/seats&gt;
			&lt;insurance&gt;at any risk&lt;/insurance&gt;
		&lt;/specifications&gt;	
		&lt;sources&gt;
			&lt;source&gt;
				&lt;source_name&gt;rentalCars&lt;/source_name&gt;
				&lt;url&gt;http://www.rentalcars.com/&lt;/url&gt;
				&lt;price&gt;150.25&lt;/price&gt;
			&lt;/source&gt;									
		&lt;/sources&gt;
	&lt;/car&gt;
	&lt;car&gt;
		&lt;name&gt;Mercedes-Benz Viano&lt;/name&gt;		
		&lt;image&gt;/fanontour/img/results/car.jpg&lt;/image&gt;
		&lt;address&gt;Avenida Gran Bretaña s/n, (Hotel Parquesur), Madrid&lt;/address&gt;	
		&lt;petrol type="3"&gt;Pre-purchase (partial refund)&lt;/petrol&gt;	
		&lt;specifications air-conditioning="0" gearstick="0"&gt;			
			&lt;doors&gt;5&lt;/doors&gt;
			&lt;seats&gt;4&lt;/seats&gt;
			&lt;insurance&gt;at any risk&lt;/insurance&gt;
		&lt;/specifications&gt;	
		&lt;sources&gt;
			&lt;source&gt;
				&lt;source_name&gt;rentalCars&lt;/source_name&gt;
				&lt;url&gt;http://www.rentalcars.com/&lt;/url&gt;
				&lt;price&gt;650.25&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;rentalCars&lt;/source_name&gt;
				&lt;url&gt;http://www.rentalcars.com/&lt;/url&gt;
				&lt;price&gt;1500.25&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;rentalCars&lt;/source_name&gt;
				&lt;url&gt;http://www.rentalcars.com/&lt;/url&gt;
				&lt;price&gt;1600.25&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;rentalCars&lt;/source_name&gt;
				&lt;url&gt;http://www.rentalcars.com/&lt;/url&gt;
				&lt;price&gt;1750.25&lt;/price&gt;
			&lt;/source&gt;
			&lt;source&gt;
				&lt;source_name&gt;rentalCars&lt;/source_name&gt;
				&lt;url&gt;http://www.rentalcars.com/&lt;/url&gt;
				&lt;price&gt;1850.25&lt;/price&gt;
			&lt;/source&gt;						
		&lt;/sources&gt;
	&lt;/car&gt;
&lt;/Cars&gt;		
		


							</pre>
			</div>
							</div>
						</div>
						</div>					
										
				</div>

				<div class="panel-group" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#custo1" class="collapsed">Customized tour: Search details</a>
								</h4>
							</div>
						<div id="custo1" class="panel-collapse collapse in">
							<div class="panel-body">
								<div class="col-md-12 row-padding-v-small">
								<p>We must load the values of the search (value="<em>load value</em>") in the inputs of search details <br>
								example:</p>
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%">
&lt;input type="text" class="form-control" id="activity-field-01" placeholder="City name" value="boxing" required&gt;

</pre>
			</div>
							</div>
						</div>
						</div>					
										
				</div>
				</div>

			
					
				<!-- CONTENIDO -->
			</div>
		</div>
	</main>
<!-- // MAIN -->
</body>
</html>