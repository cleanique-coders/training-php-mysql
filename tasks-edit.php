<?php require_once 'templates/_header.php'; ?>
<?php require_once 'inc/functions.php'; ?>
<?php

	if(!empty($_GET) && isset($_GET['id'])) {
		$conn = connect();

		$sql = "SELECT * FROM tasks WHERE id = '".$_GET['id']."'";
		$stmt = $conn->query($sql);
		$task = $stmt->fetchObject();
	} else {
		header("Location: tasks.php");
	}
	
	$id = $task->id;

	if(!empty($_POST)) {
		
		$name = $_POST['name'];
		$description = $_POST['description'];
		$status = $_POST['status'];
		$updated_at = date('Y-m-d H:i:s');

		$sql = "UPDATE tasks SET 
			name = :name, 
			description = :description, 
			status = :status, 
			updated_at = :updated_at 
			WHERE id = :id";

		$conn = connect();
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':description', $description);
		$stmt->bindParam(':status', $status);
		$stmt->bindParam(':updated_at', $updated_at);
		$stmt->bindParam(':id', $id);

		if($stmt->execute()) {
			header('Location: tasks.php');
		}
	}
?>

<h3>Kemaskini Tugasan</h3>

<form class="form-horizontal" method="post" action="tasks-edit.php?id=<?= $task->id; ?>">
<fieldset>

<!-- Form Name -->
<legend>Edit Task</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Task Name</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="your task name" class="form-control input-md" required="" value="<?= $task->name; ?>">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="description">Task Description</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="description" name="description">
    	<?= $task->description; ?>
    </textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="status">Task Status</label>
  <div class="col-md-4">                     
    <select class="form-control" id="status" name="status">
    	<option value="New" <?= ($task->status == 'New' ? 'selected':'') ?>>New</option>
    	<option value="In Progress" <?= ($task->status == 'In Progress' ? 'selected':'') ?>>In Progress</option>
    	<option value="Done" <?= ($task->status == 'Done' ? 'selected':'') ?>>Done</option>
    </select>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-8">
    <button id="submit" name="submit" class="btn btn-success">Save</button>
    <button id="cancel" name="cancel" class="btn btn-danger">Cancel</button>
  </div>
</div>

</fieldset>
</form>


<?php require_once 'templates/_footer.php'; ?>
