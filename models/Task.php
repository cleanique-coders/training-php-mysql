<?php

class Task {

	public static function findById($id) {

		$conn = connect();

		$stmt = $conn->prepare("SELECT * FROM tasks WHERE id = ?");
		$stmt->bindParam(1, $id);
		$task = null;
		
		if($stmt->execute()) {
			$task = $stmt->fetch();
		}
		
		return $task;
	}

	public static function list($user_id) {
		$conn = connect();

		$select_statement = $conn->prepare('SELECT * FROM tasks WHERE user_id = :user_id');

		$select_statement->bindParam(':user_id', $user_id);
		$list = [];

		if($select_statement->execute()) {
			while ($row = $select_statement->fetch()) { 
				$list[] = $row;
			}
		}

		return $list;
	}

	public static function add($user_id, $name, $description) {
		$conn = connect();

		$created_at = date('Y:m:d H:i:s');

		$insert_statement = $conn->prepare("INSERT INTO `tasks` 
		(`user_id`,`name`, `description`, `created_at`)
		VALUES
		(:user_id, :name, :description, :created_at)");
		$insert_statement->bindParam(':user_id', $user_id);
		$insert_statement->bindParam(':name', $name);
		$insert_statement->bindParam(':description', $description);
		$insert_statement->bindParam(':created_at', $created_at);
		
		return $insert_statement->execute();
	}

	public static function update($id, $name, $description, $status) {
		$conn = connect();

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

		return $update_statement->execute();
	}

	public static function delete($id) {
		$conn = connect();

		$delete_statement = $conn->prepare('DELETE FROM tasks WHERE id = :id');

		$delete_statement->bindParam(':id', $id);

		return $delete_statement->execute();
	}
}