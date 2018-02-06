<footer>
  <div class="container">
    <nav>
      <?php wp_nav_menu( array(
        'theme_location'  => 'footer',
        // It avoids that all the pages of wp_page_menu are automatically added when there is no assigned menu
        'fallback_cb' => function(){},
      ) ); ?>
    </nav>
    <?php bloginfo( 'name' ); ?>
    <div class="social">
    <?php
    // social links, using the svgs inside the icons folder
    // sample icons are from https://dribbble.com/shots/2089345-Nucleo-Free-Social-Icons
    social_links('facebook');
    social_links('twitter');
    social_links('youtube');
    social_links('instagram');
    ?>

    </div>

<?php wp_footer(); ?>
  </div> <!-- Close footer container -->
</footer>

</body>
</html>