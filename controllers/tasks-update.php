<?php

if(!empty($_GET['id'])) {
	$task = Task::findById($_GET['id']);
} else {
	header('Location: ../dashboard.php');
}

if(!empty($_POST)) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$status = $_POST['status'];

	if(Task::update($id, $name, $description, $status)) {
		header('Location: ../dashboard.php');
	}
}