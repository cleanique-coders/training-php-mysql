<?php require_once "_inc_.php"; ?>

<h1><?= TITLE; ?></h1>

<?php

$pdo = connect();

d('Fetch Single Record');
// fetch single record

$sql = "SELECT * FROM tasks WHERE id = 1";
$stmt = $pdo->query($sql);
$row = $stmt->fetchObject();
d($row->name);

d('Fetch many records');
// fetch all/many records

$sql = "select * from tasks";
foreach ($pdo->query($sql) as $key => $value) {
	d($value);
}

d('Using Prepare, helps to prevent SQL Injection');

// if $_GET['id'] is empty, set $id equal to 1, else use value from $_GET['id']
$id = (empty($_GET['id'])) ? 1 : $_GET['id'];

$sql = "SELECT * FROM tasks WHERE id = :id";
$select_statement = $pdo->prepare($sql);
$select_statement->bindParam(':id', $id);

// display query
echo '<pre>';
$select_statement->debugDumpParams();
echo '</pre>';

// execute the query
$select_statement->execute();

// get the result object
$row = $select_statement->fetchObject();

// print out some data
d($row->name);
