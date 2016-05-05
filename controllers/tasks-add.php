<?php

if(!empty($_POST)) {
	// yeay! going to add new task!

	$user_id = $_POST['user_id'];
	$name = $_POST['name'];
	$description = $_POST['description'];

	if(Task::add($user_id, $name, $description)) {
		header('Location: ../dashboard.php');
	}
}