<?php 
 namespace Acme\Doubles;

 class UserModel {

 	public static function tableName()
 	{ if (($__am_res = __amock_before(get_called_class(), __CLASS__, __FUNCTION__, array(), true)) !== __AM_CONTINUE__) return $__am_res; 
 		 return 'users'; 
 	}
 	
 }

 ?>