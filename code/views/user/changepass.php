<h3><?php $lang->get('changepass_header'); ?></h3>
<form action="<?php echo $config->base_url; ?>/user/settings/password" class="form-horizontal" method="post">
	<div class="control-group">
		<label class="control-label" for="oldPass"><?php $lang->get('changepass_old_pass'); ?></label>
		<div class="controls">
			<input class="input-large" type="password" id="oldPass" placeholder="<?php $lang->get('changepass_old_pass'); ?>" name="oldPass">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="newPass"><?php $lang->get('changepass_new_pass'); ?></label>
		<div class="controls">
			<input class="input-large" type="password" id="newPass" placeholder="<?php $lang->get('changepass_new_pass'); ?>" name="newPass">
		</div>
	</div>
	<div class="control-group" id="confirmPassGroup" >
		<label class="control-label" for="confirmPass"><?php $lang->get('changepass_confirm_pass'); ?></label>
		<div class="controls">
			<input class="input-large" type="password" id="confirmPass" placeholder="<?php $lang->get('changepass_confirm_pass'); ?>" name="confirmPass">
			<span class="help-inline"></span>
		</div>
	</div>
	<div class="form-actions">
		<button type="submit" class="btn btn-primary" name="changepass"><?php $lang->get('form_save_button'); ?></button>
		<button type="button" class="btn"><?php $lang->get('form_cancel_button'); ?></button>
	</div>
</form>

<script type="text/javascript">
	$(function() {
		$('#newPass, #confirmPass').keyup(function() {
			if ($('#newPass').val().length && $('#confirmPass').val().length) {
				if ($('#newPass').val() != $('#confirmPass').val()) {
					$('#confirmPassGroup').removeClass('success').addClass('error').find('.help-inline').show().text("<?php $lang->get('changepass_passwords_different');?>");

				} else {
					$('#confirmPassGroup').removeClass('error').addClass('success').find('.help-inline').show().text("<?php $lang->get('changepass_passwords_match');?>");


				}
			} else {
				$('#confirmPassGroup').removeClass('error').find('.help-inline').hide();
			}
		});
		
	});

</script>