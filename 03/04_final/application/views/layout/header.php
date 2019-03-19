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
            <li><a href="<?php echo site_url('main/restricted_page'); ?>" class="button">Restringida</a></li>
            <?php if( !$this->logged_in ) { ?>
            <li><a href="<?php echo site_url('main/login'); ?>" class="button">Inicio de sesi&oacute;n</a></li>
            <?php } ?>
        </ul>
    </div>
</div>