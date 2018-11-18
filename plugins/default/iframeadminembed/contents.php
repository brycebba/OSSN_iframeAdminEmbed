<?php
/*
 */
$component = new OssnComponents;
$settings  = $component->getSettings('iframeAdminEmbed');

echo iframeadminembed_output($settings->iframe_src);
