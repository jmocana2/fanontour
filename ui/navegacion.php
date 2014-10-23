<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FanOnTour</title>
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
					<h1>Navigation</h1>

					<!-- MAIN MENU -->
					<h3 class="bdr-bottom row-padding-v-small">Main nav (Public)</h3>
					<nav class="hidden-xs">
						<ul class="list-point list-inline">		
							<li><a href="/fanontour/02_how-it-works.html" title="To see how it work Fanontour.com">How it works</a></li>					
							<li class="clearfix">
								<ul class="list-inline list-login">
									<li><a href="#" title="iniciar sesión">Log in</a></li>
									<li><a href="#" title="iniciar sesión con facebook"><img src="../img/icons/social/icon_facebook_header.png" alt="facebook"></a></li>
								</ul>
							</li>
							<li class="highlight"><a class="btn btn-primary" href="#" >Register</a></li>											
						</ul>			
					</nav>
					<nav class="visible-xs">
						<div id="dropdown-mobile-01" class="dropdown dropdown-mobile-menu">
						 	<a data-toggle="dropdown" href="#" title="ver menu"><span class="fanontour-icon icon-icons-fanontour_menu"></span></a>
						 	<ul class="dropdown-menu no-padding" role="menu" aria-labelledby="dropdown-mobile-01">
						    	<li><a href="/fanontour/02_how-it-works.html" title="To see how it work Fanontour.com">How it works</a></li>
						    	<li><a href="#" title="Init session">Log in</a></li>
						    	<li><a href="#" title="Conect with facebook">Conect with facebook</a></li>						
								<li class="highlight"><a class="btn btn-primary" href="#" >Register</a></li>	
						  	</ul>
						</div>
					</nav>

					<div class="col-md-12 row-padding-v-small">
						<pre class="bg-light-blue">
&lt;nav class="hidden-xs"&gt;
	&lt;ul class="list-point list-inline"&gt;		
		&lt;li&gt;&lt;a href="/fanontour/02_how-it-works.html" title="To see how it work Fanontour.com"&gt;How it works&lt;/a&gt;&lt;/li&gt;					
		&lt;li class="clearfix"&gt;
			&lt;ul class="list-inline list-login"&gt;
				&lt;li&gt;&lt;a href="#" title="iniciar sesión"&gt;Log in&lt;/a&gt;&lt;/li&gt;
				&lt;li&gt;&lt;a href="#" title="iniciar sesión con facebook"&gt;&lt;img src="../img/icons/social/icon_facebook_header.png" alt="facebook"&gt;&lt;/a&gt;&lt;/li&gt;
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
	    	&lt;li&gt;&lt;a href="#" title="Init session"&gt;Log in&lt;/a&gt;&lt;/li&gt;
	    	&lt;li&gt;&lt;a href="#" title="Conect with facebook"&gt;Conect with facebook&lt;/a&gt;&lt;/li&gt;						
			&lt;li class="highlight"&gt;&lt;a class="btn btn-primary" href="#" &gt;Register&lt;/a&gt;&lt;/li&gt;	
	  	&lt;/ul&gt;
	&lt;/div&gt;
