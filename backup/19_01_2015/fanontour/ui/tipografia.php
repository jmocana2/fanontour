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
<body id="elementos-ui">
<!-- MAIN -->
	<main id="main">
		<div  class="container">
			<div class="row row-padding-mid">
					<!-- MENU -->
				<div class="col-md-3 col-sm-12" id="ui">
					<?php

						include_once('menu.php');

					?>
				</div>
					<!-- MENU -->

					<!-- CONTENIDO -->
				<div class="col-md-9 col-sm-12">
					<h1>Tipografía (font-base: 13px)</h1>
						<!-- TITULOS -->
					<div class="row">

						<div class="col-md-12 panel-box-body row-padding-v-small">
							<h3 class="bdr-bottom row-padding-v-small">Titles</h3>
							<h1>This is a title h1 / <small style="color: #bbb">font-size: 2.143em, font-weight: bold </small></h1>
							<h2>This is a title h2 / <small style="color: #bbb">font-size: 1.8em, font-weight: regilar</small></h2>
							<h3>This is a title h3 / <small style="color: #bbb">font-size: 1.6em, font-weight: regular</small></h3>
							<h4>This is a title h4 / <small style="color: #bbb">font-size: 1.4em, font-weight: regular</small></h4>
							<h5>This is a title h5 / <small style="color: #bbb">font-size: 1.3em, font-weight: regular</small></h5>
							<h6>This is a title h6 / <small style="color: #bbb">font-size: 1.2em, font-weight: regular</small></h6>
						</div>
						<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue">&lt;h1&gt;This is a title h1 / &lt;small&gt;Small text&lt;/small&gt;&lt;/h1&gt;
&lt;h2&gt;This is a title h2 / &lt;small&gt;Small text&lt;/small&gt;&lt;/h2&gt;
&lt;hn&gt;This is a title hn / &lt;small&gt;Small text&lt;/small&gt;&lt;/hn&gt;</pre>
						</div>
					</div>
						<!-- TITULOS -->

						<!-- PARRAFO -->
					<div class="row">
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<h3 class="bdr-bottom row-padding-v-small">Paragraph</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue">&lt;p&gt;Paragraph text&lt;/p&gt;</pre>
						</div>
					</div>
						<!-- PARRAFO -->

						<!-- QUOTES -->
					<div class="row">
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<h3 class="bdr-bottom row-padding-v-small">Quotes</h3>
							<blockquote class="text-left no-padding">
								«Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.»
								<footer class="text-center">
									<dl>
										<dt><cite>Nombre del autor</cite></dt>
										<dd class="color-convert">Profesión del autor</dd>
										<dd class="color-text-light">Logros del autor</dd>
									</dl>
								</footer>
							</blockquote>
						</div>
						<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue" style="margin: 0; line-height: 125%"><span style="font-weight: bold">&lt;blockquote</span> class=<span style="font-style: italic">&quot;text-left no-padding&quot;</span><span style="font-weight: bold">&gt;</span>
	«Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.»
	<span style="font-weight: bold">&lt;footer</span> class=<span style="font-style: italic">&quot;text-center&quot;</span><span style="font-weight: bold">&gt;</span>
		<span style="font-weight: bold">&lt;dl&gt;</span>
			<span style="font-weight: bold">&lt;dt&gt;&lt;cite&gt;</span>Nombre del autor<span style="font-weight: bold">&lt;/cite&gt;&lt;/dt&gt;</span>
			<span style="font-weight: bold">&lt;dd</span> class=<span style="font-style: italic">&quot;color-convert&quot;</span><span style="font-weight: bold">&gt;</span>Profesión del autor<span style="font-weight: bold">&lt;/dd&gt;</span>
			<span style="font-weight: bold">&lt;dd</span> class=<span style="font-style: italic">&quot;color-text-light&quot;</span><span style="font-weight: bold">&gt;</span>Logros del autor<span style="font-weight: bold">&lt;/dd&gt;</span>
		<span style="font-weight: bold">&lt;/dl&gt;</span>
	<span style="font-weight: bold">&lt;/footer&gt;</span>
