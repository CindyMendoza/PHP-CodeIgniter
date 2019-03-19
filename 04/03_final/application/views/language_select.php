<div class="row">
<input type="hidden" id="hidRoute" value="<?php echo site_url(); ?>"/>
    <div class="large-9 columns">
        <h3 id="hSelected">Selecci&oacute;n de idioma</h3>
        <div class="section-container tabs" data-section>
            <section class="section">
                <div class="content" data-slug="panel1">
                    <div data-alert class="alert-box success radius">
                        Idioma seleccionado
                    </div>
                    <form action="<?php echo site_url('login'); ?>" method="post">
                        <div class="row collapse">
                            <div class="large-2 columns">
                                <label class="inline"> Idioma</label>
                            </div>
                            <div class="large-10 columns">
                                <select id="cmbLanguage">
                                    <?php foreach($languages as $id => $user){ ?>
                                        <option value="<?php echo $id; ?>"><?php echo ucfirst($user); ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <a href="#" id="lnkSelectLanguage" class="button round success">APLICAR</a>
                        <a href="#" id="lnkGetLastChange" class="button round secondary">&Uacute;LTIMO CAMBIO</a>
                    </form>
                </div>
            </section>
            <a href="#" data-reveal-id="myModal" id="lnkShowModal">Ver Calendario</a>

            <div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                <div id="divCalendar"></div>
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
            </div>

            <div class="large-12 columns">
                <div class="row">
                    <?php echo $log_table; ?>
                </div>
            </div>

        </div>
    </div>