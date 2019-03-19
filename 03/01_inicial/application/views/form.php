<div class="row">
<input type="hidden" id="hidRoute" value="<?php echo site_url(); ?>"/>
    <div class="large-9 columns">
        <h3 id="hSelected">Formulario de registro</h3>
        <div class="section-container tabs" data-section>
            <section class="section">
                <div class="content" data-slug="panel1">
                        <div data-alert class="alert-box success radius">
                            Datos guardados correctamente
                        </div>
                    <form action="<?php echo site_url('main/form'); ?>" method="post">
                        <div class="row collapse">
                            <div class="large-2 columns">
                                <label class="inline"> Nombre</label>
                            </div>
                            <div class="large-10 columns">
                                <input type="text" name="name" value="" />

                                <div data-alert class="alert-box warning radius">

                                </div>

                            </div>

                        </div>
                        <div class="row collapse">
                            <div class="large-2 columns">
                                <label class="inline"> Correo</label>
                            </div>
                            <div class="large-10 columns">
                                <input type="text" name="email"  value="" />

                                    <div data-alert class="alert-box warning radius">

                                    </div>

                            </div>
                        </div>
                        <input type="submit" class="button round success" value="REGISTRARSE" />
                    </form>
                </div>
            </section>

        </div>
    </div>