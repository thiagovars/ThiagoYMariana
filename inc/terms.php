<?php
class Terms {

	static function getTerms($langeuage, $string) {
		$terms = array(
			'pt' => array(
				'nos casamos' => 'Nos Casaremos!',
				'salão festas e eventos' => 'Salão Cielo Festas e Eventos',
				'home' => 'Home',
				'casal' => 'Casal',
				'nossa história' => 'Nossa História',
				'galeria' => 'Galeria',
				'caixinha' => 'Caixinha',
				'comparecer' => 'Confirmar Presença',
				'nossa' => 'Nossa',
				'história' => 'História',
				'galeria' => 'Galeria',
				'comparecer?' => 'Você vai aparecer?'
			),
			'es' => array(
				'nos casamos' => '¡Nos Casamos!',
				'salão festas e eventos' => 'Salón Cielo Fiestas y Eventos',
				'home' => 'Home',
				'casal' => 'La Pareja',
				'nossa história' => 'Nuestra Historia',
				'galeria' => 'Galería',
				'caixinha' => 'Colectivo',
				'comparecer' => 'Confirmar Asistencia',
				'nossa' => 'Nuestra',
				'história' => 'Historia',
				'galeria' => 'Galería',
				'comparecer?' => '?Vos vas a venir?'
			)
		);
		return $terms[$langeuage][$string];
	}
}