<?php

require_once '../../_inc_.php';

if(Header::isMethod('POST') || Header::isMethod('OPTIONS')) {
	doRegister();
} else {
	Response::output($_SERVER["REQUEST_METHOD"]);
}

function doRegister() {
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$created_at = date('Y:m:d H:i:s');

	$conn = connect();

	$insert_statement = $conn->prepare("INSERT INTO `users`	(`username`, `password`, `created_at`)
	VALUES
	(:username, :password, :created_at)");
	$insert_statement->bindParam(':username', $user['id']);
	$insert_statement->bindParam(':password', $password);
	$insert_statement->bindParam(':created_at', $created_at);
	
	if($insert_statement->execute()) {
		Response::output(null,'Successfully register your account. You may login now.');
	} else {
		Response::output(null,'Failed to add new task', false);
	}
}