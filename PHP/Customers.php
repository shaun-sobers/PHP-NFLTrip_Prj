<?php
require_once 'connectionDB.php';
require_once 'Collection.php';
require_once 'Customer.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customers
 *
 * @author Shaun
 */
  # (Shaun Sobers (1933337) 25/04/2021 ... Created Customers class
  # (Shaun Sobers (1933337) 25/04/2021 ... Created validations
 # (Shaun Sobers (1933337) 25/04/2021 ... Connected classes to db
 # (Shaun Sobers (1933337) 25/04/2021 ... Tested Cusomers object
 #  
 #  
// creates the customer Collection filled with all the customers from the customer table , stores them in the array, with the id being the customer id
class Customers extends Collection {
    function __construct() {
        global $connection;
        
        #call the SP
        $SQLQuery = "Call Customer_SelectAll()";
        
        $PDOStatement= $connection->prepare($SQLQuery);
        $PDOStatement->execute();
        
        while($row =$PDOStatement->fetch())
        {
            $Customer = new Customer($row["customer_id"], $row["firstname"], $row["lastname"], $row["address"], $row["city"], $row["province"], $row["postalcode"], $row["customer_login"], $row["customer_password"]);
            $this->add($row["customer_id"], $Customer);
        }
    }
}