&lt;/nav&gt;
						</pre>
					</div>
					<!-- // MAIN MENU -->

					<h3 class="bdr-bottom row-padding-v-small">Main nav (Private)</h3>
					<header id="header" class="clearfix">
					<nav class="logged hidden-xs hidden-sm">
						<ul class="list-point list-inline no-margin">		
							<li><a href="#" title="How it works">How it works</a></li>
							<li class="fanontour-mod-user clearfix not-point">
								<div class="mod-img">
									<a href="#" title="editar perfil">
										<img src="/fanontour/img/avatar/user.jpg" alt="usuario">
									</a>
								</div>
								<div class="mod-txt">
									<a href="#" title="edit profile"><span>jmocana</span></a>
								</div>
								<nav class="no-margin">
									<ul class="list-inline">
										<li class="active"><a href="#" title="ir a la página de inicio">Home</a></li>
										<li><a href="#" title="ir a mi perfil">Profile</a></li>
										<li><a href="#" title="ver mis FanFriends">FanFriends</a></li>
										<li><a href="#" title="próximos viajes planeados">Next tours</a></li>
										<li><a href="#" title="ver mis alertas">Alerts</a></li>
										<li><a href="#" title="ver mis últimos viajes">Lastest tours</a></li>
									</ul>
								</nav>
							</li>
							<li class="not-point no-margi no-padding"><a href="#" title="cerrar sesión">Log out</a></li>																								
						</ul>			
					</nav>
					<nav class="logged visible-xs visible-sm">
						<div id="dropdown-mobile-02" class="dropdown dropdown-mobile-menu">
						 	<a data-toggle="dropdown" href="#" title="ver menu"><img src="/fanontour/img/avatar/user.jpg" alt="user"></a>
						 	<ul class="dropdown-menu no-padding" role="menu" aria-labelledby="dropdown-mobile-02">
						    	<li class="active"><a href="#" title="go to the init page">Home</a></li>
								<li><a href="#" title="go to my profile">Profile</a></li>
								<li><a href="#" title="view my FanFriends">FanFriends</a></li>
								<li><a href="#" title="next tours planed">Next tours</a></li>
								<li><a href="#" title="view my alertas">Alerts</a></li>
								<li><a href="#" title="view my lastest tours">Lastest tours</a></li>
								<li class="not-point no-margin"><a href="#" title="close session">Log out</a></li>
								<li><a href="#" title="How it works">How it works</a></li>
						  	</ul>
						</div>							
					</nav>
					</header>
					<br><br><br>
					<div class="col-md-12 row-padding-v-small">
						<pre class="bg-light-blue">
&lt;nav class="logged hidden-xs hidden-sm">
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
						</pre>
					</div>

					<!-- BREADCRUM -->
					<h3 class="bdr-bottom row-padding-v-small">Breadcrum</h3>
					<div class="row">
						<nav>
			                <ol class="breadcrumb breadcrumb-default">
			                    <li><a href="00_home.html" title="go to the init page">Home</a></li>
			                    <li>How it works</li>
			                </ol>
		                </nav>					
					</div>

					<div class="col-md-12 row-padding-v-small">
						<pre class="bg-light-blue">
