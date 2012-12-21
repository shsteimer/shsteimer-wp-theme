<?php
/**
 * Author: Sean H. Steimer
 *
 * script for rendering the sidebars
 *
*/
?>
<div class="sidebar span3 hidden-phone">
	<?php dynamic_sidebar( 1 ); ?> 
</div>
<?php
	//if it's a single post, we only want the first sidebar
	if(!is_single()) :
?>
<div class="sidebar span2 hidden-phone hidden-tablet">
	<?php dynamic_sidebar( 2 ); ?> 
</div>
<?php endif; ?>
