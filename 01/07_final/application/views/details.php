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

                    <form method="post" action="<?php echo site_url('person/modify'); ?>/<?php echo $user[0]['id']; ?>">
                        <div class="row">
                            <div class="large-6 columns">
                                <label>Correo
                                    <input type="text" name="email" value="<?php echo $user[0]['email']; ?>" placeholder="ej. correo@dominio.com" />
                                </label>
                            </div>
                            <div class="large-6 columns">
                                <label>Contrase&ntilde;a
                                    <input type="text" name="password" value="<?php echo $user[0]['password']; ?>" placeholder="ej. PHP678" />
                                </label>
                            </div>
                            <input type="submit" class="button" value="GUARDAR" />
                        </div>
                    </form>
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