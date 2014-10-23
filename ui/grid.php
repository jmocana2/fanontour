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
				<div class="col-md-3 col-sm-12">
					<?php

						include_once('menu.php');

					?>
				</div>
				<div class="col-md-9 col-sm-12">
					<h1>Grid</h1>
					<div class="row">
						<p>
							<a href="http://getbootstrap.com/css/#grid" class="btn-link row-padding-v-small" target="_blank">BOOTSTRAP Documentation <span class="glyphicon glyphicon-chevron-right"></span></a>
						</p>
						<div class="col-md-1 panel-box panel-box-body row-padding-v-small text-center bg-white">col-md-1</div>
						<div class="col-md-1 panel-box panel-box-body row-padding-v-small text-center bg-white">col-md-1</div>
						<div class="col-md-1 panel-box panel-box-body row-padding-v-small text-center bg-white">col-md-1</div>
						<div class="col-md-1 panel-box panel-box-body row-padding-v-small text-center bg-white">col-md-1</div>
						<div class="col-md-1 panel-box panel-box-body row-padding-v-small text-center bg-white">col-md-1</div>
						<div class="col-md-1 panel-box panel-box-body row-padding-v-small text-center bg-white">col-md-1</div>
						<div class="col-md-1 panel-box panel-box-body row-padding-v-small text-center bg-white">col-md-1</div>
						<div class="col-md-1 panel-box panel-box-body row-padding-v-small text-center bg-white">col-md-1</div>
						<div class="col-md-1 panel-box panel-box-body row-padding-v-small text-center bg-white">col-md-1</div>
						<div class="col-md-1 panel-box panel-box-body row-padding-v-small text-center bg-white">col-md-1</div>
						<div class="col-md-1 panel-box panel-box-body row-padding-v-small text-center bg-white">col-md-1</div>
						<div class="col-md-1 panel-box panel-box-body row-padding-v-small text-center bg-white">col-md-1</div>
						<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue">&lt;div class="col-md-1"&gt;Text of paragraph&lt;/div&gt;
&lt;div class="col-md-1"&gt;Text of paragraph&lt;/div&gt;
&lt;div class="col-md-1"&gt;Text of paragraph&lt;/div&gt;
&lt;div class="col-md-1"&gt;Text of paragraph&lt;/div&gt;
&lt;div class="col-md-1"&gt;Text of paragraph&lt;/div&gt;
&lt;div class="col-md-1"&gt;Text of paragraph&lt;/div&gt;
&lt;div class="col-md-1"&gt;Text of paragraph&lt;/div&gt;
&lt;div class="col-md-1"&gt;Text of paragraph&lt;/div&gt;
&lt;div class="col-md-1"&gt;Text of paragraph&lt;/div&gt;
&lt;div class="col-md-1"&gt;Text of paragraph&lt;/div&gt;</pre>
						</div>
						<div class="col-md-2 panel-box panel-box-body row-padding-v-small text-center text-center bg-white">col-md-2</div>
						<div class="col-md-2 panel-box panel-box-body row-padding-v-small text-center text-center bg-white">col-md-2</div>
						<div class="col-md-2 panel-box panel-box-body row-padding-v-small text-center text-center bg-white">col-md-2</div>
						<div class="col-md-2 panel-box panel-box-body row-padding-v-small text-center text-center bg-white">col-md-2</div>
						<div class="col-md-2 panel-box panel-box-body row-padding-v-small text-center text-center bg-white">col-md-2</div>
						<div class="col-md-2 panel-box panel-box-body row-padding-v-small text-center text-center bg-white">col-md-2</div>
						<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue">&lt;div class="col-md-2"&gt;Text of paragraph&lt;/div&gt;
&lt;div class="col-md-2"&gt;Text of paragraph&lt;/div&gt;
&lt;div class="col-md-2"&gt;Text of paragraph&lt;/div&gt;
&lt;div class="col-md-2"&gt;Text of paragraph&lt;/div&gt;
&lt;div class="col-md-2"&gt;Text of paragraph&lt;/div&gt;
&lt;div class="col-md-2"&gt;Text of paragraph&lt;/div&gt;</pre>
						</div>
						<div class="col-md-3 panel-box panel-box-body row-padding-v-small text-center bg-white">col-md-3</div>
						<div class="col-md-3 panel-box panel-box-body row-padding-v-small text-center bg-white">col-md-3</div>
						<div class="col-md-3 panel-box panel-box-body row-padding-v-small text-center bg-white">col-md-3</div>
						<div class="col-md-3 panel-box panel-box-body row-padding-v-small text-center bg-white">col-md-3</div>
						<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue">&lt;div class="col-md-3"&gt;Text of paragraph&lt;/div&gt;
&lt;div class="col-md-3"&gt;Text of paragraph&lt;/div&gt;
&lt;div class="col-md-3"&gt;Text of paragraph&lt;/div&gt;
&lt;div class="col-md-3"&gt;Text of paragraph&lt;/div&gt;</pre>
						</div>
						<div class="col-md-4 panel-box panel-box-body row-padding-v-small text-center bg-white">col-md-4</div>
						<div class="col-md-4 panel-box panel-box-body row-padding-v-small text-center bg-white">col-md-4</div>
						<div class="col-md-4 panel-box panel-box-body row-padding-v-small text-center bg-white">col-md-4</div>
						<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue">&lt;div class="col-md-4"&gt;Text of paragraph&lt;/div&gt;
&lt;div class="col-md-4"&gt;Text of paragraph&lt;/div&gt;
&lt;div class="col-md-4"&gt;Text of paragraph&lt;/div&gt;</pre>
						</div>
						<div class="col-md-6 panel-box panel-box-body row-padding-v-small text-center bg-white">col-md-6</div>
						<div class="col-md-6 panel-box panel-box-body row-padding-v-small text-center bg-white">col-md-6</div>
						<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue">&lt;div class="col-md-6"&gt;Text of paragraph&lt;/div&gt;
&lt;div class="col-md-6"&gt;Text of paragraph&lt;/div&gt;</pre>
						</div>
						<div class="col-md-12 panel-box panel-box-body row-padding-v-small text-center bg-white">col-md-12</div>
						<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue">&lt;div class="col-md-12"&gt;Text of paragraph&lt;/div&gt;</pre>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
<!-- // MAIN -->
</body>
</html>