<?php
/*
 */
$input = input('html');
$component = new OssnComponents;

$vars = array('iframe_src' => $input);

if($component->setSettings('iframeAdminEmbed', $vars)){
	ossn_trigger_message(ossn_print('iframeadminembed:saved'));
	redirect(REF);
} else {
	ossn_trigger_message(ossn_print('iframeadminembed:save:error'), 'error');
	redirect(REF);
}
