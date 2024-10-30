<?php 
wp_enqueue_style('custom-wp-css', 'http://'.$cashoff['subdomain'].'.'.$cashoff['domain'].'/Wordpress/css.css');
wp_enqueue_script('custom-wp-tools', 'http://www.'.$cashoff['domain'].'/js/jquery.tools.min.js', '', '', true);
wp_enqueue_script('custom-wp-js', 'http://'.$cashoff['subdomain'].'.'.$cashoff['domain'].'/Wordpress/js.js', '', '', true);
?>

<?php if(isset($cashoff['showtab']) && $cashoff['showtab'] == '0') { ?>
	<div class="coupon-panel tabs">
	  <a href="//<?=$cashoff['subdomain']?>.<?=$cashoff['domain']?>/" rel="#cashoffOverlay" target="_blank"></a>
	</div>
	<div id="cashoffOverlay" align="center" style="padding-top: 10px;">
	  <iframe border="0" id="cashoff" width="100%" height="720" rel="//<?=$cashoff['subdomain']?>.<?=$cashoff['domain']?>/Wordpress/canvas" scrollbar="no" marginwidth="0" marginheight="0" hspace="0" style="border: none;"></iframe>
	</div>
<?php } ?>