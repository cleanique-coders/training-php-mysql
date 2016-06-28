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

	if(!empty($_POST)) {
		// do update
		$id = $_POST['id'];
		$name = $_POST['name'];
		$description = $_POST['description'];
		$status = $_POST['status'];
		$updated_at = date('Y:m:d H:i:s');

		$sql = "UPDATE `tasks` 
		SET
		`name` = :name , 
		`description` = :description , 
		`status` = :status ,  
		`updated_at` = :updated_at
		WHERE
		`id` = :id";

		$conn = connect();
		$update_statement = $conn->prepare($sql);
		$update_statement->bindParam(':name', $name);
		$update_statement->bindParam(':description', $description);
		$update_statement->bindParam(':status', $status);
		$update_statement->bindParam(':updated_at', $updated_at);
		$update_statement->bindParam(':id', $id);

		if($update_statement->execute()) {
			Response::('Update successfully');
		} else {
			Response::error('Unable to update');
		}
	}

} else {
	Response::unauthorized();
}