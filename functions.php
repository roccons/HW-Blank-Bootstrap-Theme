<?php
/**
 * The content that usually goes on this file is organized in several files
 * inside the 'app' folder
 */


/**
 * Register The Auto Loader
 */
if( ! file_exists( $composer = __DIR__ . '/vendor/autoload.php' ) ) {
  wp_die( __('Error locating autoloader. Please run <code>composer install</code>.', 'HW Blank Theme') );
}

require $composer;

/**
 * Register Theme Files
 */
$files = [
  'config',
  'helpers',
  'setup',
  'filters',
  'admin'
];

foreach( $files as $file ) {
  $file = "app/{$file}.php";

  if ( ! locate_template($file, true, true) ) {
    wp_die(
      sprintf( __( 'Error locating <code>%s</code> for inclusion', 'HW Blank Theme' ), $file )
    );
  }
}
