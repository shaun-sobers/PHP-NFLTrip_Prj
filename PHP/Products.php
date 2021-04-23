<?php

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
class Products extends Collection{
    
        function __construct() {
        global $connection;
        
        #call the SP
        $SQLQuery = "SELECT product_id, product_description, product_price FROM products";
        
        $PDOStatement= $connection->prepare($SQLQuery);
        $PDOStatement->execute();
        
        while($row =$PDOStatement->fetch())
        {
            $Product - new Product($row["product_id"], $row["product_description"], $row["product_price"]);
            $this->add($row["product_id"], $Product);
        }
    }

}
