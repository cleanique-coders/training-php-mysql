<?php require_once 'templates/_header.php'; ?>
<?php require_once 'templates/navigation.php'; ?>
<?php require_once 'models/Task.php'; ?>
<?php require_once 'controllers/_authorization.php'; ?>
<?php require_once 'controllers/tasks-update.php'; ?>

<div class="container">
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
</div>
<?php require_once 'templates/_footer.php'; ?>