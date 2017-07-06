<?php 

namespace Acme\Billing;

use Acme\Billing\Contracts\Billable;


class ChargesController  {
	protected $billing;

	public function __construct( Billable $billing)
	{ if (($__am_res = __amock_before($this, __CLASS__, __FUNCTION__, array($billing), false)) !== __AM_CONTINUE__) return $__am_res; 
		$this->billing = $billing;
	}

	public function store($info)
	{ if (($__am_res = __amock_before($this, __CLASS__, __FUNCTION__, array($info), false)) !== __AM_CONTINUE__) return $__am_res;   
		  return $this->billing->charge($info);
	}

	


}