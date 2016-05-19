<?php

require_once '_inc_.php';

Token::authorize();

if(isset($_GET['id'])) {
	$conn = connect();

	$stmt = $conn->prepare("SELECT * FROM tasks WHERE id = ?");
	$stmt->bindParam(1, $_GET['id']);
	
	if($stmt->execute()) {
		$task = $stmt->fetch();
	}

	if(!empty($task)) {
		$task = Response::kesAssoc($task);
		Response::output($task);
	} else {
		Response::output(null, 'Task not found', false);
	}

} else {
	Response::output(null, 'Task not found', false);
}