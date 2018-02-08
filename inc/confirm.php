<?php
/**
 * A confirmação da presença da pessoa
 * será feita por ajax e a confirmação
 * devolve na tela o retorno da operação
 *
 * @author Thiago Silveira <thiagovars@gmail.com>
 */
require_once('../class/db.php');

$db = new db();
$name = explode(' ', $_POST['name']);
$db->query("select guest_id from guests where name LIKE CONCAT(:name, '%') and surname LIKE CONCAT('%', :surname, '%')");
$db->bind(':name', utf8_decode($name[0]));
$db->bind(':surname', utf8_decode($name[count($name)-1]));
$resultado = $db->single();
if (count($resultado) > 1) {
	echo false;
	exit;
}
if ($_REQUEST['confirm']) {
	$db->query("UPDATE GUESTS SET confirmed = 2 WHERE guest_id = :guest_id");
	$db->bind(":guest_id", $resultado['guest_id']);
	$db->execute();
	if (!$db->queryError()) {
		echo true;
	} else {
		echo false;
	}
} else {
	$db->query("UPDATE GUESTS SET vegan_menu = :veganmenu, confirmed = 1 WHERE guest_id = :guest_id");
	$db->bind(":veganmenu", (boolean)$_POST['veganmenu']);
	$db->bind(":guest_id", $resultado['guest_id']);
	$db->execute();
	if (!$db->queryError()) {
		echo true;
	} else {
		echo false;
	}
}