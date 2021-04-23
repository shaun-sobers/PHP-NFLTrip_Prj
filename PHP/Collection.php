<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Collection
 *
 * @author Shaun
 */
class Collection {

    public $items = array();
    
    public function add($primary_key, $item)
    {
        $this->items[$primary_key]= $item;
        #return $items;
    }
    
    public function remove ($primary_key)#uuid
    {
        if(isset($this->items[$primary_key]))
        {
            unset($this->items[$primary_key]);
        }
    }
 
        public function get ($primary_key)#uuid
    {
        if(isset($this->items[$primary_key]))
        {
            return($this->items[$primary_key]);
        }
    }
    
    public function count()
    {
        return count($this->items);
    }
}

