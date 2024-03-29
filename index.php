<?php
/**
* index.php is the most generic WordPress template,
* you can add more specific template files as you need, 
* according to the WordPress template hierarchy
* https://developer.wordpress.org/themes/basics/template-hierarchy/
*/


use App\View\Components\BootstrapPagination;

get_header(); ?>

<div class="container">
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
			  <strong>No hay contenido para mostrar</strong>
			</div>

			<?php endif; ?>
		</div>

		<div class="col-md-4">

		<?php get_sidebar(); ?>
		</div>

		<div class="col-sm-12">
		<?php  new BootstrapPagination() ?>
		</div>

	</div>
</div>


<?php get_footer(); ?>
