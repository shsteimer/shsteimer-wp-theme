<div class="container-fluid">
  <div class="row-fluid">
    <div class="span9" id="main-content">
      <?php 
			the_post(); 
			get_template_part( 'breadcrumb', getTemplateName() );
			get_template_part( 'post', getTemplateName() ); 
		?>
			<ul class="pager">
  				<?php
					$prev_post = get_next_post();
					if (!empty( $prev_post )) { ?>
						<li class="previous">
							<a href="<?php echo get_permalink( $prev_post->ID ); ?>">&larr; Previous</a>
						</li>
				<?php } else { ?>
					<li class="previous disabled">
						<a href="#">&larr; Previous</a>
					</li>
				<?php } ?>
		  		<?php
					$next_post = get_previous_post();
					if (!empty( $next_post )) { ?>
						<li class="next">
							<a href="<?php echo get_permalink( $next_post->ID ); ?>">Next &rarr;</a>
						</li>
				<?php } else { ?>
					<li class="next disabled">
						<a href="#">Next &rarr;</a>
					</li>
				<?php } ?>
			</ul>
		<?php
	?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>  