<?php 
include "db.php";

$news = $conn->query('SELECT * from news');

if (mysqli_num_rows($news) > 0) {
	$JSON = json_encode(mysqli_fetch_assoc($news));
	echo $JSON;
}