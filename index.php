<?php
include $_SERVER['DOCUMENT_ROOT']."db.php";

$users = $conn->query('SELECT email from users');

print_r($users);
foreach ($users as $user) {
	
}


echo 'ON!';