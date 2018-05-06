<?php 
include "db.php";

$news = $conn->query('SELECT * from news');

while ($row = mysqli_fetch_assoc($news)) {
	echo "title:" . $row["title"];
	echo "text:" . $row["text"];
}