<?php

/**
* Task Class
* Do CRUD
*/
class Task
{
	private $conn;

	function __construct($conn)
	{
		$this->conn = $conn;
	}

	public function get($id) {
		// do get task by id
	}

	public function list() {
		// get all tasks
	}

	public function add($data) {
		// do add task
	}

	public function update($id, $data) {
		// do update task
	}

	public function delete($id) {
		// do delete task
	}

	public function search($keyword) {
		// do search
	}
}