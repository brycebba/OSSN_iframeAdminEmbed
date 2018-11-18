<?php
/**
 * Open Source Social Network
 *
 * @packageOpen Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
define('__IFRAMEADMINEMBED__', ossn_route()->com . 'iframeAdminEmbed/');

/**
 * Home adminembed initlize the component
 * 
 * return void
 */
function iframeadminembed(){
	ossn_add_hook('newsfeed', "adminembed:right", 'html_widget');
	ossn_register_com_panel('iframeAdminEmbed', 'settings');	
    if (ossn_isAdminLoggedin()) {
        ossn_register_action('html/iframeadminembed/save', __IFRAMEADMINEMBED__ . 'actions/save.php');
    }	
}
/**
 * Show a html on adminembed
 * 
 * return array
 */
function html_widget($hook, $tye, $return){
	$return[] = ossn_plugin_view('iframeadminembed/contents');
	return $return;
}
/**
 * Convert save data into html code
 *
 * @param string $text encoded html code.
 *
 * return void|string
 */
function html_iframeadminembed_output($text = ''){
	if(!empty($text)){
		return html_entity_decode($text, ENT_QUOTES, 'utf-8');
	}
}
ossn_register_callback('ossn', 'init', 'iframeadminembed');
