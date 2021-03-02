<?php
#declare a constant
define("FOLDER_CSS","CSS/");
define("FILE_CSS", FOLDER_CSS."Style.css");
define("FOLDER_PHP", "PHP/");
define("FILE_PHP_FUNNCTION", FOLDER_PHP."functions.php");
define("FOLDER_JAVASCRIPT", "Javascript/");
define("FILE_JAVASCRIPT", FOLDER_JAVASCRIPT."Script.php");
define("FOLDER_IMAGE","Images/");
define("SOBZ_LOGO", FOLDER_IMAGE."Sobz-Sports-Logo.png");
define("FOOTBALL_BACKGROUND", FOLDER_IMAGE."Football-Player.jpg");
define("NFL_IMAGES", FOLDER_IMAGE."NFL-TEAMS/");
define("IMAGE_NFL_LOGO", NFL_IMAGES."nfl-logo.png");

define('NAME_MAX_LENGTH',20);
define('PRODUCT_CODE_MAX_LENGTH',20);
define('CITY_MAX_LENGTH',8);
define('COMMENT_MAX_LENGTH',200);
define('PRICE_MAX',10000);
define('QUANTITY_MAX',99);
define('QUANTITY_MIN',0);



global $firstName;
global $lastName;
global $productCode;
global $city;
global $comments;
global $price;
global $quantity;

global $errorFname;
global $errorLname;
global $errorCode;
global $errorCity;
global $errorComments;
global $errorPrice;
global $errorQuantity;

$color="Hello";
$selected="";



$bgcolor="";
#open the Doctype and create page header
function createPageHeader($title){
    createNavBar()
    ?>
<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo FILE_CSS ?>">
         <script src="<?php echo FILE_JAVASCRIPT ?>"></script> 
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
    </head>
    <body class="background">
        <p style="color: white">Hello Welcome</p>

    
    <?php
 
}
function createNavBar()
{
    ?>
<div class="navbar">
   <div id="navbar-brand">
    <img src="<?php echo IMAGE_NFL_LOGO ?>">
    <button id="html"><span id="htmltxt" onclick="window.location.href='ShopPage.php'" >Shop</span></button>
  <button id="css"><span id="htmltxt">About Us</span></button>
  <button id="JS"><span id="htmltxt"onclick="window.location.href='ShopPage.php'">Contact Us</span></button>
 
  <img src="<?php echo SOBZ_LOGO ?>">
    
</div>
<br></br>
<div id="container">
  <h1></h1>
</div>
<?php
}

#create the page footer and close html tag
function createPageFooter(){
  // echo "<br><br>Copyright SobZ " .date("Y");
    ?>
        <br><br>
        </body>
        <footer>Copyright &copy; Shaun "SobZ" Sobers (193337) <?php echo date("Y"); ?>
        </footer>
</html>
<?php
}
function createComboBox($teams)
{
    $bgcolor="";
    echo "<select name='teams' id='teams-select'>";
    for($index=0; $index< count($teams); $index++)
    {
        echo "<option>$teams[$index]</option>";
    }
    echo "</select>";
   
    

}


function showTeamImage($team)
{
echo "<img src='Images\NFL-Teams\!" .$team.".png'><br><br>";
}

function showTeamJersey($team)
{
echo "<img src='Images\NFL-Jerseys\!" .$team.".jpeg'>";
}

