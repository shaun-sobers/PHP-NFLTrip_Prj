<?php
define("FOLDER_PHP_FUNCTIONS","PHP/");
define("FILE_PHP_FUNCTIONS", FOLDER_PHP_FUNCTIONS."functions.php");
#import functions
require_once FILE_PHP_FUNCTIONS; 
require_once 'PHP/Customer.php';
require_once 'PHP/Customers.php';
require_once 'PHP/Product.php';
require_once 'PHP/Products.php';
require_once 'PHP/Purchases.php';
require_once 'PHP/Purchase.php';
 $products= new Products();
         session_start();
 global $quantity;
 global $comments;
      if(isset($_POST["Buy"]))
    {


 $product = new Product();
          $quantity = $_POST['quantity'];
          $comments= $_POST["comments"];
  
          $product->load($_POST['product_id']);
              $newpurchase = new Purchase($quantity, $comments, $product->getProductPrice(), $_SESSION["customer_id"], $product->getProductID(), "");     
       //  $purchase($quantity, $product->getProductPrice(), $comments, $customerid, $product->getProductID());
//echo $purchase->getPurchaseQuantity();   
echo "ID: ".$_SESSION["customer_id"];

$newpurchase->save();
          
      }
 ?>
<form method="POST">
<?php
 echo "<select name='product_id' id='products'>";
   foreach($products->items as $product)
   {
       echo "<option value='".$product-> getProductID()."'>".$product-> getProductCode()." - ".$product-> getProductDescription()." ($ ".$product-> getProductPrice().")</option>";
   }
 echo "</select>";
 
 
 ?>
     <label for="fname">Comments</label>
            <input type="text" id="comments" name="comments">
            
                 <label for="fname">Quantity</label>
            <input type="text" id="quantity" name="quantity">
            
            <button type="submit" name="Buy">Buy</button><br>
</form>

<?php
$c1= new Customer();
$c1->load($_SESSION["customer_id"]);
echo "Hello Mr(s) ". $c1->getLastName();
 createUserTable();
 ?>