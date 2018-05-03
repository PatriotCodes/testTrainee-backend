<?php
include "db.php";

echo $_SERVER['DOCUMENT_ROOT'];
echo 'all user emails: ';
echo PHP_EOL;

$users = $conn->query('SELECT email from users');

print_r($users);

echo 'ON!';