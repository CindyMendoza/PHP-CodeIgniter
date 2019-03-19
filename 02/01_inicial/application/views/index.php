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
					<div class="large-6 columns">
						<div class="row">
						</div>

						<div class="row">
							<div class="panel">
								<h5>Tama&ntilde;o de su disco</h5>
								<p><?php echo $disk_size; ?> bytes</p>
							</div>
						</div>

						<div class="row">
							<div class="panel">
								<h5>Grandes lenguajes de programaci&oacute;n.</h5>
								<p><?php echo $languages; ?></p>
							</div>
						</div>

					</div>



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