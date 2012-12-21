<?php 
/** register the sidebars */
$sidebarArgs = array(
	'before_widget' => '<div id="%1$s" class="well widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>' );
register_sidebars( 2, $sidebarArgs );

function pagination() {
    global $wp_query;
	$total = $wp_query->max_num_pages;
	// only bother with the rest if we have more than 1 page!
	if ( $total > 1 )  {
	     // get the current page
	     $curPage = (get_query_var('paged')) ? get_query_var('paged') : 1;

	     //loop all the pages
	    echo '<div class="pagination">';
	    $big = 999999999; // need an unlikely integer
	    echo paginate_links( 
	    	array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $wp_query->max_num_pages,
				'type' => 'list'
			) 
		);

	    echo '</div>';
		
	}
}



$theTemplateName='index';
function setTemplateName($name) {
	global $theTemplateName;
	$theTemplateName=$name;
}

function getTemplateName() {
	global $theTemplateName;
	return $theTemplateName;
}


?>