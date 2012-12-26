<div class="container-fluid">
  <div class="row-fluid">
    <div class="span7" id="main-content">
    	<?php 
			the_post(); 
			?>
		<h1><?php the_title(); ?></h1>
		<span class="post-info muted">Posted by <?php echo get_the_author(); ?> on <?php the_date('m.d.Y'); ?></span>
		<div class="post-body"><?php the_content(); ?></div>
	</div>
    <?php get_sidebar(); ?>
  </div>
</div> 