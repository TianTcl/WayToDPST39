<?php
	require("../resource/init_ps.php"); $navtabpath = "../../../e/WayToDPST39/resource/aside-navigator.php";
	$header_title = "Organize - Menu";
	$header_desc = "เลือกการกระทำการของผู้จัดกิจกรรม";

	if (!isset($_SESSION['auth'])) header("Location: /$my_url");
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php require("../resource/heading.php"); require("../../../resource/hpe/init_ss.php"); ?>
		<style type="text/css">
			html body main div.container label:hover { background-color: var(--clr-pp-deep-purple-100) !important; }
		</style>
		<link rel="stylesheet" href="/resource/css/extend/all-index.css">
		<script type="text/javascript">
			
		</script>
		<script type="text/javascript" src="/resource/js/extend/all-index.js"></script>
	</head>
	<body>
		<?php require("../resource/header.php"); ?>
		<main shrink="<?php echo($_COOKIE['sui_open-nt'])??"false"; ?>">
			<?php if ($has_perm) { ?>
				<div class="container">
					<p><?php echo ($_COOKIE['set_lang']=="en"?"Welcome ":"ยินดีต้อนรับ ").$_SESSION['auth']['name'][$_COOKIE['set_lang']]['a']; ?> (<?php echo $_SESSION['auth']['user']; ?>)</p>
					<p><?php echo ($_COOKIE['set_lang']=="en"?"to the WayToDPST39 event manager":"เข้าสู่ระบบกำกับค่าย WayToDPST39"); ?></p>
					<p>คุณสามารถเลือกการทำงานได้จากเมนูด้านล่าง</p><br>
					<input name="applicants" type="checkbox" id="ref_menu-a"><label for="ref_menu-a">ผู้ร่วมกิจกรรม</label><ul>
						<li><a href="approve-applicant">ตรวจใบสมัคร</a></li>
						<li><a disabled href="participant-list">รายนามผู้เข้าร่วม</a></li>
					</ul>
					<input name="forms" type="checkbox" id="ref_menu-b"><label for="ref_menu-b">การกรอกฟอร์ม</label><ul>
						<li class="dt">ฟอร์มขออนุญาตบันทึก</li>
						<li><a disabled href="read-permision">ดูการอนุญาตให้บันทึก</a></li>
						<li class="dt">แบบตอบกลับการประเมินและความพึงพอใจ</li>
						<li><a disabled href="read-response">ดูผลประเมินและการตอบกลับ</a></li>
					</ul>
				</div>
			<?php } else echo '<iframe src="/error/901">Loading...</iframe>'; ?>
		</main>
		<?php require("../../../resource/hpe/material.php"); ?>
		<footer>
			<?php require("../../../resource/hpe/footer.php"); ?>
		</footer>
	</body>
</html>