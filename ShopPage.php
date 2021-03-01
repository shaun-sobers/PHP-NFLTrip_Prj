<?php

#constants Declaration
define("FOLDER_PHP_FUNCTIONS","PHP/");
define("FILE_PHP_FUNCTIONS", FOLDER_PHP_FUNCTIONS."functions.php");


$color="Hello";
$selected="";

 

 


#import functions
require_once FILE_PHP_FUNCTIONS; 
?>
<body>
<div class="<?php $color?>">
Hello Shoppers<br>

</div>
</body>
<?php
//$teams = array('Arizona Cardinals',
//'Atlanta Falcons',
//'Baltimore Ravens',
//'Buffalo Bills',
//'Carolina Panthers',
//'Chicago Bears',
//'Cincinnati Bengals',
//'Cleveland Browns',
//'Dallas Cowboys',
//'Denver Broncos',
//'Detroit Lions',
//'Green Bay Packers',
//'Houston Texans',
//'Indianapolis Colts',
//'Jacksonville Jaguars',
//'Kansas City Chiefs',
//'Los Angeles Chargers',
//'Los Angeles Rams',
//'Miami Dolphins',
//'Minnesota Vikings',
//'New England Patriots',
//'New Orleans Saints',
//'New York Giants',
//'New York Jets',
//'Las Vegas Raiders',
//'Philadelphia Eagles',
//'Pittsburgh Steelers',
//'San Francisco 49ers',
//'Seattle Seahawks',
//'Tampa Bay Buccaneers',
//'Tennessee Titans',
//'Washington Redskins');
//createComboBox($teams);
//
//
//    
//?>

<link rel="stylesheet" type="text/css" href="CSS/Style.css"/>
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
    <option value="Tennesse">Tennessee Titans</option> 
    <option value="Washington">Washington Redskins</option> 
    </select>

    <input type="submit" name="submit" vlaue="Choose options">
</form>

<?php
    if(isset($_POST['submit'])){
    if(!empty($_POST['Football'])) {
        $selected = $_POST['Football'];
        ?>
        <div class="<?php echo $selected; ?> ">
        <?php echo 'You have chosen:('. $selected.')';
        showTeamImage($selected)
        ?>
            <br>
            <br>             
            <br>

            <?php 
            
showPurchaseOptions($selected);



?> 
            
        </div>
<?php
    } else {
        echo 'Please select the value.';
    }
    }
?>


   
