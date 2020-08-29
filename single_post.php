
<?php  include('config.php'); ?>
<?php  include('includes/public_functions.php'); ?>
<?php
	if (isset($_GET['post-slug'])) {
		$post = getPost($_GET['post-slug']);
	}
	$sl = $post['id'];
	$topics = getAllTopics();
$conn->query("UPDATE posts SET views = views+ 1 WHERE id = $sl");



?>
<?php include('includes/head_section.php'); ?>
<title> <?php echo $post['title'] ?> | LifeBlog</title>
<style media="screen">
.post-sidebar {
	width: 24%;
	float: left;
	margin-left: 5px;
	min-height: 400px;
}
.post-sidebar .card {
	width: 95%;
	margin: 10px auto;
	border: 1px solid #e4e1e1;
	border-radius: 10px 10px 0px 0px;
}
.post-sidebar .card .card-header {
	padding: 10px;
	text-align: center;
	border-radius: 3px 3px 0px 0px;
	background: black;
}
.post-sidebar .card .card-header h2 {
	color: white;
}
.post-sidebar .card .card-content a {
	display: block;
	box-sizing: border-box;
	padding: 8px 10px;
	border-bottom: 1px solid #e4e1e1;
	color: #444;
}
.post-sidebar .card .card-content a:hover {
	padding-left: 20px;
	color: grey;
	background: #F9F9F9;
	transition: 0.1s;
}
#disqus_thread{
	margin-top: 30px !important;

}

*{transition: 0.3s linear;}
.hidden{
  font-size: 0;
}

.heading{

  font-size: 2em;
  margin: 0;

}



.like-toggle{

  outline:none;
  box-shadow:none;
  border: none;
  width: 60px;
  height: 60px;
  font-size: 1.4em;
  border-radius: 100px;
}

.like-active.basic{

  color: #F26C4F;
}
.like-toggle.basic:not(.like-active):hover{

  color: #F26C4F;

}
[data-tooltip] {
  position: relative;
  z-index: 2;
  cursor: pointer;
}

/* Hide the tooltip content by default */
[data-tooltip]:before,
[data-tooltip]:after {
  visibility: hidden;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=0);
  opacity: 0;
  pointer-events: none;
}

/* Position tooltip above the element */
[data-tooltip]:before {
  position: absolute;
  bottom: 150%;
  left: 50%;
  margin-bottom: 5px;
  margin-left: -80px;
  padding: 7px;
  width: 160px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  background-color: #000;
  background-color: hsla(0, 0%, 20%, 0.9);
  color: #fff;
  content: attr(data-tooltip);
  text-align: center;
  font-size: 14px;
  line-height: 1.2;
}

/* Triangle hack to make tooltip look like a speech bubble */
[data-tooltip]:after {
  position: absolute;
  bottom: 150%;
  left: 50%;
  margin-left: -5px;
  width: 0;
  border-top: 5px solid #000;
  border-top: 5px solid hsla(0, 0%, 20%, 0.9);
  border-right: 5px solid transparent;
  border-left: 5px solid transparent;
  content: " ";
  font-size: 0;
  line-height: 0;
}

/* Show tooltip content on hover */
[data-tooltip]:hover:before,
[data-tooltip]:hover:after {
  visibility: visible;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
  filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=100);
  opacity: 1;
}
</style>
</head>
<body>
<div class="container">
	<!-- Navbar -->
		<?php include( ROOT_PATH . '/includes/navbar.php'); ?>
	<!-- // Navbar -->

	<div class="content" >
		<!-- Page wrapper -->
		<div class="post-wrapper">
			<!-- full post div -->
			<div class="full-post-div">
			<?php if ($post['published'] == false): ?>
				<h2 class="post-title">Sorry... This post has not been published</h2>
			<?php else: ?>
				<h2 class="post-title"><?php echo $post['title']; ?></h2>
				<div class="post-body-div">
					<?php echo html_entity_decode($post['body']); ?>
				</div>
			<?php endif ?>
			</div>
			<!-- // full post div -->
<!--  coming soon ...  -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<hr>

<div class='like'>
  <button class='like-toggle basic' data-tooltip="Нравится"><i class="fas fa-heart"></i></button>
  <span class='hidden' id="like" data-id="<?=$post['id']?>"><?=$post['likes']?> Like</span>
</div>

<script type="text/javascript">




$(function(){
$('.like-toggle').click(function(){
	$(this).toggleClass('like-active');
	$(this).next().toggleClass('hidden');
	$.ajax({
			 url: "like.php",
			 type: "POST",
			 data: ("slug=" + $("#like").attr("data-id")),
			 dataType: "text",
			 success: function(result) {
				 if (result) {

					 $("#like").html(<?=$post['likes']?> + " лайков");
				 }
				 else alert("Error");
			 }
		 });

});
});
</script>

			<!-- comments section -->
			<div id="disqus_thread"></div>
			<script>

			/**
			*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
			*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

			var disqus_config = function () {
			this.page.url = 'http://f0435858.xsph.ru/single_post.php?<?php echo $post['title']; ?>';  // Replace PAGE_URL with your page's canonical URL variable
			this.page.identifier = <?php echo $post['title']; ?>; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
			};

			(function() { // DON'T EDIT BELOW THIS LINE
			var d = document, s = d.createElement('script');
			s.src = 'https://bellbone.disqus.com/embed.js';
			s.setAttribute('data-timestamp', +new Date());
			(d.head || d.body).appendChild(s);
			})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">BellBone</a></noscript>

		</div>
		<!-- // Page wrapper -->

		<!-- post sidebar -->
		<div class="post-sidebar">
			<div class="card">
				<div class="card-header">
					<h2>Категории</h2>
				</div>
				<div class="card-content">
					<?php foreach ($topics as $topic): ?>
						<a
							href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $topic['id'] ?>">
							<?php echo $topic['name']; ?>
						</a>
					<?php endforeach ?>
				</div>
			</div>
		</div>
		<!-- // post sidebar -->
	</div>
</div>
<!-- // content -->



<?php include( ROOT_PATH . '/includes/footer.php'); ?>
