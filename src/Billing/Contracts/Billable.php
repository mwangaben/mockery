<?php 

namespace Acme\Billing\Contracts;

interface Billable {

	public function charge();
}