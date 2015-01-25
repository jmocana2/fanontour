<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Fanontour</title>
	<link rel="stylesheet" href="../public/vendor/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="../public/vendor/bower-components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="ui-css/ui-styles.css">
	
<!-- JS -->
	<script src="../public/vendor/jquery/jquery.js"></script>
	<script src="../public/vendor/bootstrap/bootstrap.js"></script>
	<script src="../public/vendor/bower-components/moment/min/moment.min.js"></script>
	<script src="../public/vendor/bower-components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->	
	<!--    -->
</head>
<body>
<!-- MAIN -->
	<main id="main">
		<div  class="container">
			<div class="row row-padding-mid">
					<!-- MENU -->
				<div class="col-md-3 col-sm-12" id="tables">
					<?php

						include_once('menu.php');

					?>
				</div>
					<!-- MENU -->

				<!-- CONTENIDO -->
				<div class="col-md-9 col-sm-12">
					<h1>Tables and forms</h1>

					<!-- TABLE -->
					<div class="row">
						<div class="col-md-12 row-padding-v-small">
							<h3 class="bdr-bottom row-padding-v-small">Table</h3>
							
							<div class="panel-box panel-box-body bg-white">
								<table class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Username</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td>Larry</td>
											<td>the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%"><span style="font-weight: bold">&lt;table</span> class=<span style="font-style: italic">&quot;table&quot;</span><span style="font-weight: bold">&gt;</span>
	<span style="font-weight: bold">&lt;thead&gt;</span>
		<span style="font-weight: bold">&lt;tr&gt;</span>
			<span style="font-weight: bold">&lt;th&gt;</span>#<span style="font-weight: bold">&lt;/th&gt;</span>
			<span style="font-weight: bold">&lt;th&gt;</span>First Name<span style="font-weight: bold">&lt;/th&gt;</span>
			<span style="font-weight: bold">&lt;th&gt;</span>Last Name<span style="font-weight: bold">&lt;/th&gt;</span>
			<span style="font-weight: bold">&lt;th&gt;</span>Username<span style="font-weight: bold">&lt;/th&gt;</span>
		<span style="font-weight: bold">&lt;/tr&gt;</span>
	<span style="font-weight: bold">&lt;/thead&gt;</span>
	<span style="font-weight: bold">&lt;tbody&gt;</span>
		<span style="font-weight: bold">&lt;tr&gt;</span>
			<span style="font-weight: bold">&lt;td&gt;</span>1<span style="font-weight: bold">&lt;/td&gt;</span>
			<span style="font-weight: bold">&lt;td&gt;</span>Mark<span style="font-weight: bold">&lt;/td&gt;</span>
			<span style="font-weight: bold">&lt;td&gt;</span>Otto<span style="font-weight: bold">&lt;/td&gt;</span>
			<span style="font-weight: bold">&lt;td&gt;</span>@mdo<span style="font-weight: bold">&lt;/td&gt;</span>
		<span style="font-weight: bold">&lt;/tr&gt;</span>
		<span style="font-weight: bold">&lt;tr&gt;</span>
			<span style="font-weight: bold">&lt;td&gt;</span>2<span style="font-weight: bold">&lt;/td&gt;</span>
			<span style="font-weight: bold">&lt;td&gt;</span>Jacob<span style="font-weight: bold">&lt;/td&gt;</span>
			<span style="font-weight: bold">&lt;td&gt;</span>Thornton<span style="font-weight: bold">&lt;/td&gt;</span>
			<span style="font-weight: bold">&lt;td&gt;</span>@fat<span style="font-weight: bold">&lt;/td&gt;</span>
		<span style="font-weight: bold">&lt;/tr&gt;</span>
		<span style="font-weight: bold">&lt;tr&gt;</span>
			<span style="font-weight: bold">&lt;td&gt;</span>3<span style="font-weight: bold">&lt;/td&gt;</span>
			<span style="font-weight: bold">&lt;td&gt;</span>Larry<span style="font-weight: bold">&lt;/td&gt;</span>
			<span style="font-weight: bold">&lt;td&gt;</span>the Bird<span style="font-weight: bold">&lt;/td&gt;</span>
			<span style="font-weight: bold">&lt;td&gt;</span>@twitter<span style="font-weight: bold">&lt;/td&gt;</span>
		<span style="font-weight: bold">&lt;/tr&gt;</span>
	<span style="font-weight: bold">&lt;/tbody&gt;</span>
