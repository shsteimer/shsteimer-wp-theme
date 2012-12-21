<?php 
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