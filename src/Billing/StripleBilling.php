<?php 

namespace Acme\Billing;

use Acme/Billing\Billable;

class StripeBilling implements Billable {
	

	public function charge()
	{
		return 'Chariging with stripe ';
	}
}