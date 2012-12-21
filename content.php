<div class="container-fluid">
  <div class="row-fluid">
    <div class="span7">
      <?php 
	if ( have_posts() ) {
		while (have_posts()) {
			the_post(); ?>
			<?php get_template_part( 'post', 'index' ); ?>
		<?php
		}//end posts loop
		pagination();
		
	}//end have_posts() if ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>