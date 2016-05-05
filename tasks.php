<?php require_once 'templates/_header.php'; ?>
<?php require_once 'templates/navigation-task.php'; ?>

	<div class="container">

		
		<table class="table">
		 <thead>
		 	<tr>
				<th>Name</th>
				<th>Description</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		 </thead>
		<tbody>
		
		<?php
		$conn = connect();

		$select_statement = $conn->prepare('SELECT * FROM tasks');

		if($select_statement->execute()) {
			while ($row = $select_statement->fetch()) {
				?>
				<tr>
					<td><?= $row['name']; ?></td>
					<td><?= $row['description']; ?></td>
					<td><?= $row['status']; ?></td>
					<td>
						<a data-toggle="tooltip" data-placement="left" title="Edit Task" class="btn btn-primary" href="tasks-update.php?id=<?= $row['id']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
						
						<a data-toggle="tooltip" data-placement="right" title="Delete Task" class="btn btn-danger" href="#" onclick="confirmdelete(<?= $row['id']; ?>)"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
					</td>
				</tr>
				<?php
			}	
		}
		?>
		</tbody>
		</table>
	</div>
	<script type="text/javascript">
		function confirmdelete(id) {
			if(confirm('Are you sure want to delete this task?')) {
				window.location = 'tasks-delete.php?id=' + id;
			}
		}
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
	</script>
<?php require_once 'templates/_footer.php'; ?>