<?php

class Main extends Controller {
	
	function index()
	{
		$template = $this->loadView('inicio');
		$template->render();
	}
    
}

?>
