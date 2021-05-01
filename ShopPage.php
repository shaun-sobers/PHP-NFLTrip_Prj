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
require_once 'PHP/Customer.php';
require_once 'PHP/Customers.php';
require_once 'PHP/Product.php';
require_once 'PHP/Products.php';
require_once 'PHP/Purchases.php';
require_once 'PHP/Purchase.php';
$team="";

#import functions
require_once FILE_PHP_FUNCTIONS; 

# Create the page header
createPageHeader("Sales Page");

#Call the team select function, which will return a team, which will change the color scheme of certain parts of website
$team=TeamSelect();

#Create the Customer Information Form
newpurchaseform($team);

##Create the page footer
createPageFooter();
     
?>