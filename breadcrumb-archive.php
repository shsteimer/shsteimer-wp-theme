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
?>