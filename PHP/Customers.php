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
class Customers extends Collection {
    function __construct() {
        global $connection;
        
        #call the SP
        $SQLQuery = "SELECT customer_id, firstname, lastname, address, city, province, postalcode, customer_login, customer_password FROM customers";
        
        $PDOStatement= $connection->prepare($SQLQuery);
        $PDOStatement->execute();
        
        while($row =$PDOStatement->fetch())
        {
            $Customer = new Customer($row["customer_id"], $row["firstname"], $row["lastname"], $row["address"], $row["city"], $row["province"], $row["postalcode"], $row["customer_login"], $row["customer_password"]);
            $this->add($row["customer_id"], $Customer);
        }
    }
}
