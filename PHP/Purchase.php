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
class Purchase {
    

    private $purchaseId="";
    private $purchaseQuantity = 0;
    private $purchaseComment = "";
    private $customer_id = "";
    private $product_id= "";
    
    
    
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
    
             function __construct($new_purchase_quantity="", $new_purchase_comments="", $new_customer_id= "", $new_product_id="", $new_purchase_id="") 
    {
                 
                $this->purchaseId= $new_purchase_id;
                $this->customer_id= $new_customer_id;
                $this->product_id= $new_product_id;
                $this->purchaseQuantity= $new_purchase_quantity;
                $this-> purchaseComment= $new_purchase_comments;
                
       

        # this code is called everytime "=new car()" is called
    }
    
    
         public function getPurchase_ID()
    {
        return $this->purchaseId;
        
    }
    
     public function getPurchaseQuantity()
    {
        return $this->purchaseQuantity;
        
    }
    
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
    
    
    
         public function getPurchaseCustomer_ID()
    {
        return $this->customer_id;
        
    }
    
    
  public function getPurchaseProduct_Id()
    {
        return $this->product_id;
        
    }
    

    
    public function getPurchaseComments()
    {
        return $this->purchaseComment;
        
    }
    
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
    
    
        function save()
    {
        global $connection;
            #Call the Stored Procedure  CALL car_insert(:brand, :year, :transmission)
           $SQLQuery = "INSERT INTO Purchases (customer_id,  product_id, purchase_quantity, purchase_comments)" .
                "VALUES (:customer_id, :product_id, :purchase_quantity, :purchase_comments);";
            
           $PDOStatement = $connection->prepare($SQLQuery);
           $PDOStatement->bindParam(":customer_id", $this->customer_id);
           $PDOStatement->bindParam(":product_id", $this->product_id);
           $PDOStatement->bindParam(":purchase_quantity", $this->purchaseQuantity);
           $PDOStatement->bindParam(":purchase_comments", $this->purchaseComment);
           $PDOStatement->execute();
          
           return true;
        }
        
                function delete($new_purchase_id)
    {
        global $connection;
            #Call the Stored Procedure  CALL car_insert(:brand, :year, :transmission)
           $SQLQuery = "DELETE FROM Purchases WHERE Purchase_ID= :Purchase_ID";
            
       $PDOStatement = $connection->prepare($SQLQuery);
       $PDOStatement->bindParam(":Purchase_ID", $new_purchase_id);
       $PDOStatement->execute();
          
           return true;
        }
    
    
}

