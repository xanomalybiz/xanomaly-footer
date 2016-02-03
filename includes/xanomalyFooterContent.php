<?php
function xanomalyAddFooter($content)
{
	global $xanomalyOptions;
	
	$footer_content = '<hr>';
	$footer_content .= '<a id="subscribe-xanomaly-link" style="color:'.$xanomalyOptions['linkColor'].'" href ="'.$xanomalyOptions['xanomalyUrl'].'"> <h4>Powered by <span id="logo"><span id="homeBannerLogoX" class="xFont">X</span><span id="secondHalfLogo">anomaly</span> </span></h4></a>';

	
	if($xanomalyOptions['showInFeed'])
	{
		if(is_single() || is_home() && $xanomalyOptions['enable'])
		{
			return $content . $footer_content;	
		}
			
	}
	else
	{
		if(is_single() && $xanomalyOptions['enable'])
		{
			return $content . $footer_content;	
		}
			
	}
	return $content;
	
	
	
}
add_filter('the_content', 'xanomalyAddFooter');
?>