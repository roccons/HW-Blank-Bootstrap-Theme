<footer>
  <?php bloginfo( 'name' ); ?>
  <div class="social">
  <?php
  //social links
  $social_links = get_option( 'pu_theme_options' );
  if($social_links['facebook_link']) {
    echo('
      <a href="'.$social_links['facebook_link'].'" target="_blank">
      <img src="' . get_bloginfo('template_url') . '/icons/facebook.svg" >
      </a>');
  }
  if($social_links['twitter_link']) {
    echo('
      <a href="'.$social_links['twitter_link'].'" target="_blank">
      <img src="' . get_bloginfo('template_url') . '/icons/twitter.svg" >
      </a>');
  }
  if($social_links['youtube_link']) {
    echo('
      <a href="'.$social_links['youtube_link'].'" target="_blank">
      <img src="' . get_bloginfo('template_url') . '/icons/youtube.svg" >
      </a>');
  }
  if($social_links['instagram_link']) {
    echo('
      <a href="'.$social_links['instagram_link'].'" target="_blank">
      <img src="' . get_bloginfo('template_url') . '/icons/instagram.svg" >
      </a>');
  }
  ?>
  </div>

<?php wp_footer(); ?>
</footer>

</div> <!-- close main container -->
</body>
</html>