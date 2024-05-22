<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

$dsn = "mysql:host=bvm25.cci.drexel.edu;dbname=wk77_info600_202002";
$username = "wk77"; 
$password = "Change to your password"; 

$db = new PDO($dsn,$username,$password); 
// echo "connected to database"; 