&lt;nav&gt;
    &lt;ol class="breadcrumb breadcrumb-default"&gt;
        &lt;li&gt;&lt;a href="00_home.html" title="go to the init page"&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;How it works&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;			
						</pre>
						
					</div>
					<!-- BREADCRUM -->

					<!-- TABS -->
					<h3 class="bdr-bottom row-padding-v-small">Tabs</h3>
					
					<div class="tab tab-default">
				
						<!-- Nav tabs -->
						<ul class="nav nav-tabs nav-tabs-default" role="tablist">
						  <li class="active hidden-xs hidden-sm"><a href="#tab-tickets" role="tab" data-toggle="tab" title="search tickets">Tickets</a></li>
						  <li class="hidden-xs hidden-sm"><a href="#tab-hotels" role="tab" data-toggle="tab" title="search hotels">Hotels</a></li>
						  <li class="hidden-xs hidden-sm"><a href="#tab-flights" role="tab" data-toggle="tab" title="search flights">Flights</a></li>
						  <li class="hidden-xs hidden-sm"><a href="#tab-activities" role="tab" data-toggle="tab" title="search activities">Activities</a></li>
						  <li class="hidden-xs hidden-sm"><a href="#tab-restaurants" role="tab" data-toggle="tab" title="search restaurants">Restaurants</a></li>
						  <li class="hidden-xs hidden-sm"><a href="#tab-rent-car" role="tab" data-toggle="tab" title="search rental cars">Rental cars</a></li>
						  <li class="hidden-xs hidden-sm"><a class="customized-tour highlight relative" href="#tab-tour" role="tab" data-toggle="tab" title="make your cutomized tour">Customized tour <span class="text-new-feature"><span>New!</span></span></a></li>
						  <li class="dropdown dropdown-tab visible-xs visible-sm">
					        <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">What are you looking for? <span class="caret"></span></a>
					        <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
					          <li><a href="#tab-tickets" tabindex="-1" role="tab" data-toggle="tab" title="search tickets">Tickets</a></li>
					          <li><a href="#tab-hotels" tabindex="-1" role="tab" data-toggle="tab" title="search hotels">Hotels</a></li>
					          <li><a href="#tab-flights" tabindex="-1" role="tab" data-toggle="tab" title="search flights">Flights</a></li>
					          <li><a href="#tab-activities" tabindex="-1" role="tab" data-toggle="tab" title="search activities">Activities</a></li>
					          <li><a href="#tab-restaurants" tabindex="-1" role="tab" data-toggle="tab" title="search restaurants">Restaurants</a></li>
					          <li><a href="#tab-rent-car" tabindex="-1" role="tab" data-toggle="tab" title="search rental cars">Rental cars</a></li>
					          <li><a class="relative customized-tour" href="#tab-tour" tabindex="-1" role="tab" data-toggle="tab" title="make your cutomized tour">Customized tour <span class="text-new-feature"><span>New!</span></span></a></li>
					        </ul>
					      </li>
						</ul>
						
						<!-- Tab panes -->
						<div class="tab-content clearfix">
						  <div class="tab-pane active" id="tab-tickets">
						  		<p>Tickets</p>
						  </div>
						  <div class="tab-pane" id="tab-hotels">
						  		<p>Hotels</p>
						  </div>
						  <div class="tab-pane" id="tab-flights">
						  		<p>Flights</p>
						  </div>
						  <div class="tab-pane" id="tab-activities">
						  		<p>Activities</p>
						  </div>
						  <div class="tab-pane" id="tab-restaurants">
						  		<p>Restaurants</p>
						  </div>
						  <div class="tab-pane" id="tab-rent-car">
						  		<p>Rental cars</p>
						  </div>
						  <div class="tab-pane" id="tab-tour">
						  		<p>Customized Tour</p>
						  </div>
						</div>
					</div>

					<div class="col-md-12 row-padding-v-small">
						<pre class="bg-light-blue" style="margin: 0; line-height: 125%"><span style="font-weight: bold">
