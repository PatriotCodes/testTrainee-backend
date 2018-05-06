<?php
include "db.php";

$users = $conn->query('SELECT email from users');

$post = (array)json_decode($HTTP_RAW_POST_DATA);

if (isset($post['email']) && isset($post['password'])) {
	while ($row = mysqli_fetch_array($users)) {
		foreach($row as $field) {
			if ($field == $_POST['email']) {
				echo 'error';
			}
		}
	}
	echo 'success';
} else {
	echo 'Data wasnt set';
}
