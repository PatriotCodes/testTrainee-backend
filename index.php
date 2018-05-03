<?php
include "db.php";

echo 'all user emails: ';
echo PHP_EOL;

$users = $conn->query('SELECT email from users');

print_r($users);

echo 'ON!';