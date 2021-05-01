<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product
 *
 * @author Shaun
 */
class Product 
{
    private $productid= "";
    private $productCode = "";#$this-> is used to access regular variables
    private $productDescription = "";
    private $productPrice = 0.00;
    private $costPrice = 0.00;
    
    
    // delcaring functions
    const PRODUCT_CODE_MAX_LENGTH = 12; 
    const PRODUCT_PRICE_MAX_LENGTH = 10000.00; 
    
    
    // default constructor with parameters
        function __construct($new_product_id= "", $new_product_code="", $new_product_description="", $new_product_price="") 
    {

            $this->productid= $new_product_id;
            $this->productCode= $new_product_code;
            $this->productDescription= $new_product_description;
            $this->productPrice= $new_product_price;
            $this-> costPrice= 0;
       

        # this code is called everytime "=new product()" is called
    }
    
        // getter for product id
    
                public function getProductID()
    {
        return $this->productid;
        
    }
    
    
    // setter for product id
    public function setProductID($newProductID)
    {
                $this->productid = $newProductID;
                return "";
                
            }
        
    
    
    
    
                // getter for product code
            public function getProductCode()
    {
        return $this->productCode;
        
    }
    
    
    // setter for product code with validation
    public function setProductCode($newProductCode)
    {
        if(mb_strlen($newProductCode) == 0)
        {
            return "Your product Code cannot be empty!";
        }
        else
        {
            if(mb_strlen($newProductCode) > self::PRODUCT_CODE_MAX_LENGTH)
            {
                #use Constant!
                return "Your Product Code cannot be longer than " . self::PRODUCT_CODE_MAX_LENGTH . " characters!";
            }
            else
            {
                $this->productCode = $newProductCode;
                return "";
            }
        }
    }
    
    
    
    
    
    // getter for product description
    public function getProductDescription()
    {
        return $this->productDescription;
        
    }
    
    // setter for product description with validations
    public function setProductDescription($newProductDescription)
    {
        if(mb_strlen($newProductDescription) == 0)
        {
            return "Your Product Description cannot be empty!";
        }
        else
        {
            if(mb_strlen($newProductDescription) > self::PRODUCT_CODE_MAX_LENGTH)
            {
                #use Constant!
                return "Your Product Description cannot be longer than " . self::PRODUCT_CODE_MAX_LENGTH . " characters!";
            }
            else
            {
                $this->productDescription = $newProductDescription;
                return "";
            }
        }
    
    }
    
    
    
    
    
    
    // getter for product price
        public function getProductPrice()
    {
        return $this->productPrice;
        
    }
    
    
    // setter for product price with validation
    public function setProductPrice($newProductPrice)
    {
        if(mb_strlen($newProductPrice) == 0)
        {
            return "Your Product Price cannot be empty!";
        }
        else
        {
            if(($newProductDescription) > self::PRODUCT_PRICE_MAX_LENGTH)
            {
                #use Constant!
                return "Your Product Price cannot be greater than " . self::PRODUCT_PRICE_MAX_LENGTH . " characters!";
            }
            else
            {
                $this->productPrice = $newProductPrice;
                return "";
            }
        }
    
    }
    
    
    
    
    // getter for cost price
        public function getCostPrice()
    {
        return $this->costPrice;
        
    }
    
    
    // setter for cost price
    public function setCostPrice($newCostPrice)
    {
        
     $this->costPrice = $newCostPrice;
     return "";
     
    }

    
    
    // load function that selects a product given the prduct id, and returns the info into the product object
       function load($product_id)
    {
       global $connection;
       
       #call your STORED PROCEDURE
       $SQLQuery = "Call Product_Select(:product_id)";
       
       $PDOStatement = $connection->prepare($SQLQuery);
       $PDOStatement->bindParam(":product_id", $product_id);
       $PDOStatement->execute();
       
       if($row = $PDOStatement->fetch())
       {
           $this->productCode= $row["product_code"];
           $this->productDescription= $row["product_description"];
           $this->productPrice= $row["product_price"];
           $this->productid= $row["product_id"];
           
           return true;
  
       }
    }

}