<span style="font-weight: bold">&lt;/blockquote&gt;</span>
</pre>
						</div>
					</div>
						<!-- QUOTES -->

						<!-- POSTDATA -->
					<div class="row">
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<h3 class="bdr-bottom row-padding-v-small">Postdata</h3>
							<p class="postdata">Esto es un texto de postdata</p>
						</div>
						<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue">&lt;p class="postdata"&gt;Texto de postdata&lt;/p&gt;</pre>
						</div>
					</div>
						<!-- POSTDATA -->

						<!-- LISTAS -->
					<div class="row">
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<h3 class="bdr-bottom row-padding-v-small">Listas</h3>
							<ul class="list-disc">
								<li><strong>Elemento de lista en bold</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
								<li><strong>Elemento de lista en bold</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
								<li><strong>Elemento de lista en bold</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
							</ul>
						</div>
						<div class="col-md-12 row-padding-v-small">
							<pre class="bg-light-blue">&lt;ul class='list-disc'&gt;
	&lt;li&gt;&lt;strong&gt;Elemento de lista en bold&lt;/strong&gt; resto de lista.&lt;/li&gt;
	&lt;li&gt;&lt;strong&gt;Elemento de lista en bold&lt;/strong&gt; resto de lista.&lt;/li&gt;
	&lt;li&gt;&lt;strong&gt;Elemento de lista en bold&lt;/strong&gt; resto de lista.&lt;/li&gt;
	&lt;li&gt;&lt;strong&gt;Elemento de lista en bold&lt;/strong&gt; resto de lista.&lt;/li&gt;
	&lt;li&gt;&lt;strong&gt;Elemento de lista en bold&lt;/strong&gt; resto de lista.&lt;/li&gt;
	&lt;li&gt;&lt;strong&gt;Elemento de lista en bold&lt;/strong&gt; resto de lista.&lt;/li&gt;
&lt;/ul&gt;</pre>
						</div>
					</div>
						<!-- LISTAS -->

						<!-- ICONOS -->
					<div class="row">
						<div class="col-md-12 panel-box-body row-padding-v-small">
							<h3 class="bdr-bottom row-padding-v-small">Icons</h3>
							<div class="panel-box panel-box-body bg-white">
								<table class="table">
									<thead>
										<tr>
											<th>Icon</th>
											<th>Class</th>
											<th>HTML</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><span style="font-size: 25px;" class="fanontour-icon icon-icons-fanontour_activity"></span></td>
											<td>.icon-icons-fanontour_activity</td>
											<td><pre class="no-margin"><span style="font-weight: bold">&lt;span</span> class=<span style="font-style: italic">&quot;fanontour-icon icon-icons-fanontour_activity&quot;</span><span style="font-weight: bold">&gt;&lt;/span&gt;</span>
</pre></td>
										</tr>
										<tr>
											<td><span style="font-size: 25px;" class="fanontour-icon icon-icons-fanontour_cars"></span></td>
											<td>.icon-icons-fanontour_cars</td>
											<td><pre class="no-margin"><span style="font-weight: bold">&lt;span</span> class=<span style="font-style: italic">&quot;fanontour-icon icon-icons-fanontour_cars&quot;</span><span style="font-weight: bold">&gt;&lt;/span&gt;</span>
</pre></td>
										</tr>
										<tr>
											<td><span style="font-size: 25px;" class="fanontour-icon icon-icons-fanontour_entry"></span></td>
											<td>.icon-icons-fanontour_entry</td>
											<td><pre class="no-margin"><span style="font-weight: bold">&lt;span</span> class=<span style="font-style: italic">&quot;fanontour-icon icon-icons-fanontour_entry&quot;</span><span style="font-weight: bold">&gt;&lt;/span&gt;</span>
</pre></td>
										</tr>
										<tr>
											<td><span style="font-size: 25px;" class="fanontour-icon icon-icons-fanontour_flight"></span></td>
											<td>.icon-icons-fanontour_flight</td>
											<td><pre class="no-margin"><span style="font-weight: bold">&lt;span</span> class=<span style="font-style: italic">&quot;fanontour-icon icon-icons-fanontour_flight&quot;</span><span style="font-weight: bold">&gt;&lt;/span&gt;</span>
</pre></td>
										</tr>
										<tr>
											<td><span style="font-size: 25px;" class="fanontour-icon icon-icons-fanontour_hotel"></span></td>
											<td>.icon-icons-fanontour_hotel</td>
											<td><pre class="no-margin"><span style="font-weight: bold">&lt;span</span> class=<span style="font-style: italic">&quot;fanontour-icon icon-icons-fanontour_hotel&quot;</span><span style="font-weight: bold">&gt;&lt;/span&gt;</span>
