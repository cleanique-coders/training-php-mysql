<?php

// if not authorized, redirect to login page
	if(!isset($_SESSION['authorized'])) {
		$_SESSION['error'] = 'You are not authorized to access to the page.';		
		header('Location: login.php');
	}
