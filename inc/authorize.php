<?php

if(empty($_SESSION)) {
	$_SESSION['error'] = 'Unauthorized access to the application.';
	header('Location: index.php');
}

if(!isset($_SESSION['authorized']) || !isset($_SESSION['user']) || !$_SESSION['authorized']) {
	$_SESSION['error'] = 'Unauthorized access to the application.';
	header('Location: index.php');
}

?>

<a href="logout.php" class="btn btn-danger pull-right">Logout</a>