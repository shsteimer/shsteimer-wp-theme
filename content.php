<div class="container-fluid">
  <div class="row-fluid">
    <div class="span7" id="main-content">
      <?php 
	if ( have_posts() ) {
		while (have_posts()) {
			the_post();
			get_template_part( 'post', getTemplateName() );
		}//end posts loop
		pagination();
		
	}//end have_posts() if ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>