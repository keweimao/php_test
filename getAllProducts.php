<?php
require("db.php"); 

// 1. Query database for records in "products" 
$query = "select * from products"; 
// echo $query; 
$products = $db->query($query); 

// 2. Output the records in JSON
header("Content-Type: application/json"); 
echo json_encode($products->fetchAll(PDO::FETCH_ASSOC)); 