<?php
#Revision history:

#DEVELOPER DATE COMMENTS
#Shaun Sobers (193337) 2021-03-01 Created NetBeans project and empty folders.
#Shaun Sobers (193337) 2021-03-02 Created Index Page, editting 50% of index page, including css
#Shaun Sobers (193337) 2021-03-03 Finished the index page, including CSS for index page
#Shaun Sobers (193337) 2021-03-05 Created Shop Page, with functionalities, added team photos
#Shaun Sobers (193337) 2021-03-06 Created the Order to check if the table is properly working, created functions to display the table
#Shaun Sobers (193337) 2021-03-08 Editted functionalities of pages, added more CSS to the Shop Pages
#Shaun Sobers (193337) 2021-03-09 Completed the shop pages, fixed CSS on homepages, and footers
#Shaun Sobers (193337) 2021-03-11 Fixed bugs in Table, and Save function, editted Order Page
#Shaun Sobers (193337) 2021-03-13  Fixed table , and Command functions on Order Page, fixed error in Compute Taxes function, fixed CSS on Index, Shop and Order Page, added more comments, changed project name to student id number
#Shaun Sobers (193337) 2021-03-13 Completed the error handling function;
#Shaun Sobers (193337) 2021-03-13 Completed the entire project at 100%


#constants Declaration
define("FOLDER_PHP_FUNCTIONS","PHP/");
define("FILE_PHP_FUNCTIONS", FOLDER_PHP_FUNCTIONS."functions.php");
define("CLASS_CUSTOMER", FOLDER_PHP_FUNCTIONS."Customer.php");
define("CLASS_CUSTOMERS", FOLDER_PHP_FUNCTIONS."Customers.php");
define("CLASS_PRODUCT", FOLDER_PHP_FUNCTIONS."Product.php");
define("CLASS_PRODUCTS", FOLDER_PHP_FUNCTIONS."Products.php");
define("CLASS_PURCHASE", FOLDER_PHP_FUNCTIONS."Purchase.php");
define("CLASS_PURCHASES", FOLDER_PHP_FUNCTIONS."Purchases.php");


#import functions
require_once FILE_PHP_FUNCTIONS;
require_once CLASS_CUSTOMER;
require_once CLASS_CUSTOMERS;
require_once CLASS_PRODUCT;
require_once CLASS_PRODUCTS;
require_once CLASS_PURCHASE;
require_once CLASS_PURCHASES;
createPageHeader("Register Page");
createRegisterPage();
createPageFooter();

?>
