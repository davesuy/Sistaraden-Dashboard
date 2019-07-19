<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sharpspring;

class CrmController extends Controller
{
	
	public function sharpspringCurl($method, $params) {

		$sharpspring = new Sharpspring();

			
		$method = $method;                                                                 
		$params =  $params;       
		$requestID = session_id();    
		$accountID = $sharpspring->accountID;
		$secretKey = $sharpspring->secretKey;                                                     

		$data = array(                                                                                
			'method' => $method,                                                                      
			'params' => $params,                                                                      
			'id' => $requestID,                                                                       
		);                                                                                            
		                                                                                         
		$queryString = http_build_query(array('accountID' => $accountID, 'secretKey' => $secretKey)); 
		$url = "http://api.sharpspring.com/pubapi/v1/?$queryString";                             
		                                                                                         
		$data = json_encode($data);                                                                   
		$ch = curl_init($url);                                                                        
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                              
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);                                                  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                               
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                   
		'Content-Type: application/json',                                                         
		'Content-Length: ' . strlen($data)                                                        
		));                                                                                           
		                                                                                         
		$result = curl_exec($ch);                                                                     
		curl_close($ch);                                                                              
		                                                                                         
		return $result; 
	}

}
