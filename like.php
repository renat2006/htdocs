<?php

require 'config.php';
$slug = $_POST['slug'];
$conn->query("UPDATE posts SET likes = likes +1 WHERE id = $slug ");

echo $_POST['slug'];


 ?>
