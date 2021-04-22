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
    
}

