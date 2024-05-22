<?php
require("db.php"); 

// 1. Process data from GET
$name = $_GET["name"];
$cid = $_GET["cat_id"]; 
$price = $_GET["price"]; 

// 2. Insert data into database
$sql = "insert into products (catId, productName, listPrice) "
        . "           values ($cid,  '$name',     $price) "; 
// echo $sql; 
$n = $db->exec($sql); 

// 3. Return data (status) of the database operation
header("Content-Type: text/plain"); 
echo $n; 
