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
      		$archiveYear = get_the_time('Y');
			$archiveMonth = get_the_time('m');
			$archiveDay = get_the_time('d');
		    if(is_date()) {
		    	?>
		    	<ul class="breadcrumb">
		    		<li><a href="<?php echo home_url( '/' ); ?>">Home</a> <span class="divider">/</span></li>
		    	<?php
		      	if(is_year()) {
		      		?>
		      			<li><a href="<?php echo get_year_link( $archiveYear ); ?>"><?php echo $archiveYear; ?></a></li>
		      		<?php
		      	} else if(is_month()){
					?>
						<li><a href="<?php echo get_year_link( $archiveYear ); ?>"><?php echo $archiveYear; ?></a> <span class="divider">/</span></li>
						<li><a href="<?php echo get_month_link( $archiveYear, $archiveMonth ); ?>"><?php echo get_the_time('F') ?></a></li>
		      		<?php
		      	} else if(is_day()) {
					?>
						<li><a href="<?php echo get_year_link( $archiveYear ); ?>"><?php echo $archiveYear; ?></a> <span class="divider">/</span></li>
						<li><a href="<?php echo get_month_link( $archiveYear, $archiveMonth ); ?>"><?php echo get_the_time('F') ?></a><span class="divider">/</span></li>
		      			<li><a href="<?php echo get_day_link( $archiveYear, $archiveMonth, $archiveDay ); ?>"><?php echo $archiveDay; ?></a></li>
		      		<?php
		      	}
		      	?></ul><?php
		    } else if(is_tag()) {
				?>
		    		<ul class="breadcrumb">
		    			<?php 
		    				$tags = get_the_tags(); 
		    				if($tags){
								foreach($tags as $tag) {
									echo '<li>Posts Tagged: ' . $tag->name . '</li>';
								}
							}
		    			?>
		    		</ul>
		    	<?php
		    } else if(is_author()) {
				?>
		    		<ul class="breadcrumb">
						<li>Posts by: <?php echo get_the_author(); ?></li>
		    		</ul>
		    	<?php
		    } else {
		    	?>Unknown Archive Type<?php
		    }
      ?><?php
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