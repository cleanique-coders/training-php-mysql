<?php

require_once '../../_inc_.php';

Token::authorize();

if(!empty($_GET)) {
	// do delete here
	$task_id = $_GET['id'];

	$conn = connect();

	$delete_statement = $conn->prepare('DELETE FROM tasks WHERE id = :id');

	$delete_statement->bindParam(':id', $task_id);

	if($delete_statement->execute()) {
		Response::output('Task deleted');
	} else {
		Response::output(null, 'Unable to delete the task, please try again later.', false);
	}
} else {
	Response::output(null, 'Unable to delete the task, please try again later.', false);
}

?>