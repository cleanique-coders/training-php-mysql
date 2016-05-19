<?php

class Response {
	public static function output($value, $message = '', $status = true, $code = 200) {
		echo json_encode([
			'data' => $value,
			'message' => $message,
			'status' => $status,
			'code' => $code
		]);
		exit($code);
	}

	public static function invalid() {
		Response::output(null,'Invalid request','false');
	}

	public static function error($message) {
		Response::output(null, $message, false);
	}

	public static function kesAssoc($data) {
		$_data = [];
		foreach ($data as $key => $value) {
			if(is_string($key)) {
				$_data[$key] = $value;
			}
		}
		return $_data;
	}

	public static function unauthorized() {
		Response::output(null, 'Unauthorized Access', false);
	}
}