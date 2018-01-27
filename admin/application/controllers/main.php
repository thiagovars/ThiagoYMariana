<?php

class Main extends Controller {
	
	function index()
	{
		$session = $this->loadHelper('session_helper');
		$guests = $this->loadModel('guests');
		if (empty($session->get('user'))) {
			$this->redirect('/auth');
		}
		$template = $this->loadView('main');
		$template->set('user_name', $session->get('user'));
		$template->set('invitados', $guests->getGuests());
		$totals = $guests->getTotal();
		$template->set('total', $this->getTotal($totals));
		$template->render();
	}
  
  function getTotal($totals) {
  	$sum = 0;
  	foreach ($totals as $key => $total) {
  		$sum += $total;
  	}
  	$totals['normal'] = $sum;
  	return $totals;
  }
}

?>
