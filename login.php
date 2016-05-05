<?php
	// Include header 
	// - so you don't need to repeat yourself 
	// adding the same pieces of codes on every page
	require_once 'templates/_header.php'; 
?>

<?php 
	// Include basic navigation
	require_once 'templates/navigation.php'; 
?>

<link rel="stylesheet" type="text/css" href="css/login.css">
<div class="container">
	<div class="login-container">
        
        <?php if(isset($_SESSION['error'])): ?>
            <!-- Display error if available -->
            <div class="alert alert-danger"><?= $_SESSION['error']; ?>
            <?php unset($_SESSION['error']); ?>
        <?php endif; ?>

        <div id="output"></div>
        <div class="avatar"></div>
        <div class="form-box">
            <form action="controllers/login.php" method="post">
                <input name="username" type="text" placeholder="username">
                <input name="password" type="password" placeholder="password">
                <button class="btn btn-info btn-block login" type="submit">Login</button>
            </form>
        </div>
    </div>
</div>
<!-- <script type="text/javascript" src="js/login.js"></script> -->

<?php 
    // Include footer
    require_once 'templates/_footer.php'; 
?>