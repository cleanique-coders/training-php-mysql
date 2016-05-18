<?php

if(Header::isMethod('POST')) {
	doLogin($_POST['username'], md5($_POST['password']));
} else {
	Response::output($_SERVER["REQUEST_METHOD"]);
}


function doLogin($username, $password) {
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
		Response::output(null, 'Invalid credentials', false);
	}
}