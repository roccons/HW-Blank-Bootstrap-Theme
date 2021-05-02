<?php

use App\View\Components\BootstrapPagination;

get_header(); ?>

<div class="container">
	<div class="row">

		<div class="col-md-8">
			<h2>La página buscada no se encuentra.</h2>
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