<?php

use App\View\Admin\ThemeOptions;

/**
 * Helper shortcut to display social_link
 */
function social_link ( $name )
{
  $socialLinks = get_option( 'hw_theme_options' );
  $imgPath = IMG_PATH . '/icons/' . $name . '.svg';

  if( $socialLinks[$name] ) {
    echo("
      <a href='{$socialLinks[$name]}' class='{$name}' alt='{$name}' target='_blank'>
        <img src='{$imgPath}'>
      </a>
    ");
  }
}

/**
 * Helper shortcut to get social_links
 */
function get_social_links() {
  return ThemeOptions::getSocialLinks();
}

/**
 * Helper for debug data with console.log
 */
function debug_with_js( $data ) {
  $dataEncoded = json_encode( $data );

  echo "
    <script>
      console.log(JSON.parse('$dataEncoded'))
    </script>
  ";
}

/**
 * Helper to display tooltip
 */
function tooltip( $title, $placement ) {
  echo "
    <button
      class='btn btn-secondary rounded-circle h-6 w-6 p-0 d-flex justify-content-center align-items-center'
      data-toggle='tooltip'
      data-original-title='{$title}'
      data-placement='{$placement}'
    >
      <i class='fa fa-info-circle'></i>
    </button>
  ";
}


/**
 * Helper to get image theme path
 */
function image_theme( $path ) {
  $realpath = dirname( __DIR__, 1 ) . '/public/img' . $path;

  echo IMG_PATH . $path . '?id=' . filemtime( $realpath );
}

/**
 * Helper to get url for sharing
 *
 * - Only work in loop pages/posts
 *
 * @param string $social
 */
function sharing_link( $social ) {
  $currentUrl = urlencode( utf8_encode( get_permalink() ) );
  $socialShares = array(
    'facebook' => 'https://www.facebook.com/sharer/sharer.php?u=',
    'twitter' => 'http://twitter.com/intent/tweet?url='
  );

  if( $social === 'instagram' ) {
    echo 'https://www.instagram.com/';

    return;
  }

  echo $socialShares[ $social ] . $currentUrl;
}


/**
 * Get Youtube Video Id
 */
function get_youtube_video_id( $url ){
	$regex = "/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/";

	preg_match($regex, $url, $matches);

	return $matches[1];
}
