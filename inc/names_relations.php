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
$namesReturned = array();
$nameFather = utf8_encode('Gustavo');
$db = new db();
$db->query('select guests.guest_id as id, guests.name as name, guests.surname as surname from guests left join guestsusers on guestsusers.child_id = guests.guest_id
			where guestsusers.father_id in (select g.guest_id from guests g where g.name = :nameFather)');
$db->bind(':nameFather', $nameFather);
$resultset = $db->resultset();
foreach ($resultset as $value) {
	$namesReturned[] = ['id' => $value['id'], 'name' => $value['name'], 'surname' => $value['surname']];
	var_dump($namesReturned);
}
var_dump(json_encode($namesReturned, JSON_FORCE_OBJECT));
// $json = json_encode($namesReturned);
exit;
?>