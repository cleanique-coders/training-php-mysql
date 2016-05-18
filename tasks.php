<?php 

require_once '_inc_.php';

Token::authorize();

$conn = connect();

$select_statement = $conn->prepare('SELECT * FROM tasks');
$data = [];

if($select_statement->execute()) { 
	while ($row = $select_statement->fetch()) { 
		$data[] = Response::kesAssoc($row);
	}
}

Response::output($data);