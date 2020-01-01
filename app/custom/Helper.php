<?php

namespace App\custom;
/**
 * 
 */
class Helper
{
	public static function make_slug($string) {
	    return preg_replace('/\s+/u', '-', trim($string));
	}
}