<?php

/**
 * Arquivo ajax responsável por recuperar os nomes dos relacionamentos
 * de cada convidado
 *
 * @author Pedro Silveira <[thiagovars@gmail.com]>
 * @param String $name Nome do convidade para recuperar suas relações
 * @return array Conteúdo do banco com a relação de nomes
 */

require_once('../class/db.php');
$names = explode(' ', $_POST['name']);
$namesDB = array();
$db = new db();
$SQL = "SELECT name, surname from guests where name like CONCAT(:name, '%')";
if (count($names) > 1) {
	$SQL .= ' and surname = :surname';
}
/*
$db->query('select guests.guest_id as id, guests.name as name, guests.surname as surname from guests left join guestsusers on guestsusers.child_id = guests.guest_id
			where guestsusers.father_id in (select g.guest_id from guests g where g.name = :nameFather)');
*/
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