<span style="font-weight: bold">&lt;/table&gt;</span>
</pre>
							
						</div>
						<p>To do the table responsive we must add the class <strong>.table-responsive</strong> to the container of table</p>
					</div>
					<!-- TABLE  -->

					<!-- DROPDOWN -->
					<div class="row">						
						<h3 class="bdr-bottom row-padding-v-small">Dropdowns</h3>
						<!-- DROPDOWN LANGUAGE -->
						<div class="col-md-12 row-padding-v-small">
							<p class="bdr-bottom row-padding-v-small"><strong>Dropdown language</strong></p>
							<div class="panel-box-body no-padding-left clearfix">
								<div id="dropdown-language-01" class="dropdown dropdown-language">
								 	<a data-toggle="dropdown" href="#" title="see FanOnTour in english" class="main-link shape-arrow"><img src="../img/icons/flags/english.png" alt="English"> <span>en</span></a>
								 	<ul class="dropdown-menu no-padding" role="menu" aria-labelledby="dropdown-language-01">
								    	<li><a href="#" title="ver FanOnTour en español"><img src="../img/icons/flags/spain.png" alt="Español"> es</a></li>
										<li><a href="#" title="siehe fanontour in Deutsch"><img src="../img/icons/flags/deutch.png" alt="Deutsch"> de</a></li>
								  	</ul>			  	
								</div>
							</div>
						</div>
						<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%">
&lt;div class="panel-box-body no-padding-left clearfix"&gt;
	&lt;div id="dropdown-language-01" class="dropdown dropdown-language"&gt;
	 	&lt;a data-toggle="dropdown" href="#" title="see FanOnTour in english" class="main-link shape-arrow"&gt;&lt;img src="img/icons/flags/english.png" alt="English"&gt; &lt;span&gt;en&lt;/span&gt;&lt;/a&gt;
	 	&lt;ul class="dropdown-menu no-padding" role="menu" aria-labelledby="dropdown-language-01"&gt;
	    	&lt;li&gt;&lt;a href="#" title="ver FanOnTour en español"&gt;&lt;img src="img/icons/flags/spain.png" alt="Español"&gt; es&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href="#" title="siehe fanontour in Deutsch"&gt;&lt;img src="img/icons/flags/deutch.png" alt="Deutsch"&gt; de&lt;/a&gt;&lt;/li&gt;
	  	&lt;/ul&gt;			  	
	&lt;/div&gt;
&lt;/div&gt;
</pre>
						</div>
						<!-- DROPDOWN LANGUAGE -->
						<!-- DROPDOWN FORM -->
						<p class="bdr-bottom row-padding-v-small"><strong>Dropdown form</strong></p>
						<div class="time-field dinline-block">
							<div class="panel-box-body no-padding-left clearfix">
								<div class="dropdown dropdown-form small-field-w form-group open">
									  <a class="shape-arrow" href="#"><span></span></a>
									  <input type="text" class="form-control small-field-h" id="car-field-08" data-toggle="dropdown" required="">
									  <ul class="dropdown-menu" role="menu" aria-labelledby="car-field-08">
									    <li><a href="#" rel="nofollow">11</a></li>
									    <li><a href="#" rel="nofollow">12</a></li>												    
									  </ul>
								</div>
							</div>
						</div>
						<br><br><br>			
						<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%">
