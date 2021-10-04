<?php
	require("resource/init_ps.php");
	$header_title = "Register";

	$prereg = (isset($_POST['credential']) && $_POST['credential']=="pre-register");
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php require("resource/heading.php"); require("../../resource/hpe/init_ss.php"); ?>
		<style type="text/css">
			html body main div.container:nth-of-type(2) { padding-top: 0px; }
			html body main div.container:last-child {
				margin-bottom: 0px; padding-bottom: 0px;
				overflow: visible;
			}
			html body main div.container > iframe {
				width: 100%; height: 2135px;
				border: none;
			}
			html body main div.container center.message span.wanted { cursor: grab; }
			html body main div.container center.message span.wanted:active { cursor: grabbing; }
			html body main div.container center.message + form.special { overflow: hidden; }
		</style>
		<script type="text/javascript">
			var reallyWant = false;
			$(document).ready(function(){
				// $("html body main div.container").load("forms/registration.html");
				if (<?php echo strval(!$prereg); ?>) {
					$("html body main div.container center.message + form.special").hide();
					$("html body main div.container center.message span.wanted").on("dblclick", function() {
						if (!reallyWant) {
							reallyWant = true;
							app.ui.notify(1, [1, "Seems like you really want to register to this program..."]);
							setTimeout(function() {
								app.ui.notify(1, [1, "We grant you your chance! 😊"]);
								setTimeout(function() { $("html body main div.container center.message span.wanted").trigger("click"); }, 500);
							}, 1000);
						}
					});
					$("html body main div.container center.message span.wanted").on("click", function() {
						if (reallyWant) $("html body main div.container center.message + form.special").toggle("blind");
					});
				} else {
					$("html body main div.container center.message:nth-of-type(2)").hide();
					$("html body main div.container center.message span.wanted").on("click", function() {
						$("html body main div.container center.message:nth-of-type(2)").toggle("blind");
					});
					setTimeout(function() { $("html body main div.container center.message span.wanted").trigger("click"); }, 1250);
				}
			});
		</script>
	</head>
	<body>
		<?php require("resource/header.php"); ?>
		<main shrink="<?php echo($_COOKIE['sui_open-nt'])??"false"; ?>">
			<div class="container" <?php if($prereg)echo'style="display:block"';?>>
				<!--iframe src="forms/registration.html"></iframe-->
				<?php
					$tn = time(); $ti = ($tn < strtotime("2021-10-01 00:00:00 GMT+7")); $to = ($tn <= strtotime("2021-10-16 03:00:00 GMT+7"));
					if ($ti) {
						echo '<center class="message blue">The registration is not yet open.<br>Please come back later at <span class="wanted">01 October 2021<span></center>';
						if (!$prereg) echo '<form class="special" method="post"><center>',
							'	<button value="pre-register" name="credential" class="cyan">I am willing to join this event</button>',
							'</center></form>';
						else echo '<center class="message green">But you are special to get to register first.</center>';
					} if ((!$ti || $prereg) && $to) {
						if ($prereg) echo '</div><div class="container">';
						include("forms/registration.html");
					}
					if (!$to) echo '<center class="message red">The registration deadline is now over</center>';
				?>
			</div>
		</main>
		<?php require("../../resource/hpe/material.php"); ?>
		<footer>
			<?php require("../../resource/hpe/footer.php"); ?>
		</footer>
	</body>
</html>