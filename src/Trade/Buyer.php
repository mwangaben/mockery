<?php 

namespace Acme\Trade;

class Buyer {
	protected $seller;

	public function __construct(Seller $seller)
	{
		$this->seller = $seller;
	}

	public function buy($product, $price)
	{
		  if($product == 'bread' && $price == 1200){
		  	  return $this->seller->give($product);
		  }

		   return 'No stock';
	}
}