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

$connection = new PDO("mysql:host=localhost;dbname=database-1933337", "root", "ABC123");
 
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 

?>