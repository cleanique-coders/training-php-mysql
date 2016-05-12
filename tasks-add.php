<?php require_once 'templates/_header.php'; ?>
<?php require_once 'inc/functions.php'; ?>
<?php require_once 'inc/authorize.php'; ?>

<?php
	if(!empty($_POST)) {
		
		$name = $_POST['name'];
		$description = $_POST['description'];
		$created_at = date('Y-m-d H:i:s');

		$sql = "INSERT INTO tasks (user_id,name,description,created_at) VALUES (:user_id,:name,:description,:created_at)";

		$conn = connect();
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':user_id', $_SESSION['user']['id']);
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':description', $description);
		$stmt->bindParam(':created_at', $created_at);

		if($stmt->execute()) {
			header('Location: tasks.php');
		}
	}
?>

<h3>Tambah Tugasan</h3>

<form class="form-horizontal" method="post" action="tasks-add.php">
<fieldset>

<!-- Form Name -->
<legend>New Task</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Task Name</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="your task name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="description">Task Description</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="description" name="description"></textarea>
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