<style>

.footer {
	z-index: 1000;
	transition: 1s;
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}
.social-media-footer{
	margin-right: 40px;
	margin-top: 20px;
	font-size: 64px;
	margin-bottom: 20px;
	color: white;
	transition: 0.4s;

}
.social-media-footer:hover{
	transform: translateY(-5px);
}

.fa-instagram:hover{
	color: #C13584;
}
.fa-twitter:hover{
	color: #1DA1F2;
}
#vk:hover{
	color: blue;
}
#down_btn{
border: none;
border-radius: 2px;
	background: white;
	float: left;
	margin-top: 40px;
	margin-left: 20px;
	width: 50px;
	height:  50px;
	font-size: 40px;
	text-align: center;
transition: 0.5s;
}
.btn2{
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
	float: right;
	margin-top: 30px;
	margin-right: 30px;
}
.btn2:hover{
	background-color: white !important;
	border-radius: 25px;
	box-shadow: 2px 3px 5px 0px rgba(255,255,255,0.75);
	color: black;
}
#down_btn:hover{

cursor: pointer;
border-radius: 30px;
	box-shadow: 0px 0px 10px 0px rgba(255,255,255,0.75);

}
.down{

	transform: translateY(140px);
}
.undown{

color: white;
	transform: translateY(-140px);
background: black !important;


}
.undown:hover{
	box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
}
.norm{
	transform: translateY(0px);
}

.rotate{
transform: rotate(180deg);
}
.fa-chevron-down{

}

</style>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

		<div class="footer" id="foot">
<button id="down_btn" type="button" name="button"><i class="fas fa-chevron-down"></i></button>

<button type="button" name="button" class="btn2" id="btn">К началу</button>
<div class="container">
	<a href="/"><i  class="fab fa-instagram social-media-footer"></i></a>
	<a href="/"><i class="fab fa-vk social-media-footer" id="vk"></i></a>
	<a href="/"><i class="fab fa-twitter social-media-footer"></i></a>
	<p style="margin-bottom: 10px;">BellBone &copy; <?php echo date('Y'); ?> | Designed by Renat Gubaidullin</p>
</div>

		</div>
		<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
		<script type="text/javascript">
		let foot = document.getElementById('foot');
		let button = document.getElementById('down_btn');
		let btn = document.getElementById('btn');
		var bool = false;
function rotate() {

	button.classList.add('undown');
}
function up() {
foot.classList.remove('down');
}
function scroll() {

  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;

}
btn.onclick = function() {
	setTimeout(scroll, 100);
};

		button.onclick = function() {

			if (!bool) {
				foot.classList.add('down');
		setTimeout(rotate, 1000);
			} else {
				button.classList.remove('undown');
				setTimeout(up, 1000);

			}
			if(!bool){
				bool= true
			}
			else{
				bool= false
			}




  };

		</script>
		<!-- // footer -->

	</div>
	<!-- // container -->
</body>
</html>
