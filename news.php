<?php 
include "db.php";

$news = $conn->query('SELECT * from news');
$news_array = Array();

if (mysqli_num_rows($news) > 0) {
	while($row = mysqli_fetch_assoc($news)) {
        array_push($news_array,$row);
    }
	$JSON = json_encode($news_array);
	echo $JSON;
}