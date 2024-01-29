<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'database_name_here');
define('DB_USER', 'username_here');
define('DB_PASSWORD', 'password_here');

$conexion = new mysqli(DB_HOST,DB_NAME,DB_USER,DB_PASSWORD);

?>