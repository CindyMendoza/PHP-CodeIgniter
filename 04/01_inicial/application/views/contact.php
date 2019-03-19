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
            <li><a href="./bistro-digital.php" class="button">Inicio</a></li>
            <li><a href="#" class="button">Contacto</a></li>
        </ul>
    </div>
</div>

<div class="row">

    <div class="large-9 columns">
        <h3>Cont&aacute;ctanos</h3>
        <p>Nos encantar&iacute;a ponernos en contacto contigo. Env&iacute;anos comentarios y sugerencias a trav&eacute;s del siguiente formulario.</p>
        <div class="section-container tabs" data-section>
            <section class="section">
                <h5 class="title"><a href="#panel1">Contact nuestra compa&ntilde;&iacute;a</a></h5>
                <div class="content" data-slug="panel1">
                    <form action="formulario_contacto_proceso.php" method="post">
                        <div class="row collapse">
                            <div class="large-2 columns">
                                <label class="inline">Nombre</label>
                            </div>
                            <div class="large-10 columns">
                                <input type="text" id="yourName" name="name" placeholder="ej. Miguel de Icaza">
                            </div>
                        </div>
                        <div class="row collapse">
                            <div class="large-2 columns">
                                <label class="inline">Area de contacto</label>
                            </div>
                            <div class="large-10 columns">
                                <input type="radio" name="area" value="atencion" id="areaAtencion"><label for="areaAtencion">Atenci&oacute;n a clientes</label>
                                <input type="radio" name="area" value="ventas" id="areaVentas"><label for="areaVentas">Ventas</label>
                                <input type="radio" name="area" value="recursos" id="areaRecursos"><label for="areaRecursos">Recursos Humanos</label>
                            </div>
                        </div>
                        <div class="row collapse">
                            <div class="large-2 columns">
                                <label class="inline">&Aacute;rea de inter&eacute;s</label>
                            </div>
                            <div class="large-10 columns">
                                <!-- Example to use with for -->
                                <select>
                                    <option value="">Selecciona una opci&oacute;n</option>
                                </select>
                            </div>
                        </div>
                        <div class="row collapse">
                            <div class="large-2 columns">
                                <label class="inline">N&uacute;mero de gente en su compa&ntilde;&iacute;a</label>
                            </div>
                            <div class="large-10 columns">
                                <!-- Example to use with while -->
                                <select>
                                    <option value="">Selecciona una opci&oacute;n</option>
                                </select>
                            </div>
                        </div>
                        <div class="row collapse">
                            <div class="large-2 columns">
                                <label class="inline"> Correo</label>
                            </div>
                            <div class="large-10 columns">
                                <input type="text" id="yourEmail" name="email" placeholder="ej. miguel@icaza.yo">
                            </div>
                        </div>
                        <label>Mensaje</label>
                        <textarea rows="4" name="message"></textarea>
                        <button type="submit" class="radius button">Enviar</button>
                    </form>
                </div>
            </section>
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
                        <li><a href="./arreglos_sencillos.php">Inicio</a></li>
                        <li><a href="#">Contacto</a></li>
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