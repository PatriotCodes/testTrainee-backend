<?php 
include "db.php";

$post = (array)json_decode(file_get_contents('php://input'));

if (isset($post['id'])) {
	echo $post['id'];
	$news = $conn->query('SELECT * from news where id='.$post['id']);
	echo json_encode($news);
} else {
	$news = $conn->query('SELECT * from news');
	$news_array = Array();
	if (mysqli_num_rows($news) > 0) {
		while($row = mysqli_fetch_assoc($news)) {
			array_push($news_array,$row);
		}
		echo json_encode($news_array);
	}
}