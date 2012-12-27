<div class="post well">
	<h1><?php the_title(); ?></h1>
	<span class="post-info muted">Posted by <?php echo get_the_author(); ?> on <?php the_date('m.d.Y'); ?></span>
	<div class="post-body"><?php the_content(); ?></div>
</div>