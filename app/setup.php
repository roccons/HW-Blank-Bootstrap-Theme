<?php

namespace App;

/**
 * Register the theme Assets
 *
 * @return void
 */
add_action( 'wp_enqueue_scripts', function () {
  $template_url = get_template_directory_uri();

  /**
   * Add Bootstrap, Jquery and Popper js (Comun scripts)
   */
	wp_enqueue_script(
    'bootstrap',
    mix( 'public/js/bootstrap.js', 'public' )
  );

	/**
   * Main Style (force reload of styles if it css has been updated)
   */
	wp_enqueue_style(
    'theme-styles',
    mix( 'style.css', 'public' )
  );

  /**
   * Load Thread comments WordPress script.
   */
	if ( is_singular() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
} , 1 );

/**
 * Register the initial theme setup
 */
add_action( 'after_setup_theme', function () {
  /**
   * Disable admin bar
   */
  show_admin_bar(false);

  /**
   * Add thumbnail, automatic feed links and title tag support
   */
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'title-tag' );

  /**
   * Registar Nav Menus
   */
  register_nav_menus([
    'top-bar' => __( 'top-bar', 'HW Blank Bootstrap' ),
    'footer' => __('footer', 'HW Blank Bootstrap')
  ]);

  /**
   * Use editor styles editor-style.css for tiny mce
   */
  add_editor_style();

  /**
   * Add custom buttons to the text editor
   */
  add_action( 'admin_print_footer_scripts', function () {
    if (wp_script_is('quicktags')){
      ?>
      <script type="text/javascript">
        QTags.addButton( 'div_tag', 'div', '<div class="">', '</div>', '', 'Div tag', 1);
        QTags.addButton( 'span_tag', 'span', '<span class="">', '</span>', '', 'Span tag', 1);
      </script>
      <?php
    }
  } );

  /**
   * Register SideBar
   */
  add_action('widgets_init', function () {
    if ( function_exists('register_sidebar') ) {
      register_sidebar(array(
          'id' => 'sidebar-1',
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget' => '</div>',
          'before_title' => '<h4>',
          'after_title' => '</h4>',
       ));
    }
  });
}, 20 );
