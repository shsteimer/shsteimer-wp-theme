<?php
/**
 * Author: Sean H. Steimer
 *
 * footer rendering script
 *
 *
*/
?>
<div id="footer" class="row well well-small">
	<div class="span10">
        <div class="fb-like" data-href="<?php echo home_url( '/' ); ?>" data-send="false" 
            data-width="300" data-show-faces="false" data-colorscheme="light"></div>
            <div class="g-plusone" data-size="medium" data-annotation="inline" data-width="250" data-href="<?php echo home_url( '/' ); ?>"></div>
		<a href="https://twitter.com/shsteimer" class="twitter-follow-button" data-show-count="false">Follow me @shsteimer</a>
	</div>
	<div class="span2">
		<span id="copyright" class="muted">Copyright &copy; 2012 Sean H. Steimer</span>
	</div>
</div>
<script type="text/javascript">
    //disqus js
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'shsteimer'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); 
        s.async = true;
        s.type = 'text/javascript';
        s.src = 'http://' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());

    // google +1 button js
    (function() {
        var po = document.createElement('script'); 
        po.type = 'text/javascript'; 
        po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; 
        s.parentNode.insertBefore(po, s);
    })();
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/prettify/prettify.js"></script>  
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>