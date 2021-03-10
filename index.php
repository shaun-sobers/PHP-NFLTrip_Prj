<?php 
#constants Declaration
define("FOLDER_PHP_FUNCTIONS","PHP/");
define("FILE_PHP_FUNCTIONS", FOLDER_PHP_FUNCTIONS."functions.php");

 

 


#import functions
require_once FILE_PHP_FUNCTIONS; 

 

#Createing header
createPageHeader("HomePage");
createPageFooter();
?>

