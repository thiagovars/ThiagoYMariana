<?php
/**
 * A confirmação da presença da pessoa
 * será feita por ajax e a confirmação
 * devolve na tela o retorno da operação
 *
 * @author Thiago Silveira <thiagovars@gmail.com>
 */
define('ds', DIRECTORY_SEPARATOR);
require_once(dirname(dirname(__FILE__)).ds.'class'.ds.'db.php');
$db = new db();
$resposta = array('success' => false);
$name = explode(' ', $_POST['name']);
$db->query("select guest_id from guests where name LIKE CONCAT(:name, '%') and surname LIKE CONCAT('%', :surname, '%')");
$db->bind(':name', utf8_decode($name[0]));
$db->bind(':surname', utf8_decode($name[count($name)-1]));
$resultado = $db->single();
// if (count($resultado) > 1 || empty($resultado['guest_id'])) {
// 	echo false;
// 	exit;
// }
if (!$_REQUEST['confirm']) {

	$db->query("UPDATE GUESTS SET confirmed = 2, modified = now() WHERE guest_id = :guest_id");
	$db->bind(":guest_id", $resultado['guest_id']);
	$db->execute();
	if (!$db->queryError()) {
		$resposta['success'] = true;
	}
} else {
	$db->query("UPDATE GUESTS SET vegan_menu = :veganmenu, confirmed = 1, modified = now() WHERE guest_id = :guest_id");
	$db->bind(":veganmenu", (boolean)$_POST['veganmenu']);
	$db->bind(":guest_id", $resultado['guest_id']);
	$db->execute();
	if (!$db->queryError()) {
		if (!empty($_POST['musica']) && !empty($resultado['guest_id'])) {
			$db->query("INSERT INTO guestmusic (guest_id, name) VALUES (:guest_id, :name)");
			$db->bind(":guest_id", $resultado['guest_id']);
			$db->bind(":name", utf8_decode($_POST['musica']));
			$db->execute();
		}
		$resposta['success'] = true;
	}
}

var_dump($resposta);