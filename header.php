<?php
/**
 * Author: Sean H. Steimer
 *
 * Header script rendered by calls to get_header()
 *
 *
*/
?>
    <div id="fb-root"></div>
    <script>(function(d, s, id){var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
            <ul class="nav">
                <li><a class="brand" href="<?php echo home_url( '/' ); ?>">Home</a></li>
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