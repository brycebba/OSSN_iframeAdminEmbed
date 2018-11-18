<?php
/*
 */
echo ossn_view_form('save', array(
    'action' => ossn_site_url() . 'action/html/iframeadminembed/save',
    'component' => 'iframeAdminEmbed',
	'params' => $params,
), false);
