<div class="container-fluid">
  <div class="row-fluid">
    <div class="span7">
    	<?php get_template_part( 'breadcrumb', 'archive' ); 
		if ( have_posts() ) {
			while (have_posts()) {
				the_post();
				get_template_part( 'post', 'archive' );
			}
			pagination();
		} 
		?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>