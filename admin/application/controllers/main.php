<?php

class Main extends Controller {
	
	function index()
	{
		$session = $this->loadHelper('session_helper');
		if (empty($session->get('user'))) {
			$this->redirect('/auth');
		}
		$template = $this->loadView('main');
		$template->set('user_name', $session->get('user'));
		$template->render();
	}
    
}

?>
