<?php
/*
 */
 ?>
 <div>
	<label><?php echo ossn_print('iframeadminembed:entertext'); ?></label>
	<span>
		<input type="text" name="html" value="<?php $component = new OssnComponents; $settings = $component->getSettings('iframeAdminEmbed'); echo $settings->iframe_src;?>" />
		<input type="submit" value="<?php echo ossn_print('button:save'); ?>" class="btn btn-primary"/>
	</span>
 </div>
 <div>
	<iframe src="<?php $component = new OssnComponents; $settings = $component->getSettings('iframeAdminEmbed'); echo $settings->iframe_src;?>" style="width: 100%;" onload="this.height=screen.height*0.45;" ></iframe>
 </div>
   
