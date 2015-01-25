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
					<h1>Media</h1>


					<!-- VIDEO -->
					<div class="row">
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<h3 class="bdr-bottom row-padding-v-small">Video</h3>
							<video id="demo1" controls="">
								<source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
							    <source src="http://www.w3schools.com/html/mob_bbb.ogg" type="video/ogg"> 
							    Your browser does not support the video tag.
							</video>
						</div>
						<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%">
&lt;video id="demo1" controls=""&gt;
	&lt;source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4"&gt;
    &lt;source src="http://www.w3schools.com/html/mob_bbb.ogg" type="video/ogg"&gt; 
    Your browser does not support the video tag.
&lt;/video&gt;							
</pre>
						</div>
					</div>
					<p>We need to have the video in <strong>mp4 and ogg format</strong></p>
					<!-- VIDEO -->

					<!-- YOUTUBE VIDEO -->
					<div class="row">
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<h3 class="bdr-bottom row-padding-v-small">Youtube video</h3>
							<div class="embed-responsive embed-responsive-16by9">
							  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/YE7VzlLtp-4"></iframe>
							</div>
						</div>
						<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%">
&lt;div class="col-md-12 panel-box-body row-padding-v-small"&gt;
	&lt;h3 class="bdr-bottom row-padding-v-small"&gt;Youtube video&lt;/h3&gt;
	&lt;div class="embed-responsive embed-responsive-16by9"&gt;
	  &lt;iframe class="embed-responsive-item" src="//www.youtube.com/embed/YE7VzlLtp-4"&gt;&lt;/iframe&gt;
	&lt;/div&gt;
&lt;/div&gt;							
</pre>
						</div>
					</div>
					<!-- YOUTUBE VIDEO -->
					
					<!-- SEARCH BUTTON  -->
					<div class="row">
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<h3 class="bdr-bottom row-padding-v-small">Carousel</h3>
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								  <!-- Indicators -->
								  <ol class="carousel-indicators">
								    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
								    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
								    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
								  </ol>

								  <!-- Wrapper for slides -->
								  <div class="carousel-inner">
								    <div class="item active">
								      <img src="../img/static/about-us.jpg" alt="#">
								      <div class="carousel-caption">
								        <p>photo1 description</p>
								      </div>
								    </div>
								    <div class="item">
								      <img src="../img/static/about-us.jpg" alt="#">
								      <div class="carousel-caption">
								        <p>photo2 description</p>
								      </div>
								    </div>
								    <div class="item">
								      <img src="../img/static/about-us.jpg" alt="#">
								      <div class="carousel-caption">
								        <p>photo3 description</p>
								      </div>
								    </div>
								  </div>

								  <!-- Controls -->
								  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
								    <span class="glyphicon glyphicon-chevron-left"></span>
								  </a>
								  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
								    <span class="glyphicon glyphicon-chevron-right"></span>
								  </a>
								</div>
						</div>
						<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%">
&lt;div id="carousel-example-generic" class="carousel slide" data-ride="carousel"&gt;
  &lt;!-- Indicators --&gt;
  &lt;ol class="carousel-indicators"&gt;
    &lt;li data-target="#carousel-example-generic" data-slide-to="0" class="active"&gt;&lt;/li&gt;
    &lt;li data-target="#carousel-example-generic" data-slide-to="1"&gt;&lt;/li&gt;
    &lt;li data-target="#carousel-example-generic" data-slide-to="2"&gt;&lt;/li&gt;
  &lt;/ol&gt;

  &lt;!-- Wrapper for slides --&gt;
  &lt;div class="carousel-inner"&gt;
    &lt;div class="item active"&gt;
      &lt;img src="../img/static/about-us.jpg" alt="#"&gt;
      &lt;div class="carousel-caption"&gt;
        &lt;p&gt;photo1 description&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="item"&gt;
      &lt;img src="../img/static/about-us.jpg" alt="#"&gt;
      &lt;div class="carousel-caption"&gt;
        &lt;p&gt;photo2 description&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="item"&gt;
      &lt;img src="../img/static/about-us.jpg" alt="#"&gt;
      &lt;div class="carousel-caption"&gt;
        &lt;p&gt;photo3 description&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Controls --&gt;
  &lt;a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"&gt;
    &lt;span class="glyphicon glyphicon-chevron-left"&gt;&lt;/span&gt;
  &lt;/a&gt;
  &lt;a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"&gt;
    &lt;span class="glyphicon glyphicon-chevron-right"&gt;&lt;/span&gt;
  &lt;/a&gt;
&lt;/div&gt;							
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