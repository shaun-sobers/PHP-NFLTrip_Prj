<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customer
 *
 * @author Shaun
 */
class Customer {
    private $customer_id = "";#$this-> is used to access regular variables
    private $firstName = "";
    private $lastName = "";
    private $customer_city = "";
    private $customer_address= "";
    private $customer_province = "";
    private $postal_code = "";
    private $username= "";
    private $password= "";    
    
    const NAME_MAX_LENGTH = 20; 
    const ADDRESS_MAX_LENGTH = 25; 
    const POSTAL_MAX_LENGTH = 7; 
    const USERNAME_MAX_LENGTH = 12;
    const PASSWORD_MAX_LENGTH = 255; 

    function __construct($new_firstName = "", $new_lastName = "", $new_customer_address= "", $new_customer_city = "", $new_customer_province = "", $new_postal_code = "", $new_username= "", $new_password= "") 
    {

            $this->setFirstName($new_firstName);
            $this->setLastName($new_lastName);
            $this->setCustomerCity($new_customer_city);
            $this->setCustomerAddress($new_customer_address);
            $this->setCustomerProvince($new_customer_province);
            $this->setCustomerPostalCode($new_customer_province);
            $this->setUsername($new_username);
            $this->setPassword($new_password);
       

        # this code is called everytime "=new car()" is called
    }
    
    
            public function getCustomerID()
    {
        return $this->customer_id;
        
    }
    
    public function setCustomerID($newCustomerID)
    {
        if(mb_strlen($newCustomerID) == 0)
        {
            return "Your customer ID cannot be empty!";
        }
        else
        {
                $this->customer_id = $newCustomerID;
                return "";
            }
        }
    
    
    
        public function getFirstName()
    {
        return $this->firstName;
        
    }
    
    public function setFirstName($newFname)
    {
        if(mb_strlen($newFname) == 0)
        {
            return "Your first name cannot be empty!";
        }
        else
        {
            if(mb_strlen($newFname) > self::NAME_MAX_LENGTH)
            {
                #use Constant!
                return "Your first name cannot be longer than " . self::NAME_MAX_LENGTH . " characters!";
            }
            else
            {
                $this->firstName = $newFname;
                return "";
            }
        }
    }
    
    
    
    
     public function getLastName()
    {
        return $this->lastName;
        
    }
    
    public function setLastName($newLname)
    {
        if(mb_strlen($newLname) == 0)
        {
            return "Your Last name cannot be empty!";
        }
        else
        {
            if(mb_strlen($newLname) > self::NAME_MAX_LENGTH)
            {
                #use Constant!
                return "Your Last name cannot be longer than " . self::NAME_MAX_LENGTH . " characters!";
            }
            else
            {
                $this->lastName = $newLname;
                return "";
            }
        }
    }

    
    
    
            public function getCustomerCity()
    {
        return $this->customer_city;
        
    }
    
    public function setCustomerCity($newCustomerCity)
    {
        if(mb_strlen($newCustomerCity) == 0)
        {
            return "Your city cannot be empty!";
        }
        else
        {
            if(mb_strlen($newCustomerCity) > self::ADDRESS_MAX_LENGTH)
            {
                #use Constant!
                return "Your city cannot be longer than " . self::ADDRESS_MAX_LENGTH . " characters!";
            }
            else
            {
                $this->customer_city = $newCustomerCity;
                return "";
            }
        }
    }
    
    
    
    
    
    
    
                public function getCustomerAddress()
    {
        return $this->customer_address;
        
    }
    
    public function setCustomerAddress($newCustomerAddress)
    {
        if(mb_strlen($newCustomerAddress) == 0)
        {
            return "Your Address cannot be empty!";
        }
        else
        {
            if(mb_strlen($newCustomerAddress) > self::ADDRESS_MAX_LENGTH)
            {
                #use Constant!
                return "Your Address cannot be longer than " . self::ADDRESS_MAX_LENGTH . " characters!";
            }
            else
            {
                $this->customer_address = $newCustomerAddress;
                return "";
            }
        }
    }
    
    
    
    
     public function getCustomerPostalCode()
    {
        return $this->postal_code;
        
    }
    
    public function setCustomerPostalCode($newCustomerPostalCode)
    {
        if(mb_strlen($newCustomerPostalCode) == 0)
        {
            return "Your Postal Code cannot be empty!";
        }
        else
        {
            if(mb_strlen($newCustomerPostalCode) > self::POSTAL_MAX_LENGTH)
            {
                #use Constant!
                return "Your Postal Code cannot be longer than " . self::POSTAL_MAX_LENGTH . " characters!";
            }
            else
            {
                $this->postal_code = $newCustomerPostalCode;
                return "";
            }
        }
    }
    
    
    
    
    
    
     public function getCustomerProvince()
    {
        return $this->customer_province;
        
    }
    
    public function setCustomerProvince($newCustomerProvince)
    {
        if(mb_strlen($newCustomerProvince) == 0)
        {
            return "Your Province cannot be empty!";
        }
        else
        {
            if(mb_strlen($newCustomerProvince) > self::ADDRESS_MAX_LENGTH)
            {
                #use Constant!
                return "Your Province cannot be longer than " . self::ADDRESS_MAX_LENGTH . " characters!";
            }
            else
            {
                $this->customer_province = $newCustomerProvince;
                return "";
            }
        }
    }
    
    
                public function getUsername()
    {
        return $this->username;
        
    }
    
