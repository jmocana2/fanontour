<!DOCTYPE html>
<!--[if IE 8 ]>    <html class="ie8" lang="es"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9" lang="es"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="es"> <!--<![endif]-->

<head>    
    <title>FanOnTour.com</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="img/icons/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/icons/favicon.ico" type="image/x-icon">
	
	<!-- CONFIG -->
	<meta name="author" content="Events Tickets Services S.L.U" />
	<meta name="description" content="Descripción de la página" />
	<meta name="keywords" content="etiqueta1, etiqueta2, etiqueta3" />
	<meta name="robots" content="follow, index" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<!--     -->

	<!-- SEO -->	
	<meta name="revisit-after" content="1 days">
	<meta name="robots" content="INDEX,FOLLOW,NOODP">	
	<meta name="twitter:card" content="photo">
	<meta name="twitter:site" content="@FANONTOUR">
	<meta name="twitter:creator" content="@FANONTOUR">
	<meta name="twitter:title" content="fanOnTour title">
	<meta name="twitter:image:src" content="img/social/twitter-card.jpg">
	<meta name="twitter:domain" content="www.fanontour.com">
	<meta property="og:title" content="FanOnTour">
	<meta property="og:type" content="website">
	<meta property="og:description" content="descripción">
	<meta property="og:url" content="http://www.fanontour.com">
	<meta property="og:site_name" content="fanOnTour">
	<meta property="og:image" content="img/social/og-facebook.jpg">
	<!--     -->


	<!-- CSS -->
	<link rel="stylesheet" href="public/vendor/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	<!--     -->
	
	<!-- JS -->
	<script src="public/vendor/jquery/jquery.js"></script>
	<script src="public/vendor/jquery/jquery.lazyload.min.js"></script>
	<script src="public/vendor/modernizr/modernizr_2.8.3.js"></script>	
	<script src="public/vendor/bootstrap/bootstrap.js"></script>
	<script src="js/main.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->	
	<!--    -->

</head>
<body id="about-us">
	<!-- HEADER -->
	<?php include('include/template/header.html'); ?>
	<!-- -->
	<!-- MAIN -->
	<main>

		<div class="bg-container bg-container-generic absolute"></div>
		<div class="content">

			<!-- ========== (MODAL) TERMS AND CONDITIONS ========= -->
			<?php
				$modal = "modal-conditions";
				include('include/modals/modal-box.html'); 
			?>
			<!-- ================================================= -->
			<!-- =========== (MODAL) PRIVACY POLICY ============== -->
			<?php
				$modal = "modal-policy";
				include('include/modals/modal-box.html'); 
			?>
			<!-- ================================================= -->

			<section id="about">
				<div class="container">
					<div class="row">
						<header>
							<h1 class="title title-photo">Sections activated</h1>						
							<nav>
				                <ol class="breadcrumb breadcrumb-default">
				                    <li><a href="00_home.html" title="go to the init page">Home</a></li>
				                    <li>Results</li>
				                </ol>
			                </nav>		           
						</header>					
						<div>
							<section class="fanontour-mod-default clearfix">
								<h1>The sections activated are:</h1>
								<ul class="list-disc">
									<li>Tickets: <?php echo $_POST["customized_01"] ?></li>
									<li>Hotels: <?php echo $_POST["customized_02"] ?></li>
									<li>Flights: <?php echo $_POST["customized_03"] ?></li>
									<li>Activities: <?php echo $_POST["customized_04"] ?></li>
									<li>Restaurants: <?php echo $_POST["customized_05"] ?></li>
									<li>Rental cars: <?php echo $_POST["customized_06"] ?></li>
									
								</ul>
							</section>
							
						</div>
				    </div>
			    </div>
			</section>
						
				
		</div>				
	</main>
	<!-- -->
	<!-- FOOTER -->
	<?php include('include/template/footer.html'); ?>
	<!-- -->
</body>
</html>