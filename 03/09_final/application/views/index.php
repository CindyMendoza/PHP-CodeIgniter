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
				<a href="<?php echo site_url('main'); ?>">
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
					<?php echo form_open_multipart('main/do_upload') ?>
						<div class="large-6 columns">
							<input type="file" name="profile" />
						</div>
						<div class="large-6 columns">
							<input type="submit" class="button" value="SUBIR" />
						</div>
					</form>
				</div>
				<div class="row">
					<?php if($error){ ?>
						<div data-alert class="alert-box alert radius">
							<?php echo $error; ?>
						</div>
					<?php } ?>
					<?php if($loaded){ ?>
					<div data-alert class="alert-box success radius">
						<?php echo $generated_table; ?>
					</div>
					<?php } ?>
				</div>
				<div class="row">
					<?php if($loaded){ ?>
					<img src="<?php echo base_url(); ?>uploads/<?php echo $uploaded_image_path; ?>" />
					<?php }else{ ?><img src="<?php echo base_url(); ?>assets/img/placeholder.png" />
					<?php } ?>
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