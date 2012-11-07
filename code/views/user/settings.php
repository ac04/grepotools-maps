<?php 
	if (isset($data['error'])): ?>
		<div class="alert alert-error">
  			<?php echo $data['error']; ?>
		</div>
	<?php endif; 
	if (isset($data['success'])): ?>
		<div class="alert alert-success">
  			<?php echo $data['success']; ?>
		</div>
	<?php endif; 
	


?>
<div class="row-fluid">
	<div class="span3 well">
		<ul class="nav nav-list">
			<li class="nav-header">Account</li>
			<li class="<?php Director::isPage("/user/settings/password"); ?>"><a href="<?php echo $config->base_url; ?>/user/settings/password"><?php $lang->get('changepass_header'); ?></a></li>
			<li class="<?php Director::isPage("/user/settings/email"); ?>"><a href="<?php echo $config->base_url; ?>/user/settings/email"><?php $lang->get('changeemail_header'); ?></a></li>

  		</ul>
	</div>
	<div class="span9 well"><?php echo $data['settings_page']; ?></div>

</div>