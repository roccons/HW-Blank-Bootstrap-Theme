<?php get_header(); ?>

<div class="row">

	<div class="col-md-8">

		<?php if(have_posts()) : ?>
		   <?php while(have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_title('<h2>','</h2>'); ?>
		 		<?php the_content(); ?>
			</div>

		   <?php endwhile; ?>

		<?php else : ?>

		<div class="alert alert-info">
		  <strong>No content in this loop</strong>
		</div>

		<?php endif; ?>
	</div>

	<div class="col-md-4">

	<?php get_sidebar(); ?>
	</div>

	<div class="col-sm-12">
		<?php if ( function_exists('wp_bootstrap_pagination') )wp_bootstrap_pagination(); ?>
	</div>

</div>



<?php get_footer(); ?>