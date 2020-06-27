<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <nav>
          <?php wp_nav_menu( array(
            'theme_location'  => 'footer',
            // It avoids that all the pages of wp_page_menu are automatically added when there is no assigned menu
            'fallback_cb' => function(){},
          ) ); ?>
        </nav>
        <?php bloginfo( 'name' ); echo '. '; bloginfo( 'description' ); ?>
      </div>
      <div class="col-md-4">
        <div class="social">
        <?php
        // social links, using the svgs inside the icons folder
        // sample icons are from https://dribbble.com/shots/2089345-Nucleo-Free-Social-Icons
          social_link( 'youtube' );
          social_link( 'facebook' );
          social_link( 'twitter' );
          social_link( 'instagram' );
        ?>

        </div>
      </div>
    </div>
  </div> <!-- Close footer container -->
</footer>
<?php wp_footer(); ?>

</body>
</html>
