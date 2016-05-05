<?php require_once 'templates/_header.php'; ?>
<?php require_once 'templates/navigation.php'; ?>
<?php require_once 'controllers/_authorization.php'; ?>
<?php require_once 'models/Task.php'; ?>

<link rel="stylesheet" type="text/css" href="css/login.css">
<div class="container">
	 
	<table class="table">
	 <thead>
	 	<tr>
			<th>Name</th>
			<th>Description</th>
			<th>Status</th>
		</tr>
	 </thead>
	<tbody>
	
	<?php foreach(Task::list($_SESSION['user']['id']) as $key => $value): ?>
			<tr>
				<td><?= $value['name']; ?></td>
				<td><?= $value['description']; ?></td>
				<td><?= $value['status']; ?></td>
			</tr>
	<?php endforeach; ?>

	</tbody>
	</table>
</div>
<script type="text/javascript" src="js/dashboard.js"></script>
<?php require_once 'templates/_footer.php'; ?>