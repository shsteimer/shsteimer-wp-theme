<div class="container-fluid">
  <div class="row-fluid">
    <div class="span7" id="main-content">
    	<?php get_template_part( 'breadcrumb', getTemplateName() ); 
		if ( have_posts() ) {
			while (have_posts()) {
				the_post();
				get_template_part( 'post', getTemplateName() );
			}
			pagination();
		} 
		?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>