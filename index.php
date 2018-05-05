<?php
include "db.php";

$users = $conn->query('SELECT email from users');

if (isset($_POST['email']) && isset($_POST['password'])) {
	while ($row = mysqli_fetch_array($users)) {
		foreach($row as $field) {
			if ($field == $_POST['email']) {
				echo 'error';
			}
		}
	}
	echo 'success';
} else {
	'Data wasnt set';
}
