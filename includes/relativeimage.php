<?php
/*
Plugin Name: Relative Image URLs
Plugin URI: http://scottwernerdesign.com/plugins/relative-image-urls
Description: Replaces absolute URLs with Relative URLs for image paths in posts.
Author: Scott Werner
Author URI: http://scottwernerdesign.com
Tags: relative, image, images, url, link, absolute
Version: 2.0
*/

add_filter('image_send_to_editor','image_to_relative',5,8);

function image_to_relative($html, $id, $caption, $title, $align, $url, $size, $alt)
{
	$sp = strpos($html,"src=") + 5;
	$ep = strpos($html,"\"",$sp);
	
	$imageurl = substr($html,$sp,$ep-$sp);
	
	$relativeurl = str_replace("http://","",$imageurl);
	$sp = strpos($relativeurl,"/");
	$relativeurl = substr($relativeurl,$sp);
	
	$html = str_replace($imageurl,$relativeurl,$html);
	
	return $html;
}

?>