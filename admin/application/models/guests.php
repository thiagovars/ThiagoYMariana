<?php

class Guests extends Model {

	function getGuests() {
		$this->query("SELECT guest_id, name, surname, undertwelve, vegan_menu, confirmed FROM guests ORDER BY name");
		return $this->resultset();
	}

	function getTotal() {
		$this->query('select (select count(guest_id) * 730 from guests where undertwelve = 1 and confirmed = 1) as kids, 
			(select count(guest_id) * 1200 from guests where vegan_menu = 1 and confirmed = 1) as vegans, 
			(select count(guest_id) * 1200 from guests where undertwelve = 0 and vegan_menu = 0 and confirmed = 1) as adults from dual');
		return $this->single();
	}

	function getRelations($nameFather) { //possible deprecated
		$this->query('select * from guests left join guestsusers on guestsusers.child_id = guests.guest_id
			where guestsusers.father_id in (select g.guest_id from guests g where g.name like :nameFather)');
		$this->bind(':nameFather', '%'.utf8_encode($nameFather).'%');
		return $this->resultset();
	}

	function getTotalGuests() {
		$this->query('SELECT confirmed FROM guests');
		$resultset = $this->resultset();
		$total = array('total' => 0, 'comparecerao' => 0, 'naoComparecerao' => 0, 'aindaNaoResponderam' => 0);
		foreach ($resultset as $key => $guest) { 
			$total['total'] = $key + 1;
			if ($guest['confirmed'] == 1) {
				$total['comparecerao'] += 1;
			} else if ($guest['confirmed'] == 2) {
				$total['naoComparecerao'] += 1;
			} else {
				$total['aindaNaoResponderam'] += 1;
			}
		}
		return $total;
	}

	function getName($guests_id) {
		$this->query('SELECT name, surname FROM guests WHERE guest_id = :guest_id order by name');
		$this->bind(':guest_id', $guests_id);
		$resultset = $this->resultset();
		foreach ($resultset as $key => $guest) {
			$name = $guest['name'] . ' ' . $guest['surname'];
		}
		return $name;
	}

	function remove($guests_id) {
		if (empty($guests_id)) {
			return false;
		}
		$this->query("DELETE FROM guests WHERE guest_id = :guest_id");
		$this->bind(':guest_id', $guests_id);
		return $this->execute();
	}

	function include($guest) {
		if (count($guest) == 0) {
			return false;
		}
		$retorno = array('success' => false, 'lastid' => 0);
		$this->query("INSERT INTO guests (created, name, surname, undertwelve, vegan_menu, confirmed) VALUES (:created, :name, :surname, :undertwelve, :vegan_menu, :confirmed)");
		$this->bind(':created', 'now()');
		$this->bind(':name', utf8_decode($guest['name']));
		$this->bind(':surname', utf8_decode($guest['apellido']));
		$this->bind(':undertwelve', (boolean)$guest['underTwelve']);
		$this->bind(':vegan_menu', (boolean)$guest['vegan']);
		$this->bind(':confirmed', 0);
		$this->execute();
		if ($this->lastInsertId()) {
			$retorno['success'] = true;
			$retorno['lastid'] = $this->lastInsertId();
		}
		return json_encode($retorno, JSON_FORCE_OBJECT);
	}
}