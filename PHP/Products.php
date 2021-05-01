<?php
require_once 'connectionDB.php';
require_once 'Collection.php';
require_once 'Product.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Products
 *
 * @author Shaun
 */

// creates the products Collection filled with all the products from the products table , stores them in the array, with the id being the product id
class Products extends Collection{
    
        function __construct() {
        global $connection;
        
        #call the SP
        $SQLQuery = "Call Product_SelectAll()";
        
        $PDOStatement= $connection->prepare($SQLQuery);
        $PDOStatement->execute();
        
        while($row =$PDOStatement->fetch())
        {
            $Product = new Product($row["product_id"],$row["product_code"], $row["product_description"], $row["product_price"]);
            $this->add($row["product_id"], $Product);
        }
    }

}
