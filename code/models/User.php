<?php 

global $db;
/**
* This model will allow for all getting and setting of information regarding users
*/
class User extends Grepotools
{
	private 
		$username, 
		$loggedIn, 
		$email, 
		$language;

	
	function __construct() {
		// $db = $db;
		
		if (is_null($this->username)) {
	
			$this->username = "Guest";
			$this->loggedIn = false;
			$this->market = Market::get("en");
			$this->language = "en-gb";
		} else {
	
			$this->loggedIn = true;
			$this->market = Market::get($this->market);
	
		}


	
	}


	public static function login($username, $password) {
		if (!self::loggedIn()) {

			

			$query = self::$db->prepare("SELECT * FROM user WHERE username=:username LIMIT 1");
			$query->execute(array(":username" => $username));
			

			$users = $query->fetchAll(PDO::FETCH_CLASS, 'User');

			if (count($users)) {

				foreach($users as $user) {
					if (hash('sha512',$password.$user->unique_password_salt) == $user->password) {
						unset($user->unique_password_salt, $user->password);
						$_SESSION['user'] = serialize($user);
						// $_SESSION['success-alerts'][] = "<div class='alert alert-success span4'>You have successfully logged in</div>";
						Director::goHome();
					}else {
						// $_SESSION['errors'][] = "<div class='alert alert-error span4'>The username or password is incorrect</div>";
					}
					
				
				}
				
			} else {
				// $_SESSION['errors'][] = "<div class='alert alert-error span4'>The username or password is incorrect</div>";
			}
		}

	}

	public static function logout() {

		unset($_SESSION['user']);

	}
	public function updateSessionData() {
		
		$query = self::$db->prepare("SELECT * FROM user WHERE username=:username LIMIT 1");
		$query->execute(array(":username" => $this->username));
		$users = $query->fetchAll(PDO::FETCH_CLASS, 'User');
		foreach($users as $user) {			
			unset($user->unique_password_salt, $user->password);
			$_SESSION['user'] = serialize($user);	
		}	
			
	}
	public static function get() {
		
		if (isset($_SESSION['user'])) {
			return unserialize($_SESSION['user']);
		}
		return new User();
		// throw new Exception("TODO - make get function");

	}

	public function save() {
	
		throw new Exception("TODO make save function");
	
	}

	public function isLoggedIn() {
	
		return $this->loggedIn;
	
	}
	public static function loggedIn() {
		$user = self::get();
		return $user->getVal('loggedIn');
	}

	public function getVal($value) {
	
		return $this->$value;
	
	}

	public static function checkPassword($password) {
		$user = self::get();
		if ($user->username != "Guest") {
			$salt = $user->getSalt();
			$checkPass = self::$db->prepare("SELECT id FROM user WHERE username = :username AND password = :password LIMIT 1");
			if ($checkPass->execute(array(":username"=>$user->username, ":password" => hash('sha512',$password.$salt)))) {
				if ($checkPass->fetchColumn()) {
					return true;
				} else {
					return false;
				}
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	public function changePassword($password) {
		
		$salt = $this->getSalt();
		$query = self::$db->prepare("UPDATE user SET password = :password WHERE username = :username LIMIT 1");
		if ($query->execute(array(":password" => hash('sha512',$password.$salt), ":username" => $this->username))) {
			return true;
		} 
		return false;
		
		
	}

	public function getSalt() {
		$getSalt = self::$db->prepare("SELECT unique_password_salt FROM user WHERE username = :username LIMIT 1");
		if ($getSalt->execute(array(":username"=>$this->username))) {//$user->username));
			return $getSalt->fetchColumn();
		}
		return false;
	}

	public function changeEmail($email) {

		$query = self::$db->prepare("UPDATE user SET email = :email WHERE username = :username LIMIT 1");
		if ($query->execute(array(":email"=>$email, ":username"=>$this->username))) {
			$this->updateSessionData();
			return true;
		} 
		return false;
	}

} 


?>