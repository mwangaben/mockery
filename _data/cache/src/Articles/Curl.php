<?php 
namespace Acme\Articles;

class Curl {
	
	public function post(array $data)
	{ if (($__am_res = __amock_before($this, __CLASS__, __FUNCTION__, array($data), false)) !== __AM_CONTINUE__) return $__am_res; 
		  return ' data was posted correctly';
	}
}