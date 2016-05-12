<?php 
error_reporting(E_ALL);

/* Start a Session */
session_start();

/* Create Session */
$_SESSION['authorize'] = true;

/* Delete Session */
unset($_SESSION['authorize']);

/* End a Session */
session_unset();
session_destroy();

?>