<?php 

use Acme\Articles\Curl;
use Acme\Articles\Newsletter;

class Foo {
	protected $bar;

	public function __construct(Bar $bar)
	{
		$this->bar = $bar;
	}

	public function fire()
	{
		  return $this->bar->doIt();
	}

}

class Bar {
	public function doIt()
	{
		  return 'Doing it';
	}
}
/**
 * NewsletterTest
 *
 * @group group
 */
class NewsletterTest extends \PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
    	  Mockery::close();
    }
     
        /** @test **/ 
	function it_testing_foo_with_isolation()
	{
		$bar = Mockery::mock('Bar');
        $bar->shouldReceive('doIt')->once()->andReturn('Doing it now');

 	   $foo = new Foo($bar);
 	   $result = $foo->fire();	

 	   $this->assertEquals('Doing it now', $result);
	}








   /** @test **/ 
	function it_adds_user_to_a_newsletter_list()
	{
		// Arrange
		$curl = Mockery::mock('Acme\Articles\Curl');
		$data = [ 'email' => 'mwangaben@gmail.com', 'name' => 'Mwanga'];
		$curl->shouldReceive('post')->once()->with($data)->andReturn('mocked');
        
        // Act
 		$newsletter = new Newsletter($curl);	
 		$result = $newsletter->addToAList($data['name'],$data['email']);
         // dd($result);
        // Assert 
 		$this->assertEquals('mocked', $result);
 		// $this->assertArrayHasKey('Mwanga', $result);	
	}

	  /** @test **/ 
	function it_cna_add_user_to_a_list_without_considering_parameter_passed_to_the_post_method()
	{
		// Arrange
		$curl = Mockery::mock('Acme\Articles\Curl');
		$curl->shouldReceive('post')->once()->andReturn('mocked');

 	 	// Act 
 	 	$newsletter = new Newsletter($curl);
 	 	$result = $newsletter->addToAList('Mwanga', 'mwangaben@gmail.com');

 	 	//Assert
 	 	$this->assertEquals('mocked', $result);	
	}
}
