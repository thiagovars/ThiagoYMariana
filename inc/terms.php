<?php
/**
 * Classe statica que contém listas de termos traduzidos
 * a tradução funciona em um só via pt -> ES ou PT
 *
 * !importante: a variável $language é extraída e disponível para a classe 
 * a partir do arquivo traduc.php que amarra tudo na interface
 * O arquivo chamado é o arquivo traduc.php
 *
 * @author Pedro Silveira <thiagovars@gmail.com>
 */
class Terms {

	static function getTerms($langeuage, $string) {
		$terms = array(
			'pt' => array(
				'title-main'             => 'Convite Virtual - Casamento Thiago & Mariana',
				'nos casamos'            => 'Nos Casaremos!',
				'salão festas e eventos' => 'Salão Cielo Festas e Eventos',
				'home'                   => 'Home',
				'casal'                  => 'Casal',
				'nossa história'         => 'Nossa História',
				'galeria'                => 'Galeria',
				'caixinha'               => 'Caixinha',
				'comparecer'             => 'Confirmar Presença',
				'nossa'                  => 'Nossa',
				'história'               => 'História',
				'galeria'                => 'Galeria',
				'comparecer?'            => 'Você vai aparecer?'
				
			),
			'es' => array(
				'title-main'             => 'Invitación Virtual - Casamiento Thiago & Mariana',
				'nos casamos'            => '¡Nos Casamos!',
				'salão festas e eventos' => 'Salón Cielo Fiestas y Eventos',
				'home'                   => 'Home',
				'casal'                  => 'La Pareja',
				'nossa história'         => 'Nuestra Historia',
				'galeria'                => 'Galería',
				'caixinha'               => 'Colectivo',
				'comparecer'             => 'Confirmar Asistencia',
				'nossa'                  => 'Nuestra',
				'história'               => 'Historia',
				'galeria'                => 'Galería',
				'comparecer?'            => '?Vos vas a venir?'
			)
		);
		return $terms[$langeuage][$string];
	}

	static function getText() {

	}

	static function getMes($language, $string, $curto) {
		$mes = array(
			'pt' => array(
				'janeiro'                => 'Janeiro',
				'fevereiro'              => 'Fevereiro',
				'março'                  => 'Março',
				'abril'                  => 'Abril',
				'maio'                   => 'Maio',
				'junho'                  => 'Junho',
				'julho'                  => 'Julho',
				'agosto'                 => 'Agosto',
				'setembro'               => 'Setembro',
				'outubro'                => 'Outubro',
				'novembro'               => 'Novembro',
				'dezembro'               => 'Dezembro',
			),
			'es' => array(
				'janeiro'                => 'Enero',
				'fevereiro'              => 'Febrero',
				'março'                  => 'Marzo',
				'abril'                  => 'Abril',
				'maio'                   => 'Mayo',
				'junho'                  => 'Junio',
				'julho'                  => 'Julio',
				'agosto'                 => 'Agosto',
				'setembro'               => 'Setiembre',
				'outubro'                => 'Ouctubre',
				'novembro'               => 'Noviembro',
				'dezembro'               => 'Diciembre',
			),
		);
		return ($curto) ? substr($mes[$language][$string], 0, 3) : $mes[$language][$string];
	}
}