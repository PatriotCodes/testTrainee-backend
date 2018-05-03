<?php
include "config.php";

$host = $config["db"]["db1"]["host"];
$username = $config["db"]["db1"]["username"];
$password = $config["db"]["db1"]["password"];
$dbname = $config["db"]["db1"]["dbname"];

$conn = new mysqli($host,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} else {
	echo ("Successfully connected!".PHP_EOL);
}