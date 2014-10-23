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
					<h1>Panels</h1>

						<!-- PANEL BOX -->
					<div class="row">
						<div class="col-md-12 row-padding-v-small">
							<h3 class="bdr-bottom row-padding-v-small">.panel-box</h3>
							<div class="panel-box" style="">
								<p class="no-margin"><strong>Nombre de la clase:</strong><br/>.panel-box</p>
							</div>
						</div>
						<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%"><span style="font-weight: bold">&lt;div</span> class=<span style="font-style: italic">&quot;panel-box&quot;</span><span style="font-weight: bold">&gt;</span>Contenido del div<span style="font-weight: bold">&lt;/div&gt;</span>
</pre>
						</div>
					</div>
						<!-- PANEL BOX -->

						<!-- PANEL BOX BODY -->
					<div class="row">
						<div class="col-md-12 row-padding-v-small">
							<h3 class="bdr-bottom row-padding-v-small">.panel-box-body</h3>
							<div class="panel-box-body bg-padding" style="">
								<p class="bg-white no-margin"><strong>Nombre de la clase:</strong><br/>.panel-box-body</p>
							</div>
						</div>
						<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%"><span style="font-weight: bold">&lt;div</span> class=<span style="font-style: italic">&quot;panel-box-body&quot;</span><span style="font-weight: bold">&gt;</span>Contenido del div<span style="font-weight: bold">&lt;/div&gt;</span>
</pre>
						</div>
					</div>
						<!-- PANEL BOX BODY -->

						<!-- PANEL BOX BLOCK -->
					<div class="row">
						<div class="col-md-12 row-padding-v-small">
							<h3 class="bdr-bottom row-padding-v-small">.panel-box-block</h3>
							<div class="panel-box-block no-margin bg-padding" style="">
								<p class="no-margin bg-white"><strong>Nombre de la clase:</strong><br/>.panel-box-block</p>
							</div>
							<div class="no-margin bg-margin" style="height: .8em;"></div>
						</div>
						<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%"><span style="font-weight: bold">&lt;div</span> class=<span style="font-style: italic">&quot;panel-box-block&quot;</span><span style="font-weight: bold">&gt;</span>Contenido del div<span style="font-weight: bold">&lt;/div&gt;</span>
</pre>
						</div>
						<p><strong>Combining these classes</strong> obtain different results for panels styles of Fanontour</p>
					</div>
						<!-- PANEL BOX BLOCK -->

					<!-- LIGTBOX -->
					<div class="row relative">						
						<!-- LIGTBOX -->
						<div class="col-md-12 row-padding-v-small">
							<h3 class="bdr-bottom row-padding-v-small">Lightbox</h3>	
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
							<button class="btn btn-default pull-right margin-bottom-small" data-toggle="modal" data-target="#myModal">
								Open LIGHTBOX
							</button>
							<div class="modal modal-default fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog panel-modal">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
											<h4 class="modal-title">I'm the title of LIGHTBOX</h4>
										</div>
										<div class="modal-body bg-white clearfix">
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>
										</div>
										<div class="modal-footer">
											<p>I'm the footer of LIGHTBOX</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%">
&lt;div class="modal modal-default fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"&gt;
	&lt;div class="modal-dialog panel-modal"&gt;
		&lt;div class="modal-content"&gt;
			&lt;div class="modal-header"&gt;
				&lt;button type="button" class="close" data-dismiss="modal"&gt;&lt;span aria-hidden="true"&gt;×&lt;/span&gt;&lt;span class="sr-only"&gt;Close&lt;/span&gt;&lt;/button&gt;
				&lt;h4 class="modal-title"&gt;Soy el título del LIGHTBOX&lt;/h4&gt;
			&lt;/div&gt;
			&lt;div class="modal-body bg-white clearfix"&gt;
				&lt;p&gt;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?&lt;/p&gt;
			&lt;/div&gt;
			&lt;div class="modal-footer"&gt;
				&lt;p&gt;Soy el footer del LIGHTBOX&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
						</div>
						<!-- LIGTBOX -->
					</div>
					<!-- LIGTBOX -->
				</div>
					<!-- CONTENIDO -->
			</div>
		</div>
	</main>
<!-- // MAIN -->
</body>
</html>