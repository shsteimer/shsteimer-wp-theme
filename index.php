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
    <div class="span7">
      <?php 
	if ( have_posts() ) {
		while (have_posts()) {
			the_post(); ?>
			<div class="post well">
				<a class="post-title" href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
						<h2><?php the_title(); ?></h2>
				</a>
				<span class="post-info muted">Posted by <?php echo get_the_author(); ?> on <?php echo get_the_date('m.d.Y'); ?></span>
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
				<a data-disqus-identifier="<?php echo $post->ID?>" href="<?php the_permalink(); ?>#disqus_thread">View Comments</a>
			</div>
		<?php
		}?>
		
		<?php pagination(); ?>
		<?php
	} ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>  
<?php get_footer(); ?>