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
<nav class="top-bar" data-topbar>
	<ul class="title-area">

		<li class="name">
			<h1>
				<a href="#">
					Curso CodeIgniter
				</a>
			</h1>
		</li>
		<li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
	</ul>

</nav>

<div class="row">
	<div class="large-12 columns">
		<br>
		<div class="row">
			<div class="large-12 columns">
				<div class="row">
					<a href="<?php echo site_url('person/new_user'); ?>" class="button success">Nuevo</a>
				</div>
				<div class="row">

					<table width="100%">
						<thead>
						<tr>
							<th width="200">ID</th>
							<th>Email</th>
							<th width="150">Contrase&ntilde;a</th>
							<th width="150">Acci&oacute;n</th>
						</tr>
						</thead>
						<tbody>
						<?php foreach($users->result() as $row) { ?>
							<tr>
								<td><?php echo $row->id ?></td>
								<td><?php echo $row->email ?></td>
								<td><?php echo $row->password ?></td>
								<td><a href="<?php echo site_url("person/details/{$row->id}"); ?>" class="button">Modificar</a></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="row">
					<a href="<?php echo site_url('person/new_user'); ?>" class="button success">Nuevo</a>
				</div>
			</div>
		</div>
		<footer class="row">
			<div class="large-12 columns"><hr>
				<div class="row">
					<div class="large-6 columns">
						<p>&copy; Copyright 2015</p>
					</div>
				</div>
			</div>
		</footer>
	</div>
</div>

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