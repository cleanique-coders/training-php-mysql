<?php

require_once '_inc_.php';

Token::authorize();

if(!empty($_POST)) {
	$name = $_POST['name'];
	$description = $_POST['description'];

	$conn = connect();

	$stmt = $conn->prepare("SELECT * FROM tokens WHERE token = ?");
	$stmt->bindParam(1, $_REQUEST['token']);
	
	if($stmt->execute()) {
		$token = $stmt->fetch();
	}

	$sql = "select * from users where id = ?";

	$statement = $conn->prepare($sql);
	$statement->bindParam(1, $token['user_id']);
	
	$user = null;

	if($statement->execute()) {
		$user = $statement->fetch();
	}

	if(empty($user)) {
		Response::output(null, 'Invalid Request', false);
	} else {
		$created_at = date('Y:m:d H:i:s');

		$insert_statement = $conn->prepare("INSERT INTO `tasks`	(`user_id`, `name`, `description`, `created_at`)
		VALUES
		(:user_id, :name, :description, :created_at)");
		$insert_statement->bindParam(':user_id', $user['id']);
		$insert_statement->bindParam(':name', $name);
		$insert_statement->bindParam(':description', $description);
		$insert_statement->bindParam(':created_at', $created_at);
		
		if($insert_statement->execute()) {
			Response::output(null,'New Task Added');
		} else {
			Response::output(null,'Failed to add new task', false);
		}
	}
}else {
	Response::output(null, 'Invalid Request', false);	
}