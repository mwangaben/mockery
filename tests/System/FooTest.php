<?php 

namespace Acme\System;


function time() { return 'gotcha';}
/**
 * FooTest
 *
 * @group group
 */
class FooTest extends \PHPUnit_Framework_TestCase
{
      /** @test **/ 
	function it_gets_the_time()
	{
 	  	$result = (new Foo())->go();
 	  	// var_dump($result);

 	  	self::assertEquals('gotcha', $result);	
	}
}