&lt;div class="dropdown dropdown-form small-field-w form-group open"&gt;
	  &lt;a class="shape-arrow" href="#"&gt;&lt;span&gt;&lt;/span&gt;&lt;/a&gt;
	  &lt;input type="text" class="form-control small-field-h" id="car-field-08" data-toggle="dropdown" required=""&gt;
	  &lt;ul class="dropdown-menu" role="menu" aria-labelledby="car-field-08"&gt;
	    &lt;li&gt;&lt;a href="#" rel="nofollow"&gt;11&lt;/a&gt;&lt;/li&gt;
	    &lt;li&gt;&lt;a href="#" rel="nofollow"&gt;12&lt;/a&gt;&lt;/li&gt;												    
	  &lt;/ul&gt;
&lt;/div&gt;
</pre>
						</div>
						<!-- DROPDOWN FORM -->		
					</div>
					<!-- DROPDOWN -->

					

					<!-- RADIO BUTTON Y CHECKBOX -->
					<div class="row">
						<!-- RADIOBUTTONS -->
						<h3 class="bdr-bottom row-padding-v-small">Radio buttons and Checkbox</h3>
						<div class="col-md-6 row-padding-v-small">
							<div class="form-group">
								<label class="radio-inline">
									<input type="radio" id="" value="option1" name="u" checked><span></span>Selected
								</label>
							</div>
							<div class="form-group">
								<label class="radio-inline">
									<input type="radio" id="" value="option1" name="u"><span></span>No selected
								</label>
							</div>
						</div>
						<!-- RADIOBUTTONS -->					

						<!-- CHECKBOX -->
						<div class="col-md-6 row-padding-v-small">
							<div class="checkbox">
								<label>
									<input type="checkbox" checked><span></span> Selected
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox"><span></span> No selected
								</label>
							</div>
						</div>
						<!-- CHECKBOX -->					

						<!-- CODE RADIO BUTTON-->
						<div class="col-md-12 row-padding-v-small">
							<p><strong>Radio button</strong></p>
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%"><span style="font-weight: bold">&lt;div</span> class=<span style="font-style: italic">&quot;form-group&quot;</span><span style="font-weight: bold">&gt;</span>
<span style="font-weight: bold">&lt;label</span> class=<span style="font-style: italic">&quot;radio-inline&quot;</span><span style="font-weight: bold">&gt;</span>
<span style="font-weight: bold">&lt;input</span> type=<span style="font-style: italic">&quot;radio&quot;</span> id=<span style="font-style: italic">&quot;&quot;</span> value=<span style="font-style: italic">&quot;option1&quot;</span> name=<span style="font-style: italic">&quot;&quot;</span> checked<span style="font-weight: bold">&gt;&lt;span&gt;&lt;/span&gt;</span>Selected
<span style="font-weight: bold">&lt;/label&gt;</span>
<span style="font-weight: bold">&lt;/div&gt;</span>
</pre>
						</div>
						<!-- CODE RADIO BUTTON-->					

						<!-- CODE CHECKBOX-->
						<div class="col-md-12 row-padding-v-small">
							<p><strong>Checkbox</strong></p>
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%"><span style="font-weight: bold">&lt;div</span> class=<span style="font-style: italic">&quot;checkbox&quot;</span><span style="font-weight: bold">&gt;</span>
<span style="font-weight: bold">&lt;label&gt;</span>
<span style="font-weight: bold">&lt;input</span> type=<span style="font-style: italic">&quot;checkbox&quot;</span> checked<span style="font-weight: bold">&gt;&lt;span&gt;&lt;/span&gt;</span> Selected
<span style="font-weight: bold">&lt;/label&gt;</span>
<span style="font-weight: bold">&lt;/div&gt;</span>
</pre>
						</div>
						<!-- CODE CHECKBOX-->						

					</div>
					<!-- RADIO BUTTON Y CHECKBOX -->

					

					<!-- DATEPICKER -->
					<div class="row">
						<h3 class="bdr-bottom row-padding-v-small">Datepicker</h3>
						<div class='col-sm-6'>
				            <div class="form-group">
				                <div class='input-group date' id='datetimepicker1'>
				                    <input type='text' class="form-control" />
				                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
				                    </span>
				                </div>
				            </div>
				        </div>
						 <script type="text/javascript">
				            $(function () {
				                $('#datetimepicker1').datetimepicker();
				            });
				        </script>

					

						<!-- CODE HEAD-->
						<div class="col-md-12 row-padding-v-small">
							<p><strong>Load files in the &lt;head&gt;&lt;/head&gt;</strong></p>
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%">
&lt;link rel="stylesheet" href="public/vendor/bower-components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css"&gt;
&lt;script src="../public/vendor/bower-components/moment/min/moment.min.js"&gt;&lt;/script&gt;
&lt;script src="../public/vendor/bower-components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"&gt;&lt;/script&gt;							
</pre>
						</div>
						<!-- CODE HEAD-->

						<!-- CODE SCRIPT-->
						<div class="col-md-12 row-padding-v-small">
							<p><strong>Script to load the calendar</strong></p>
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%">
 &lt;script type="text/javascript"&gt;
    $(function () {
        $('#id_name').datetimepicker();
    });
