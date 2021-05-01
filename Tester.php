<?php
define("FOLDER_PHP_FUNCTIONS","PHP/");
define("FILE_PHP_FUNCTIONS", FOLDER_PHP_FUNCTIONS."functions.php");
#import functions
require_once FILE_PHP_FUNCTIONS; 
require_once 'PHP/Customer.php';
require_once 'PHP/Customers.php';
require_once 'PHP/Product.php';
require_once 'PHP/Products.php';
require_once 'PHP/Purchases.php';
require_once 'PHP/Purchase.php';
$c1= new Customer();
session_start();
$c1->load($_SESSION["customer_id"]);

echo "Hello Mr(s) ". $c1->getLastName();
 //createUserTable();
$product = new Product();
$product->load("d77a8317-a60");
echo $product->getProductDescription();
 createDateSearchform();
 ?>