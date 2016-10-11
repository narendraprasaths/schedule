<?php 
	define('DB_SERVER', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'root');
	define('DB_DATABASE', 'projector');
	$db = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE) or die("Cannot connect to database....")
?>