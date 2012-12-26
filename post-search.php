<div class="post well">
	<a class="post-title" href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
		<h1><?php the_title(); ?></h1>
	</a>
	<span class="post-info muted">Posted by <?php echo get_the_author(); ?> on <?php the_date('m.d.Y'); ?></span>
	<div class="post-body"><?php the_excerpt(); ?></div>
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
			<li class="gplus">
				<!-- Place this tag where you want the share button to render. -->
				<div class="g-plus" data-action="share" data-annotation="bubble" data-href="<?php the_permalink(); ?>"></div>
			</li>
		</ul>
	</div>
	<?php if(is_single()) :?>
		<?php comments_template( '', true ); ?>
	<?php else: ?>
		<a data-disqus-identifier="<?php echo $post->ID?>" href="<?php the_permalink(); ?>#disqus_thread">View Comments</a>
	<?php endif; ?>
	
</div>