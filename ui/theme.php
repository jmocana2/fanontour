<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FAnontour</title>
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
					<h1>Theme</h1>
					<div class="row">
							<!-- PADDING ROW BIG -->
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<h3 class="bdr-bottom row-padding-v-small">Paddings system</h3>
							<div class="row">
								<div class="col-md-12 row-padding-big bg-padding">
									<p class="bg-light-blue row-padding-v-small no-margin text-center">row-padding-big<br/><strong>Class Name:</strong><br/>.row-padding-big<br/><strong>Style:</strong><br/>padding: 3.0em 0;</p>
								</div>
							</div>
						</div>
							<!-- PADDING ROW BIG -->

							<!-- PADDING ROW MID -->
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<div class="row">
								<div class="col-md-12 row-padding-mid bg-padding">
									<p class="bg-light-blue row-padding-v-small no-margin text-center">row-padding-big<br/><strong>Class Name:</strong><br/>.row-padding-mid<br/><strong>Style:</strong><br/>padding: 2.3em  0;</p>
								</div>
							</div>
						</div>
							<!-- PADDING ROW MID -->

							<!-- PADDING ROW SMALL -->
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<div class="row">
								<div class="col-md-12 row-padding-small bg-padding">
									<p class="bg-light-blue row-padding-v-small no-margin text-center">row-padding-big<br/><strong>Class Name:</strong><br/>.row-padding-small<br/><strong>Style:</strong><br/>padding: 1.5em 0;</p>
								</div>
							</div>
						</div>
							<!-- PADDING ROW SMALL -->

							<!-- PADDING ROW V SMALL -->
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<div class="row">
								<div class="col-md-12 row-padding-v-small bg-padding">
									<p class="bg-light-blue row-padding-v-small no-margin text-center">row-padding-big<br/><strong>Class Name:</strong><br/>.row-padding-v-small<br/><strong>Style:</strong><br/>padding: 0.7em  0;</p>
								</div>
							</div>
						</div>
							<!-- PADDING ROW V SMALL -->

							<!-- NO PADDING TOP -->
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<div class="row">
								<div style="padding:30px; padding-top: 0" class="col-md-12 bg-padding">
									<p class="bg-light-blue row-padding-v-small no-margin text-center">no-padding-top<br/><strong>Class Name:</strong><br/>.no-padding-top<br/><strong>Style:</strong><br/>padding-top: 0;</p>
								</div>
							</div>
						</div>
							<!-- NO PADDING TOP -->

							<!-- NO PADDING BOTTOM -->
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<div class="row">
								<div style="padding:30px; padding-bottom: 0" class="col-md-12 bg-padding">
									<p class="bg-light-blue row-padding-v-small no-margin text-center">no-padding-bottom<br/><strong>Class Name:</strong><br/>.no-padding-bottom<br/><strong>Style:</strong><br/>padding-bottom: 0;</p>
								</div>
							</div>
						</div>
							<!-- NO PADDING BOTTOM -->

							<!-- NO PADDING LEFT -->
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<div class="row">
								<div style="padding:30px; padding-left: 0" class="col-md-12 bg-padding">
									<p class="bg-light-blue row-padding-v-small no-margin text-center">no-padding-left<br/><strong>Class Name:</strong><br/>.no-padding-left<br/><strong>Style:</strong><br/>padding-left: 0;</p>
								</div>
							</div>
						</div>
							<!-- NO PADDING LEFT -->

							<!-- NO PADDING RIGHT -->
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<div class="row">
								<div style="padding:30px; padding-right: 0" class="col-md-12 bg-padding">
									<p class="bg-light-blue row-padding-v-small no-margin text-center">no-padding-right<br/><strong>Class Name:</strong><br/>.no-padding-right<br/><strong>Style:</strong><br/>padding-right: 0;</p>
								</div>
							</div>
						</div>
							<!-- NO PADDING RIGHT -->

							<!-- NO MARGIN -->
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<h3 class="bdr-bottom row-padding-v-small">Margins System</h3>
							<div class="row">
								<div class="col-md-12 bg-padding" style="padding: 30px;">
									<p class="bg-light-blue row-padding-v-small no-margin text-center">no-margin<br/><strong>Class Name:</strong><br/>.no-margin<br/><strong>Style:</strong><br/>margin: 0;</p>
									<p class="bg-light-blue row-padding-v-small no-margin text-center">no-margin<br/><strong>Class Name:</strong><br/>.no-margin<br/><strong>Style:</strong><br/>margin: 0;</p>
								</div>
							</div>
						</div>
							<!-- NO MARGIN -->

							<!-- BRODERS -->
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<h3 class="bdr-bottom row-padding-v-small">Borders system</h3>
							<div class="row">
								<div class="col-md-12 bg-white bdr-all" style="padding: 30px; border-color: #000;">
									<p class="row-padding-v-small no-margin text-center">border all<br/><strong>Class Name:</strong><br/>.bdr-all<br/><strong>Style:</strong><br/>border: 1px solid @color_line;</p>
								</div>
							</div>
						</div>
							<!-- BRODERS -->

							<!-- BRODER TOP -->
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<div class="row">
								<div class="col-md-12 bg-white bdr-top" style="padding: 30px; border-color: #000;">
									<p class="row-padding-v-small no-margin text-center">border top<br/><strong>Class Name:</strong><br/>.bdr-top<br/><strong>Style:</strong><br/>border-top: 1px solid @color_line;</p>
								</div>
							</div>
						</div>
							<!-- BRODER TOP -->

							<!-- BRODER BOTTOM -->
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<div class="row">
								<div class="col-md-12 bg-white bdr-bottom" style="padding: 30px; border-color: #000;">
									<p class="row-padding-v-small no-margin text-center">border bottom<br/><strong>Class Name:</strong><br/>.bdr-bottom<br/><strong>Style:</strong><br/>border-bottom: 1px solid @color_line;</p>
								</div>
							</div>
						</div>
							<!-- BRODER BOTTOM -->

							<!-- BRODER LEFT -->
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<div class="row">
								<div class="col-md-12 bg-white bdr-left" style="padding: 30px; border-color: #000;">
									<p class="row-padding-v-small no-margin text-center">border left<br/><strong>Class Name:</strong><br/>.bdr-left<br/><strong>Style:</strong><br/>border-left: 1px solid @color_line;</p>
								</div>
							</div>
						</div>
							<!-- BRODER LEFT -->

							<!-- BRODER RIGHT -->
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<div class="row">
								<div class="col-md-12 bg-white bdr-right" style="padding: 30px; border-color: #000;">
									<p class="row-padding-v-small no-margin text-center">border right<br/><strong>Class Name:</strong><br/>.bdr-right<br/><strong>Style:</strong><br/>border-right: 1px solid @color_line;</p>
								</div>
							</div>
						</div>
							<!-- BRODER RIGHT -->

							<!-- NO BRODER TOP -->
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<div class="row">
								<div class="col-md-12 bg-white bdr-all no-bdr-top" style="padding: 30px; border-color: #000;">
									<p class="row-padding-v-small no-margin text-center">no border top<br/><strong>Class Name:</strong><br/>.no-bdr-top<br/><strong>Style:</strong><br/>border-top: none;</p>
								</div>
							</div>
						</div>
							<!-- NO BRODER TOP -->

							<!-- NO BRODER BOTTOM -->
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<div class="row">
								<div class="col-md-12 bg-white bdr-all no-bdr-bottom" style="padding: 30px; border-color: #000;">
									<p class="row-padding-v-small no-margin text-center">no border bottom<br/><strong>Class Name:</strong><br/>.no-bdr-bottom<br/><strong>Style:</strong><br/>border-bottom: none;</p>
								</div>
							</div>
						</div>
							<!-- NO BRODER BOTTOM -->

							<!-- COLORES -->
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<h3 class="bdr-bottom row-padding-v-small">Colors system</h3>
							<div class="row">
								<div class="col-md-12 bg-white" style="padding: 30px; border-color: #000;">
									<p class="row-padding-v-small no-margin text-center color-convert">color convert in text<br/><strong>Class Name:</strong><br/>.color-convert<br/><strong>Style:</strong><br/>color: @color_convert;</p>
								</div>
							</div>
						</div>
							<!-- COLORES -->

							<!-- COLORES -->
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<div class="row">
								<div class="col-md-12 bg-white" style="padding: 30px; border-color: #000;">
									<p class="row-padding-v-small no-margin text-center color-text-light">color light in text<br/><strong>Class Name:</strong><br/>.color-text-light<br/><strong>Style:</strong><br/>color: @color_text_light;</p>
								</div>
							</div>
						</div>
							<!-- COLORES -->

							<!-- BACKGROUNDS -->
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<h3 class="bdr-bottom row-padding-v-small">Backgrounds system</h3>
							<div class="row">
								<div class="col-md-12 bg-white" style="padding: 30px; border-color: #000;">
									<p class="row-padding-v-small no-margin text-center">background white<br/><strong>Class Name:</strong><br/>.bg-white<br/><strong>Style:</strong><br/>background: @colorW;</p>
								</div>
							</div>
						</div>
							<!-- BACKGROUNDS -->

							<!-- BACKGROUNDS -->
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<div class="row">
								<div class="col-md-12 bg-black" style="padding: 30px; border-color: #000;">
									<p class="row-padding-v-small no-margin text-center color-text-light">background black<br/><strong>Class Name:</strong><br/>.bg-black<br/><strong>Style:</strong><br/>background: @colorK;</p>
								</div>
							</div>
						</div>
							<!-- BACKGROUNDS -->

							<!-- BACKGROUNDS -->
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<div class="row">
								<div class="col-md-12 bg-light-blue" style="padding: 30px; border-color: #000;">
									<p class="row-padding-v-small no-margin text-center">background light blue<br/><strong>Class Name:</strong><br/>.bg-light-blue<br/><strong>Style:</strong><br/>background: @colorB5;</p>
								</div>
							</div>
						</div>
							<!-- BACKGROUNDS -->

							<!-- BACKGROUNDS -->
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<div class="row">
								<div class="col-md-12 bg-grey bdr-all" style="padding: 30px; border-color: #000;">
									<p class="row-padding-v-small no-margin text-center">background grey<br/><strong>Class Name:</strong><br/>.bg-grey<br/><strong>Style:</strong><br/>background-color: @colorK5;</p>
								</div>
							</div>
						</div>
							<!-- BACKGROUNDS -->

							<!-- BACKGROUNDS -->
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<div class="row">
								<div class="col-md-12 bg-grey-t2" style="padding: 30px; border-color: #000;">
									<p class="row-padding-v-small no-margin text-center">background grey - 2<br/><strong>Class Name:</strong><br/>.bg-grey-t2<br/><strong>Style:</strong><br/>background-color: @colorK2;</p>
								</div>
							</div>
						</div>
							<!-- BACKGROUNDS -->

							<!-- BACKGROUNDS -->
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<div class="row">
								<div class="col-md-12 bg-transparent" style="padding: 30px; border-color: #000;">
									<p class="row-padding-v-small no-margin text-center">background transparente<br/><strong>Class Name:</strong><br/>.bg-transparent<br/><strong>Style:</strong><br/>background-color: transparent;</p>
								</div>
							</div>
						</div>
							<!-- BACKGROUNDS -->

							<!-- BACKGROUNDS -->
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<div class="row">
								<div class="col-md-12 bg-convert" style="padding: 30px; border-color: #000;">
									<p class="row-padding-v-small no-margin text-center">background azul bkool<br/><strong>Class Name:</strong><br/>.bg-convert<br/><strong>Style:</strong><br/>background-color: @colorB2;</p>
								</div>
							</div>
						</div>
							<!-- BACKGROUNDS -->

							<!-- HELP CLASSES -->
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<h3 class="bdr-bottom row-padding-v-small">Help classes</h3>
							<div class="row">
								<div class="col-md-12 bg-white" style="padding: 30px; border-color: #000;">
									<table class="table bkool-table">
									<thead>
										<tr>
											<th class="col-sm-5">Class Name</th>
											<th class="col-sm-7">Style</th>
										</tr>
									</thead>
									<thead>
										<tr>
											<th class="col-sm-5">Paddings</th>
											<th class="col-sm-7"></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>.no-padding</td>
											<td>padding: 0;</td>
										</tr>
										<tr>
											<td>.no-padding-top</td>
											<td>padding-top: 0;</td>
										</tr>
										<tr>
											<td>.no-padding-right</td>
											<td>padding-right: 0;</td>
										</tr>
										<tr>
											<td>.no-padding-bottom</td>
											<td>padding-bottom: 0;</td>
										</tr>
										<tr>
											<td>.no-padding-left</td>
											<td>padding-left: 0;</td>
										</tr>
										<tr>
											<td>.row-padding-big</td>
											<td>padding: 20px 0;</td>
										</tr>
										<tr>
											<td>.row-padding-mid</td>
											<td>padding: 15px 0;</td>
										</tr>
										<tr>
											<td>.row-padding-small</td>
											<td>padding: 10px 0;</td>
										</tr>
										<tr>
											<td>.row-padding-v-small</td>
											<td>padding: 5px 0;</td>
										</tr>
										<thead>
											<tr>
												<th class="col-sm-5">Margins</th>
												<th class="col-sm-7"></th>
											</tr>
										</thead>
										<tr>
											<td>.no-margin</td>
											<td>margin: 0;</td>
										</tr>
										<tr>
											<td>.no-margin-top</td>
											<td>margin-top: 0;</td>
										</tr>
										<tr>
											<td>.no-margin-right</td>
											<td>margin-right: 0;</td>
										</tr>
										<tr>
											<td>.no-margin-bottom</td>
											<td>margin-bottom: 0;</td>
										</tr>
										<tr>
											<td>.no-margin-left</td>
											<td>margin-left: 0;</td>
										</tr>
										<tr>
											<td>.margin-top-big</td>
											<td>margin-top: 20px;</td>
										</tr>

										<tr>
											<td>.margin-top-mid</td>
											<td>margin-top: 15px;</td>
										</tr>

										<tr>
											<td>.margin-top-small</td>
											<td>margin-top: 10px;</td>
										</tr>

										<tr>
											<td>.margin-top-v-small</td>
											<td>margin-top: 5px;</td>
										</tr>
										<tr>
											<td>.margin-right-big</td>
											<td>margin-top: 20px;</td>
										</tr>

										<tr>
											<td>.margin-right-mid</td>
											<td>margin-top: 15px;</td>
										</tr>

										<tr>
											<td>.margin-right-small</td>
											<td>margin-top: 10px;</td>
										</tr>
										<tr>
											<td>.margin-bottom-big</td>
											<td>margin-top: 20px;</td>
										</tr>

										<tr>
											<td>.margin-bottom-mid</td>
											<td>margin-top: 15px;</td>
										</tr>

										<tr>
											<td>.margin-bottom-small</td>
											<td>margin-top: 10px;</td>
										</tr>

										<tr>
											<td>.margin-bottom-v-small</td>
											<td>margin-top: 5px;</td>
										</tr>

										<tr>
											<td>.margin-left-big</td>
											<td>margin-top: 20px;</td>
										</tr>

										<tr>
											<td>.margin-left-mid</td>
											<td>margin-top: 15px;</td>
										</tr>

										<tr>
											<td>.margin-left-small</td>
											<td>margin-top: 10px;</td>
										</tr>

										<tr>
											<td>.margin-left-v-small</td>
											<td>margin-top: 5px;</td>
										</tr>
										<tr>
											<td>.margin-right-v-small</td>
											<td>margin-top: 5px;</td>
										</tr>
										<thead>
											<tr>
												<th class="col-sm-5">Borders</th>
												<th class="col-sm-7"></th>
											</tr>
										</thead>
										<tr>
											<td>.bdr-all</td>
											<td>border: 1px solid @color_line;</td>
										</tr>
										<tr>
											<td>.bdr-top</td>
											<td>border-top: 1px solid @color_line;</td>
										</tr>
										<tr>
											<td>bdr-right</td>
											<td>border-right: 1px solid @color_line;</td>
										</tr>
										<tr>
											<td>.bdr-bottom</td>
											<td>border-bottom: 1px solid @color_line;</td>
										</tr>
										<tr>
											<td>.bdr-left</td>
											<td>border-left: 1px solid @color_line;</td>
										</tr>
										<tr>
											<td>.no-bdr-top</td>
											<td>border-top: none;</td>
										</tr>
										<tr>
											<td>.no-bdr-bottom</td>
											<td>border-bottom: none;</td>
										</tr>
										<tr>
											<td>.hide</td>
											<td>display: none;</td>
										</tr>

										<thead>
											<tr>
												<th class="col-sm-5">Backgrounds</th>
												<th class="col-sm-7"></th>
											</tr>
										</thead>
										<tr>
											<td>.bg-white</td>
											<td>background: @colorW; (#ffffff)</td>
										</tr>
										<tr>
											<td>.bg-black</td>
											<td>background: @colorK; (#000000)</td>
										</tr>
										<tr>
											<td>bg-light-blue</td>
											<td>background: @colorB4; (#e9f8fd)</td>
										</tr>
										<tr>
											<td>.bg-grey</td>
											<td>background-color: @colorK4; (#e8e8e8)</td>
										</tr>
										<tr>
											<td>.bg-transparent</td>
											<td>background-color: transparent;</td>
										</tr>
										<tr>
											<td>.bg-convert</td>
											<td>background-color: @colorB2; (#16bdef)</td>
										</tr>

										<thead>
											<tr>
												<th class="col-sm-5">Ellipsis</th>
												<th class="col-sm-7"></th>
											</tr>
										</thead>
										<tr>
											<td>.text_ellipsis</td>
											<td>overflow: hidden;<br/>text-overflow: ellipsis;<br/>white-space: nowrap;</td>
										</tr>
									</tbody>
								</div>
							</div>
						</div>
							<!-- CLASES PARA AYUDAR -->
					</div>
				</div>
					<!-- CONTENIDO -->
			</div>
		</div>
	</main>
<!-- // MAIN -->
</body>
</html>