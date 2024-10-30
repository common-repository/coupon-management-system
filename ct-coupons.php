<?php
/*
Plugin Name: CashOff
Plugin URI: http://www.cashoff.com
Description: Retrieves a list of coupons that you designed with cashoff.com
Version: 2.2.4
Author: cashoff.com
Author URI: http://www.cashoff.com/
*/

// If you do not currently have a cashoff account, you may try our free
// account.  Just go to www.cashoff.com
global $cashoff;
$cashoff = array(
  'domain' => 'cashoff.com',
  'subdomain' => get_option('ct_subdomain'),
  'showtab' => get_option('ct_showtab')
);

function ct_draw_tab() {
    global $cashoff;
    include 'ct-tab.php';
}

function ct_admin() {  
    include('ct-admin.php');
}  

function ct_admin_actions() {  
    add_options_page("CashOff", "CashOff", 1, "coupontank-coupons", "ct_admin");  
}  

function cashoff_coupon( $attrs ) {
	
	$username = get_option('ct_subdomain');
	$couponsIds = $attrs['coupons'];
	$height = $attrs['height'];
	
    $coupons = "<iframe border='0' height='".$height."' id='cashoff_coupon' src='//".$username.".cashoff.com/Wordpress/coupons?username=".$username."&coupons=".$couponsIds."' scrollbar='no' marginwidth='0' marginheight='0' hspace='0' style='border: none;'></iframe>";
	
	return $coupons;
}

add_action('wp_footer', 'ct_draw_tab');	
add_action('admin_menu', 'ct_admin_actions');
add_shortcode('cashoff', 'cashoff_coupon');
