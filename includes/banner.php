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
	min-height: 400px;
	color: white;
	border-radius: 5px;
	background: white;
	background-size: 100% 100%;
}



.btn{
	cursor: pointer;
	color: white;
	background: #4E6166 ;
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

	background-color: #3498db !important;
}
.btn:hover{
	background-color: black !important;
	border-radius: 25px;
	box-shadow: 2px 3px 5px 0px rgba(0,0,0,0.75);
}
.btn1:hover{
	background-color: blue !important;


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
	color: black;
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
</style>

<?php if (isset($_SESSION['user']['username'])) { ?>
	<div class="logged_in_info">


	</div>
<?php }else{ ?>
	<div class="banner">
		<div class="welcome_msg">
			<h1>Цитата дня</h1>
			<p>
			     Тут<br>
			    Будет <br>
			    Цитата<br>
				<span>~ Когда нибудь</span>
			</p>
			<a href="register.php" class="btn" id="join_us">Аккаунт</a>
		</div>

		<div class="login_div">
			<form action="<?php echo BASE_URL . 'index.php'; ?>" method="post" >
				<h2>Вход</h2>
				<div style="width: 60%; margin: 0px auto;">
					<?php include(ROOT_PATH . '/includes/errors.php') ?>
				</div>
				<input type="text" class="input_field" name="username" value="<?php echo $username; ?>" placeholder="Имя">
				<input type="password" class="input_field" name="password"  placeholder="Пароль">
				<button class="btn btn1" type="submit" name="login_btn">Войти</button>
			</form>
		</div>
	</div>
<?php } ?>
