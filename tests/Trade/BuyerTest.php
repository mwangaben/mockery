<?php 

use Acme\Trade\Buyer;
use Acme\Trade\Seller;


/**
 * BuyerTest
 *
 * @group group
 */
class BuyerTest extends \PHPUnit_Framework_TestCase
{
      /** @test **/ 
	function it_checks_if_the_buyer_can_buy_a_bread_costs_1200()
	{
        //Arrange
        $seller = Mockery::mock('Acme\Trade\Seller');
        $seller->shouldReceive('give')->once()->andReturn('mocked');

		// Act
		$buyer = new Buyer($seller);
		$result = $buyer->buy('bread', 1200);

		// Assert
		$this->assertEquals('mocked', $result);	
	}

     /** @test **/ 
	function it_ckecks_if_the_the_right_parameter_is_passed_to_the_give_method()
	{
 		//Arrange 
 		$seller = Mockery::mock('Acme\Trade\Seller');
 		$seller->shouldReceive('give')->times(1)->with('bread')->andReturn('gotcha');

 		// Act
 		$buyer = new Buyer($seller);
 		$result = $buyer->buy('bread', 1200);

 		// Aseert
 		$this->assertEquals('gotcha', $result);			
	}
}
