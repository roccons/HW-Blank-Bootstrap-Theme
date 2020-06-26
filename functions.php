<?php

//disable admin bar
show_admin_bar(false);

//path hacia las imágenes del template
define('IMG_PATH', get_template_directory_uri() . '/public/img');

//Replaces absolute URLs with Relative URLs for image paths in posts
include_once( get_template_directory() . '/includes/relativeimage.php' );

// Bootstrap menus setup
include_once( get_template_directory() . '/includes/bootstrap-menus.php' );

// WordPress Bootstrap Pagination
include_once( get_template_directory() . '/includes/bootstrap-pagination.php' );

// Theme options
include_once( get_template_directory() . '/includes/theme-options.php' );

//Add thumbnail, automatic feed links and title tag support
add_theme_support( 'post-thumbnails' );
//add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );

//Add content width (desktop default)
if ( ! isset( $content_width ) ) {
	$content_width = 768;
}

register_nav_menus([
	'top-bar' => __( 'top-bar', 'HW Blank Bootstrap' ),
	'footer' => __('footer', 'HW Blank Bootstrap')
]);

//Use editor styles editor-style.css for tiny mce
add_editor_style();

//Add custom buttons to the text editor
add_action( 'admin_print_footer_scripts', 'add_pre_and_div_quicktags' );

function add_pre_and_div_quicktags() {
	if (wp_script_is('quicktags')){
		?>
		<script type="text/javascript">
			QTags.addButton( 'div_tag', 'div', '<div class="">', '</div>', '', 'Div tag', 1);
			QTags.addButton( 'span_tag', 'span', '<span class="">', '</span>', '', 'Span tag', 1);
		</script>
		<?php
	}
}

// Register sidebar
add_action('widgets_init', 'theme_register_sidebar');
function theme_register_sidebar() {
	if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
		    'id' => 'sidebar-1',
		    'before_widget' => '<div id="%1$s" class="widget %2$s">',
		    'after_widget' => '</div>',
		    'before_title' => '<h4>',
		    'after_title' => '</h4>',
		 ));
	}
}


/**
 * Load site scripts and styles.
 */
function bootstrap_theme_enqueue_scripts() {
	$template_url = get_template_directory_uri();

  // Jquery, Popper.js and Bootstrap dependencies
	wp_enqueue_script(
    'bootstrap', $template_url . '/public/js/bootstrap.js',
    array(),
    false
  );

	// Main Style (force reload of styles if it css has been updated)
	wp_enqueue_style(
    'theme-styles', $template_url . '/style.css',
    array(),
    false
  );

	// Load Thread comments WordPress script.
	if ( is_singular() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'bootstrap_theme_enqueue_scripts', 1 );

function pu_display_section($section){}
