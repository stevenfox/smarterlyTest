<?php
error_reporting(0);
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'postboxes');

$connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 
mysqli_set_charset($connection, "utf8");



?>