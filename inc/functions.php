<?php

function d($value) {
	echo '<pre>'.print_r($value,1).'</pre>';
}

function connect() {
	try {
	    $conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    return $conn;
	} catch(PDOException $e) {
	    d("Connection failed: " . $e->getMessage());
	    exit(500);
	}
}

/* Check if Session is started or not */
function is_session_started()
{
    if ( php_sapi_name() !== 'cli' ) {
        if ( version_compare(phpversion(), '5.4.0', '>=') ) {
            return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
        } else {
            return session_id() === '' ? FALSE : TRUE;
        }
    }
    return FALSE;
}

function login($username, $password) {
	$users = [
		[
			'username' => 'nasrulhazim',
			'password' => 'password'
		]
	];

	$valid = false;
	
	foreach ($users as $key => $value) {
		if($value['username'] == $username && 
			$value['password'] == $password
			) {
			$valid = true;
		}
	}

	if($valid) {
		echo 'yeay';
	} else {
		echo 'boo';
	}
	// do login process
	// connect to database
	// check username & password in db
	// if success,
	// - generate session for user
	// - redirect to user's dashboard	
}

?>