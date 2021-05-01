<?php
#constants Declaration
define("FOLDER_PHP_FUNCTIONS","PHP/");
define("FILE_PHP_FUNCTIONS", FOLDER_PHP_FUNCTIONS."functions.php");
define("CLASS_CUSTOMER", FOLDER_PHP_FUNCTIONS."Customer.php");
define("CLASS_CUSTOMERS", FOLDER_PHP_FUNCTIONS."Customers.php");
define("CLASS_PRODUCT", FOLDER_PHP_FUNCTIONS."Product.php");
define("CLASS_PRODUCTS", FOLDER_PHP_FUNCTIONS."Products.php");
define("CLASS_PURCHASE", FOLDER_PHP_FUNCTIONS."Purchase.php");
define("CLASS_PURCHASES", FOLDER_PHP_FUNCTIONS."Purchases.php");

$team="";
$color="";
$command="";
#import functions
require_once FILE_PHP_FUNCTIONS;
require_once CLASS_CUSTOMER;
require_once CLASS_CUSTOMERS;
require_once CLASS_PRODUCT;
require_once CLASS_PRODUCTS;
require_once CLASS_PURCHASE;
require_once CLASS_PURCHASES;

createPageHeader("Account");
UpdateAccountPage();
createPageFooter();
//loadcustomer();
?>