&lt;div class="tab tab-default"&gt;
				
	&lt;!-- Nav tabs --&gt;
	&lt;ul class="nav nav-tabs nav-tabs-default" role="tablist"&gt;
	  &lt;li class="active hidden-xs hidden-sm"&gt;&lt;a href="#tab-tickets" role="tab" data-toggle="tab" title="search tickets"&gt;Tickets&lt;/a&gt;&lt;/li&gt;
	  &lt;li class="hidden-xs hidden-sm"&gt;&lt;a href="#tab-hotels" role="tab" data-toggle="tab" title="search hotels"&gt;Hotels&lt;/a&gt;&lt;/li&gt;
	  &lt;li class="hidden-xs hidden-sm"&gt;&lt;a href="#tab-flights" role="tab" data-toggle="tab" title="search flights"&gt;Flights&lt;/a&gt;&lt;/li&gt;
	  &lt;li class="hidden-xs hidden-sm"&gt;&lt;a href="#tab-activities" role="tab" data-toggle="tab" title="search activities"&gt;Activities&lt;/a&gt;&lt;/li&gt;
	  &lt;li class="hidden-xs hidden-sm"&gt;&lt;a href="#tab-restaurants" role="tab" data-toggle="tab" title="search restaurants"&gt;Restaurants&lt;/a&gt;&lt;/li&gt;
	  &lt;li class="hidden-xs hidden-sm"&gt;&lt;a href="#tab-rent-car" role="tab" data-toggle="tab" title="search rental cars"&gt;Rental cars&lt;/a&gt;&lt;/li&gt;
	  &lt;li class="hidden-xs hidden-sm"&gt;&lt;a class="customized-tour highlight relative" href="#tab-tour" role="tab" data-toggle="tab" title="make your cutomized tour"&gt;Customized tour &lt;span class="text-new-feature"&gt;&lt;span&gt;New!&lt;/span&gt;&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
	  &lt;li class="dropdown dropdown-tab visible-xs visible-sm"&gt;
        &lt;a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown"&gt;What are you looking for? &lt;span class="caret"&gt;&lt;/span&gt;&lt;/a&gt;
        &lt;ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1"&gt;
          &lt;li&gt;&lt;a href="#tab-tickets" tabindex="-1" role="tab" data-toggle="tab" title="search tickets"&gt;Tickets&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#tab-hotels" tabindex="-1" role="tab" data-toggle="tab" title="search hotels"&gt;Hotels&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#tab-flights" tabindex="-1" role="tab" data-toggle="tab" title="search flights"&gt;Flights&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#tab-activities" tabindex="-1" role="tab" data-toggle="tab" title="search activities"&gt;Activities&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#tab-restaurants" tabindex="-1" role="tab" data-toggle="tab" title="search restaurants"&gt;Restaurants&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#tab-rent-car" tabindex="-1" role="tab" data-toggle="tab" title="search rental cars"&gt;Rental cars&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a class="relative customized-tour" href="#tab-tour" tabindex="-1" role="tab" data-toggle="tab" title="make your cutomized tour"&gt;Customized tour &lt;span class="text-new-feature"&gt;&lt;span&gt;New!&lt;/span&gt;&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/li&gt;
	&lt;/ul&gt;
	
	&lt;!-- Tab panes --&gt;
	&lt;div class="tab-content clearfix"&gt;
	  &lt;div class="tab-pane active" id="tab-tickets"&gt;
	  		&lt;p&gt;Tickets&lt;/p&gt;
	  &lt;/div&gt;
	  &lt;div class="tab-pane" id="tab-hotels"&gt;
	  		&lt;p&gt;Hotels&lt;/p&gt;
	  &lt;/div&gt;
	  &lt;div class="tab-pane" id="tab-flights"&gt;
	  		&lt;p&gt;Flights&lt;/p&gt;
	  &lt;/div&gt;
	  &lt;div class="tab-pane" id="tab-activities"&gt;
	  		&lt;p&gt;Activities&lt;/p&gt;
	  &lt;/div&gt;
	  &lt;div class="tab-pane" id="tab-restaurants"&gt;
	  		&lt;p&gt;Restaurants&lt;/p&gt;
	  &lt;/div&gt;
	  &lt;div class="tab-pane" id="tab-rent-car"&gt;
	  		&lt;p&gt;Rental cars&lt;/p&gt;
	  &lt;/div&gt;
	  &lt;div class="tab-pane" id="tab-tour"&gt;
	  		&lt;p&gt;Customized Tour&lt;/p&gt;
	  &lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;						
