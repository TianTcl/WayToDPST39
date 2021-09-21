<?php
	require("resource/init_ps.php");
	$header_title = "Welcome";
	$header_desc = "Portal from associates";
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php require("resource/heading.php"); require("../../resource/hpe/init_ss.php"); ?>
		<style type="text/css">
			html body main { background-color: var(--clr-pp-teal-200); }
			html body main div.container { overflow: visible; }
			html body main div.container .message {
				background-image: linear-gradient(transparent 0px, var(--msg-bgc) 0.1px, transparent 0.2px);
				background-size: 1px 0.3px; background-color: transparent;
			}
			html body main div.container div.ETgoHome { margin-top: 32.5px; padding: 7.5px 2.5px 2.5px; }
			div.ETgoHome h1 {
				margin: 0px 0px 10px;
				font-family: "Ranchers";
				font-size: 1.75em; color: var(--clr-pp-brown-700);
			}
			div.ETgoHome center.portal { display: flex; justify-content: center; }
			div.ETgoHome center.portal a {
				margin: 7.5px 2.5px 0px; padding: 15px 17.5px;
				font-family: "Akaya Telivigala", "Sarabun";
				font-size: 1.5em; color: var(--clr-pp-deep-purple-a700) !important;
				display: block; transition: var(--time-tst-xfast);
			}
			div.ETgoHome center.portal a:hover {
				text-decoration: none;
				background-color: var(--fade-white-6);
			}
			html body main div.container div.img-wrapper {
				box-shadow: 0px 0px var(--shd-huge) var(--fade-white-5);
				display: flex; justify-content: center;
			}
			div.img-wrapper div.imgfill {
				padding: 25px;
				width: calc(100% - 50px);
				text-align: center;
				border-radius: 5px;
				object-fit: contain;
			}
			div.img-wrapper div.imgfill img {
				width: 360px; height: 360px;
				border-radius: 25px;
			}
			html body main div.container .message img.pass {
				width: 250px; height: 250px;
				filter: drop-shadow(2.5px 5px 6.25px var(--clr-main-black-absolute)) hue-rotate(27.5deg) saturate(1.5);
			}
		</style>
		<script type="text/javascript">
			$(document).ready(function() {
				setTimeout(function() {
					Grade(document.querySelectorAll("div.imgfill"));
				}, 50);
			})
		</script>
		<script type="text/javascript" src="/resource/js/lib/grade.min.js"></script>
	</head>
	<body>
		<?php require("resource/header.php"); ?>
		<main shrink="<?php echo($_COOKIE['sui_open-nt'])??"false"; ?>">
			<div class="container">
				<?php
					if (isset($_GET['from'])) {
						$source = $_GET['from']; switch ($source) {
							case "index": ?>
								<!-- From "/" path -->
								<center class="message gray">Whoops... There is no webpage there<br>Please return to homepage</center>
							<?php break; case "email": ?>
								<!-- From registration completed email -->
								<center class="message cyan">Thanks for participating in our event<br>Organized by DPST38 with intention 😘</center>
							<?php break; case "registration": ?>
								<!-- After registration form submitted -->
								<center class="message green">
									<img class="pass" src="resource/tick.png"><br><br>
									We got your registration information.<br>Be prepared! And don't forget to join us in our online conference<br>At October 22<sup>nd</sup> to 24<sup>th</sup>, 2021
								</center>
							<?php break; case "welcome": ?>
								<!-- From shortened link -->
								<center class="message blue">Welcome to our online event.<br><b>Way to DPST39</b></center>
							<?php break; case "github": ?>
								<!-- From github repository link -->
								<center class="message green">Greetings developer.<br>We're looking right for someone to help out desinging our Homepage</center>
							<?php break; default: $wrongNo = "type"; break;
						}
					} else $wrongNo = "param";
					if (isset($wrongNo)) { switch ($wrongNo) {
						case "param": echo '<center class="message yellow">Missing argument "from" ...<br>Please return to homepage</center>'; break;
						case "type": echo '<center class="message red">Undefined origin ...<br>Please return to homepage</center>'; break;
						default: echo $goHome;
					} }
				?>
				<div class="img-wrapper"><div class="imgfill"><img src="/resource/images/WayToDPST39.jpg" data-dark="false"></div></div>
				<div class="ETgoHome">
					<h1><center><u>Welcome!</u></center></h1>
					<center class="portal">
						<a href="home"><?php echo $_COOKIE['set_lang']=="en"?"View event":"เข้าสู่เว็บไซต์"; ?></a>
					</center>
				</div>
			</div>
		</main>
		<?php require("../../resource/hpe/material.php"); ?>
		<footer>
			<?php require("../../resource/hpe/footer.php"); ?>
		</footer>
	</body>
</html>