&lt;/script&gt;
</pre>
						</div>
						<!-- CODE SCRIPT-->

						<!-- CODE HTML-->
						<div class="col-md-12 row-padding-v-small">
							<p><strong>HTML</strong></p>
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%">
&lt;div class="form-group"&gt;
    &lt;div class='input-group date' id='id_name'&gt;
        &lt;input type='text' class="form-control" /&gt;
        &lt;span class="input-group-addon"&gt;&lt;span class="glyphicon glyphicon-calendar"&gt;&lt;/span&gt;
        &lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
						</div>
						<!-- CODE HTML-->

					</div>
					<!-- DATEPICKER -->

					<!-- PROGRESS BAR -->
					<div class="row">
						<h3 class="bdr-bottom row-padding-v-small">Progress bar</h3>
						<div class="col-sm-12 panel-box panel-box-body bg-white">
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
									60%
								</div>
							</div>
						</div>

						<!-- CODE HTML-->
						<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%"><span style="font-weight: bold">&lt;div</span> class=<span style="font-style: italic">&quot;progress&quot;</span><span style="font-weight: bold">&gt;</span>
<span style="font-weight: bold">&lt;div</span> class=<span style="font-style: italic">&quot;progress-bar&quot;</span> role=<span style="font-style: italic">&quot;progressbar&quot;</span> aria-valuenow=<span style="font-style: italic">&quot;60&quot;</span> aria-valuemin=<span style="font-style: italic">&quot;0&quot;</span> aria-valuemax=<span style="font-style: italic">&quot;100&quot;</span> style=<span style="font-style: italic">&quot;width: 60%;&quot;</span><span style="font-weight: bold">&gt;</span>
60%
<span style="font-weight: bold">&lt;/div&gt;</span>
<span style="font-weight: bold">&lt;/div&gt;</span>
</pre>
						</div>
						<!-- CODE HTML-->

					</div>
					<!-- BARRA DE PROGRESO -->

					<!-- ALERTS -->
					<div class="row">
						<h3 class="bdr-bottom row-padding-v-small">ALERTS!</h3>
						<!-- EXITO -->
						<p><strong>Success alert</strong></p>
						<div class="alert alert-success">Well done! You successfully read this important alert message.</div>
						<!-- EXITO -->

						<!-- INFO -->
						<p><strong>Informative alert</strong></p>
						<div class="alert alert-info">Heads up! This alert needs your attention, but it's not super important.</div>
						<!-- INFO -->

						<!-- ADVERTENCIA -->
						<p><strong>Warning alert</strong></p>
						<div class="alert alert-warning">Warning! Better check yourself, you're not looking too good.</div>
						<!-- ADVERTENCIA -->

						<!-- ERROR -->
						<p><strong>Error alert</strong></p>
						<div class="alert alert-danger">Oh snap! Change a few things up and try submitting again.</div>
						<!-- ERROR -->

						<!-- CERRAR ALERTA -->
						<p><strong>Alert with option of close</strong></p>
						<div class="alert alert-warning alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span></button>
							<strong>Alert!</strong> You have the option of close this alert
						</div>
						<!-- CERRAR ALERTA -->

						<!-- CODE EXITO-->
						<div class="col-md-12 row-padding-v-small">
							<p><strong>HTML Success alert</strong></p>
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%"><span style="font-weight: bold">&lt;div</span> class=<span style="font-style: italic">&quot;alert alert-success&quot;</span><span style="font-weight: bold">&gt;</span>Esto es un mensaje de alerta de operación realizada con éxito<span style="font-weight: bold">&lt;/div&gt;</span>
</pre>					</div>
						<!-- CODE EXITO-->

						<!-- CODE INFO-->
						<div class="col-md-12 row-padding-v-small">
							<p><strong>HTML Informative alert</strong></p>
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%"><span style="font-weight: bold">&lt;div</span> class=<span style="font-style: italic">&quot;alert alert-info&quot;</span><span style="font-weight: bold">&gt;</span>Esto es un mensaje de alerta de tipo informativo<span style="font-weight: bold">&lt;/div&gt;</span>
</pre>
						</div>
						<!-- CODE INFO-->

						<!-- CODE ADVERTENCIA-->
						<div class="col-md-12 row-padding-v-small">
							<p><strong>HTML Warning alert</strong></p>
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%"><span style="font-weight: bold">&lt;div</span> class=<span style="font-style: italic">&quot;alert alert-warning&quot;</span><span style="font-weight: bold">&gt;</span>Esto es un mensaje de alerta de advertencia<span style="font-weight: bold">&lt;/div&gt;</span>
</pre>
						</div>
						<!-- CODE ADVERTENCIA-->

						<!-- CODE ERROR-->
						<div class="col-md-12 row-padding-v-small">
							<p><strong>HTML Error alert</strong></p>
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%"><span style="font-weight: bold">&lt;div</span> class=<span style="font-style: italic">&quot;alert alert-danger&quot;</span><span style="font-weight: bold">&gt;</span>Esto es un mensaje de alerta de error<span style="font-weight: bold">&lt;/div&gt;</span>
</pre>
						</div>
						<!-- CODE ERROR-->

						<!-- CODE CERRAR-->
						<div class="col-md-12 row-padding-v-small">
							<p><strong>HTML Alert with option of close</strong></p>
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%"><span style="font-weight: bold">&lt;div</span> class=<span style="font-style: italic">&quot;alert alert-warning alert-dismissable&quot;</span><span style="font-weight: bold">&gt;</span>
<span style="font-weight: bold">&lt;button</span> type=<span style="font-style: italic">&quot;button&quot;</span> class=<span style="font-style: italic">&quot;close&quot;</span> data-dismiss=<span style="font-style: italic">&quot;alert&quot;</span> aria-hidden=<span style="font-style: italic">&quot;true&quot;</span><span style="font-weight: bold">&gt;&lt;span</span> class=<span style="font-style: italic">&quot;glyphicon glyphicon-remove&quot;</span><span style="font-weight: bold">&gt;&lt;/span&gt;&lt;/button&gt;</span>
<span style="font-weight: bold">&lt;strong&gt;</span>Alerta!<span style="font-weight: bold">&lt;/strong&gt;</span> You have the option of close this alert.
<span style="font-weight: bold">&lt;/div&gt;</span>
</pre>
						</div>
						<!-- CODE CERRAR-->

					</div>
					<!-- ALERTAS -->

				</div>
				<!-- CONTENIDO -->
			</div>
		</div>
	</main>
	
<!-- // MAIN -->


</body>
</html>