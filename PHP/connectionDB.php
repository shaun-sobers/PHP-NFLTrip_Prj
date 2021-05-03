<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of connectionDB
 *
 * @author Shaun
 */

// creates the connection to the database
$connection = new PDO("mysql:host=localhost;dbname=database-1933337", "user-1933337", "ABC123");
 
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 

?>