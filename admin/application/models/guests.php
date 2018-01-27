<?php

class Guests extends Model {

	function getGuests() {
		$this->query('select guest_id, name, surname, undertwelve, vegan_menu, confirmed from guests');
		return $this->resultset();
	}

	function getTotal() {
		$this->query('select (select count(guest_id) * 730 from guests where undertwelve = 1 and confirmed = 1) as kids, 
(select count(guest_id) * 1200 from guests where vegan_menu = 1 and confirmed = 1) as vegans, 
(select count(guest_id) * 1200 from guests where undertwelve = 0 and vegan_menu = 0 and confirmed = 1) as adults from dual');
		return $this->single();
	}

}