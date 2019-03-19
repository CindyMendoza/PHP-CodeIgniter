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

<?php $this->load->view('layout/header'); ?>

<div class="row">
    <div class="large-12 columns">
        <br>
        <div class="row">
            <div class="large-12 columns">
                <div class="row">
                    <div class="large-12 columns">
                        <div class="row">
                            <div class="panel">
                                <h5><?php echo $entity[0] ?></h5>
                                <p><?php echo $entity[1] ?></p>
                            </div>
                            <a href="<?php echo site_url('home/edit'); ?>" class="button tiny">Modificar datos</a>
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