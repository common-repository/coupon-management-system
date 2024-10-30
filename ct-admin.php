<div class="wrap">  
    <h1>CashOff Display Options</h1>

<?php  
//Form data sent  
if (array_key_exists('subdomain', $_POST)) {
    update_option('ct_subdomain', $_POST['subdomain']);
}
if (array_key_exists('showtab', $_POST)) {
    update_option('ct_showtab', $_POST['showtab']); 
}
?>
    <div class="updated"><p><strong><?php _e('Username saved.' ); ?></strong></p></div>  
<?php

$subdomain = get_option('ct_subdomain');
$showtab = get_option('ct_showtab');  
?>

    <hr />
    <h2><b>Step 1: Set your CashOff username</b></h2>
    <form name="ct-form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">  
        <p>Enter CashOff username: <b>http://</b><input type="text" name="subdomain" value="<?php echo $subdomain; ?>" size="20"><b>.cashoff.com</b></p>  

		<p>Show tab on site: 
			<input type="radio" name="showtab" value="0" <?php checked( '0' == $showtab ); ?> />Yes
			<input type="radio" name="showtab" value="1" <?php checked( '1' == $showtab ); ?> />No
		</p>
        
		<p><input type="submit" name="Submit" value="Save" /></p>

    <p>Test Plugin Now - enter username <b>"demo"</b> without quotes, save and then preview your home page to see how this works on your website.</p>
    <p>Go to <a href="http://cashoff.com" target="_blank">Cashoff.com</a> to get your own username! You will also be able to control other features.</p>
	<p>Contact support@cashoff.com with questions.</p>
    </form>  
</div>  
