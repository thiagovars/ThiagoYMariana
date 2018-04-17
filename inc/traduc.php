<?php

define(ds, DIRECTORY_SEPARATOR);
include_once(dirname(dirname(__FILE__)).ds.'inc'.ds.'terms.php');

class Helper {
	static function traduc($string = '') {
		return Terms::getTerms(self::getLanguage(), $string);
	}

	static function traducMes($string, $curto = false) {
		return Terms::getMes(self::getLanguage(), $string, $curto);
	}

	static function traduzir($slug = '') {
		if (empty($slug)) { return false; }
		return Terms::traducText($slug, self::getLanguage());
	}

	static function getLanguage() {
		return (empty($_REQUEST['language'])) ? 'pt' : $_REQUEST['language'];
	}
}