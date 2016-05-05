
<!-- SUBMIT $_POST DATA -->
<!-- 
	1. Create a form
	2. Set form method to "post"
	3. Set form action to desired script
	4. Create inputs, make sure to have name attributes 
		for each inputs element
	5. Create submit button
 -->
<form method="post" action="superglobals.php">
	<input name="username"></input>
	<input type="password" name="password">
	<input type="submit">
</form>
	
</form>
<?php

require_once 'inc/functions.php';

// d($GLOBALS);

// d($_SERVER);
// d($_GET);
// d($_POST);
// d($_REQUEST);
// d($_SESSION);

//d([
	// 'server' => $_SERVER,
	//'post' => $_POST,
	//'get' => $_GET,
	// 'request' => $_REQUEST,
	// 'session' => $_SESSION,
//]);

if(!empty($_POST)) {
	// do login
	d($_POST['username']);
}
