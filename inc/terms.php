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

require_once(dirname(dirname(__FILE__)).ds.'class'.ds.'texts.php');

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
				'title-main'              => 'Convite Virtual - Casamento Thiago & Mariana',
				'nos casamos'             => 'Nos Casaremos!',
				'salão festas e eventos'  => 'Salão Cielo Festas e Eventos',
				'home'                    => 'Home',
				'mudar navegação'         => 'Mudar Navegação',
				'casal'                   => 'Casal',
				'nossa história'          => 'Nossa História',
				'galeria'                 => 'Galeria',
				'contribuição'            => 'Presente dos Noivos',
				'comparecer'              => 'Confirmar Presença',
				'nossa'                   => 'Nossa',
				'história'                => 'História',
				'galeria'                 => 'Galeria',
				'comparecer?'             => 'Você vai aparecer?',
				'começa a viagem...'      => 'Começa nossa viagem...',
				'ventos de primavera'     => 'Ventos Primaveris.',
				'ano novo, vida nova'     => 'Ano novo, vida nova.',
				'tempo circular'          => 'Tempo circular.',
				'por isso daremos'        => 'Por isso daremos nosso',
				'próximo passo'           => 'próximo passo',
				'contando os minutos'     => 'Contando os minutos para o grande dia!',
				'recordações em foto'     => 'Memória em fotos de nosso tempo juntos.',
				'quer confirmar'          => 'Gostaria de confirmar sua ',
				'presença'                => 'presença?',
				'obrigado'                => 'Obrigado!',
				'confirmar'               => 'Confirmar!',
				'não confirmar'           => 'Não Confirmar!',
				'seu nome'                => 'Seu Nome',
				'seu e-mail'              => 'Seu E-mail',
				'sua mensagem'            => 'Sua Menssagem',
				'menu normal'             => 'Menu Clássico',
				'menu vegano'             => 'Menu Vegano',
				'informações'             => 'Informações',
				'que música gostaria'     => 'Música (opcional)',
				'sugestões de hostels'    => 'Sugestões de Hostels & Hotéis',
				'para brasil e uruguay'   => 'Para Brasil e Uruguay',
				'atenção: valores'        => '<b>Atenção:</b> Valores em PESOS URUGUAYOS(UYU)!',
				'em breve somente'        => 'Em breve, somente para Uruguay',
				'obrigado por comparecer!'=> 'Muito Obrigado por Comparecer!',
				'em breve, fotos'         => 'Em breve, publicaremos as fotos do grande dia!',
			),
			'es' => array(
				'title-main'              => 'Invitación Virtual - Casamiento Thiago & Mariana',
				'nos casamos'             => '¡Nos Casamos!',
				'salão festas e eventos'  => 'Salón Cielo Fiestas y Eventos',
				'home'                    => 'Home',
				'casal'                   => 'La Pareja',
				'nossa história'          => 'Nuestra Historia',
				'galeria'                 => 'Galería',
				'contribuição'            => 'Colectivo',
				'comparecer'              => 'Confirmar Asistencia',
				'nossa'                   => 'Nuestra',
				'história'                => 'Historia',
				'mudar navegação'         => 'Cambiar Navegación',
				'galeria'                 => 'Galería',
				'comparecer?'             => '?Vos vas a venir?',
				'começa a viagem...'      => 'Comienza nuestro viaje...',
				'ventos de primavera'     => 'Vientos de Primavera.',
				'ano novo, vida nova'     => 'Año nuevo, vida nueva.',
				'tempo circular'          => 'Tiempo circular.',
				'por isso daremos'        => 'Por eso daremos nuestro',
				'próximo passo'           => 'siguiente paso',
				'contando os minutos'     => '¡Contando los minutos para el gran día!',
				'recordações em foto'     => 'Recuerdos fotográficos de nuestro tiempo juntos.',
				'quer confirmar'          => '¿Quiere confirmar',
				'presença'                => 'asistencia?',
				'obrigado'                => '¡Gracias!',
				'confirmar'               => '¡Asistiré!',
				'não confirmar'           => '¡No Asistiré!',
				'seu nome'                => 'Tu Nombre',
				'seu e-mail'              => 'Tu Dirección de Mail',
				'sua mensagem'            => 'Tu Mensaje',
				'menu normal'             => 'Menú Clásico',
				'menu vegano'             => 'Menú Vegano',
				'obrigado por confirmar'  => 'Obrigado por confirmar',
				'informações'             => 'Informaciones',
				'que música gostaria'     => '¿Canción? (optativa)',
				'sugestões de hostels'    => 'Sugerencias de Hostels y Hoteles',
				'para brasil e uruguay'   => 'Para Brasil y Uruguay',
				'atenção: valores'        => '<b>Atención:</b> ¡Monto en PESOS URUGUAYOS(UYU)!',
				'em breve somente'        => 'En breve, solo en Uruguay',
				'obrigado por comparecer!'=> '¡Gracias por estar!',
				'em breve, fotos'         => 'En breve, se publicarán las fotos del gran día!',
				)
			);
			return $terms[$langeuage][$string];
		}
	}