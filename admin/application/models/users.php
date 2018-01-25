<?php

class Users extends Model {

	public function getAuthentication($user, $passw) {
		// $resultset = $this->query('SELECT name FROM USERS WHERE LOGIN = \''.$user.'\' AND PASSWORD = \''.$passw.'\'');
		$resultset = $this->query('select name from users where login = :login and password = :password');
		$this->bind(':login', utf8_decode($user));
		$this->bind(':password', utf8_decode($passw));
		$resultset = $this->single();
		var_dump($this);
		return $resultset;
	}
}