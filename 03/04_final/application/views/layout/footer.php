<footer class="row">
    <div class="large-12 columns">
        <hr/>
        <div class="row">
            <div class="large-6 columns">
                <p>&copy; Copyright 2015.</p>
            </div>
            <div class="large-6 columns">
                <ul class="inline-list right">
                    <li><a href="<?php echo site_url('main/restricted_page'); ?>">Reestringida</a></li>
                    <?php if( !$this->logged_in ) { ?>
                    <li><a href="<?php echo site_url('main/login'); ?>">Iniciar sesi&oacute;n</a></li>
                    <?php } ?>
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