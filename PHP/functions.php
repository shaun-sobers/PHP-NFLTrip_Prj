<?php
#declare a constant
define("FOLDER_CSS","CSS/");
define("FILE_CSS", FOLDER_CSS."Style.css");
define("FOLDER_PHP", "PHP/");
define("FILE_PHP_FUNNCTION", FOLDER_PHP."functions.php");
define("FOLDER_IMAGE","Images/");
define("SOBZ_LOGO", FOLDER_IMAGE."Sobz-Sports-Logo.png");
define("FOOTBALL_BACKGROUND", FOLDER_IMAGE."Football-Player.jpg");
define("NFL_IMAGES", FOLDER_IMAGE."NFL-TEAMS/");
define("IMAGE_NFL_LOGO", NFL_IMAGES."nfl-logo.png");
define("IMAGE_ARIZONA", NFL_IMAGES."Arizana.png");
define("IMAGE_ATLANTA", NFL_IMAGES."Atlanta.png");
define("IMAGE_BALTIMORE", NFL_IMAGES."Baltimore.png");
define("IMAGE_BUFALLO", NFL_IMAGES."Bufallo.png");
define("IMAGE_CAROLINA", NFL_IMAGES."Carolina.png");
define("IMAGE_CHICAGO", NFL_IMAGES."Chicago.png");
define("IMAGE_CINCINNATI", NFL_IMAGES."Cincinnati.png");
define("IMAGE_CLEVELAND", NFL_IMAGES."Cleveland.png");
define("IMAGE_DALLAS", NFL_IMAGES."Dallas.png");
define("IMAGE_DENVER", NFL_IMAGES."Detroit.png");
define("IMAGE_GREENBAY", NFL_IMAGES."GreenBay.png");
define("IMAGE_HOUSTON", NFL_IMAGES."Houston.png");
define("IMAGE_INDIANAPOLIS", NFL_IMAGES."Indianapolis.png");
define("IMAGE_JACKSONVILLE", NFL_IMAGES."Jacksonville.png");
define("IMAGE_KANSASCITY", NFL_IMAGES."KansasCity.png");
define("IMAGE_LACHARGERS", NFL_IMAGES."LAChargers.png");
define("IMAGE_LARAMS", NFL_IMAGES."LARams.png");
define("IMAGE_LASVEGAS", NFL_IMAGES."LasVegas.png");
define("IMAGE_MIAMI", NFL_IMAGES."Miami.png");
define("IMAGE_MINNESOTA", NFL_IMAGES."Minnesota.png");
define("IMAGE_NEWENGLAND", NFL_IMAGES."NewEngland.png");
define("IMAGE_NEWORLEANS", NFL_IMAGES."NewOrleans.png");
define("IMAGE_NEWYORKGIANTS", NFL_IMAGES."NewYorkGiants.png");
define("IMAGE_NEWYORKJETS", NFL_IMAGES."NewYorkJets.png");
define("IMAGE_PHILADELPHIA", NFL_IMAGES."Philadelphia.png");
define("IMAGE_PITTSBURGH", NFL_IMAGES."Pittsburgh.png");
define("IMAGE_SANFRANCISCO", NFL_IMAGES."SanFrancisco.png");
define("IMAGE_SEATTLE", NFL_IMAGES."Seattle.png");
define("IMAGE_TAMPABAY", NFL_IMAGES."TampaBay.png");
define("IMAGE_TENNESSEE", NFL_IMAGES."Tennessee.png");
define("IMAGE_WASHINGTON", NFL_IMAGES."Washington.png");

$bgcolor="";
#open the Doctype and create page header
function createPageHeader($title){
    createNavBar()
    ?>
<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo FILE_CSS ?>">
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
function teamSchedule($team){
    ?>
<div class="<?php echo $team; ?> ">
<table  class="<?php echo $team; ?> ">
	<caption> <?php echo "$team  Schedule" ;?></caption>
	<thead>
	<tr>
		<th>Week</th>
		<th>Home/Away<br></th>
		<th>Opponent</th>
		<th>Date<br></th>
                <th>Purchase<br></th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>1<br></td>
		<td>&nbsp;Away</td>
		<td>San Francisco</td>
		<td>&nbsp;09/13/2020</td>
                <td>
                 <div class="radio">
                 <input type="radio" name="purchase">
                 </div>
            </td>
	</tr>
	<tr>
		<td>2<br></td>
		<td>&nbsp;Home</td>
		<td>&nbsp;Washington</td>
		<td>&nbsp;09/20/2020</td>
                <td>
                 <div class="radio">
                 <input type="radio" name="purchase">
                 </div>
            </td>
	</tr>
	<tr>
		<td>3</td>
		<td>&nbsp;Home</td>
		<td>&nbsp;Detroit</td>
		<td>&nbsp;09/27/2020</td>
                <td>
                 <div class="radio">
                 <input type="radio" name="purchase">
                 </div>
            </td>
	</tr>
	<tr>
		<td>4</td>
		<td>&nbsp;Away</td>
		<td>&nbsp;Carolina</td>
		<td>&nbsp;10/04/2020</td>
                <td>
                 <div class="radio">
                 <input type="radio" name="purchase">
                 </div>
            </td>
	</tr>
	<tr>
		<td>5</td>
		<td>&nbsp;Away</td>
		<td>&nbsp;New York<br></td>
		<td>&nbsp;10/11/2020</td>
                <td>
                 <div class="radio">
                 <input type="radio" name="purchase">
                 </div>
            </td>
	</tr>

	<tbody>
</table>
</div>
        <?php
}

function showTeamImage($team)
{
echo "<img src='Images\NFL-Teams\!" .$team.".png'>";
}

function showPurchaseOptions($team){
    ?>


            <br>
            
<script type="text/javascript">
    function ShowHideTickets(chkOption) {
        var dvOption = document.getElementById("dvSchedule");
        dvOption.style.display = chkOption.checked ? "block" : "none";
    }
        function ShowHideJersey(chkOption) {
        var dvOption = document.getElementById("dvJersey");
        dvOption.style.display = chkOption.checked ? "block" : "none";
    }
    function ShowHideHousing(chkOption) {
        var dvOption = document.getElementById("dvHousing");
        dvOption.style.display = chkOption.checked ? "block" : "none";
    }
     function ShowHideTailGate(chkOption) {
        var dvOption = document.getElementById("dvTailGate");
        dvOption.style.display = chkOption.checked ? "block" : "none";
    }
</script>
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
Housing Options
</div>

<div id="dvTailGate" style="display: none">
TailGate Options
</div>

<hr />
<div id="dvSchedule" style="display: none">
<?php 
    teamSchedule($team)
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
</div>

<input type="submit" value="Proceed to CheckOut"> 
            <?php
}

