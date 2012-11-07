<div class="navbar navbar-fixed-top ">
	<div class="navbar-inner">
		<a class="brand" href="<?php echo $config->base_url; ?>">Grepotools</a>
		<ul class="nav">
			<li class="<?php Director::isPage("/"); ?>"><a href="<?php echo $config->base_url; ?>"><?php $lang->get("home_link"); ?></a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<?php $market = Market::getCurrent(); ?>
					<img class="flag" src="<?php echo $config->base_url; ?>/assets/img/flags/<?php echo $market->flagPath; ?>" />
					<b class="caret"></b>
				</a>
				<ul class="dropdown-menu">
					<?php 
						foreach(Market::getEnabled() as $market) { ?>
							<li><img class="flag" src="<?php echo $config->base_url; ?>/assets/img/flags/<?php echo $market->flagPath; ?>" />   -   <?php echo strtoupper($market->market); ?></li>
					<?php } ?>
				</ul>
			</li>
		</ul>
		<ul class="nav pull-right">
			<li class="divider-vertical"></li>
			<li class="dropdown pull-right"><?php
				if ($user->isLoggedIn()) { ?>
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<?php echo $user->getVal('username'); ?>
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $config->base_url; ?>/user/settings"><?php $lang->get("settings"); ?></a></li>
						<li><a href="<?php echo $config->base_url; ?>/user/logout"><?php $lang->get("logout"); ?></a></li>
					</ul>
				<?php } else { ?>

					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Guest <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li class="span3">
							<div>
								<form action="<?php echo $config->base_url; ?>/user/login" class="form-signin" method="post">
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
						</li>
					</ul>
				<?php } ?>
			</li>
		</ul>
		<form class="navbar-form pull-right hidden-phone">
			<div class="input-append">
				<input class="span2" type="text" placeholder="<?php $lang->get("search_placeholder"); ?>">
				<button class="btn" type="button"><?php $lang->get("search_button"); ?></button>
			</div>
		</form>
	</div>
</div>
