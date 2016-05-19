<?php

require_once '../../_inc_.php';

if(isset($_GET['token'])) {
	$conn = connect();

	$stmt = $conn->prepare("DELETE FROM tokens WHERE token = ?");
	$stmt->bindParam(1, $_GET['id']);
	
	if($stmt->execute()) {
		Response::output(null, 'See you again!');
	} else {
		Response::output(null, 'Unable to logout', false);	
	}
} else {
	Response::output(null, 'Unable to logout', false);
}