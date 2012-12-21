<?php
/**
 * Author: Sean H. Steimer
 *
 * Header script rendered by calls to get_header()
 *
 *
*/
?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?> xmlns:fb="http://ogp.me/ns/fb#">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?> xmlns:fb="http://ogp.me/ns/fb#">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?> xmlns:fb="http://ogp.me/ns/fb#">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?> xmlns:fb="http://ogp.me/ns/fb#">
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="<?php echo get_bloginfo('name'); ?>">
    <title><?php
    global $page, $paged;

    // Add wp_title ()
    wp_title( '|', true, 'right' );

    // Add the blog name.
    bloginfo( 'name' );

    // Add the blog description for the home/front page
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";

    // Add a page number if necessary:
    if ($paged >= 2 || $page >= 2)
        echo ' | ' . sprintf(__('Page %s', 'bootstrawp'), max($paged, $page));
    ?></title>

    <?php if ( is_singular() && get_option( 'thread_comments' )) wp_enqueue_script( 'comment-reply' ); ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive-styles.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/prettify/prettify.css" />
    
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?> " />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="fb-root"></div>
    <script>(function(d, s, id){var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
            <a class="brand" href="<?php echo home_url( '/' ); ?>">Home</a>
            <ul class="nav">
                <?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
                <li>
                    <form class="navbar-search form-search" method="get" action="<?php echo home_url( '/' ); ?>">
                        <div class="input-append">
                            <input type="text" name="s" class="search-query" placeholder="Search">
                            <button type="submit" class="btn btn-inverse"><i class="icon-search icon-white"></i></button>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <div class="hero-unit">
        <a href="<?php echo home_url( '/' ); ?>"><h1><?php bloginfo('name'); ?></h1></a>
        <p><?php bloginfo('description'); ?></p>
    </div>