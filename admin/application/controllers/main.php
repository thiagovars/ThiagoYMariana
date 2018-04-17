<?php

class Main extends Controller {
	
	function index()
	{
		$guests   = $this->loadModel('guests');
		$template = $this->loadView('main');
    $session  = $this->loadHelper('session_helper');
    if (empty($session->get('user'))) {
      $this->redirect('/auth');
    }
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

  function remover() {
  	$guests = $this->loadModel('guests');
  	$name = $guests->getName($_REQUEST['guest_id']);
  	$aRetorno = array('name' => utf8_encode($name), 'success' => false);
  	$aRetorno['success'] = $guests->remove($_REQUEST['guest_id']);
  	return json_encode($aRetorno, JSON_FORCE_OBJECT);
  }

  function adicionar() {
    $serialGuest = array();
    $retorno = array('success' => false);
    foreach ($_REQUEST['guest'] as $field => $value) {
      $serialGuest[$value['name']] = $value['value'];
    }
    $guest = $this->loadModel('guests');
    if ($guest->include($serialGuest)) {
      $retorno['success'] = true;
    }
    return json_encode($retorno, JSON_FORCE_OBJECT);
  }
}//close class Main