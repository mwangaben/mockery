<?php

use Acme\Billing\ChargesController;

/**
 * ChargesControllerTest
 *
 * @group group
 */
class ChargesControllerTest extends \PHPUnit_Framework_TestCase
{

    public function tearDown()
    {
        Mockery::close();
    }

    /** @test **/
    public function it_charges_with_the_stripe_service()
    {
        // Arrage
        $billingService = Mockery::mock('Acme\Billing\Contracts\Billable');
        $billingService->shouldReceive('charge')->once()->andReturn('done it');

        // Act
        $billing = new ChargesController($billingService);
        $result  = $billing->store('data');

        // Assert
        self::assertEquals('done it', $result);
    }
    
    /** @test**/
}
