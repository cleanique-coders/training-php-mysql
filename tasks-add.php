<?php

require_once '_inc_.php';

if(!empty($_POST)) {
	// yeay! going to add new task!

	$name = $_POST['name'];
	$description = $_POST['description'];

	$conn = connect();

	$created_at = date('Y:m:d H:i:s');

	$insert_statement = $conn->prepare("INSERT INTO `tasks` 
	(`name`, `description`, `created_at`)
	VALUES
	(:name, :description, :created_at)");
	$insert_statement->bindParam(':name', $name);
	$insert_statement->bindParam(':description', $description);
	$insert_statement->bindParam(':created_at', $created_at);
	
	if($insert_statement->execute()) {
		header('Location: tasks.php');
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>My Tasks</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<form method="post">
	<fieldset>

	<!-- Form Name -->
	<legend>New Task Details</legend>

	<!-- Text input-->
	<div>
	  <label for="name">Task Name</label>  
	  <div>
	  <input id="name" name="name" type="text" placeholder="Your task's name" required="">
	    
	  </div>
	</div>

	<!-- Textarea -->
	<div>
	  <label for="description">Task Description</label>
	  <div>                     
	    <textarea id="description" name="description">Enter your task description here</textarea>
	  </div>
	</div>

	<!-- Button (Double) -->
	<div>
	  <label for="submit"></label>
	  <div>
	    <button id="submit" name="submit" class="btn btn-success">Add</button>
	    <a href="tasks.php" class="btn btn-danger">Cancel</a>
	  </div>
	</div>

	</fieldset>
	</form>
</body>
</html>

