<?php
require_once (dirname(__FILE__).ds.'db.php');

class Texts {

	private $database;

	public function __construct() {
		try {
			$this->database = new db();
		} catch (Exception $e) {
			die($e->getMessage());			
		}
	}

	public function getText($slug = '', $language) {
		$this->database->query('select body from texts where slug = :slug and language = :language');
		$this->database->bind(':slug', utf8_decode($slug));
		$this->database->bind(':language', $language);
		$row = $this->database->single();
		return utf8_encode($row['body']);
	}
}