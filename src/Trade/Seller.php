<?php 

namespace Acme\Trade;

class Seller {
	
	public function give($product)
	{
		sleep(1);
		  return 'Have your '.$product;
	}
}