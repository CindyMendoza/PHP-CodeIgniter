<div class="row">
<input type="hidden" id="hidRoute" value="<?php echo site_url(); ?>"/>
    <div class="large-9 columns">
        <h3 id="hSelected">Formulario de registro</h3>
        <div class="section-container tabs" data-section>
            <section class="section">
                <div class="content" data-slug="panel1">
                    <?php if( $success ){ ?>
                        <div data-alert class="alert-box success radius">
                            Datos guardados correctamente
                        </div>
                    <?php } ?>
                    <form action="<?php echo site_url('main/form'); ?>" method="post">
                        <div class="row collapse">
                            <div class="large-2 columns">
                                <label class="inline"> Nombre</label>
                            </div>
                            <div class="large-10 columns">
                                <input type="text" name="name" value="<?php echo set_value('name'); ?>" />
                                <?php if( form_error('name') ){ ?>
                                <div data-alert class="alert-box warning radius">
                                    <?php echo  form_error('name'); ?>
                                </div>
                                <?php } ?>

                            </div>

                        </div>
                        <div class="row collapse">
                            <div class="large-2 columns">
                                <label class="inline"> Correo</label>
                            </div>
                            <div class="large-10 columns">
                                <input type="text" name="email" value="<?php echo set_value('email'); ?>" />
                                <?php if( form_error('email') ){ ?>
                                    <div data-alert class="alert-box warning radius">
                                        <?php echo  form_error('email'); ?>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                        <input type="submit" class="button round success" value="REGISTRARSE" />
                    </form>
                </div>
            </section>

        </div>
    </div>