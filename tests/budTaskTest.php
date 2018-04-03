<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Tests\Traits\AssertTrait;

class BudTaskTest extends WebTestCase
{
	use AssertTrait;

	protected function setUp()
    {
    	//Example data
        $transactionData = [
    		'id' 				=> '153543', 
    		'totalAmount' 		=> '21.5',
    		'currency' 			=> 'GBP',
    		'transactionDate' 	=> '06/03/2018 11:15'
    		];

    	$this->transactionArray  = $transactionData;
    	$this->transactionObject = (object) $transactionData;
    	$this->transactionJson   = json_encode($transactionData);
    }

    // These are no real unit tests, they are examples to try the new asserts methods

    public function testExampleShouldPass()
    {
    	//Array 	
    
    	$this->assertPropertyExist('id', $this->transactionArray);    
   
    	$this->assertContainsValue('GBP', $this->transactionArray);
    	

    	//Object

    	$this->assertPropertyExist('id', $this->transactionObject);    	

    	$this->assertContainsValue('GBP', $this->transactionObject);


    	//Json String
    	$this->assertPropertyExist('id', $this->transactionJson);

    	$this->assertContainsValue('GBP', $this->transactionJson);
 	
    }

   
    public function  testExampleShouldFail()
    {
    	
    	//Array        
    	$this->assertPropertyExist('description', $this->transactionArray);
    
    	$this->assertContainsValue('EUR', $this->transactionArray);


    	//Object
    	$this->assertPropertyExist('description', $this->transactionObject);
    	
    	$this->assertContainsValue('EUR', $this->transactionObject);


    	//Json string
    	$this->assertPropertyExist('description', $this->transactionJson);

    	$this->assertContainsValue('EUR', $this->transactionJson);  
    	
    }
    

}