</pre>
					</div>
					<!-- TABS  -->

					<!-- PAGINADO -->
					<div class="col-md-12 row-padding-v-small">
						<h3 class="bdr-bottom row-padding-v-small">Pagination</h3>
						<div class="text-center">
							<ul class="pagination ">
								<li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left small-text"></span></a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-chevron-right small-text"></span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-12 row-padding-v-small">
						<pre class="bg-light-blue" style="margin: 0; line-height: 125%"><span style="font-weight: bold">&lt;div</span> class=<span style="font-style: italic">&quot;text-center&quot;</span><span style="font-weight: bold">&gt;</span>
	<span style="font-weight: bold">&lt;ul</span> class=<span style="font-style: italic">&quot;pagination &quot;</span><span style="font-weight: bold">&gt;</span>
		<span style="font-weight: bold">&lt;li</span> class=<span style="font-style: italic">&quot;disabled&quot;</span><span style="font-weight: bold">&gt;&lt;a</span> href=<span style="font-style: italic">&quot;#&quot;</span><span style="font-weight: bold">&gt;&lt;span</span> class=<span style="font-style: italic">&quot;glyphicon glyphicon-chevron-left small-text&quot;</span><span style="font-weight: bold">&gt;&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;</span>
		<span style="font-weight: bold">&lt;li</span> class=<span style="font-style: italic">&quot;active&quot;</span><span style="font-weight: bold">&gt;&lt;a</span> href=<span style="font-style: italic">&quot;#&quot;</span><span style="font-weight: bold">&gt;</span>1<span style="font-weight: bold">&lt;/a&gt;&lt;/li&gt;</span>
		<span style="font-weight: bold">&lt;li&gt;&lt;a</span> href=<span style="font-style: italic">&quot;#&quot;</span><span style="font-weight: bold">&gt;</span>2<span style="font-weight: bold">&lt;/a&gt;&lt;/li&gt;</span>
		<span style="font-weight: bold">&lt;li&gt;&lt;a</span> href=<span style="font-style: italic">&quot;#&quot;</span><span style="font-weight: bold">&gt;</span>3<span style="font-weight: bold">&lt;/a&gt;&lt;/li&gt;</span>
		<span style="font-weight: bold">&lt;li&gt;&lt;a</span> href=<span style="font-style: italic">&quot;#&quot;</span><span style="font-weight: bold">&gt;</span>4<span style="font-weight: bold">&lt;/a&gt;&lt;/li&gt;</span>
		<span style="font-weight: bold">&lt;li&gt;&lt;a</span> href=<span style="font-style: italic">&quot;#&quot;</span><span style="font-weight: bold">&gt;</span>5<span style="font-weight: bold">&lt;/a&gt;&lt;/li&gt;</span>
	<span style="font-weight: bold">&lt;li&gt;&lt;a</span> href=<span style="font-style: italic">&quot;#&quot;</span><span style="font-weight: bold">&gt;&lt;span</span> class=<span style="font-style: italic">&quot;glyphicon glyphicon-chevron-right small-text&quot;</span><span style="font-weight: bold">&gt;&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;</span>
	<span style="font-weight: bold">&lt;/ul&gt;</span>
<span style="font-weight: bold">&lt;/div&gt;</span>
</pre>
					</div>
					<!-- PAGINADO -->

					<!-- ACORDEON -->
					<div class="col-md-12 row-padding-v-small">
						<h3 class="bdr-bottom row-padding-v-small">Accordions</h3>
						<!-- SIMPLE ACCORDION -->
						<p><strong>Simple-accordion</strong></p>
						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="collapsed">Acordeón_01</a>
									</h4>
								</div>
								<div id="collapse1" class="panel-collapse collapse">
									<div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title span-right">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed">Acordeón_02</a>
									</h4>
								</div>
								<div id="collapse2" class="panel-collapse collapse">
									<div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title text-right">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed">Acordeón_03</a>
									</h4>
								</div>
								<div id="collapse3" class="panel-collapse collapse">
									<div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
								</div>
							</div>
						</div>
						<!-- SIMPLE ACCORDION -->

					</div>

					<!-- SIMPLE ACCORDION CODE -->
					<div class="col-md-12 row-padding-v-small">
						<pre class="bg-light-blue" style="margin: 0; line-height: 125%">&lt;div class=<span style="font-style: italic">&quot;panel-group&quot;</span> id=<span style="font-style: italic">&quot;accordion&quot;</span>&gt;
