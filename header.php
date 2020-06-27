<?php

use App\View\Components\BootstrapNavWalker;

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="icon" type="image/png" href="<?php echo IMG_PATH ?>/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php echo IMG_PATH ?>/favicon-16x16.png" sizes="16x16" />
    <?php wp_head(); ?>
	</head>

  <body <?php body_class(isset($class) ? $class : ''); ?>>
    <header>
      <nav class="navbar navbar-light bg-light navbar-expand-lg justify-content-between">
        <div class="container justify-content-between">
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
              <img class="logo" src="<?php echo IMG_PATH ?>/logo.png" alt="<?php bloginfo( 'name' ); ?>">
            </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <?php
            wp_nav_menu( array(
                'theme_location'  => 'top-bar',
                'depth'           => 3,
                'container'       => false,
                'container_class' => 'collapse navbar-collapse',
                'menu_class'      => 'nav navbar-nav ml-auto',
                'fallback_cb'     => 'App\View\Components\BootstrapNavWalker::fallback',
                'walker'          => new BootstrapNavWalker()
            ) );
            ?>
          </div>
        </div>
      </nav>
    </header>
