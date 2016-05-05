<?php

require_once '_inc_.php';

if(!empty($_GET)) {
	// do delete here
	$task_id = $_GET['id'];

	$conn = connect();

	$delete_statement = $conn->prepare('DELETE FROM tasks WHERE id = :id');

	$delete_statement->bindParam(':id', $task_id);

	$delete_statement->execute();

	header('Location: tasks.php');
} else {
	header('tasks.php');
}

?>