<?php

/**
* Connect to the database
*/
class Database
{
	private $conn = null;
	private $config = [];

	public function __construct(
		$database, 
		$username, 
		$password, 
		$host = '127.0.0.1', 
		$type = 'mysql') {

		$this->config = [
			'type' => $type,
			'host' => $host,
			'database' => $database,
			'username' => $username.
			'password' => $password
		];
	}

	public function conn() {
		if(empty($this->conn)) {
			try {
			    $this->conn = new PDO(
			    	$this->config['type'].":host=".
			    	$this->config['host'].";dbname=".
			    	$this->config['database'], 
			    	$this->config['username'], 
			    	$this->config['password']
			    );
			    // set the PDO error mode to exception
			    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    return $conn;
			} catch(PDOException $e) {
			    die("Connection failed: " . $e->getMessage());
			}
		}

		return $this->conn;
	}
}