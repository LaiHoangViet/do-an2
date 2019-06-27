<?php

namespace App;

/**
 * 
 */
class Cart
{
	
	public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;

	public function __construct($oldcart)
	{
		if ($oldcart) {
			$this->$items = $oldcart->items;
			$this->$totalQty = $oldcart->totalQty;
			$this->$totalPrice = $oldcart->totalPrice;
		}
	}

	public function add($items,$id)
	{
		$gio_hang = ['qty'=>0, 'price'=>$items->unit_price, 'items'=>$items];
		if ($this->items) {
			if (array_key_exists($id, $this->items)) {
				$gio_hang = $this->items[$id];
			}
		}
		$gio_hang['qty']++;
		$gio_hang['price']=  $items->unit_price * $gio_hang['qty'];
		$this->items[$id] = $gio_hang;
		$this->totalQty++;
		$this->totalPrice +=$items->unit_price;
	}
	
}