<?php

namespace App\Tests\Traits;

trait FormatDataTrait 
{
	public static function formatDataAsArray($data) 
	{
    	if(is_array($data)) {

    		return $data;
    	}
    	elseif(is_object($data)) {

    		return (array) $data; //Transform object in an associative array
    	}
    	elseif(is_string($data)) {

    		//Extract json in an associative array
    		$jsonArray = json_decode($data,true);

    		if(is_array($jsonArray)) {

    			return $jsonArray;
    		}    		
    	}    	
    	
    	return false;
    }

}