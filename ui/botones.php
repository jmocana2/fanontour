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
					<h1>Buttons</h1>

					<!-- PRIMARY BUTTON -->
					<div class="row">
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<h3 class="bdr-bottom row-padding-v-small">Primary button</h3>
							<a class="btn btn-primary" href="#">Primary button</a>
						</div>
						<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%">&lt;a class="btn btn-primary" href="#"&gt;Register&lt;/a&gt;
</pre>
						</div>
					</div>
					<!-- PRIMARY BUTTON -->

					<!-- DEFAULT BUTTON -->
					<div class="row">
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<h3 class="bdr-bottom row-padding-v-small">Default button</h3>
							<a class="btn btn-default" href="#">Default button</a>
						</div>
						<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%">&lt;a class="btn btn-default" href="#"&gt;Register&lt;/a&gt;
</pre>
						</div>
					</div>
					<!-- DEFAULT BUTTON -->
					
					<!-- SEARCH BUTTON  -->
					<div class="row">
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<h3 class="bdr-bottom row-padding-v-small">Search button</h3>
							<button class="btn btn-search text-uppercase">Search <span class="fanontour-icon icon-icons-fanontour_search"></span></button>
						</div>
						<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%">&lt;button class="btn btn-search text-uppercase"&gt;Search &lt;span class="fanontour-icon icon-icons-fanontour_search"&gt;&lt;/span&gt;&lt;/button&gt;
</pre>
						</div>
					</div>
					<!-- SEARCH BUTTON -->				
				</div>
					<!-- CONTENIDO -->
			</div>
		</div>
	</main>
<!-- // MAIN -->
</body>
</html>