    public function setUsername($newUsername)
    {
        if(mb_strlen($newUsername) == 0)
        {
            return "Your Username cannot be empty!";
        }
        else
        {
            if(mb_strlen($newUsername) > self::USERNAME_MAX_LENGTH)
            {
                #use Constant!
                return "Your Username cannot be longer than " . self::USERNAME_MAX_LENGTH . " characters!";
            }
            else
            {
                $this->username = $newUsername;
                return "";
            }
        }
    }
    
    
    
                public function getPassword()
    {
        return $this->password;
        
    }
    
    public function setPassword($newPassword)
    {
        if(mb_strlen($newPassword) == 0)
        {
            return "Your password cannot be empty!";
        }
        else
        {
            if(mb_strlen($newPassword) > self::PASSWORD_MAX_LENGTH)
            {
                #use Constant!
                return "Your password cannot be longer than " . self::PASSWORD_MAX_LENGTH . " characters!";
            }
            else
            {
                $this->password= $newPassword;
                return "";
            }
        }
    }
 
        function save()
    {
        global $connection;
            #Call the Stored Procedure  CALL car_insert(:brand, :year, :transmission)
           $SQLQuery = "INSERT INTO customers (firstname, lastname, address, city, province, postalcode, customer_login, customer_password)" .
                "VALUES (:firstname, :lastname, :address, :city, :province, :postalcode, :customer_login, :customer_password);";
            
           $PDOStatement = $connection->prepare($SQLQuery);
           $PDOStatement->bindParam(":firstname", $this->firstName);
           $PDOStatement->bindParam(":lastname", $this->lastName);
           $PDOStatement->bindParam(":address", $this->customer_address);
           $PDOStatement->bindParam(":city", $this->customer_city);
           $PDOStatement->bindParam(":province", $this->customer_province);
           $PDOStatement->bindParam(":postalcode", $this->postal_code);
           $PDOStatement->bindParam(":customer_login", $this->username);
           $PDOStatement->bindParam(":customer_password", $this->password);
           $PDOStatement->execute();
          
           return true;
        }
        
    
        function update($customer_id)
    {
        global $connection;
            #Call the Stored Procedure  CALL car_insert(:brand, :year, :transmission)
            $SQLQuery = "UPDATE customers SET firstname = :firstname, lastname= :lastname, address= :address, city= :city , province= :province, postalcode= :postalcode, " .
                    "customer_login = :customer_login, customer_password = :customer_password " .
                    "WHERE customer_id = :customer_id;";
            
//            UPDATE customers SET firstname = 'Josh', lastname= 'Man', address= 'BA', city= 'MA' , province= 'LA', postalcode= 'MLA'
//,customer_login = 'LA', customer_password = 'KSn'  WHERE customer_id = '7beeb3fc-a48c-11eb-a825-9078415069cc';
            
           $PDOStatement = $connection->prepare($SQLQuery);

           
           $PDOStatement->bindParam(":firstname", $this->firstName);
           $PDOStatement->bindParam(":lastname", $this->lastName);
           $PDOStatement->bindParam(":address", $this->customer_address);
           $PDOStatement->bindParam(":city", $this->customer_city);
           $PDOStatement->bindParam(":province", $this->customer_province);
           $PDOStatement->bindParam(":postalcode", $this->postal_code);
           $PDOStatement->bindParam(":customer_login", $this->username);
           $PDOStatement->bindParam(":customer_password", $this->password);
           $PDOStatement->bindParam(":customer_id", $customer_id);
           $PDOStatement->execute();
          
           return true;
        }
        
        
            function load($customer_id)
    {
       global $connection;
       
       #call your STORED PROCEDURE
       $SQLQuery = "SELECT customer_id, firstname, lastname, address, city, province, postalcode, customer_login, customer_password   FROM customers WHERE customer_id = :customer_id";
       
       $PDOStatement = $connection->prepare($SQLQuery);
       $PDOStatement->bindParam(":customer_id", $customer_id);
       $PDOStatement->execute();
       
       if($row = $PDOStatement->fetch())
       {
           $this->customer_id = $row["customer_id"];
           $this->firstName = $row["firstname"];
           $this->lastName = $row["lastname"];
           $this->customer_address= $row["address"];
           $this->customer_city = $row["city"];
           $this->customer_province = $row["province"];
           $this->postal_code= $row["postalcode"];
           $this->username = $row["customer_login"];
           $this->password = $row["customer_password"];
           
           return true;
  
       }
    }
    
    
    function login($customer_username, $customer_password)
    {
       global $connection;
       
       #call your STORED PROCEDURE
       $SQLQuery = "SELECT customer_id, firstname, lastname, address, city, province, postalcode, customer_login, customer_password   FROM customers WHERE customer_login = :customer_login";
       
       $PDOStatement = $connection->prepare($SQLQuery);
       $PDOStatement->bindParam(":customer_login", $customer_username);
       $PDOStatement->execute();
       
       if($row = $PDOStatement->fetch())
       {    
            
           $this->username = $row["customer_login"];
           $this->password = $row["customer_password"];
           
           
           if($this->password == $customer_password)
           {
           $this->customer_id = $row["customer_id"];
           $this->firstName = $row["firstname"];
           $this->lastName = $row["lastname"];
           $this->customer_address= $row["address"];
           $this->customer_city = $row["city"];
           $this->customer_province = $row["province"];
           $this->postal_code= $row["postalcode"];
           $this->username = $row["customer_login"];
           $this->password = $row["customer_password"];
           return "";
           }

           
           
           if ($this->password != $customer_password)
           {
               return "The password is incorrect";
           }
           
  
       }
    }
}
    

