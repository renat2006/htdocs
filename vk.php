<?php
require 'config.php';
define('ID', '7573277');
define('SECRET', 'tJ2Agse4adIa6vI1DrsM');
define('URL', 'http://f0435858.xsph.ru/vk.php');
if (!$_GET['code']) {
  exit("error");

}
$token = json_decode(file_get_contents('https://oauth.vk.com/access_token?client_id=7573277&redirect_uri=http://f0435858.xsph.ru/vk.php&client_secret='.SECRET.'&code='.$_GET['code']), true);
$pass = rand(100000, 999999);
$pass= md5($pass."bellbone2021");
if (!$token){
  exit('error_token');
}
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
$data = json_decode(file_get_contents('https://api.vk.com/method/users.get?user_id='.$token['user_id'].'&access_token='.$token['access_token'].'&fields=uid,first_name&v=5.52'), true);
$user = $data['response']['0']['first_name'];
$conn->query("INSERT INTO `users` (`username`, `email`, `password`, `created_at`, `updated_at`) VALUES('$user', '$user', '$pass', now(), now())");
$reg_user_id = mysqli_insert_id($conn);


$_SESSION['user'] = getUserById($reg_user_id);
$conn->close();

header('Location: /');
 ?>
