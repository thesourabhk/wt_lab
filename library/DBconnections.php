<?php
//Establishing connection with the database
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'viis70');
define('DB_PASSWORD', 'viis70');
define('DB_DATABASE', 'books'); //where books is the database name
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>