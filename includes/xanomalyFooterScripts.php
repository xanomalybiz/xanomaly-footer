<?php


//ADD Scripts
function xanomalyAddScripts()
{
	wp_enqueue_style('xanomalyFooter-main-style', plugins_url() . '/xanomalyFooter/css/style.css');	
	wp_enqueue_script('xanomalyFooter-main-script', plugins_url() . '/xanomalyFooter/js/main.js');
}

add_action('wp_enqueue_scripts', 'xanomalyAddScripts');
?>