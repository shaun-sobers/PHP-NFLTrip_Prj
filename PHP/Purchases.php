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
   
            function __construct() {
        global $connection;
        
        #call the SP
        $SQLQuery = "SELECT purchase_ID ,product_id, customer_id, Purchase_Comments, Purchase_Quantity FROM purchases";
        
        $PDOStatement= $connection->prepare($SQLQuery);
        $PDOStatement->execute();
        
        while($row =$PDOStatement->fetch())
        {
            $Purchase = new Purchase($row["Purchase_Quantity"], $row["Purchase_Comments"], $row["customer_id"], $row["product_id"], $row["purchase_ID"]);
            $this->add($row["purchase_ID"], $Purchase);
        }
    }
}
