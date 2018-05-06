<?php 
include "db.php";

$news = $conn->query('SELECT * from news');

while ($row = mysqli_fetch_array($news)) {
	foreach($row as $field) {
		print_r($field);
	}
}