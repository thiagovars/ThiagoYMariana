<?php

class Main extends Controller {
	
	function index()
	{
		if (empty($_SESSION['user'])) {
			$this->redirect('/auth');
		}
		$session = $this->loadHelper('session_helper');
		$guests = $this->loadModel('guests');
		$template = $this->loadView('main');
		$template->set('user_name', $session->get('user'));
		$template->set('invitados', $guests->getGuests());
		$template->set('total_guests', $guests->getTotalGuests());
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
