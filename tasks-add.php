<?php

require_once '_inc_.php';

Token::authorize();

if(!empty($_POST)) {
	// yeay! going to add new task!

	$name = $_POST['name'];
	$description = $_POST['description'];

	$conn = connect();

	$created_at = date('Y:m:d H:i:s');

	$insert_statement = $conn->prepare("INSERT INTO `tasks`	(`name`, `description`, `created_at`)
	VALUES
	(:name, :description, :created_at)");
	$insert_statement->bindParam(':name', $name);
	$insert_statement->bindParam(':description', $description);
	$insert_statement->bindParam(':created_at', $created_at);
	
	if($insert_statement->execute()) {
		header('Location: tasks.php');
	}
}