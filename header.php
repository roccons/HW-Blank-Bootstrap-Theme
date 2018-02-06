<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ) ?>/img/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ) ?>/img/favicon-16x16.png" sizes="16x16" />
    <?php wp_head(); ?>
	</head>

  <body <?php body_class(isset($class) ? $class : ''); ?>>
    <header>
      <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo home_url(); ?>"><img class="logo" src="<?php echo IMG_PATH ?>/logo.png" alt="<?php bloginfo( 'name' ); ?>"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
         <?php wp_nav_menu( array(
          'theme_location' => 'top-bar', 
          'menu_class' => 'nav navbar-nav navbar-right', 
          'depth'=> 3, 
          'container'=> false, 
          'walker'=> new Bootstrap_Walker_Nav_Menu)
          ); ?>
        </div><!-- /.navbar-collapse -->
        </div>
      </header>
      </nav>