<?php

if(isset($_GET['id'])) {
	require_once '../_inc_.php';
	require_once '../models/Task.php';

	$task_id = $_GET['id'];

	if(Task::delete($task_id)) {
		header('Location: ../dashboard.php');
	}
}