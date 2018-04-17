<?php

/**
 * Arquivo ajax responsável por recuperar os nomes dos relacionamentos
 * de cada convidado
 *
 * @author Pedro Silveira <[thiagovars@gmail.com]>
 * @param String $name Nome do convidade para recuperar suas relações
 * @return array Conteúdo do banco com a relação de nomes
 */
define('ds', DIRECTORY_SEPARATOR);
include_once(dirname(dirname(__FILE__)).ds.'class'.ds.'db.php');
$names = explode(' ', $_POST['name']);
$namesDB = array();
$db = new db();
$SQL = "SELECT name, surname FROM guests WHERE name like CONCAT(:name, '%') AND confirmed = 0";
if (count($names) > 1) {
	$SQL .= ' and surname = :surname';
}
$db->query($SQL);
$db->bind(':name', utf8_decode($names[0]));
if (count($names) > 1) {
	$db->bind(':surname', utf8_decode($names[1]));
}
$resultset = $db->resultset();
$namesDB = '{';
for ($i=0; $i < count($resultset); $i++) { 
	$namesDB .= '"'.$i.'":"'.utf8_encode($resultset[$i]['name']) . ' ' . utf8_encode($resultset[$i]['surname']).'"';
	if ($i != (count($resultset)-1)) {
		$namesDB .= ', ';
	} else {
		$namesDB .= '}';
	}
}
echo $namesDB;
exit;