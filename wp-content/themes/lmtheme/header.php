<!DOCTYPE html>
<html <?php language_attributes( 'html' ); ?>>

<head <?php hybrid_attr( 'head' ); ?>>
  <?php wp_head(); // Hook required for scripts, styles, and other <head> items. ?>
</head>

<body <?php hybrid_attr( 'body' ); ?>>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<nav class="navbar navbar-fixed-top animatedParent" id="navbar-primary" role="navigation">
  <div class="container animated fadeInDownShort go">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand prime-urban-brand" href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-prime-urban.png" alt=""></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <div class="navbar-holder">
        <?php hybrid_get_menu( 'primary' ); // Loads the menu/primary.php template. ?>
      </div>
    </div>
  </div>
</nav>

