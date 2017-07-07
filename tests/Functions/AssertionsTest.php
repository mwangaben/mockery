<?php 

use Acme\Assertions\Person;
  
/**
 * AssertionsTest
 *
 * @group group
 */
class AssertionsTest extends \PHPUnit_Framework_TestCase
{
      /** @test **/ 
	function it_checks_if_array_has_a_key_specified()
	{
         $names = ['firstname' => 'Benedict', 'lastname' => 'Mwanga'];
         $this->assertArrayHasKey('firstname', $names);	
	}
       /** @test **/ 
	function it_checks_if_the_array_has_not_a_key()
	{
         $names = ['firstname' => 'Benedict', 'lastname' => 'Mwanga'];
         $this->assertArrayNotHasKey('age', $names);	
	}

	  /** @test **/ 
	function it_checks_whether_array_has_a_subset_specified()
	{ 
		// stringly support associative array
		// 
       $data = ['firstname' => 'benedict', 'lastname' => 'Mwanga'];
       $this->assertArraySubset(['lastname' => 'Mwanga'], $data);		
	}

	  /** @test **/ 
	function it_checks_if_the_class_has_certain_attributes()
	{
       $this->assertClassHasAttribute('name', Person::class);		
	}

	  /** @test **/ 
	function it_asserts_if_the_class_has_static_attribute()
	{
		$this->assertClassHasStaticAttribute('age', Person::class);
	}

	  /** @test **/ 
	function it_asserts_if_the_needle_is_contained_in_the_haystack()
	{
    	$this->assertContains('Mwanga', ['Mwanga', 'Mkinga', 'Mkota', 'Kulindwa']);	
    	$this->assertContains('Foo', 'Foobar', true);	
	}

	  /** @test **/ 
	function it_asserts_haystack_contains_only_the_type_of_data_specified()
	{
        $this->assertContainsOnly('array', [[1, 2,3], ['names', 'ages']]);		
       $this->assertContainsOnly(Person::class, [ new Person]);		
	}

	  /** @test **/ 
	function it_asserts_class_passed_contains_only_the_instance_of_a_certain_class()
	{
       $this->assertContainsOnlyInstancesOf(Person::class, [ new Person]);		
	}

	  /** @test **/ 
	function it_asserts_counts()
	{
       $this->assertCount(2, [new stdClass, new stdClass]);		
	}

	  /** @test **/ 
	function it_asserts_if_directory_exists()
	{  
		$dir = __DIR__ .'/../Aspect';
        $this->assertDirectoryExists($dir);		
	}
	
	/** @test **/
	
	function it_checks_

}
