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

	public static function send_sms($number,$message,$type='TEXT'){

        $postdata = http_build_query(
             
            array(

                'api_key' => 'KEY-hyq51f9o0w8m85n6s027q1hbrrz3wr1k', 
                'api_secret' => 'WbQ7tcjaKTP@CL82', 
                'request_type' => 'SINGLE_SMS', 
                'message_type' => $type, 
                'mobile' => $number, 
                'message_body' => $message, 
            )

          );
	    $opt = array('http' =>
	    array(
	        'method'  => 'POST',
	        'header'  => 'Content-type: application/x-www-form-urlencoded',
	        'content' => $postdata
	    )
	);

     $context  = stream_context_create($opt);

           $response =   file_get_contents('https://portal.adnsms.com/api/v1/secure/send-sms',false,$context);

            // return $response;
	}
}