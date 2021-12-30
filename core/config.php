<?php
// Prefixo
define('PREFIX', 'PR_');

//URL da Apphttp://localhost:81/projectName/
define(PREFIX.'URL', 'http://localhost/basic-php-setup/');


// Cominho base onde está localizado os arquivos do servidor
define('DS', DIRECTORY_SEPARATOR);
define('PR_BASE', strstr(__DIR__, '\\'.'core', true).'\\' );

// bd_difiners

define('PR_SERVER', 'localhost');
define('PR_SERVER_USER', 'root');
define('PR_SERVER_pass', '');
define('PR_DB', 'bibliotec');
?>