&lt;div class=<span style="font-style: italic">&quot;panel panel-default&quot;</span>&gt;
&lt;div class=<span style="font-style: italic">&quot;panel-heading&quot;</span>&gt;
&lt;h4 class=<span style="font-style: italic">&quot;panel-title&quot;</span>&gt;
&lt;a data-toggle=<span style="font-style: italic">&quot;collapse&quot;</span> data-parent=<span style="font-style: italic">&quot;#accordion&quot;</span> href=<span style="font-style: italic">&quot;#collapse1&quot;</span> class=<span style="font-style: italic">&quot;collapsed&quot;</span>&gt;Acordeón_01&lt;/a&gt;
&lt;/h4&gt;
&lt;/div&gt;
&lt;div id=<span style="font-style: italic">&quot;collapse1&quot;</span> class=<span style="font-style: italic">&quot;panel-collapse collapse&quot;</span>&gt;
&lt;div class=<span style="font-style: italic">&quot;panel-body&quot;</span>&gt;Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=<span style="font-style: italic">&quot;panel panel-default&quot;</span>&gt;
&lt;div class=<span style="font-style: italic">&quot;panel-heading&quot;</span>&gt;
&lt;h4 class=<span style="font-style: italic">&quot;panel-title span-right&quot;</span>&gt;
&lt;a data-toggle=<span style="font-style: italic">&quot;collapse&quot;</span> data-parent=<span style="font-style: italic">&quot;#accordion&quot;</span> href=<span style="font-style: italic">&quot;#collapse2&quot;</span> class=<span style="font-style: italic">&quot;collapsed&quot;</span>&gt;Acordeón_02&lt;/a&gt;
&lt;/h4&gt;
&lt;/div&gt;
&lt;div id=<span style="font-style: italic">&quot;collapse2&quot;</span> class=<span style="font-style: italic">&quot;panel-collapse collapse&quot;</span>&gt;
&lt;div class=<span style="font-style: italic">&quot;panel-body&quot;</span>&gt;Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=<span style="font-style: italic">&quot;panel panel-default&quot;</span>&gt;
&lt;div class=<span style="font-style: italic">&quot;panel-heading&quot;</span>&gt;
&lt;h4 class=<span style="font-style: italic">&quot;panel-title button-right&quot;</span>&gt;
&lt;a data-toggle=<span style="font-style: italic">&quot;collapse&quot;</span> data-parent=<span style="font-style: italic">&quot;#accordion&quot;</span> href=<span style="font-style: italic">&quot;#collapse3&quot;</span> class=<span style="font-style: italic">&quot;collapsed&quot;</span>&gt;Acordeón_03&lt;/a&gt;
&lt;/h4&gt;
&lt;/div&gt;
&lt;div id=<span style="font-style: italic">&quot;collapse3&quot;</span> class=<span style="font-style: italic">&quot;panel-collapse collapse&quot;</span>&gt;
&lt;div class=<span style="font-style: italic">&quot;panel-body&quot;</span>&gt;Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch..&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre>
					</div>
					<!-- SIMPLE ACCORDION CODE -->					
					<p class="clearl">For two accordion or more &raquo; <a href="http://getbootstrap.com/javascript/#collapse-usage" class="btn-link" target="_blank">JavaScript</a></p>

					<div class="col-md-12 row-padding-v-small">
						<p><strong>Toggle-accordion</strong></p>

						<!--  TOGGlE ACCORDION -->
						<div class="-toggle-accordion-trigger">
							<button type="button" class="btn btn-default margin-bottom-small collapsed" data-toggle="collapse" data-target="#my-accordion">Acordeón</button>

							<div id="my-accordion" class="collapse -toggle-accordion">
								<p class="panel-box-body no-margin">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
							</div>
						</div>
						
						<!--  TOGGlE ACCORDION -->

					</div>

					<!--  tOGGLE ACCORDION CODE -->
					<div class="col-md-12 row-padding-v-small">
						<pre class="bg-light-blue" style="margin: 0; line-height: 125%">&lt;button type=<span style="font-style: italic">&quot;button&quot;</span> class=<span style="font-style: italic">&quot;btn btn-default margin-bottom-small collapsed&quot;</span> data-toggle=<span style="font-style: italic">&quot;collapse&quot;</span> data-target=<span style="font-style: italic">&quot;#my-accordion&quot;</span>&gt;Desplegar acordeón&lt;/button&gt;

&lt;div id=<span style="font-style: italic">&quot;my-accordion&quot;</span> class=<span style="font-style: italic">&quot;collapse -toggle-accordion&quot;</span>&gt;
&lt;p class=<span style="font-style: italic">&quot;panel-box-body no-margin&quot;</span>&gt;Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven<span style="font-style: italic">&#39;t heard of them accusamus labore sustainable VHS.&lt;/p&gt;</span>
&lt;/div&gt;
</pre>
					</div>
					<!--  TOGGLE ACCORDION CODE -->

					<!-- ACORDEON -->

				</div>
					<!-- CONTENIDO -->
			</div>
		</div>
	</main>
	
<!-- // MAIN -->
</body>
</html>