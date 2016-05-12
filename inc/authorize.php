<?php

if(empty($_SESSION)) {
	header('Location: index.php');
}

if(!isset($_SESSION['authorized']) || !isset($_SESSION['user']) || !$_SESSION['authorized']) {
	header('Location: index.php');
}

?>

<a href="logout.php" class="btn btn-danger pull-right">Logout</a>