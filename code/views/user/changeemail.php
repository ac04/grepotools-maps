<h3><?php $lang->get('changeemail_header'); ?></h3>
<form action="<?php echo $config->base_url; ?>/user/settings/email" class="form-horizontal" method="post">
	<div class="control-group">
		<label class="control-label" for="email"><?php $lang->get('changeemail_email_address'); ?></label>
		<div class="controls">
			<input class="input-large" type="text" id="email" value="<?php echo $user->getVal('email'); ?>" name="email">
		</div>
	</div>
	
	<div class="form-actions">
		<button type="submit" class="btn btn-primary" name="changeemail"><?php $lang->get('form_save_button'); ?></button>
		<button type="button" class="btn"><?php $lang->get('form_cancel_button'); ?></button>
	</div>
</form>

<script type="text/javascript">
	$(function() {
		
		
	});

</script>