<?php

require_once('inc/terms.php');

class Helper {
	static function traduc($string = '') {
		$language = strtolower($_REQUEST['language']);
		return Terms::getTerms($language, $string);
	}
}