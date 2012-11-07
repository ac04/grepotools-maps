<div class="login-box span5 well">
	<form action="<?php echo Grepotools::$config->base_url; ?>/user/login" class="form-signin" method="post">
		<h2 class="form-signin-heading"><?php $lang->get("login"); ?></h2>
		<input type="text" class="input-large" placeholder="<?php $lang->get("username_placeholder"); ?>" name="username">
		<input type="password" class="input-large" placeholder="<?php $lang->get("password_placeholder"); ?>" name="password">
		<label class="checkbox">
			<input type="checkbox" value="remember-me"><?php $lang->get("remember"); ?>
		</label>
		<button class="btn  btn-primary" type="submit" name="login" value="login"><?php $lang->get("login_button"); ?></button>
		<!-- <a href="?action=login" class="btn btn-primary">Log In</a> -->
		<a href="#" class="btn"><?php $lang->get("register_button"); ?></a>
	</form>
</div>

<div class="register-box span5 well">
	<form action="<?php echo Grepotools::$config->base_url; ?>/user/login" class="form-signin" method="post">
		<h2 class="form-signin-heading"><?php $lang->get("register_button"); ?></h2>
		blah blah blah
	</form>
</div>
<div class="span10 well">By logging into this site.....Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>