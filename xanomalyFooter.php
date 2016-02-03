<?php
/**
* Plugin Name: Xanomaly Footer
* Description: Adds Powered by Xanomaly To The End Of Posts
* Version: 10.0
* Author: Xanomaly
**/

//Exit if accessed Directly
if(!defined('ABSPATH'))
{
	exit;	
}
//Global Options Variable
$xanomalyOptions = get_option('xanomalySettings');

//Load Scripts
require_once(plugin_dir_path(__FILE__). '/includes/xanomalyFooterScripts.php');
//load Content
require_once(plugin_dir_path(__FILE__). '/includes/xanomalyFooterContent.php');
//load settings
if(is_admin())
{
require_once(plugin_dir_path(__FILE__). '/includes/xanomalyFooterSettings.php');
}
?>