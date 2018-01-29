<?php
/**
 * Classe statica que contém listas de termos traduzidos
 * a tradução funciona em um só via pt -> ES ou PT
 *
 * !importante: a variável $language é extraída e disponível para a classe 
 * a partir do arquivo traduc.php que amarra tudo na interface
 * O arquivo chamado é o arquivo traduc.php
 *
 * Objeto $db é necessário para recuperar o corpo dos textos traduzidos
 * @author Pedro Silveira <thiagovars@gmail.com>
 */

require_once('class/texts.php');

class Terms {

	static function traducText($slug, $language) {
		$db = new Texts();
		return $db->getText($slug, $language);
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
				'ano novo, vida nova'    => 'Ano novo, vida nova.',
				'tempo circular'         => 'Tempo circular.',
				'por isso daremos'       => 'Por isso daremos nosso',
				'próximo passo'          => 'próximo passo',
				'contando os minutos'    => 'Contando os minutos para o grande dia!',
				'recordações em foto'    => 'Memória em fotos de nosso tempo juntos.',
				'quer confirmar'         => 'Gostaria de confirmar sua ',
				'presença'               => 'presença?',
				'obrigado'               => 'Obrigado!',
				'confirmar'              => 'Confirmar!',
				'seu nome'               => 'Seu Nome',
				'seu e-mail'             => 'Seu E-mail',
				'sua mensagem'           => 'Sua Menssagem',
				'menu normal'            => 'Menu Clássico',
				'menu vegano'            => 'Menu Vegano',
				'que música gostaria'    => 'Música (opcional)',
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
				'ano novo, vida nova'    => 'Año nuevo, vida nueva.',
				'tempo circular'         => 'Tiempo circular.',
				'por isso daremos'       => 'Por eso daremos nuestro',
				'próximo passo'          => 'siguiente paso',
				'contando os minutos'    => '¡Contando los minutos para el gran día!',
				'recordações em foto'    => 'Recuerdos fotográficos de nuestro tiempo juntos.',
				'quer confirmar'         => '¿Quiere confirmar',
				'presença'               => 'asistencia?',
				'obrigado'               => '¡Gracias!',
				'confirmar'              => '¡Asistiré!',
				'seu nome'               => 'Tu Nombre',
				'seu e-mail'             => 'Tu Dirección de Mail',
				'sua mensagem'           => 'Tu Mensaje',
				'menu normal'            => 'Menú Clásico',
				'menu vegano'            => 'Menú Vegano',
				'que música gostaria'    => '¿Canción? (optativa)',
			)
		);
		return $terms[$langeuage][$string];
	}
}