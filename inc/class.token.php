<?php 

class Token {
	// pass in user_id
	public static function generate($value) {
		$time = rand();
		$token = md5('lorem-ipsum'.$time.$value);
		$created_at = date('Y:m:d H:i:s');
		$expired_at = date('Y-m-d H:i:s', strtotime("+30 days"));

		if(function_exists('connect')) {
			$conn = connect();
			$sql = "INSERT INTO `tokens` (`user_id`, `token`, `created_at`, `expired_at`) VALUES (:user_id, :token, :created_at, :expired_at)";
			$insert_statement = $conn->prepare($sql);
			$insert_statement->bindParam(':user_id', $value);
			$insert_statement->bindParam(':token', $token);
			$insert_statement->bindParam(':created_at', $created_at);
			$insert_statement->bindParam(':expired_at', $expired_at);
			if($insert_statement->execute()) {
				return $token;
			}
		} else {
			die('connection disabled!');
		}
	}

	public static function authorize() {
		// get token
		if(!isset($_REQUEST['token'])) {
			Response::unauthorized();
		}

		$conn = connect();

		$stmt = $conn->prepare("SELECT * FROM tokens WHERE token = ?");
		$stmt->bindParam(1, $_REQUEST['token']);
		
		if($stmt->execute()) {
			$token = $stmt->fetch();
		}

		if(!empty($token)) {
			// no need to echo
			return true;
		} else {
			Response::unauthorized();
		}
	}
}