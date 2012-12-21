<?php
/**
 * Author: Sean H. Steimer
 *
 * Index script for rendering the main page
 *
 *
*/
?>
<?php get_header(); ?>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span9">
      <?php 
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
			<div class="post well">
				<h1><?php the_title(); ?></h1>
				<span class="post-info muted">Posted by <?php echo get_the_author(); ?> on <?php the_date('m.d.Y'); ?></span>
				<div class="post-body"><?php the_content(); ?></div>
				<p>Categories: <?php the_category(', '); ?></p>
				<div class="post-social">
					<ul>
						<li>
							<div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" 
								data-layout="button_count" data-width="450" data-show-faces="false" data-colorscheme="light"></div>
						</li>
						<li>
							<a href="https://twitter.com/share" class="twitter-share-button" data-text="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>" data-via="shsteimer">Tweet</a>
						</li>
					</ul>
				</div> 
				<?php comments_template( '', true ); ?>
			</div>
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
<?php get_footer(); ?>