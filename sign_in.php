<?php
include "db.php";

$users = $conn->query('SELECT email from users');

$post = (array)json_decode(file_get_contents('php://input'));

if (isset($post['email']) && isset($post['password'])) {
	while ($row = mysqli_fetch_array($users)) {
		foreach($row as $field) {
			if ($field == $post['email']) {
				exit('error');
			}
		}
	}
	echo 'success';
} else {
	echo 'Data wasnt set';
}
