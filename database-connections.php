<?php

require_once 'inc/functions.php';

/** 
 * MySQLi Procedural 
 **/
$servername = "localhost";
$username = "php_mbi";
$password = "php_mbi";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
d("Connected successfully with MySQLi Procedural");

/** 
 * MySQLi Object-Oriented 
 **/
$servername = "localhost";
$username = "php_mbi";
$password = "php_mbi";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
d("Connected successfully with MySQLi Object-Oriented");

/** 
 * PHP Data Object, PDO 
 **/
$servername = "localhost";
$username = "php_mbi";
$password = "php_mbi";
$db = "php_mbi";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    d("Connected successfully with PHP Data Object, PDO");
} catch(PDOException $e) {
    d("Connection failed: " . $e->getMessage());
}