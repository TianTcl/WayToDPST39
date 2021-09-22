<?php
	require("resource/init_ps.php");
	$header_title = "Home";
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php require("resource/heading.php"); require("../../resource/hpe/init_ss.php"); ?>
		<style type="text/css">
			html body main div.container div.banner {
				width: 100%;
				border-radius: 7.5px; border: 1px solid var(--clr-pp-teal-a700);
				overflow: hidden;
			}
			html body main div.container div.banner div.imgfill {
				width: 100%;
				object-fit: contain;
			}
			html body main div.container div.banner div.imgfill img { width: 100%; height: auto; }
			html body main div.container > center.topic > h1 {
				margin: 0px;
				color: transparent;
				font-family: "Ranchers"; font-size: 2.5em;
				background-clip: text; background-image: linear-gradient(to bottom, var(--clr-pp-teal-a200), var(--clr-pp-teal-a700));
			}
			html body main div.container > center.topic > h4 {
				color: var(--clr-pp-deep-purple-a200);
				font-family: "Modak"; font-size: 1.5em; font-weight: 100;
			}
		</style>
		<script type="text/javascript">
			
		</script>
	</head>
	<body>
		<?php require("resource/header.php"); ?>
		<main shrink="<?php echo($_COOKIE['sui_open-nt'])??"false"; ?>">
			<div class="container">
				<!--iframe data-client-id="529cd0ea8afa8f742d000004" title="Image Slider" frameborder="0" scrolling="no" allowtransparency="true" allow="geolocation; microphone; camera; autoplay; encrypted-media; fullscreen" data-type="iframe" class="custom-field-frame custom-field-frame-rendered frame-xd-ready frame-ready" id="customFieldFrame_35" src="//widgets.jotform.io/imageSlider/?qid=35&ref=https%3A%2F%2Finf.bodin.ac.th&injectCSS=true" style="max-width:720px;border:none;width:100%;height:380px" data-width="720" data-height="380">Loading Poster Slider ...</iframe-->
				<div class="banner">
					<div class="imgfill"><img src="resource/banner.jpg" data-dark="false"></div>
				</div>
				<center class="topic">
					<h1>Way to DPST 39</h1>
					<h4>By: DPST38</h4>
				</center>
			</div>
		</main>
		<?php require("../../resource/hpe/material.php"); ?>
		<footer>
			<?php require("../../resource/hpe/footer.php"); ?>
		</footer>
	</body>
</html>
