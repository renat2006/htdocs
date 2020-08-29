<?php
require 'config.php';
define('y_ID', '44781c45dbb24bacbdb03ee983fa3e87');
define('y_SECRET', 'db363f4e32564e6ea8645b46d7e941d7');

if (!$_GET['code']) {
  exit("error");
}
$curl= curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://oauth.yandex.ru/token');
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, 'grant_type=authorization_code&code='.$_GET['code'].'&client_id='.y_ID.'&client_secret='.y_SECRET);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$token = json_decode(curl_exec($curl), true);
curl_close($curl);
$data = json_decode(file_get_contents('https://login.yandex.ru/info?oauth_token='.$token['access_token']),true);
$user= $data['first_name'];
$email= $data['default_email'];
$pass = rand(100000, 999999);
$pass= md5($pass."bellbone2021");
function getUserById($id)
{
  global $conn;
  $sql = "SELECT * FROM users WHERE id=$id LIMIT 1";

  $result = mysqli_query($conn, $sql);
  $user = mysqli_fetch_assoc($result);

  // returns user in an array format:
  // ['id'=>1 'username' => 'Awa', 'email'=>'a@a.com', 'password'=> 'mypass']
  return $user;
}
$conn->query("INSERT INTO `users` (`username`, `email`, `password`, `created_at`, `updated_at`) VALUES('$user', '$email', '$pass', now(), now())");
$reg_user_id = mysqli_insert_id($conn);


$_SESSION['user'] = getUserById($reg_user_id);
$conn->close();

header('Location: /');

 ?>
