<?php
#declare a constant
define("FOLDER_CSS","CSS/");
define("FILE_CSS", FOLDER_CSS."Style.css");
define("FOLDER_PHP", "PHP/");
define("FILE_PHP_FUNNCTION", FOLDER_PHP."functions.php");
define("FOLDER_JAVASCRIPT", "Javascript/");
define("FILE_JAVASCRIPT", FOLDER_JAVASCRIPT."script.js");
define("FOLDER_IMAGE","Images/");
define("SOBZ_LOGO", FOLDER_IMAGE."Sobz-Sports-Logo.png");
define("FOOTLOCKER_LOGO", FOLDER_IMAGE."Footlocker-Logo.png");
define("DICKS_LOGO", FOLDER_IMAGE."Dicks-Logo.png");
define("NIKE_LOGO", FOLDER_IMAGE."Nike.png");
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
define ("AMOUNT_NUMBER_OF_DECIMAL", 2);
define ("TAX_RATE", 12.05);
define ("SPECIAL_AD", NIKE_LOGO);

#open the Doctype and create page header
function createPageHeader($title){
    ?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Linking the files from other pages -->
        <link rel="stylesheet" type="text/css" href="<?php echo FILE_CSS ?>">
        <script language="javascipt" type="text/javascript" src="<?php echo FILE_JAVASCRIPT ?>"></script> 
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
         <?php createNavBar();
         ?>
    </head>
    <body class="bodybackground">

    
    <?php
 
}
function createNavBar()
{
    ?>
<!--<div class="navbar">
   <div id="navbar-brand">
    <img src="
    <button id="html"><span id="htmltxt" onclick="window.location.href='ShopPage.php'" >Shop</span></button>
  <button id="css"><span id="htmltxt">About Us</span></button>
  <button id="JS"><span id="htmltxt" onclick="window.location.href='ShopPage.php'">Contact Us</span></button>
  <img src="
</div>
<br><br>
<div id="container">
</div>
</div>-->

<!-- Creating a div which contains the Navigation Bar and Website Logo  -->
<div class="topnav" id="myTopnav">
    <img src="<?php echo IMAGE_NFL_LOGO ?>">
  <a href="#home" onclick="window.location.href='index.php'" class="active">Home</a>
  <a href="#home" onclick="window.location.href='ShopPage.php'">Shop</a>
<a href="#home" onclick="window.location.href='OrderPage.php'">Orders</a>
<img src="<?php echo SOBZ_LOGO ?>"> 
</div>


<?php
}

#create the page footer and close html tag
function createPageFooter(){
    ?>
<div class="footerdiv">
    <?php showAdvertisment();
    ?>
        <br><br>
    
        <footer>Copyright &copy; Shaun "SobZ" Sobers (193337) <?php echo date("Y"); ?>
        </footer>    
</div>
</body>
</html>
<?php
}


//Creating a function that displays the Team Logo of the selected Team from combo box
function showTeamImage($team)
{
echo "<img src='Images/NFL-Teams/!" .$team.".png'class='teamLogo'><br><br>";
}


// Creating a function that displays the Team Jersey of the selected Team from combo box
function showTeamJersey($team)
{
echo "<img src='Images/NFL-Jerseys/!" .$team.".jpeg'>";
}

function showTeamName($team)
{
echo "<img src='Images/Team-Name/" .$team.".png'>";
}


