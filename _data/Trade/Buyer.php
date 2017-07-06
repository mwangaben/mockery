<?php 

namespace Acme\Trade;

class Buyer {
	protected $seller;

	public function __construct(Seller $seller)
	{ if (($__am_res = __amock_before($this, __CLASS__, __FUNCTION__, array($seller), false)) !== __AM_CONTINUE__) return $__am_res; 
		$this->seller = $seller;
	}

	public function buy($product, $price)
	{ if (($__am_res = __amock_before($this, __CLASS__, __FUNCTION__, array($product, $price), false)) !== __AM_CONTINUE__) return $__am_res; 
		  if($product == 'bread' && $price == 1200){
		  	  return $this->seller->give($product);
		  }

		   return 'No stock';
	}
}