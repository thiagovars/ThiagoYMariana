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

if (empty($_POST['veganmenu'])) {
	$_POST['veganmenu'] = false;
} else {
	$_POST['veganmenu'] = (bool)$_POST['veganmenu'];
}
$db = new db();
$resposta = array('success' => false);

$name = explode(' ', $_POST['name']);
$db->query("select guest_id from guests where name LIKE CONCAT(:name, '%') and surname LIKE CONCAT('%', :surname, '%')");
$db->bind(':name', utf8_decode($name[0]));
$db->bind(':surname', utf8_decode($name[count($name)-1]));
$resultado = $db->single();
if (!$_REQUEST['confirm']) {

	$db->query("UPDATE guests SET confirmed = 2, modified = now() WHERE guest_id = :guest_id");
	$db->bind(":guest_id", $resultado['guest_id']);
	$db->execute();
	if (!$db->queryError()) {
		$resposta['success'] = true;
	}
} else {
	$db->query("UPDATE guests SET vegan_menu = :veganmenu, confirmed = 1, modified = now() WHERE guest_id = :guest_id");
	var_dump($_POST);
	exit;
	$db->bind(":veganmenu", $_POST['veganmenu']);
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
echo json_encode($resposta, JSON_FORCE_OBJECT);
exit;