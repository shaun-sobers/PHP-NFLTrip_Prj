<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Purchase
 *
 * @author Shaun
 */

  # (Shaun Sobers (1933337) 25/04/2021 ... Created purchase class
  # (Shaun Sobers (1933337) 25/04/2021 ... Created validations
 # (Shaun Sobers (1933337) 25/04/2021 ... Connected classes to db
 # (Shaun Sobers (1933337) 25/04/2021 ... Tested purchase object
class Purchase {
    

    private $purchaseId="";
    private $purchaseQuantity = 0;
    private $purchaseComment = "";
    private $customer_id = "";
    private $product_id= "";
    private $Purchase_Price= 0;
    private $Purchase_Taxes=0;
    private $Purchase_Subtotal=0;
    private $Purchase_GrandTotal=0;
    private $purchase_customer_Fname="";
    private $purchase_customer_Lname="";
    private $purchase_customer_City="";
    
    
    
    // delcaring constants
    const PURCHASE_MAX_QUANTITY = 999; 
    const PURCHASE_COMMENTS_MAX_LENGTH = 200; 
    
//    
//            function __construct($new_purchase_quantity="", $new_purchase_comments="", $new_customer_id= "", $new_product_id="") 
//    {
//
//                $this->customer_id= $new_customer_id;
//                $this->product_id= $new_product_id;
//                $this->purchaseQuantity= $new_purchase_quantity;
//                $this-> purchaseComment= $new_purchase_comments;
//       
//
//        # this code is called everytime "=new car()" is called
//    }
    
    
        // default constructor with parameters
             function __construct($new_purchase_quantity="", $new_purchase_comments="", $new_customer_id= "", $new_product_id="", $new_purchase_id="", $new_price="", $new_taxes="", $new_subtotal="", $new_grandtotal="", $new_fname="", $new_lname="", $new_city="") 
    {
                 
                $this->purchaseId= $new_purchase_id;
                $this->customer_id= $new_customer_id;
                $this->product_id= $new_product_id;
                $this->setPurchaseQuantity($new_purchase_quantity);
                $this->setPurchaseComments($new_purchase_comments);
                $this->setPurchasePrice($new_price);
                $this->setPurchaseSubtotal($new_subtotal);
                 $this->setPurchaseTax($new_taxes);
                $this->setPurchaseGrandTotal($new_grandtotal);
                $this->setPurchase_CustomerCity($new_city);
                $this->setPurchase_CustomerFname($new_fname);
                $this->setPurchase_CustomerLname($new_lname);
       

        # this code is called everytime "=new purchase()" is called
    }
    
    
    
    
    
    // getter for purchase id
         public function getPurchase_ID()
    {
        return $this->purchaseId;
        
    }
    
    
    // getter for purchase quantity
     public function getPurchaseQuantity()
    {
        return $this->purchaseQuantity;
        
    }
    
    
    //setter for purchase quantity with validation
    public function setPurchaseQuantity($newPurchaseQuantity)
    {
        if(mb_strlen($newPurchaseQuantity) == 0)
        {
            return "Your Quantity cannot be empty!";
        }
        else
        {
            if($newPurchaseQuantity > self::PURCHASE_MAX_QUANTITY)
            {
                #use Constant!
                return "Your Quantity cannot be larger than " . self::PURCHASE_MAX_QUANTITY . " characters!";
            }
            else
            {
                $this->purchaseQuantity = $newPurchaseQuantity;
                return "";
            }
        }
    }
    
    
    
    // getter purchase customer id
         public function getPurchaseCustomer_ID()
    {
        return $this->customer_id;
        
    }
    
    // getter for product id
  public function getPurchaseProduct_Id()
    {
        return $this->product_id;
        
    }
    

 // getter for purchase comments    
    public function getPurchaseComments()
    {
        return $this->purchaseComment;
        
    }
    
    
    // setter for purchase comments with validation
    public function setPurchaseComments($newPurchaseComments)
    {
        
            if(mb_strlen($newPurchaseComments) > self::PURCHASE_COMMENTS_MAX_LENGTH)
            {
                return "Your Purchase comments cannot be longer than " . self::PURCHASE_COMMENTS_MAX_LENGTH. " characters!";
            }
            else
            {
                $this->purchaseComment = $newPurchaseComments;
                return "";
            }
    }
    
    
    
