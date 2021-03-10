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

        if(isset($_GET["color"])){
            $color = htmlspecialchars($_GET["color"]);
            
        if($color == "red"){
            $color= "red";
        }
        else {
        if($color == "blue"){
            $color = "blue";
        }else {
            $color = "text-black";
        }
        }
        }
                ?>
                <div class="<?php echo $color;?> ">
                    My company exist since 2010
                </div>
<?php
createPageFooter();
     
?>
