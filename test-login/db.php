<?php
/* Database connection settings */
$host = 'localhost';
$user = 'jay1';
$pass = '';
$db = 'bugdb';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
?>
