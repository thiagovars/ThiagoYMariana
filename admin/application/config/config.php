<?php 
define('ds', DIRECTORY_SEPARATOR);
include_once(dirname(dirname(dirname(dirname(__FILE__)))).ds.'inc'.ds.'ambiente.php');
switch (ambiente) {
	case 'DESENVOLVIMENTO':
		$config['base_url'] = 'http://localhost/thiagoymariana/admin'; // Base URL including trailing slash (e.g. http://localhost/)
		$config['db_name'] = 'tym_db'; // Database name
		$config['db_username'] = 'root'; // Database username
		$config['db_password'] = ''; // Database password

		define('DB_HOST', 'localhost');
		define('DB_NAME', 'tym_db');
		define('DB_USER', 'root');
		define('DB_PASS', '');
		break;
	
	default:
		$config['base_url'] = 'http://thiagoymariana.com/admin'; // Base URL including trailing slash (e.g. http://localhost/)
		$config['db_host'] = 'mysql472.umbler.com'; // Database host (e.g. localhost)
		$config['db_name'] = 'tym_db'; // Database name
		$config['db_username'] = 'thiagovars'; // Database username
		$config['db_password'] = 'U.EL7|y.o9|UA'; // Database password
		$config['index_page'] = '';

		define('DB_HOST', 'mysql472.umbler.com');
		define('DB_NAME', 'tym_db');
		define('DB_USER', 'thiagovars');
		define('DB_PASS', 'U.EL7|y.o9|UA');
		break;
}

$config['default_controller'] = 'main'; // Default controller to load
$config['error_controller'] = 'error'; // Controller used for errors (e.g. 404, 500 etc)

