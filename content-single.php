<div class="container-fluid">
  <div class="row-fluid">
    <div class="span9">
      <?php get_template_part( 'breadcrumb', getTemplateName() );
			the_post(); 
			$archiveYear = get_the_time('Y');
			$archiveMonth = get_the_time('m');
			$archiveDay = get_the_time('d');
			?>
			<ul class="breadcrumb">
				<li><a href="<?php echo home_url( '/' ); ?>">Home</a> <span class="divider">/</span></li>
				<li><a href="<?php echo get_year_link( $archiveYear ); ?>"><?php echo $archiveYear; ?></a> <span class="divider">/</span></li>
				<li><a href="<?php echo get_month_link( $archiveYear, $archiveMonth ); ?>"><?php echo get_the_time('F') ?></a> <span class="divider">/</span></li>
				<li><a href="<?php echo get_day_link( $archiveYear, $archiveMonth, $archiveDay ); ?>"><?php echo $archiveDay; ?></a> <span class="divider">/</span></li>
				<li class="active"><?php the_title(); ?></li>
			</ul>
			<?php get_template_part( 'post', getTemplateName() ); ?>
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