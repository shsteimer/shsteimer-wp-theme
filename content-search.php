<div class="container-fluid">
  <div class="row-fluid">
    <div class="span7">
     <?php 
     	get_template_part( 'breadcrumb', getTemplateName() );
		if ( have_posts() ) :
			while (have_posts()) {
				the_post();
				get_template_part( 'post', getTemplateName() );
			}
		else : ?>
			<h3>Sorry, Nothing found.  Maybe you can find what you're looking for by searching?</h3>
			<?php get_search_form( );
		endif; 
	?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div> 