</pre></td>
										</tr>
										<tr>
											<td><span style="font-size: 25px;" class="fanontour-icon icon-icons-fanontour_restaurant"></span></td>
											<td>.icon-icons-fanontour_restaurant</td>
											<td><pre class="no-margin"><span style="font-weight: bold">&lt;span</span> class=<span style="font-style: italic">&quot;fanontour-icon icon-icons-fanontour_restaurant&quot;</span><span style="font-weight: bold">&gt;&lt;/span&gt;</span>
</pre></td>
										</tr>
										<tr>
											<td><span style="font-size: 25px;" class="fanontour-icon icon-icons-fanontour_ticket"></span></td>
											<td>.icon-icons-fanontour_ticket</td>
											<td><pre class="no-margin"><span style="font-weight: bold">&lt;span</span> class=<span style="font-style: italic">&quot;fanontour-icon icon-icons-fanontour_ticket&quot;</span><span style="font-weight: bold">&gt;&lt;/span&gt;</span>
</pre></td>
										</tr>
										<tr>
											<td><span style="font-size: 25px;" class="fanontour-icon icon-icons-fanontour_concert"></span></td>
											<td>.icon-icons-fanontour_concert</td>
											<td><pre class="no-margin"><span style="font-weight: bold">&lt;span</span> class=<span style="font-style: italic">&quot;fanontour-icon icon-icons-fanontour_concert&quot;</span><span style="font-weight: bold">&gt;&lt;/span&gt;</span>
</pre></td>
										</tr>
										<tr>
											<td><span style="font-size: 25px;" class="fanontour-icon icon-icons-fanontour_festival"></span></td>
											<td>.icon-icons-fanontour_festival</td>
											<td><pre class="no-margin"><span style="font-weight: bold">&lt;span</span> class=<span style="font-style: italic">&quot;fanontour-icon icon-icons-fanontour_festival&quot;</span><span style="font-weight: bold">&gt;&lt;/span&gt;</span>
</pre></td>
										</tr>
										<tr>
											<td><span style="font-size: 25px;" class="fanontour-icon icon-icons-fanontour_other"></span></td>
											<td>.icon-icons-fanontour_other</td>
											<td><pre class="no-margin"><span style="font-weight: bold">&lt;span</span> class=<span style="font-style: italic">&quot;fanontour-icon icon-icons-fanontour_other&quot;</span><span style="font-weight: bold">&gt;&lt;/span&gt;</span>
</pre></td>
										</tr>
										<tr>
											<td><span style="font-size: 25px;" class="fanontour-icon icon-icons-fanontour_sport"></span></td>
											<td>.icon-icons-fanontour_sport</td>
											<td><pre class="no-margin"><span style="font-weight: bold">&lt;span</span> class=<span style="font-style: italic">&quot;fanontour-icon icon-icons-fanontour_sport&quot;</span><span style="font-weight: bold">&gt;&lt;/span&gt;</span>
</pre></td>
										</tr>
										<tr>
											<td><span style="font-size: 25px;" class="fanontour-icon icon-icons-fanontour_search"></span></td>
											<td>.icon-icons-fanontour_search</td>
											<td><pre class="no-margin"><span style="font-weight: bold">&lt;span</span> class=<span style="font-style: italic">&quot;fanontour-icon icon-icons-fanontour_search&quot;</span><span style="font-weight: bold">&gt;&lt;/span&gt;</span>
</pre></td>
										</tr>
										<tr>
											<td><span style="font-size: 25px;" class="fanontour-icon icon-icons-fanontour_menu"></span></td>
											<td>.icon-icons-fanontour_menu</td>
											<td><pre class="no-margin"><span style="font-weight: bold">&lt;span</span> class=<span style="font-style: italic">&quot;fanontour-icon icon-icons-fanontour_menu&quot;</span><span style="font-weight: bold">&gt;&lt;/span&gt;</span>
</pre></td>
										</tr>
										<tr>
											<td><span style="font-size: 25px;" class="fanontour-icon icon-icons-fanontour_trash"></span></td>
											<td>.icon-icons-fanontour_trash</td>
											<td><pre class="no-margin"><span style="font-weight: bold">&lt;span</span> class=<span style="font-style: italic">&quot;fanontour-icon icon-icons-fanontour_trash&quot;</span><span style="font-weight: bold">&gt;&lt;/span&gt;</span>
</pre></td>
										</tr>
									</tbody>	
								</table>
							</div>
						</div>
					</div>
						<!-- ICONOS -->
				</div>
					<!-- CONTENIDO -->
			</div>
		</div>
	</main>
<!-- // MAIN -->
</body>
</html>