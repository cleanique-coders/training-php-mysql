<?php require_once 'inc/functions.php'; ?>
<?php require_once 'inc/authorize.php'; ?>

<?php 
	/*
		empty() - check if a variable is empty
		! - menafikan sesuatu
			!empty() - not empty
		isset() - check the existence of variable or index or key
		&& - AND
		|| - OR
	*/
	if(!empty($_GET) && 
		isset($_GET['id'])) {

		$conn = connect();

		$sql = "DELETE FROM tasks WHERE id = :id";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);

		if($stmt->execute()) {
			header('Location: tasks.php');
		}	
	}
?>