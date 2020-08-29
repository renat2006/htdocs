<style media="screen">
.navbar {
	margin: 0 auto;
		overflow: hidden;
	background-color: black;
		border-radius: 0px 0px 6px 6px;



}
.navbar ul {
	text-align: center;
		list-style-type: none;

}
.navbar ul li {
	display: inline-block;

		font-family: 'Comfortaa', cursive;
		transition: 0.6s;
}

.navbar ul li a {
		display: inline-block;
		color: white;
		text-align: center;
		padding: 20px 28px;
		text-decoration: none;
transition: 0.6s;
		text-transform: uppercase;
}
.navbar ul li:hover {
	background-color: white;


}
.navbar ul li a:hover{
color: black;
}
.choosen a{
	background-color: white;
color: black !important;

}





</style>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
<div class="navbar">
<!--	<div class="logo_div">

	</div>
	-->
	<ul>
	  <li id="home"><a  href="index.php">Главная</a></li>
	  <li><a href="#news">Обновления</a></li>
	  <li><a href="#contact">Связаться</a></li>
	  <li><a href="#about">О проекте</a></li>
		<?php if (isset($_SESSION['user']['username'])) { ?>
		<li><a href="logout.php">Выйти</a></li>
		<?php } ?>
	</ul>
</div>
<script type="text/javascript">
let home = document.getElementById('home');

var url = "http://localhost:8888/";
if (window.location.href == url || window.location.href == url + "index.php") {
	home.classList.add('choosen');
}
</script>
