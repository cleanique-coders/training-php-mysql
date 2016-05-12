<?php require_once 'inc/functions.php'; ?>

<?php

unset($_SESSION['authorized']);
unset($_SESSION['user']);
session_unset();
session_destroy();

header('Location: index.php');