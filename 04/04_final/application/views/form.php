

<div class="row">

    <div class="large-3 columns ">
        <div class="panel">
            <a href="#"><img src="<?php echo base_url(); ?>assets/img/calatrava_300x240.jpg"/></a>
            <h5><a href="#">Sergio Brito</a></h5>
            <div class="section-container vertical-nav" data-section data-options="deep_linking: false; one_up: true">
            </div>
        </div>
    </div>


    <div class="large-6 columns">
        <div id="divArticles"></div>

        <a href="#" data-reveal-id="addModal">Agregar nueva entrada</a>

        <div id="addModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
            <h4 id="modalTitle">Agregar entrada</h4>
            <form>
            <div class="row">
                <div class="large-12 columns">
                    <label>T&iacute;tulo
                        <input type="text" name="title" placeholder="ej. Viaje a la ciudad de Casablanca" />
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="large-12 columns">
                    <label>Art&iacute;culo
                        <textarea name="article"></textarea>
                    </label>
                </div>
            </div>
            <a href="#" class="button radius small" id="lnkAdd">AGREGAR</a>
            <a class="close-reveal-modal" aria-label="Close" id="lnkCloseAddModal">&#215;</a>
            </form>
        </div>

    </div>


    <aside class="large-3 columns hide-for-small">
        <h5><a href="#">Anuncios</a></h5>
        <p><img src="<?php echo base_url(); ?>assets/img/beach_sunset_1000x750.jpg"/></p>
    </aside>
</div>