function showPurchaseOptions($team){
    ?>


            <br>
            
<br>
<label class="container" id="Options">Game Ticket
           <input type="checkbox" id="chkOption" onclick="ShowHideTickets(this)" /> 
      <span class="checkmark"></span>
    </label>

<label class="container" id="Options">Jersey
           <input type="checkbox" id="chkOption" onclick="ShowHideJersey(this)" /> 
      <span class="checkmark"></span>
    </label>

<label class="container" id="Options">Housing
           <input type="checkbox" id="chkOption" onclick="ShowHideHousing(this)" /> 
      <span class="checkmark"></span>
    </label>

<label class="container" id="Options">TailGating
           <input type="checkbox" id="chkOption" onclick="ShowHideTailGate(this)" /> 
      <span class="checkmark"></span>
    </label>
<div id="dvHousing" style="display: none">
    <br><br><label>Would you like to stay alone, or split a room with someone else</label><br><br>
<input type="radio" id="alone" name="housing" value="Alone">
<label for="alone">Alone</label><br>
<input type="radio" id="share" name="housing" value="Share Room">
<label for="share">Share room with another</label><br>
</div>

<div id="dvTailGate" style="display: none">
    <br><br>
    TailGate Package includes:
    <br>-Lift to/from game
    <br>- Buffet style meal
    <br>- Unlimited drinks
<br><br>
</div>

<hr />
<div id="dvSchedule" style="display: none">
<?php 
    //teamSchedule($team)
    teamCalender($team);
?>
</div>
<br><br>
<div id="dvJersey" style="display: none">
 <label for="jersey">Select A Jersey Size:</label>

<select name="jersey" id="cars">
  <option value="extraSmall">Extra Small</option>
  <option value="small">Small</option>
  <option value="medium">Medium</option>
  <option value="large">Large</option>
  <option value="extaLarge">Extra Large</option>
</select> 
 <br>
 <br>
 <?php
showTeamJersey($team);?>
 <br><br>
</div>

            <?php
}

