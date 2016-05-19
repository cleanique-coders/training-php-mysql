<?php

class Header {
	public static function allowAPICall(){
		header('Access-Control-Allow-Origin: *'); 
		header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');
		//header('Access-Control-Allow-Headers: origin, x-requested-with, content-type, authorization, accept');
	}

	public function isMethod($value) {
		if($_SERVER["REQUEST_METHOD"] == $value) {
			return true;
		} else {
			return false;
		}
	}
}