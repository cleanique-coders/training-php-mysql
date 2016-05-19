<?php

require_once '../../_inc_.php';

if(Header::isMethod('GET') || Header::isMethod('OPTIONS')) {
	
	$username = $_GET['username'];
	$password = md5($_GET['password']);

	$conn = connect();

	$sql = "select * from users where username = :username and password = :password";

	$statement = $conn->prepare($sql);
	$statement->bindParam(':username', $username);
	$statement->bindParam(':password', $password);
	
	$user = null;

	if($statement->execute()) {
		$user = $statement->fetch();
	}

	// don't use session, use token instead
	if(!empty($user)) {
		$token = Token::generate($user['id']);
		Response::output($token);
	} else {
		Response::output([$user,$username,$password,$dump], 'Invalid credentials', false);
	}

} else {
	Response::output($_SERVER["REQUEST_METHOD"]);
}