function teamCalender($team){

    $teams = array('Arizona Cardinals',
'Atlanta Falcons',
'Baltimore Ravens',
'Buffalo Bills',
'Carolina Panthers',
'Chicago Bears',
'Cincinnati Bengals',
'Cleveland Browns',
'Dallas Cowboys',
'Denver Broncos',
'Detroit Lions',
'Green Bay Packers',
'Houston Texans',
'Indianapolis Colts',
'Jacksonville Jaguars',
'Kansas City Chiefs',
'Los Angeles Chargers',
'Los Angeles Rams',
'Miami Dolphins',
'Minnesota Vikings',
'New England Patriots',
'New Orleans Saints',
'New York Giants',
'New York Jets',
'Las Vegas Raiders',
'Philadelphia Eagles',
'Pittsburgh Steelers',
'San Francisco 49ers',
'Seattle Seahawks',
'Tampa Bay Buccaneers',
'Tennessee Titans',
'Washington Redskins');

$stadium = array('Home','Away','Home','Away','Home','Away','Home','Away','Home','Away','Home','Away','Home','Away','Home','Away','Home');
shuffle($teams);
shuffle($stadium);
        echo  "<table class='$team'><br><tr>";
	echo "<caption> $team  Schedule</caption>";
        echo 	"<thead>
	<tr>
		<th>Week</th>
		<th>Home/Away<br></th>
		<th>Opponent</th>
                <th>Purchase<br></th>
	</tr>
	</thead>";
    

     for($index=1; $index< 17; $index++)
    {
        echo "<th>$index</th>";
        echo"<th>$stadium[$index]</th>";
        echo"<th>$teams[$index]</th>";
        ?>  <td>
                 <div class="radio">
                     <input type="radio" name="purchase" id="<?php $index?>">
                 </div>
            </td>
<?php
        echo "</tr>";
    }
    echo "</table>";

    
}
 function CustomerInfoDiv ($team){
?>
            <?php
               if(isset($_POST["submitinfo"])){

$firstName="";
$lastName="";
$productCode="";
$city="";
$comments="";
$price="";
$quantity="";

$errorFname="";
$errorLname= "";
$errorCode= "";
$errorCity="";
$errorComments="";
$errorPrice="";
$errorQuantity="";
        
$firstName=htmlspecialchars(trim($_POST['FirstName']));
$lastName= htmlspecialchars(trim($_POST['LastName']));
$productCode=htmlspecialchars(trim($_POST['ProductCode']));
$city=htmlspecialchars(trim($_POST['City']));
$comments=htmlspecialchars(trim($_POST['Comments']));
$price=htmlspecialchars(trim($_POST['Price']));
$quantity=htmlspecialchars(trim($_POST['Quantity']));

        if($productCode == ''){
            $errorCode = "The product code cannot be empty";
        }
        else{
            if(mb_strlen($productCode) > PRODUCT_CODE_MAX_LENGTH){
                $errorCode = "The make cannot cantain more than ".PRODUCT_CODE_MAX_LENGTH." characters";
            }
        }
        
        if($firstName == ''){
            $errorFname = "The first name cannot be empty";
        }
        else{
            if(mb_strlen($firstName) > NAME_MAX_LENGTH){
                $errorFname = "Your first name cannot cantain more than ".NAME_MAX_LENGTH." characters";
            }
        }
        
                if($lastName == ''){
            $errorLname = "The first name cannot be empty";
        }
        else{
            if(mb_strlen($lastName) > NAME_MAX_LENGTH){
                $errorLname = "Your fi name cannot cantain more than ".NAME_MAX_LENGTH." characters";
            }
        }
        
                if($city == ''){
            $errorCity = "The city cannot be empty";
        }
        else{
            if(mb_strlen($city) > CITY_MAX_LENGTH){
                $errorCity = "The city cannot cantain more than ".CITY_MAX_LENGTH." characters";
            }
        }
        
        if(mb_strlen($comments) > COMMENT_MAX_LENGTH){
            $errorComments = "Your comments cannot cantain more than ".CITY_MAX_LENGTH." characters";
        }
        
        if(!is_numeric($price)){
            $errorPrice = "Please enter a numeric value";
        }
        else{
            if($price < 0 || $price > PRICE_MAX)
            {
                $errorYear = "Please enter a value between 0 and $".PRICE_MAX;
            }
        }
        
         if(!is_numeric($quantity)){
         $errorQuantity = "Please enter a numeric value";
         }
        else{
            if($quantity < QUANTITY_MIN || $quantity > QUANTITY_MAX)
            {
                $errorQuantity = "Please enter a value between ".QUANTITY_MIN
                    . " and ".QUANTITY_MAX;
            }
        }
        
        if ($errorFname == "" && $errorLname== "" && $errorCity == "" && $errorCode == "" && $errorComments == "" && $errorPrice == "" && $errorQuantity == "" && $errorYear == "")
        {
        # no errors occured
$firstName="";
$lastName="";
$productCode="";
$city="";
$comments="";
$price="";
$quantity="";

            
            echo "Congats !! You purchased a new car !!<br><br>";
        }
               }
 ?>  
 <div class="<?php echo $team; ?> ">
 <form action="ShopPage.php" method='POST'>
<label>Customer Information</label>
<br><br><br>
Product Code:
<input type="text"name="ProductCode"/><br><br>
<span style="color:red"><?php echo $errorCode; ?></span>
First Name:
<input type="text"name="FirstName"/><br><br>
<span style="color:red"><?php echo $errorFname; ?></span>
Last Name:
<input type="text"name="LastName"/><br><br>
<span style="color:red"><?php echo $errorLname ?></span>
Customer City:
<input type="text"name="City"/><br><br>
<span style="color:red"><?php echo $errorCity ?></span>
Comments:
<input type="text"name="Comments"/><br><br>
<span style="color:red"><?php echo $errorComments ?></span>
Price:
<input type="text"name="Price"/><br><br>
<span style="color:red"><?php echo $errorPrice ?></span>
Quantity:
<input type="text"name="Quantity"/><br><br>
<span style="color:red"><?php echo $errorQuantity ?></span>
<input name="submitinfo" type="submit"/><br><br>
</p>
</form>

            </div>

        
 
 <?php
 
 }
