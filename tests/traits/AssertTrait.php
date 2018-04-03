<?php

namespace App\Tests\Traits;

trait AssertTrait 
{	
	/*
	* $data is expected to be array, object or json string
	*/
    public static function assertPropertyExist($key,$data) {

    	if(is_array($data)) {
            self::assertArrayHasKey($key, $data); 
        }
    	    
    }
}