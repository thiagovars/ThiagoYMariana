<?php

class Users extends Model {

	public function getAuthentication($user, $passw) {
		$this->query('select user_id, name, salt, password from users where login = :login');
		$this->bind(':login', utf8_decode($user));
		$resultset = $this->single();
		$passw .= $resultset['salt'];
		return (hash('sha512', $passw) == $resultset['password']);
	}
}