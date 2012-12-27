<div class="container-fluid">
  <div class="row-fluid">
    <div class="span7" id="main-content">
    	<?php 
			the_post();
			get_template_part( 'post', getTemplateName() ); 
		?>
	</div>
    <?php get_sidebar(); ?>
  </div>
</div> 