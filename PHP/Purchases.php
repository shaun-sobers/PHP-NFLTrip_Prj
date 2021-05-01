<?php
require_once 'connectionDB.php';
require_once 'Collection.php';
require_once 'Purchase.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Purchases
 *
 * @author Shaun
 */
class Purchases extends Collection {
//   
//            function __construct() {
//        global $connection;
//        
//        #call the SP
//        $SQLQuery = "Call Purchase_SelectAll()";
//        
//        $PDOStatement= $connection->prepare($SQLQuery);
//        $PDOStatement->execute();
//        
//        while($row =$PDOStatement->fetch())
//        {
//            $Purchase = new Purchase($row["Purchase_Quantity"], $row["Purchase_Comments"], $row["customer_id"], $row["product_id"], $row["purchase_ID"]);
//            $this->add($row["purchase_ID"], $Purchase);
//        }
//    }
    
    
    // creates the products Collection filled with all the purchases from the products table , starting from a specific date from a specific customer id
    function loadCustomerPurchases($new_customer_id, $date)
    {
    

        
                global $connection;
        

        $SQLQuery = "Call Customer_SelectPurchase(:customer_id, :date)";
        $PDOStatement= $connection->prepare($SQLQuery);
        $PDOStatement->bindParam(":customer_id", $new_customer_id);
        $PDOStatement->bindParam(":date", $date);
        $PDOStatement->execute();
        
        $this->items= array();
        while($row =$PDOStatement->fetch())
        {
          
          
            $Purchase = new Purchase($row["Purchase_Quantity"], $row["Purchase_Comments"], $row["customer_id"], $row["Product_ID"], $row["Purchase_ID"], $row["Purchase_Price"], $row["Purchase_Taxes"], $row["Purchase_Subtotal"], $row["Purchase_GrandTotal"], $row["firstname"], $row["lastname"], $row["city"]);
            $this->add($row["Purchase_ID"], $Purchase);
        }
    }
}
