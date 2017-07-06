<?php 

namespace Acme\System;

class Foo {
	

	public function go()
	{ if (($__am_res = __amock_before($this, __CLASS__, __FUNCTION__, array(), false)) !== __AM_CONTINUE__) return $__am_res; 
		  return time();
	}
}