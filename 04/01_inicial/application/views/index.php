<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Bienvenido | Curso CodeIgniter</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/foundation.css" />
	<script src="<?php echo base_url(); ?>assets/js/vendor/modernizr.js"></script>
</head>
<body>
<div class="row">
	<div class="large-3 columns">
		<h1><img src="<?php echo base_url(); ?>assets/img/logo.png"/></h1>
	</div>
	<div class="large-9 columns">
		<ul class="right button-group">
			<li><a href="#" class="button">Inicio</a></li>
			<li><a href="<?php echo site_url('main/contact'); ?>" class="button">Contacto</a></li>
		</ul>
	</div>
</div>

<div class="row">
	<div class="large-12 columns">
		<h4>Bienvenido</h4>
		<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
	</div>
</div>

<div class="row">
	<div class="large-12 columns">
		<div class="panel">
			<h4>Texto resaltado</h4>
			<div class="row">
				<div class="large-12 columns">
					Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="large-12 columns">
		<table width="100%">
			<thead>
			<tr>
				<th>Nombre</th>
				<th>Direcci&oacute;n</th>
				<th>Correo electr&oacute;nico</th>
				<th>Disponible</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>Steve Jobs</td>
				<td>1 Infinite Loop, Cupertino, CA 95014</td>
				<td>steve@apple.com</td>
				<td>No</td>
			</tr>
			<tr>
				<td>Bill Gates</td>
				<td>12012 Sunset Hills Rd., Reston, VA 20190</td>
				<td>bill@microsoft.com</td>
				<td>Si</td>
			</tr>
			</tbody>
		</table>
	</div>
</div>

<footer class="row">
	<div class="large-12 columns">
		<hr/>
		<div class="row">
			<div class="large-6 columns">
				<p>&copy; Copyright 2015.</p>
			</div>
			<div class="large-6 columns">
				<ul class="inline-list right">
					<li><a href="#">Inicio</a></li>
					<li><a href="./bistro-digital.php">Contacto</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<script>
	document.write('<script src=<?php echo base_url(); ?>assets/js/vendor/' +
		('__proto__' in {} ? 'zepto' : 'jquery') +
		'.js><\/script>')
</script>
<script src="<?php echo base_url(); ?>assets/js/foundation.min.js"></script>
<script>
	$(document).foundation();
</script>



</body>
</html>