<?php
	require("resource/init_ps.php");
	$header_title = "Happy Time";
	$header_desc = "มาร่วมสนุกกัน";
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php require("resource/heading.php"); require("../../resource/hpe/init_ss.php"); ?>
		<style type="text/css">
			
		</style>
		<script type="text/javascript">
			
		</script>
	</head>
	<body>
		<?php require("resource/header.php"); ?>
		<main shrink="<?php echo($_COOKIE['sui_open-nt'])??"false"; ?>">
			<div class="container">
				
			</div>
		</main>
		<?php require("../../resource/hpe/material.php"); ?>
		<footer>
			<?php require("../../resource/hpe/footer.php"); ?>
		</footer>
	</body>
</html>