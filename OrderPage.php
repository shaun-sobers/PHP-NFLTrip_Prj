<?php
#constants Declaration
define("FOLDER_PHP_FUNCTIONS","PHP/");
define("FILE_PHP_FUNCTIONS", FOLDER_PHP_FUNCTIONS."functions.php");
$team="";
$color="";
$command="";
#import functions
require_once FILE_PHP_FUNCTIONS; 
createPageHeader("Order Page");
checkCommand();
createPageFooter();
     
?>
