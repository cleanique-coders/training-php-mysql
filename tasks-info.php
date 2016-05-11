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
?>

<h3>Maklumat Tugasan <small>Dijana pada <?= $task->created_at; ?></small></h3>

<h4><strong>Tajuk:</strong> <?= $task->name; ?></h4>

<p><?= $task->description; ?></p>

<?php if(!empty($task->updated_at)): ?>
	<h6>Tarikh Kemaskini: <?= $task->updated_at; ?></h6>
<?php endif; ?>

<a href="tasks.php" class="btn btn-danger">Kembali</a>
<a href="tasks-edit.php?id=<?= $task->id; ?>" class="btn btn-primary">Kemaskini</a>




<?php require_once 'templates/_footer.php'; ?>