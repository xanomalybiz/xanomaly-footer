<?php 
// Create menu Link
function xanomalyFooterOptionsMenu()
{
	add_options_page(
	
		'Xanomaly Footer Options',
		'Xanomaly Footer Link',
		'manage_options',
		'xanomaly-options',
		'xanomalyOptionsContent'
	);
}

function xanomalyOptionsContent()
{
	//init options global
	global $xanomalyOptions;
	
	ob_start();?>
    	<div class="wrap">
        	<h2> <?php _e('Xanomaly Footer Settings', 'XanomalyDomain') ?></h2>
            <p> <?php _e('Settingd For The Xanomaly Footer Plugin', 'XanomalyDomain') ?></p>
            <form method='post' action='options.php'>
            	<?php settings_fields('xanomalySettingsGroup');?>
                <table class="form-table">
                    <tbody>
                    	<tr>
                        	<th scope="row"><label for="xanomalySettings[enable]"><?php _e('Enable', 'xanomalyDomain'); ?></label></th>
                        	<td><input name="xanomalySettings[enable]" type="checkbox" id="xanomalySettings[enable]" value="1" <?php checked('1', $xanomalyOptions['enable']);?> </td>
                    	</tr>
                        <tr>
                        	<th scope="row"><label for="xanomalySettings[xanomalyUrl]"> <?php _e('URL', 'xanomalyDomain'); ?> </label></th>
                        	<td><input name="xanomalySettings[xanomalyUrl]" type="text" id="xanomalySettings[xanomalyUrl]" value="<?php echo $xanomalyOptions['xanomalyUrl'];?>" class="regular-text">
                            	<p class="description"><?php _e('Change the URL', 'xanomalyDomain');?></p>
                              </td>
                    	</tr>
                         <tr>
                        	<th scope="row"><label for="xanomalySettings[linkColor]"> <?php _e('Link Color', 'xanomalyDomain'); ?> </label></th>
                        	<td><input name="xanomalySettings[linkColor]" type="text" id="xanomalySettings[linkColor]" value="<?php echo $xanomalyOptions['linkColor'];?>" class="regular-text">
                            	<p class="description"><?php _e('Enter a Color or HEX value', 'xanomalyDomain');?></p>
                              </td>
                    	</tr>
                        <tr>
                        	<th scope="row"><label for="xanomalySettings[showInFeed]"> <?php _e('Show In Feed', 'xanomalyDomain'); ?> </label></th>
                        	<td><input name="xanomalySettings[showInFeed]" type="checkbox" id="xanomalySettings[showInFeed]" value="1" <?php checked('1', $xanomalyOptions['showInFeed']);?> </td>
                    	</tr>
                    </tbody>
                </table>
                <p class="submit"><input type="submit" id="submit" class="button button-primary" value="<?php _e('Save Changes', 'xanomalyDomain')?>"></p>
            </form>
        </div>
    <?php
	echo ob_get_clean();	
}

add_action('admin_menu', 'xanomalyFooterOptionsMenu');

//REgister Settings

function xanomalyRegisterSettings()
{
	register_setting('xanomalySettingsGroup', 'xanomalySettings');	
}

add_action('admin_init', 'xanomalyRegisterSettings');

?>