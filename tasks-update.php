<?php

require_once '_inc_.php';

if(isset($_GET['id'])) {
	$conn = connect();

	$stmt = $conn->prepare("SELECT * FROM tasks WHERE id = ?");
	$stmt->bindParam(1, $_GET['id']);
	
	if($stmt->execute()) {
		$task = $stmt->fetch();
	}

	if(!empty($_POST)) {
		d($_POST);
		// do update
		$id = $_POST['id'];
		$name = $_POST['name'];
		$description = $_POST['description'];
		$status = $_POST['status'];
		$updated_at = date('Y:m:d H:i:s');

		$sql = "UPDATE `php_mbi`.`tasks` 
		SET
		`name` = :name , 
		`description` = :description , 
		`status` = :status ,  
		`updated_at` = :updated_at
		WHERE
		`id` = :id";

		$conn = connect();
		$update_statement = $conn->prepare($sql);
		$update_statement->bindParam(':name', $name);
		$update_statement->bindParam(':description', $description);
		$update_statement->bindParam(':status', $status);
		$update_statement->bindParam(':updated_at', $updated_at);
		$update_statement->bindParam(':id', $id);

		if($update_statement->execute()) {
			d('successfully update task');
			header('Location: tasks.php');
		} else {
			d('failed to update task');
		}
	}

} else {
	header('Location: tasks.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>My Tasks</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

	<form class="form-horizontal" method="post">
	<fieldset>

	<!-- Form Name -->
	<legend>Task Update</legend>

	<!-- Text input-->
	<div>
	  <label for="name">Task Name</label>  
	  <div>
	  <input id="name" name="name" type="text" placeholder="Your task's name" required="" value="<?= $task['name']; ?>">
	    
	  </div>
	</div>

	<!-- Textarea -->
	<div>
	  <label for="description">Task Description</label>
	  <div>                     
	    <textarea id="description" name="description"><?= $task['description']; ?></textarea>
	  </div>
	</div>

	<!-- Select Basic -->
	<div>
	  <label for="status">Task Status</label>
	  <div>
	    <select id="status" name="status">
	      <option value="New" <?= ($task['status'] == 'New' ? 'selected':''); ?>>New</option>
	      <option value="In Progress" <?= ($task['status'] == 'In Progress' ? 'selected':''); ?>>In Progress</option>
	      <option value="On Hold" <?= ($task['status'] == 'On Hold' ? 'selected':''); ?>>On Hold</option>
	      <option value="Cancelled" <?= ($task['status'] == 'Cancelled' ? 'selected':''); ?>>Cancelled</option>
	      <option value="Done" <?= ($task['status'] == 'Done' ? 'selected':''); ?>>Done</option>
	    </select>
	  </div>
	</div>

	<input type="hidden" name="id" value="<?= $task['id']; ?>">

	<!-- Button (Double) -->
	<div>
	  <label for="submit"></label>
	  <div>
	    <button id="submit" name="submit" class="btn btn-success">Update</button>
	    <button id="cancel" name="cancel" class="btn btn-danger">Cancel</button>
	  </div>
	</div>

	</fieldset>
	</form>
</body>
</html>