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

	static function traducText($language, $slug) {
		$oComecoPT = 'Tudo começa em um dia qualquer, de um ano qualquer, mas de uma forma atípica: a golpes. O kendo
			foi o responsável pelo nosso primeiro encontro. A pesar da distância que nos separava, o vínculo que haviamos criado
			tornava-se cada vez mais forte. Finalmente, em um 29 de janeiro pudemos entender o que sentiamos um pelo outro. Dessa
			forma prometemos tentar o "nós dois" apesar das fronteiras.';
		$oComecoES = 'Todo se in icia en un día cualquiera, de un año cualquiera, pero de una forma atípica: a los golpes. El kendo fue el responsable de nuestro primer encuentro. A pesar de la distancia que nos separaba, el vínculo que habíamos creado se hacía cada vez más fuerte. Finalmente, un 29 de enero pudimos entender qué sentíamos el uno por el otro. De esta forma nos prometimos intentar el "nosotros" a pesar de las fronteras.';
		$ventosPT = 'A meses indo e vindo, lutando contra o tempo e vencendo os quilômetros, foi em uma tarde de setembro que tudo
			mudou. Quando alguém se sente muito unido ao outro, a euforia dos encontros e o vazio da separação, podem jogar fardos
			pesados. E assim nos propusemos um novo objetivo: não deixar que o ano terminasse com o "nós dois" à distância. Agora a
			promessa se converteu em pacto.';
		$ventosES = 'Tras meses yendo y viniendo, de pelear contra el tiempo y los kilómetros; en una tarde de setiembre, simplemente todo cambió. Cuando alguien se siente muy unido al otro, la euforia de los encuentros y el vacío tras la separación, pueden jugar malas pasadas. Así que nos propusimos un nuevo objetivo: no dejaríamos que el año terminara con "nosotros" a distancia. Ahora la promesa, se volvió un pacto.';
		$text = array(
			'pt' => array(
				'o começo' => $oComecoPT,
				'ventos primaverais' => $ventosPT,
			),
			'es' => array(
				'o começo' => $oComecoES,
				'ventos primaverais' => $ventosES,
			),
		);
		return $text[$language][$slug];
	}

	static function getMes($language, $string, $curto = false) {
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
				'comparecer?'            => 'Você vai aparecer?',
				'começa a viagem...'     => 'Começa nossa viagem...',
				'ventos de primavera'    => 'Ventos Primaverais.',
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
				'comparecer?'            => '?Vos vas a venir?',
				'começa a viagem...'     => 'Comienza nuestro viaje...',
				'ventos de primavera'    => 'Vientos de Primavera.',
			)
		);
		return $terms[$langeuage][$string];
	}

	
}