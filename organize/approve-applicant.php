<?php
	require("../resource/init_ps.php"); $navtabpath = "../../../e/WayToDPST39/resource/aside-navigator.php";
	$header_title = "Organize - Approve Applications";
	$header_desc = "คัดกรองใบสมัครเข้าร่วมกิจกรรมค่าย";

	$ua = $_SERVER['HTTP_USER_AGENT'];
	if (!(strpos("facebookexternalhit/1.1;line-poker/1.0", $ua)>-1 || strpos("facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)", $ua)>-1)) {
		if (!isset($_SESSION['auth'])) header("Location: /$my_url"); if ($has_perm) {
			require_once("../../../resource/php/lib/TianTcl.php"); require("../../resource/db_connect.php");
			$refs = $db -> query("SELECT formid,status FROM WayToDPST39_application");
			$db -> close();
		}
	}
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php require("../resource/heading.php"); require("../../../resource/hpe/init_ss.php"); ?>
		<style type="text/css">
			html body main div.container div.slt { --h: 43px; display: flex; }
			html body main div.container div.slt span {
				margin-right: 7.5px;
				height: 100%;
				line-height: var(--h);
				display: flex;
			}
			html body main div.container div.slt span > * {
				padding: 2.5px 5px;
				border: 1px solid var(--clr-bs-gray-dark);
				display: inline-block;
			}
			html body main div.container div.slt label {
				line-height: calc(var(--h) - 3px);
				border-radius: 5px 0px 0px 5px; border-right: none;
				background-color: var(--clr-gg-grey-300);
			}
			html body main div.container div.slt select {
				line-height: calc(var(--h) - 5px);
				border-radius: 0px 5px 5px 0px; 
				font-size: 18.75px; font-family: "Sarabun", serif;
				appearance: none; -webkit-appearance: none; -moz-appearance: none;
				cursor: text; transition: var(--time-tst-xfast);
			}
			html body main div.container div.slt select:focus { box-shadow: 0px 0px 7.5px 0.125px var(--clr-bs-blue); }
			html body main div.container div.slt select::-ms-expand { display: none; }
			html body main div.container div.slt select option[unread] { font-weight: bold; }
			html body main div.container div.app-card {
				margin-top: 25px;
				border-radius: 5px; border: 1px solid var(--clr-main-black-absolute);
				overflow: hidden;
			}
			div.app-card span.wrapup { display: block; }
			div.app-card span.wrapup div.tab {
				margin: 0px;
				background-color: var(--clr-main-white-absolute);
				display: flex; overflow: hidden;
			}
			div.app-card span.wrapup div.tab div {
				padding: 7.5px 10px;
				width: 100%; height: 30px;
				line-height: 30px; text-align: center;
				cursor: pointer; transition: var(--time-tst-xfast) ease;
			}
			div.app-card span.wrapup div.tab div:hover { background-color: var(--clr-pp-indigo-50); }
			div.app-card span.wrapup div.tab div.active {
				background-color: var(--clr-pp-deep-purple-50);
				pointer-events: none;
			}
			div.app-card span.wrapup div.tab + span.bar-responsive {
				margin-bottom: 0px;
				transform: translate(calc(100% * var(--show)), -100%);
				width: calc(100% / var(--o)); height: 2.5px;
				background-color: var(--clr-bs-indigo);
				display: block; transition: var(--time-tst-xfast);
				pointer-events: none;
			}
			/* div.app-card span.wrapup div.tab:active + span.bar-responsive { animation: bar_moving var(--time-tst-fast) ease 1; } */
			@keyframes bar_moving {
				0%, 100% { width: 50%; }
				50% { width: 75%; }
			}
			div.app-card span.wrapup div.tbs {
				padding: 12.5px;
				transform: translateY(-2.5px);
				height: var(--h);
				background-color: var(--clr-bs-light);
				transition: var(--time-tst-fast) ease; overflow: hidden;
			}
			div.app-card span.wrapup div.tbs div.ans { display: flex; flex-direction: column; }
			div.app-card span.wrapup div.tbs div.ans div.group { margin: 7.5px 0px; }
			div.app-card span.wrapup div.tbs div.ans div.group label {
				margin-bottom: 10px; margin-right: 12.5px;
				color: var(--clr-bs-dark);
				/* display: block; */
			}
			div.app-card span.wrapup div.tbs div.ans div.group output {
				margin-top: 5px; padding: 5px 7.5px;
				/* min-width: 7.5px; min-height: 24px; */
				background-color: var(--fade-black-8);
				border-bottom: 1px solid var(--clr-bs-indigo); border-radius: 2.5px 2.5px 0px 0px; 
				display: inline-block; transition: var(--time-tst-xfast);
				user-select: text; cursor: text;
			}
			div.app-card span.wrapup div.tbs div.ans div.group output:hover { background-color: var(--fade-black-7); }
			div.app-card span.wrapup div.set {
				padding: 7.5px;
				line-height: 43px;
				background-color: var(--clr-main-white-absolute);
				box-shadow: 0px 2.5px var(--shd-big) var(--clr-bs-gray-dark);
				display: flex; justify-content: space-between;
			}
			div.app-card span.wrapup div.set output[name="status"] font[b] { color: var(--clr-bs-blue); }
			div.app-card span.wrapup div.set output[name="status"] font[g] { color: var(--clr-bs-success); }
			div.app-card span.wrapup div.set output[name="status"] font[r] { color: var(--clr-bs-red); }
			@media (max-width: 768px) {
				html body main div.container div.slt { display: initial; }
				html body main div.container div.slt span { margin-bottom: 10px; }
				html body main div.container div.slt label ~ * { font-size: 12.5px; }
			}
		</style>
		<script type="text/javascript">
			$(document).ready(function() {
				$('select[name="app-id"]').on("change", regisApp.view);
				regisApp.show(2);
				$(window).on("resize", function() {
					$("span.wrapup div.tbs").css("--h", $('span.wrapup div.tbs > div[order="'+page.toString()+'"]').outerHeight().toString()+"px");
				});
			});
			var regisApp = {
				view: function() {
					document.querySelector('select[name="app-id"]').disabled = true;
					regisApp.curOpt = $('select[name="app-id"] option:checked');
					regisApp.appId = regisApp.curOpt.text();
					$.post("/e/WayToDPST39/organize/api", {app: "formReg", cmd: "get", attr: regisApp.appId}, function(res, hsc) {
						var dat = JSON.parse(res);
						document.querySelector('select[name="app-id"]').disabled = false;
						$("span.wrapup div.set[disabled]").removeAttr("disabled");
						if (dat.success) {
							// $("div.app-card").text(JSON.stringify(dat.info));
							for (title in dat.info) { if (title != "status") {
								let answer = ( dat.info[title] == "" ? "&nbsp;" : dat.info[title] );
								document.querySelector('span.wrapup div.tbs > div[order] output[name="'+title+'"]').innerHTML = answer;
							} } document.querySelector("span.wrapup div.set button").innerHTML = '<span class="ripple-effect"></span>'+(dat.info.status != "W" ? "เปลี่ยนการตัดสินใจ" : "ตัดสินใจ");
							switch (dat.info.status) {
								case "W": dat.info.status = "อยู่ระหว่างการตัดสินใจ <font b>(Waiting)</font>"; break;
								case "A": dat.info.status = "รับเข้าการประชุมสด <font g>(Accepted)</font>"; break;
								case "D": dat.info.status = "ปฏิเสธการเข้ารอบสด <font r>(Denied)</font>"; break;
							} document.querySelector('span.wrapup div.set output[name="status"]').innerHTML = dat.info.status;
							regisApp.show(2);
						} else app.ui.notify(1, dat.reason);
					});
				}, show: function(page) {
					$("span.wrapup div.tab div.active").removeClass("active");
					$('span.wrapup div.tab div[onClick="regisApp.show('+page.toString()+')"]').addClass("active");
					$("span.wrapup div.tab + span.bar-responsive").css("--show", page.toString());
					$("span.wrapup div.tbs > div").hide();
					$('span.wrapup div.tbs > div[order="'+page.toString()+'"]').show();
					$("span.wrapup div.tbs").css("--h", $('span.wrapup div.tbs > div[order="'+page.toString()+'"]').outerHeight().toString()+"px");
				}, read: function() {
					app.ui.modal.open("คุณตัดสินใจให้ผู้สมัครคนนี้เข้าร่วมประชุมสดหรือไม่", {
						response: "confirm",
						option: ["ไม่อนุมัติ", "อนุมัติ"],
						values: ["D", "A"],
						cfx: regisApp.aprv
					});
				}, aprv: function(response) {
					if (typeof regisApp.curOpt !== "undefined" && typeof regisApp.appId !== "undefined") {
						if (["A", "D"].includes(response)) $.post("/e/WayToDPST39/organize/api", {
							app: "formReg", cmd: "set",
							attr: [regisApp.appId, response]}, function(res, hsc) {
								var dat = JSON.parse(res);
								if (dat.success) {
									app.ui.notify(1, [0, "Response saved"]);
									regisApp.curOpt.removeAttr("unread");
									switch (response) {
										case "A": response = "รับเข้าการประชุมสด <font g>(Accepted)</font>"; break;
										case "D": response = "ปฏิเสธการเข้ารอบสด <font r>(Denied)</font>"; break;
									} document.querySelector('span.wrapup div.set output[name="status"]').innerHTML = response;
									document.querySelector("span.wrapup div.set button").innerHTML = '<span class="ripple-effect"></span>เปลี่ยนการตัดสินใจ';
								} else app.ui.notify(1, dat.reason);
						}); else app.ui.notify(1, [2, "Invalid response type"]);
					} else app.ui.notify(1, [3, "Error while trying to set status"]);
				}
			};
		</script>
	</head>
	<body>
		<?php require("../resource/header.php"); ?>
		<main shrink="<?php echo($_COOKIE['sui_open-nt'])??"false"; ?>">
			<?php if ($has_perm) { ?>
				<div class="container">
					<h2>Organize - Approve Applications</h2>
					<div class="slt"><span>คัดกรองใบสมัครเข้าร่วมกิจกรรมค่าย</span><span><label>เลขที่ใบสมัคร</label><select name="app-id">
						<option disabled selected>---เลือกใบสมัคร---</option>
						<?php if ($refs -> num_rows > 0) { while ($ref = $refs -> fetch_assoc()) {
							$keyid = substr($tcl -> encode((intval($ref['formid'])+138)*138, 1), 0, 13); // 5d3
							$keyid = substr($keyid, 0, 4)."-".substr($keyid, 4, 5)."-".substr($keyid, 9, 4);
							$special = ($ref['status'] == "W" ? " unread" : "");
							echo "<option$special>$keyid</option>";
						} } ?>
					</select></span></div>
					<div class="app-card">
						<span class="wrapup">
							<div class="tab">
								<div onClick="regisApp.show(0)" class="ripple-click">ตัวตน</div>
								<div onClick="regisApp.show(1)" class="ripple-click">ติดต่อ</div>
								<div onClick="regisApp.show(2)" class="ripple-click">คำตอบ</div>
							</div><span class="bar-responsive" style="--o: 3"></span>
							<div class="tbs">
								<div order="0"><div class="ans">
									<div class="group">
										<label>ชื่อ-สกุล (ชื่อเล่น)</label>
										<output name="name">&nbsp;</output>
									</div>
									<div class="group">
										<label>ระดับชั้น</label>
										<output name="grade">&nbsp;</output>
									</div>
									<div class="group">
										<label>โรงเรียน</label>
										<output name="school">&nbsp;</output>
									</div>
								</div></div>
								<div order="1"><div class="ans">
									<div class="group">
										<label>LINE</label>
										<output name="Line">&nbsp;</output>
									</div>
									<div class="group">
										<label>Phone</label>
										<output name="Phone">&nbsp;</output>
									</div>
									<div class="group">
										<label>Email</label>
										<output name="Email">&nbsp;</output>
									</div>
									<div class="group">
										<label>Instagram</label>
										<output name="IG">&nbsp;</output>
									</div>
									<div class="group">
										<label>Facebook</label>
										<output name="FB">&nbsp;</output>
									</div>
									<div class="group">
										<label>Twitter</label>
										<output name="Twitter">&nbsp;</output>
									</div>
								</div></div>
								<div order="2"><div class="ans">
									<div class="group">
										<label>พสวท.คืออะไรในความคิดของน้อง ?</label>
										<output name="qa1">&nbsp;</output>
									</div>
									<div class="group">
										<label>"+" กับ "-" น้องจะเลือกอะไร เพราะอะไร</label>
										<output name="qa2">&nbsp;</output>
									</div>
									<div class="group">
										<label>ถ้าน้องขอพรได้ 1 ประการ น้องจะขออะไร เพราะอะไร</label>
										<output name="qa3">&nbsp;</output>
									</div>
									<div class="group">
										<label>Impression</label>
										<output name="qa0">&nbsp;</output>
									</div>
								</div></div>
							</div>
							<div class="set" disabled>
								<div class="status">
									<label>สถานะปัจจุบัน : </label>
									<output name="status">__________</output>
								</div>
								<div class="decide">
									<button onClick="regisApp.read()" class="blue">ตัดสินใจ</button>
								</div>
							</div>
						</span>
					</div>
				</div>
			<?php } else echo '<iframe src="/error/901">Loading...</iframe>'; ?>
		</main>
		<?php require("../../../resource/hpe/material.php"); ?>
		<footer>
			<?php require("../../../resource/hpe/footer.php"); ?>
		</footer>
	</body>
</html>