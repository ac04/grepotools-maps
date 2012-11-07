<?php 

/**
* 
*/
class Controller_User extends Grepotools
{
	
	public static function action_login() {
		if (!User::loggedIn()) {
			if (isset($_POST['login'])) {
				Director::render('default/header');
				Director::render('default/navbar');
				User::login($_POST['username'],$_POST['password']);
				Director::render('default/footer');
			} else {
				Director::render('default/header');
				Director::render('default/navbar');
				Director::render('user/login');
				Director::render('default/footer');
			}
		} else {
			Director::goHome();
		}
		
	}

	public static function action_logout() {
		if (User::loggedIn()) {
			User::logout();
			Director::redirect("user/login");
		} else {
			Director::goHome();
		}
	}

	public static function action_settings($settings_page = null) {
		
		if (User::loggedIn()) {
			$error = $success = null;
			$data = array();
			$user = User::get();

			


			if ($settings_page == "password") {
				$page = "user/changepass";

				if (isset($_POST['changepass'])) {
					if (!empty($_POST['oldPass']) && !empty($_POST['newPass']) && !empty($_POST['confirmPass'])) {
						if (User::checkPassword($_POST['oldPass'])) {
							if ($_POST['newPass'] == $_POST['confirmPass']) {
								

								if ($user->changePassword($_POST['newPass'])) {
									$success = self::$lang->get('changepass_success', false);
								} else {
									$error = self::$lang->get('update_account_error', false);
								}
							} else {
								$error = self::$lang->get('changepass_passwords_different', false);
							}							
						} else {
							$error = self::$lang->get('changepass_password_incorrect', false);
						}
					} else {
						$error = self::$lang->get('form_fields_empty', false);
					}
				}
				Director::render('default/header', array(
					'page_title' => self::$lang->get('changepass_header', false),
					'fluid-layout' => true
				));
				Director::render('default/navbar');
				Director::render('user/settings', array(
					'settings_page' => Director::render($page, NULL, true),
					'error' => (isset($error)) ? $error : NULL,
					'success' => (isset($success)) ? $success : NULL
				));

			} elseif ($settings_page == "email") {
				if (isset($_POST['changeemail'])) {
					if (!empty($_POST['email'])) {
						//TODO add some email validation - simple regex most likely
						if ($user->changeEmail($_POST['email'])) {
							$success = self::$lang->get('changeemail_success', false);
						} else {
							$error = self::$lang->get('update_account_error', false);
						}
					}
				}
				$page = "user/changeemail";
				Director::render('default/header', array(
					'page_title' => self::$lang->get('changeemail_header', false),
					'fluid-layout' => true
				));
				Director::render('default/navbar');
				Director::render('user/settings', array(
					'settings_page' => Director::render($page, NULL, true),
					'error' => (isset($error)) ? $error : NULL,
					'success' => (isset($success)) ? $success : NULL
				));
			}

			else {
				Director::render('user/settings');
			}
			

			
			
			
			




			Director::render('default/footer');
		}
	}


}

 ?>