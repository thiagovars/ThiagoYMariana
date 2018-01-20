<?php

require_once('inc/terms.php');

class Helper {
	static function traduc($string = '') {
		return Terms::getTerms(self::getLanguage(), $string);
	}

	static function traducMes($string, $curto) {
		return Terms::getMes(self::getLanguage(), $string, $curto);
	}

	static function getLanguage() {
		return (empty($_REQUEST['language'])) ? 'pt' : $_REQUEST['language'];
	}
}