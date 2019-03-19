<div class="row">

    <div class="large-9 columns">
        <h3>Inicio de sesi&oacute;n</h3>
        <div class="section-container tabs" data-section>
            <section class="section">
                <div class="content" data-slug="panel1">
                    <div data-alert class="alert-box alert radius">
                        Error al iniciar su sesi&oacute;n
                        <a href="#" class="close">&times;</a>
                    </div>
                    <form action="<?php echo site_url('login'); ?>" method="post">
                        <div class="row collapse">
                            <div class="large-2 columns">
                                <label class="inline"> Correo</label>
                            </div>
                            <div class="large-10 columns">
                                <input type="text" id="txtEmail" name="email" >
                            </div>
                        </div>
                        <div class="row collapse">
                            <div class="large-2 columns">
                                <label class="inline"> Contrase&ntilde;a</label>
                            </div>
                            <div class="large-10 columns">
                                <input type="password" id="txtPassword" name="password">
                            </div>
                        </div>
                        <button type="submit" class="radius button">INGRESAR</button>
                    </form>
                </div>
            </section>
        </div>
    </div>