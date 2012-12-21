<div class="container-fluid">
  <div class="row-fluid">
    <div class="span7">
    	<ul class="breadcrumb">
    		<li>Found <?php echo $wp_query->post_count; ?> result(s) for '<?php the_search_query(); ?>'</li>
    	</ul>
      <?php 
	if ( have_posts() ) :
		while (have_posts()) {
			the_post(); ?>
			<?php get_template_part( 'post', getTemplateName() ); ?>
		<?php
		}
	else : ?>
		<h1>Sorry, Nothing found.  Maybe you can find what you're looking for by searching?</h1><?php
		get_search_form( );
	endif; 
	?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div> 