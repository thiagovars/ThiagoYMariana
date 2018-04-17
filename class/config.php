<?php
include_once(dirname(dirname(__FILE__)).ds.'inc'.ds.'ambiente.php');
switch (ambiente) {
	case 'PRODUCAO':
		define("DB_HOST", "mysql472.umbler.com");
		define("DB_USER", "thiagovars");
		define("DB_PASS", "U.EL7|y.o9|UA");
		define("DB_NAME", "tym_db");
		break;
	
	default:
		define("DB_HOST", "localhost");
		define("DB_USER", "root");
		define("DB_PASS", "");
		define("DB_NAME", "tym_db");
		break;
}