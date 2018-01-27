<?php

class Guests extends Model {

	function getGuests() {
		$this->query('select guest_id, name, surname, undertwelve, vegan_menu, confirmed from guests');
		return $this->guests = $this->resultset();
	}

}