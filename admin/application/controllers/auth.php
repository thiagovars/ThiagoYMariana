<?php

class Auth extends Controller {

	function index() {
		$this->loadHelper('url_helper');
		$template = $this->loadView('loginV2');
		$template->render();
	}

	function login() {
		$session = $this->loadHelper('session_helper');
		$strings = $this->loadHelper('string_helper');
		$this->loadHelper('url_helper');
		$usuarios_db = $this->loadModel('users');
		$user = $_REQUEST['user'];
		$passw = $_REQUEST['password'];
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