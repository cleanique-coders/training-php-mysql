<?php require_once 'templates/_header.php'; ?>
<?php require_once 'templates/navigation.php'; ?>
<?php require_once 'models/Task.php'; ?>
<?php require_once 'controllers/_authorization.php'; ?>
<?php require_once 'controllers/tasks-add.php'; ?>

<div class="container">
<form method="post" class="form-horizontal">
	<fieldset>

	<!-- Form Name -->
	<legend>New Task Details</legend>

	<!-- Text input-->
	<div>
	  <label for="name">Task Name</label>  
	  <div>
	  <input class="form-control" id="name" name="name" type="text" placeholder="Your task's name" required="">
	    
	  </div>
	</div>

	<!-- Textarea -->
	<div>
	  <label for="description">Task Description</label>
	  <div>                     
	    <textarea class="form-control" rows="7" id="description" name="description">Enter your task description here</textarea>
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

	<input type="hidden" name="user_id" value="<?= $_SESSION['user']['id']; ?>"></input>

	</fieldset>
	</form>
</div>
<?php require_once 'templates/_footer.php'; ?>