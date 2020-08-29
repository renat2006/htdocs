<!-- The first include should be config.php -->
<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>


<!-- Retrieve all posts from database  -->
<?php $posts = getPublishedPosts(); ?>

<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>
	<title>LifeBlog | Дом </title>
	<style media="screen">
	  *{
	    font-family: 'Comfortaa', cursive !important;
	  }
		#cat:hover{
			background: black !important;
		}
		._views{
			float: right;
			margin-top: -10px;
			color: black !important;
		}
		.fa-eye{
			margin-left: 5px;
		}
		#time{
			margin-bottom:  10px !important;
		}
		.read_more:hover{
			transition: 0.3s;
		color: black !important;
		}
	</style>
</head>
<body>
	<!-- container - wraps whole page -->
	<div class="container">
		<!-- navbar -->
		<?php include( ROOT_PATH . '/includes/navbar.php') ?>
		<!-- // navbar -->

		<!-- banner -->
		<?php include( ROOT_PATH . '/includes/banner.php') ?>
		<!-- // banner -->

		<!-- Page content -->
		<div class="content"  >
			<h2 class="content-title"style="font-size:300%;">Посты</h2>
			<hr>
			<hr>
			<!-- more content still to come here ... -->

			<?php foreach ($posts as $post): ?>
				<div class="post" style="margin-left: 0px;">
					<img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="">
			        <!-- Added this if statement... -->
					<?php if (isset($post['topic']['name'])): ?>
						<a
							href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>"
							class="category" id="cat">
							<?php echo $post['topic']['name'] ?>
						</a>
					<?php endif ?>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
					<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
						<div class="post_info">
							<h3 id="time"><?php echo $post['title'] ?></h3>
							<div class="info">
								<span ><?php echo date("m.d.y ", strtotime($post["created_at"])); ?></span>
								<span class="_views"><?php echo $post['views'] ?><i class="fas fa-eye"></i> </span>
								<span class="read_more">Читать...</span>
							</div>
						</div>
					</a>
				</div>
			<?php endforeach ?>

		</div>
		<!-- // Page content -->

		<!-- footer -->
		<?php include( ROOT_PATH . '/includes/footer.php') ?>
		<!-- // footer -->
