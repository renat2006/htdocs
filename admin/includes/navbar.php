<style media="screen">
	.logout-btn:hover{
		color: white;

	}
	.logout-btn{
		font-size: 120%;
	}
	*{
		font-family: "motserrat";

	}
</style>
<div class="header">
	<div class="logo">
		<a href="<?php echo BASE_URL .'admin/dashboard.php' ?>">
			<h1>Renat - Admin</h1>
		</a>
	</div>
	<div class="user-info">
		 <span><?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp; <a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">logout</a>
	</div>
</div>
