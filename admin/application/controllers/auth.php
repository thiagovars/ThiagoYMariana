<?php

class Auth extends Controller {

	function index() {
		$template = $this->loadView('login');
		$template->render();
	}

	function login() {
		$session = $this->loadHelper('session_helper');
		$strings = $this->loadHelper('string_helper');
		$usuarios_db = $this->loadModel('users');
		$user = $_POST['user'];
		$passw = $_POST['password'];
		if ($usuarios_db->getAuthentication($user, $passw)) {
			$session->set('user', $strings->caption($user));
			$this->redirect('/main');
		} else {
			$this->redirect('/auth');
		}
	}

	function logout() {
		$session  = $this->loadHelper('session_helper');
		$session->set('user', '');
		$this->redirect('/auth');
	}
}