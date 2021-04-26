<?php
define("FOLDER_PHP_FUNCTIONS","PHP/");
define("FILE_PHP_FUNCTIONS", FOLDER_PHP_FUNCTIONS."functions.php");

require_once FILE_PHP_FUNCTIONS; 
require_once 'PHP/Customer.php';
require_once 'PHP/Customers.php';
createPageHeader("Account");
UpdateAccountPage();
createPageFooter();
//loadcustomer();
?>
