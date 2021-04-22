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
    

    private $purchaseQuantity = 0;
    private $purchasePrice = 0.00;
    private $purchaseComment = "";
    
    
    const PURCHASE_MAX_QUANTITY = 999; 
    const PURCHASE_COMMENTS_MAX_LENGTH = 200; 
    
    
    
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
    
    
}

