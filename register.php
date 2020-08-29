<?php  include('config.php'); ?>
<!-- Source code for handling registration and login -->
<?php  include('includes/registration_login.php'); ?>

<?php include('includes/head_section.php'); ?>

<title>LifeBlog | Sign up </title>
<style media="screen">
.banner .welcome_msg {
	width: 45%;
	float: left;
	padding: 20px;
}
.banner .welcome_msg h1 {
	color: #3498db;
	margin: 25px 0px;
	font-size: 2.4em;
	font-family: 'Averia Serif Libre', cursive;
}
.banner .welcome_msg p {
	color: black;
	font-size: 1.5em;
	line-height: 1.8em;
    font-family: 'Noto Serif', serif;
}
.banner .welcome_msg p span {
	font-size: .81em;
	color: #3E606F;
}
.banner .welcome_msg a {
	width: 30%;
	margin: 20px 0px;
	padding: 12px 15px;
	font-size: 1.2em;
	text-decoration: none;
}
.banner .welcome_msg a:hover {
	background: #374447;
}
.banner {
	border: 1px solid grey;
	margin: 5px auto;
	min-height: 500px;
	color: white;
	border-radius: 5px;
	background: white;
	background-size: 100% 100%;
}



.btn{
	cursor: pointer;
	color: white;
	background: #4E6166;
	text-align: center;
	border: none;
	border-radius: 5px;
	display: block;
	letter-spacing: .1em;
	margin: 10px 0px;
	padding: 13px 20px;
	text-decoration: none;
	transition: 0.8s;
}
.btn1{

	background-color: #3498db;
}
.btn:hover{
	background-color: black;
	border-radius: 25px;
	box-shadow: 2px 3px 5px 0px rgba(0,0,0,0.75);
}
.btn1:hover{
	background-color: blue;


}

.input_field:hover{

	box-shadow: 0px 0px 5px 0px grey;
}
.banner .login_div {
	width: 50%;
	float: left;
}
.banner .login_div form {
	margin-top: 40px;
}
.banner .login_div form h2 {
	color: white;
	margin-bottom: 20px;
    font-family: 'Noto Serif', serif;
}
.banner .login_div form input {
	width: 60%;
	color: black;
	border: 1px solid grey;
	margin: 10px auto;
	letter-spacing: 1.3px;
    font-family: 'Noto Serif', serif;
}
.banner .login_div form button {
	display: block;
	background: #006384;
	margin-left: 20%;
}
.a:hover{
	color: red;
}
#yandex:hover{
	background-color: red !important;
}
#yandex{
	background-color: #E26E6E !important;
}
#oauth_vk:hover{
	background-color: #597da3;
}
#oauth_vk{
	background-color: #9DB6D1;
}
#oauth_facebook:hover{
	background-color: #3b5998;

}
#oauth_facebook{
	background-color: #879DCC;
}

</style>
</head>
<body>
<div class="container">
	<!-- Navbar -->
		<?php include( ROOT_PATH . '/includes/navbar.php'); ?>
	<!-- // Navbar -->
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<div style="width: 40%; margin: 20px auto;">
		<form method="post" action="register.php" >
			<h2>Регистрация</h2>
			<?php include(ROOT_PATH . '/includes/errors.php') ?>
			<input  type="text" name="username" value="<?php echo $username; ?>" class="input_field"  placeholder="Имя">
			<input type="email" name="email" value="<?php echo $email ?>" class="input_field" placeholder="Email">
			<input type="password" name="password_1" class="input_field" placeholder="Пароль">
			<input type="password" name="password_2" class="input_field" placeholder="Потдвердите пароль">
			<button type="submit" class="btn" name="reg_user">Регистрация</button>
			<?php
			define('ID', '7573277');
			define('SECRET', 'tJ2Agse4adIa6vI1DrsM');
			define('URL', 'http://f0435858.xsph.ru/vk.php');
			define('y_ID', '44781c45dbb24bacbdb03ee983fa3e87');
			define('y_SECRET', 'db363f4e32564e6ea8645b46d7e941d7');
			 ?>
			 <a href="https://oauth.vk.com/authorize?client_id=<?=ID?>&display=page&redirect_uri=<?=URL?>&response_type=code" class="btn btn1" id="oauth_vk">Войти через <i class="fab fa-vk"></i></a>
			 <a href="https://oauth.yandex.ru/authorize?response_type=code&client_id=<?=y_ID?>" class="btn btn1" id="yandex">Войти через <i class="fab fa-yandex"></i></a>
			 <a href="https://oauth.yandex.ru/authorize?response_type=code&client_id=<?=y_ID?>" class="btn btn1" id="oauth_facebook">Войти через <i class="fab fa-facebook"></i></a>
			<p>
				Уже участник? <a href="login.php" class="a">Войти</a>
			</p>
		</form>
	</div>
</div>
<!-- // container -->
<!-- Footer -->
	<?php include( ROOT_PATH . '/includes/footer.php'); ?>
<!-- // Footer -->
