<?php

namespace App;

class Cart
{
    public $items = null;
    public $quantity = 0;
    public $price = 0;

    public function __construct($oldCart)
    {
        if($oldCart)
        {
            $this->items = $oldCart->items;
            $this->quantity = $oldCart->quantity;
            $this->price = $oldCart->price;
            // $this->totalprice = $oldCart->totalprice;
        }
    }
    public function add($item, $id)
    {
        $storeditem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
        if($this->items)
        {
            if(array_key_exists($id, $this->items))
            {
                $storeditem = $this->items[$id];
            }
        }
        $storeditem['qty']++;
        $storeditem['price'] = $item->price * $storeditem['qty'];
        $this->items[$id] = $storeditem;
        $this->quantity++;
        $this->price += $item->price;
    }

    public function increaseByOne($id)
    {
        $this->items[$id]['qty']++;
        $this->items[$id]['price'] += $this->items[$id]['item']['price'];
        $this->quantity++;
        $this->price += $this->items[$id]['item']['price'];

        // if($this->items[$id]['qty'] <= 0)
        // {
        //     unset($this->items[$id]);
        // }
    }

    public function reduceByOne($id)
    {
        $this->items[$id]['qty']--;
        $this->items[$id]['price'] -= $this->items[$id]['item']['price'];
        $this->quantity--;
        $this->price -= $this->items[$id]['item']['price'];

        if($this->items[$id]['qty'] <= 0)
        {
            unset($this->items[$id]);
        }
    }

    public function removeItem($id)
    {
        $this->quantity -= $this->items[$id]['qty'];
        $this->price -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }
}
