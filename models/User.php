<?php
class User extends ActiveRecord\Model {
	public function processLogin($username, $password) {
		if(!empty($username)){
			$_SESSION['username'] = $username;
		}
		if(!empty($password)){
			$_SESSION['password'] = $password;
		}
		$passwordHash = md5($password);
		$user = User::find('first',array('conditions' => array('user_name=? AND password=?',$username,$passwordHash)));
		if(!empty($user)){
			$_SESSION["userId"] = $user->id;
			$_SESSION["userName"] = $user->user_name;
			$_SESSION["userDisplayname"] = $user->display_name;
			$_SESSION["userEmail"] = $user->email;
			$_SESSION["loginsuccessonce"] = "loginsuccessonce";
			$user->last_login_timestamp = time();
			$user->last_login_datetime = date('Y-m-d H:i:s');
			$user->last_active_timestamp = time();
			$user->last_active_datetime = date('Y-m-d H:i:s');
			$user->save(); //save timestamp and datetime upon login
			return true;
		}
	}
	public function processRegistration($username, $displayname, $password, $emailaddress) {
		if(!empty($username)){
			$_SESSION['username'] = $username;
		}
		if(!empty($displayname)){
			$_SESSION['displayname'] = $displayname;
		}
		if(!empty($password)){
			$_SESSION['password'] = $password;
		}
		if(!empty($emailaddress)){
			$_SESSION['emailaddress'] = $emailaddress;
		}
		if (!filter_var($emailaddress, FILTER_VALIDATE_EMAIL)) {
			#Invalid email format
		} else {
			$usercheck = User::find('first',array('conditions' => array('user_name=?',$username)));
			$emailcheck = User::find('first',array('conditions' => array('email=?',$emailaddress)));
			if( !empty($username) && empty($usercheck) && empty($emailcheck) && !empty($displayname) && !empty($password) ){
				$passwordHash = md5($password);
				$user = User::create(array(
					'user_name' => $username,
					'display_name' => $displayname,
					'password' => $passwordHash,
					'email' => $emailaddress
				));
				return true;
			}
		}
		
	}
}
?>