    // getter for purchase price
    public function getPurchasePrice(){
        return $this->Purchase_Price;
    }
    
    
    // setter for purchase price
    public function setPurchasePrice($new_price){
        
        $this->Purchase_Price= $new_price;
    }
    
    
    // getter for purchase tax
    public function getPurchaseTax(){
        return $this->Purchase_Taxes;
    }
    
    
    // setter for purchase tax
        public function setPurchaseTax($new_tax){
        $this->Purchase_Taxes= $new_tax;
    }
    
    // getter for purchase subtotal
        public function getPurchaseSubtotal(){
        return $this->Purchase_Subtotal;
    }
    
    
    // setter for purchase subtotal
            public function setPurchaseSubtotal($new_subtotal){
        $this->Purchase_Subtotal= $new_subtotal;
    }
    
    
    // getter for purchase grand total
        public function getPurchaseGrandTotal(){
        return $this->Purchase_GrandTotal;
    }
    
    
    // setter for purchase grand total
            public function setPurchaseGrandTotal($new_grandtotal){
        $this->Purchase_GrandTotal= $new_grandtotal;
    }
    
    
    // getter for purchase customer first name
        public function getPurchase_CustomerFname(){
        return $this->purchase_customer_Fname;
    }
    
    
    // setter for purchase customer first name
            public function setPurchase_CustomerFname($new_fname){
        $this->purchase_customer_Fname= $new_fname;
    }
    
    
    // getter for purchase customer last name
        public function getPurchase_CustomerLname(){
        return $this->purchase_customer_Lname;
    }
    
        // setter for purchase customer last name
        public function setPurchase_CustomerLname($new_lname){
        $this->purchase_customer_Lname= $new_lname;
    }
    
    // getter for purchase's customer city
        public function getPurchase_CustomerCity(){
        return $this->purchase_customer_City;
    }
    
    // setter for purchase's customer city
            public function setPurchase_CustomerCity($new_city){
        $this->purchase_customer_City= $new_city;
    }
    
    
          // save function that inserts the object information into the purchase table
        function save()
    {
        global $connection;
            #Call the Stored Procedure  CALL car_insert(:brand, :year, :transmission)
           $SQLQuery = "Call Purchase_Add(:customer_id, :product_id, :purchase_quantity, :purchase_comments, :purchase_price, :purchase_tax, :purchase_subtotal, :purchase_grandtotal)";

           
           
           $PDOStatement = $connection->prepare($SQLQuery);
           $PDOStatement->bindParam(":customer_id", $this->customer_id);
           $PDOStatement->bindParam(":product_id", $this->product_id);
           $PDOStatement->bindParam(":purchase_quantity", $this->purchaseQuantity);
           $PDOStatement->bindParam(":purchase_comments", $this->purchaseComment);
           $PDOStatement->bindParam(":purchase_price", $this->Purchase_Price);
           $PDOStatement->bindParam(":purchase_tax", $this->Purchase_Taxes);
           $PDOStatement->bindParam(":purchase_subtotal", $this->Purchase_Subtotal);
           $PDOStatement->bindParam(":purchase_grandtotal", $this->Purchase_GrandTotal);
           $PDOStatement->execute();
          
           return true;
        }
        
        
        
        // delete function that removes information from the purchase table given the purchase id
                function delete($new_purchase_id)
    {
        global $connection;
            #Call the Stored Procedure  CALL car_insert(:brand, :year, :transmission)
           $SQLQuery = "Call Purchase_Delete(:Purchase_ID)";
            
       $PDOStatement = $connection->prepare($SQLQuery);
       $PDOStatement->bindParam(":Purchase_ID", $new_purchase_id);
       $PDOStatement->execute();
          
           return true;
        }
    
    
}