// Creating a function that creates the purchase options, with a parameter of the Selected team, which changes the color scheme to the Selected Teams colors
function showPurchaseOptions($team){
    ?>
            <br>        
            <br>
            <!-- Creating a Checkbox with the purchase options -->
<label class="container" id="Options">Game Ticket
        <!-- On click, it will trigger a Javascript option which will open and close the div containing the Game Ticket options -->
           <input type="checkbox" id="chkOption" onclick="ShowHideTickets(this)" /> 
           <span class="checkmark"></span>
</label>

            
<label class="container" id="Options">Jersey
    <!-- On click, it will trigger a Javascript option which will open and close the div containing the Jersey options -->
           <input type="checkbox" id="chkOption" onclick="ShowHideJersey(this)" /> 
           <span class="checkmark"></span>
</label>

<label class="container" id="Options">Housing
        <!-- On click, it will trigger a Javascript option which will open and close the div containing the Housing options -->
           <input type="checkbox" id="chkOption" onclick="ShowHideHousing(this)" /> 
           <span class="checkmark"></span>
</label>

<label class="container" id="Options">TailGating
        <!-- On click, it will trigger a Javascript option which will open and close the div containing the TailGaiting options -->
           <input type="checkbox" id="chkOption" onclick="ShowHideTailGate(this)" /> 
          <span class="checkmark"></span>
</label>
            
           
            
            
            <!-- Creating a div which contains the housing options -->
<div id="dvHousing" style="display: none">
    <br><br><label>Would you like to stay alone, or split a room with someone else</label><br><br>
    
    <!-- Creating radio buttons to select your Housing choice -->
    <input type="radio" id="alone" name="housing" value="Alone">
        <label for="alone">Alone</label><br>
    <input type="radio" id="share" name="housing" value="Share Room">
        <label for="share">Share room with another</label><br>
</div>

            
            <!-- Creating a div which contains your Tailgait options -->
<div id="dvTailGate" style="display: none">
    <br><br>
    TailGate Package includes:
    <br>-Lift to/from game
    <br>- Buffet style meal
    <br>- Unlimited drinks
<br><br>
</div>
            
            
            <!-- Creating a div which contains the Schedule options -->
<div id="dvSchedule" style="display: none">
    <?php 
        //Calling the Team Calender function which will create and display the team schedule in a table
            teamCalender($team);
    ?>
</div>
            
            
<br><br>

<!-- Creating a div that contain the Jersey options -->
<div id="dvJersey" style="display: none">
    <br>
     <label for="jersey">Select A Jersey Size:</label>
        
        <!-- Creates a drop box which allows you to select a jersey size -->
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
        // Calls the function which displays the Selected Teams Jersey image
                    showTeamJersey($team)
    ;?>
        <br>
        <br>
</div>

<?php
}
// This function creates the about Us paragraph which is displayed on the homepage
function aboutUs(){
    ?>
    <div class="about-section">
  <h1>About Us Page</h1>
  <p>Sobz is a sporting goods company, which sells Game Packages. </p>
  <p>These packages include GameTickets, Jerseys, Tailgating Access, as well as a place for you to stay through your trip.</p>
  <p>This allows you to take off all the stress of planning within a click of a second</p>
</div>
<?php
}
// Creats a function the displays the team schedule within a table
function teamCalender($team){

    // This creates an array which contains all the available NFL teams
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

    
    // This creates an array which contains home and away options for the schedule
$stadium = array('Home','Away','Home','Away','Home','Away','Home','Away','Home','Away','Home','Away','Home','Away','Home','Away','Home');

//  This shuffles the Team and Stadium arrays, which will create a random schedule for the schedule table
shuffle($teams);
shuffle($stadium);

    // Creates the tables, which has the variable of the selected team to be displayed in the header of the table
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
    
// A for loop which creates the schedule. The number 17 was chosen because there is 17 weeks in a NFL Season, so this will make a random scheudule of 17 weeks
     for($index=1; $index< 17; $index++)
    {
        echo "<th>$index</th>";
        echo"<th>$stadium[$index]</th>";
        echo"<th>$teams[$index]</th>";
        ?> 
    <!-- Creates radio button which allows you to select only 1 game for your purchase -->
            <td>
                 <div class="radio">
                     <input type="radio" name="purchase" id="<?php $index?>">
                 </div>
            </td>
<?php
        echo "</tr>";
    }
    // This closes the table tag once the for loop is complete
    echo "</table>";

    
}
 function CustomerInfoDiv ($team){
?>
            <?php

// Initializing the variables used within the Customer Info form
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


//This checks if the submitinfo object has be altered
               if(isset($_POST["submitinfo"])){



// This takes the information stored within the object and saves it into a variable, which stops the user from doing any HTML injections or hacking.
$firstName=htmlspecialchars(trim($_POST['FirstName']));
$lastName= htmlspecialchars(trim($_POST['LastName']));
$productCode=htmlspecialchars(trim($_POST['ProductCode']));
$city=htmlspecialchars(trim($_POST['City']));
$comments=htmlspecialchars(trim($_POST['Comments']));
$price=htmlspecialchars(trim($_POST['Price']));
$quantity=htmlspecialchars(trim($_POST['Quantity']));


        // Validations for all fields within the form
        if($productCode == ""){
            $errorCode = "The product code cannot be empty";
        }
        else{
            if(mb_strlen($productCode) > PRODUCT_CODE_MAX_LENGTH){
                $errorCode = "The make cannot cantain more than ".PRODUCT_CODE_MAX_LENGTH." characters";
            }
            if (substr($productCode, 0,1) != "P" && substr($productCode, 0,1) != "p"){
                $errorCode= "The first letter must be P";
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
        
        // This checks if the error messages are empty... If all error messages are empty, this means the infomration entered was valid, and we can proceed to next step
        if ($errorFname == "" && $errorLname== "" && $errorCity == "" && $errorCode == "" && $errorComments == "" && $errorPrice == "" && $errorQuantity == "")
        {
        // This calls the function which gathers all the information from the form, and stores it into a json string
        saveRecord($firstName, $lastName, $city, $productCode, $comments, $price, $quantity);
        
// This clears the variables
$firstName="";
$lastName="";
$productCode="";
$city="";
$comments="";
$price="";
$quantity="";

            // Confirmation message once there is no errors after submission
            echo "Congats !! You purchased a package !!<br><br>";
           
        }
               }
 ?>  
<div class="infocustomer">
            
    <!-- Creating a form for the customer information -->
    <form class="<?php echo $team;?>"  action="ShopPage.php" method='POST'>
        <label>Customer Information</label>
          <br><br><br>
          
          <!-- Section for the Product code, if error occurs span area will produce and show error Message -->
            <div style="color:red">*</div>
            Product Code:
                <input type="text" name="ProductCode" /><br>
                    <span style="color:red"><?php echo $errorCode; ?></span><br><br>
                    
              
            <!-- Section for the First name, if error occurs span area will produce and show error Message -->        
            <div style="color:red">*</div>
            First Name:
               <input type="text" name="FirstName"/><br>
                    <span style="color:red"><?php echo $errorFname; ?></span><br><br>
                    
                
            <!-- Section for the Last name, if error occurs span area will produce and show error Message -->
            <div style="color:red">*</div>
            Last Name:
               <input type="text" name="LastName"/><br>
                    <span style="color:red"><?php echo $errorLname ?></span><br><br>
                    
                    
            <!-- Section for the city, if error occurs span area will produce and show error Message -->
            <div style="color:red">*</div>
            Customer City:
                <input type="text" name="City"/><br>
                    <span style="color:red"><?php echo $errorCity ?></span><br><br>
                    
           <!-- Section for the Comments, if error occurs span area will produce and show error Message -->   
            Comments:
                <input type="text" name="Comments"/><br>
                    <span style="color:red"><?php echo $errorComments ?></span><br><br>
                    
               
             <!-- Section for the price, if error occurs span area will produce and show error Message -->
            <div style="color:red">*</div>
            Price:
                <input type="text" name="Price"/><br>
                    <span style="color:red"><?php echo $errorPrice ?></span><br><br>
                    
             
            <!-- Section for the Quantity, if error occurs span area will produce and show error Message -->        
            <div style="color:red">*</div>
            Quantity:
                <input type="text" name="Quantity"/><br>
                    <span style="color:red"><?php echo $errorQuantity ?></span><br><br>
                   
                    
            <!-- Section for the legend, which shows Which sections must not be empty -->
            <div style="color:red">* = required</div>
 
            <!-- This is the submit button -->
            <input name="submitinfo" type="submit" value="Confirm Information"/><br><br>
    </form>

</div>

</div>
        
 
 <?php
 
 }
 
// This function is a combo box , that takes the users selection, and changes the background and color scheme of other divs
 function TeamSelect(){
     ?>
     
     <!-- This is a form with all the 32 NFL team as options -->
        <form action="" method="post">
            <select name="Football">
                <option value="" disabled selected>Choose option</option>
                <option value="Arizona">Arizona Cardinals</option>
                <option value="Atlanta">Atlanta Falcons</option>
                <option value="Baltimore">Baltimore Ravens</option>
                <option value="Bufallo">Buffalo Bills</option>
                <option value="Carolina">Carolina Panthers</option>
                <option value="Chicago">Chicago Bears</option> 
                <option value="Cincinnati">Cincinnati Bengals</option> 
                <option value="Cleveland">Cleveland Browns</option> 
                <option value="Dallas">Dallas Cowboy</option> 
                <option value="Denver">Denver Broncos</option> 
                <option value="Detroit">Detroit Lions</option> 
                <option value="GreenBay">Green Bay Packers</option> 
                <option value="Houston">Houston Texans</option> 
                <option value="Indianapolis">Indianapolis Colts</option> 
                <option value="Jacksonville">Jacksonville Jaguars</option> 
                <option value="KansasCity">Kansas City Chiefs</option> 
                <option value="LasVegas">Las Vegas Raiders</option> 
                <option value="LAChargers">Los Angeles Chargers</option> 
                <option value="LARams">Los Angeles Rams</option> 
                <option value="Miami">Miami Dolphins</option> 
                <option value="Minnesota">Minnesota Vikings</option> 
                <option value="NewEngland">New England Patriots</option> 
                <option value="NewOrleans">New Orleans Saints</option> 
                <option value="NewYorkGiants">New York Giants</option> 
                <option value="NewYorkJets">New York Jets</option> 
                <option value="Philadelphia">Philadelphia Eagles</option> 
                <option value="Pittsburgh">Pittsburgh Steelers</option> 
                <option value="SanFrancisco">San Francisco 49ers</option> 
                <option value="Seattle">Seattle Seahawks</option> 
                <option value="TampaBay">Tampa Bay Buccaneers</option> 
                <option value="Tennessee">Tennessee Titans</option> 
                <option value="Washington">Washington Redskins</option> 
            </select>

        <input type="submit" name="submit" value="Select A Team">
</form>
  <?php

  
//Declaration of team variable           
$Team="";

//Checking if the submit variable has been set
    if(isset($_POST['submit'])){
    if(!empty($_POST['Football'])) {
        $Team = $_POST['Football'];
        ?><div class="content">
            <div class="infoteam">
         <div class="<?php echo $Team; ?> ">
<?php 
            echo 'You have chosen: ('.$Team.')';
            showTeamName($Team);
        
            showTeamImage($Team);
    
        showPurchaseOptions($Team);
?>   
        </div>
            </div>
<?php
    } else {
       echo '<script>alert("Please select a team")</script>'; 
    }
 }
 return $Team;
 ?>
        <?php
 }
 
 // This function saves all the records from the form, encodes them with JSON, and stores them within the purchase.txt file.
 function saveRecord($fname,$lname,$city,$code,$comment, $price, $quantity){
        $myfilehandle = fopen("purchases.txt", "a") or die("The file could not be opened");
        $taxes= computeTaxes($price);
        $subtotal = calculateSubtotal($price,$quantity);
        $total= calculateTotal($subtotal,$taxes);
        $customer = array($code,$fname,$lname,$city,$comment,$price,$quantity,$subtotal, $taxes, $total);
       $jsoncustomer= json_encode($customer);
//        $label = array("Product Code","First Name","Last Name","City","Comments","Price", "Quantity","Subtotal", "Taxes", "Total");
//        
//        for($index=0; $index< count($customer); $index++){
//            fwrite ($myfilehandle, $label[$index].": ".$customer[$index]."\r\n");
//        }
        fwrite ($myfilehandle,$jsoncustomer);
        fwrite ($myfilehandle, "\r\n");
        fclose($myfilehandle);
        echo "It worked";
        
 } 
 
 // This function takes the content of purchase.txt, and prints them within the table using a for loop;
 // While also checking if the variable command was used, and if it was, does certain actions accordingly
 function printRecord(){

     $command="";
     $commandColor="";
             $fileHandle = fopen("purchases.txt", "r") or exit("Unable to open the file");
                     echo  "<table border='1'>";
        echo 	"<thead><tr>
            <th>Product Code</th>
		<th>First Name</th>
		<th>Last Name<br></th>
		<th>City</th>
                <th>Comments\t\t</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                <th>Taxes</th>
                <th>Grand Total<th>
	</tr>
	</thead>
        <tr>";
             
             while (!feof($fileHandle))
        {
            $line= fgets($fileHandle);
            $client = substr($line, 1,-1);
            $info= explode(",",$client);
            
            echo"<tr>";
        for($index= 0; $index< count($info); $index++){
            $information= $info[$index];
            $pos= substr($information, 1,-1);
            if($index<7){
            echo "<td>$pos</td>";
        }
        else {
            if($index==7){
            if($information<100){
                  $color= "red";
            }if($information>= 100 && $information<1000){
                $color= "yellow";
            }if ($information>=1000){
                $color= "green";
            }
            echo "<td class='".$commandColor."'> $ $information</td>";
        }else
            echo "<td> $ $information</td>";
        }
        }
        echo"<tr/>";
        }
    echo "</table>";
    
                            if(isset($_GET["command"])){
            $command = htmlspecialchars($_GET["command"]);
            
        if($command == "print" || $command== "Print"){
            $command= "print";
        }
        else {
        if($command == "color"){
            if($color== "red"){
              $commandColor = "red";
              echo '<script>alert("'.$commandColor.'")</script>';
            }if($color=="yellow"){
                $commandColor= "yellow";
            }if($color== "green"){
                $commandColor= "green";
            }
        }
        }
        }
        
        fclose($fileHandle);
        
 }
 
 // This function takes array with Advertisment Logos, and randomly shuffles, and displays one in the footer tag of the page.
 // If the nike Logo is selected, it changes the class which changes the size, and adds a red border around the photo
 function showAdvertisment()
{
$ads = array(DICKS_LOGO, FOOTLOCKER_LOGO, NIKE_LOGO);

shuffle($ads);

if ($ads[0]== SPECIAL_AD){
   echo "<a href='https://nike.ca'><img src='" .$ads[0]. "' class='specialAd' /></a>";
}else{
    echo "<a href='https://collegelasalle.omnivox.ca'><img src='" .$ads[0]. "' /></a>";
}

}
 
// This function takes the price and calculates the taxes on that current amount
function computeTaxes($amount){
            
$taxRate= TAX_RATE;
            $taxAmount= $amount * $taxRate /100;
            $total=  $taxAmount +$amount;
            
            
            return round($total, AMOUNT_NUMBER_OF_DECIMAL);
}
        
// this function takes the price, and the quantitify and calculates the subtotal
function  calculateSubtotal($price,$quantity){

    return ($price*$quantity);
}

// This function takes the subtotal, and the taxes and computes the total price of the purchase
function calculateTotal($subtotal, $taxes){
            return $subtotal+$taxes;
        }
            
        function checkCommand(){
            $command="";
                            if(isset($_GET["command"])){
            $command = htmlspecialchars($_GET["command"]);
            
        if($command == "print" || $command== "Print"){
            $command= "print";
                            }}

                ?>
                <div class="<?php echo $command; ?> ">
                    <?php                               printRecord();?>
                </div>
            
            
            <?php
        }
        
        
