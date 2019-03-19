<?php foreach( $articles->result() as $article ){ ?>
<div class="row">
    <div class="large-2 columns small-3"><img src="<?php echo base_url(); ?>assets/img/profile.jpg"/></div>
    <div class="large-10 columns">
        <p><strong><?php echo $article->title; ?></strong> <?php echo $article->article; ?></p>
        <ul class="inline-list">
            <li><a href="" data-reveal-id="modifyModal_<?php echo $article->id; ?>">Modificar entrada</a></li>

            <div id="modifyModal_<?php echo $article->id; ?>" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                <h4 id="modalTitle">Modificar entrada</h4>
                <form>
                    <input type="hidden" value="<?php echo $article->id; ?>" name="id" />
                    <div class="row">
                        <div class="large-12 columns">
                            <label>T&iacute;tulo
                                <input type="text" name="title" value="<?php echo $article->title; ?>" placeholder="ej. Viaje a la ciudad de Casablanca" />
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-12 columns">
                            <label>Art&iacute;culo
                                <textarea name="article"><?php echo $article->article; ?></textarea>
                            </label>
                        </div>
                    </div>
                    <a href="#" class="button radius small lnkModify">MODIFICAR</a>
                    <a class="close-reveal-modal mod-close" aria-label="Close">&#215;</a>
                </form>


            </div>
        </ul>
    </div>
</div>
<hr/>
<?php } ?>