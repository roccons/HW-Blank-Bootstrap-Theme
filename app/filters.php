<?php

namespace App;

/*
  Plugin Name: Relative Image URLs
  Plugin URI: http://scottwernerdesign.com/plugins/relative-image-urls
  Description: Replaces absolute URLs with Relative URLs for image paths in posts.
  Author: Scott Werner
  Author URI: http://scottwernerdesign.com
  Tags: relative, image, images, url, link, absolute
  Version: 2.0
*/
add_filter( 'image_send_to_editor', function ($html) {
  $sp = strpos($html,"src=") + 5;
	$ep = strpos($html,"\"",$sp);

	$imageurl = substr($html,$sp,$ep-$sp);

	$relativeurl = str_replace("http://","",$imageurl);
	$sp = strpos($relativeurl,"/");
	$relativeurl = substr($relativeurl,$sp);

	$html = str_replace($imageurl,$relativeurl,$html);

	return $html;
} , 5, 8 );

/**
 * Remove height and width attribute from post_thumbnail
 */
add_filter( 'post_thumbnail_html', function ( $html, $post_id, $post_thumbnail_id, $size, $attr ) {
  $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
  return $html;
}, 10, 5 );

/**
 * Change 404 metatitle
 */
add_filter( 'document_title_parts', function ( $title_parts ) {
  if( is_404() ) {
    $title_parts['title'] = 'Página no encontrada';
  }

  return $title_parts;
}, 11 );

