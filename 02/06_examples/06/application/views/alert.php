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
          Curso CodeIgniter Cache
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
          <div class="large-12 columns">
            <div class="row">
            <?php if( validation_errors() ){ ?>
            <div data-alert class="alert-box alert round">
                <?php echo validation_errors(); ?>
            </div> 
            <?php } ?>
            

            <?php echo form_open('person/alert'); ?>

              <h5>Username</h5>
              <input type="text" name="username" value="" size="50" />

              <h5>Password</h5>
              <input type="text" name="password" value="" size="50" />

              <h5>Password Confirm</h5>
              <input type="text" name="passconf" value="" size="50" />

              <h5>Email Address</h5>
              <input type="text" name="email" value="" size="50" />

              <div><input type="submit" value="Submit" /></div>

            </form>

              

              
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