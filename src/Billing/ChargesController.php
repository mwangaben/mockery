<?php 

namespace Acme\Billing;

use Acme\Billing\Contracts\Billable;


class ChargesController  {
	protected $billing;

	public function __construct( Billable $billing)
	{
		$this->billing = $billing;
	}

	public function store($info)
	{  
		  return $this->billing->charge($info);
	}

	


}