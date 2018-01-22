<footer>
  <nav>
    <?php wp_nav_menu( array(
      'theme_location'  => 'footer',
      // Evita que se agregen automáticamente todas las pags de wp_page_menu cuando no hay menú asignado
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
</footer>

</div> <!-- close main container -->
</body>
</html>