<form method="post">
	<input name="username" placeholder="Username"></input>
	<input type="password" placeholder="Password" name="password">
	<input type="submit">
</form>

<?php

require_once 'inc/functions.php';

/* SELECTION CONTROL */

// if $_POST is not empty
if(!empty($_POST)) {
	// do login
	login($_POST['username'], $_POST['password']);
}

?>