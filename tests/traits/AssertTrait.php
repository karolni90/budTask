<?php

namespace App\Tests\Traits;

trait AssertTrait 
{	
    use FormatDataTrait;

	/*
    * $data is expected to be array, object or json string
    */
    public static function assertPropertyExist($key,$data) 
    {
        $arrayData = self::formatDataAsArray($data);

        if(!$arrayData) {

            throw new \Exception("Unexpected data type ($data). Expected array, object or json string.");
        }

        self::assertArrayHasKey($key, $arrayData);     
    }

    /*
    * $data is expected to be array, object or json string
    */
    public static function assertContainsValue($value, $data) 
    {
        $arrayData = self::formatDataAsArray($data);

        if(!$arrayData) {

            throw new \Exception("Unexpected data type ($data). Expected array, object or json string.");
        }

        self::assertContains($value, $arrayData);     
    }



}