<?php

require_once 'inc/functions.php';

doLogin($_POST['username'], md5($_POST['password']));

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

	if(!empty($user)) {
		$_SESSION['authorized'] = true;
		$_SESSION['user'] = $user;
		header('Location: tasks.php');
	} else {
		$_SESSION['error'] = 'Invalid credentials';
		header('Location: index.php');
	}
}