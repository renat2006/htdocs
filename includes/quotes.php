<?php
$rand_int= rand(1, 2);

	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM quots WHERE id=$rand_int";
	$result = mysqli_query($conn, $sql);
	// fetch all posts as an associative array called $posts
	$quots = mysqli_fetch_all($result, MYSQLI_ASSOC);







 ?>
