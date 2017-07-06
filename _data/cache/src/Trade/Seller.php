<?php 

namespace Acme\Trade;

class Seller {
	
	public function give($product)
	{ if (($__am_res = __amock_before($this, __CLASS__, __FUNCTION__, array($product), false)) !== __AM_CONTINUE__) return $__am_res; 
		sleep(1);
		  return 'Have your '.$product;
	}
}