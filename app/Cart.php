<?php

namespace App;

class Cart
{
    public $items=null;
    public $quantity = 0;
    public $price = 0;

    public function __construct($oldCart)
    {
        if($oldCart)
        {
            $this->items = $oldCart->items;
            $this->quantity = $oldCart->quantity;
            $this->price = $oldCart->price;
            $this->totalprice = $oldCart->totalprice;
        }
    }
    public function add($item, $id)
    {
        $storeditem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
        if($this -> items)
        {
            if(array_key_exists($id, $this->items))
            {
                $storeditem = $this->items($id);
            }
        }
        $storeditem['qty']++;
        $storeditem['price'] = $item->price * $storeditem['qty'];
        $this->items[$id] = $storeditem;
    }
}
