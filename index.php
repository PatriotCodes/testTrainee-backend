<?php
include "db.php";

$users = $conn->query('SELECT email from users');

echo '<h2>all user emails: </h2>';
while ($row = mysqli_fetch_array($users)) {
	echo '<tr>';
	foreach($row as $field) {
		echo '<td>' . htmlspecialchars($field) . '</td>';
	}
	echo '</tr>';
}