<?php require_once 'templates/_header.php'; ?>
<?php require_once 'templates/navigation.php'; ?>
<?php 
	// if not authorized, redirect to login page
	if(!isset($_SESSION['authorized'])) {
		$_SESSION['error'] = 'You are not authorized to access to the page.';		
		header('Location: login.php');
	}

?>
<link rel="stylesheet" type="text/css" href="css/login.css">
<div class="container">
	<div class="login-container">
        <h1>Welcome back <?= $_SESSION['user']['username']; ?></h1>
    </div>
</div>

<?php require_once 'templates/_footer.php'; ?>