<?php
/*
Template Name: Somos
*/
?>
<?php get_header() ?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <?php if( have_posts() ):  ?>
        <?php while( have_posts() ): the_post() ?>
          <?php the_title() ?>
        <?php endwhile ?>
      <?php else: ?>
        <h1>No hay posts</h1>
      <?php endif ?>
    </div>
  </div>
</div>

<?php get_footer() ?>
