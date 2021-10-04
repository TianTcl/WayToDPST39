<?php
	require("../resource/init_ps.php"); $navtabpath = "../../../e/WayToDPST39/resource/aside-navigator.php";
	$header_title = "Forms - Permission";
	$header_desc = "การขออนุญาตบันทึก";
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php require("../resource/heading.php"); require("../../../resource/hpe/init_ss.php"); ?>
		<style type="text/css">
			html body main div.container { overflow: visible; }
			html body main div.container div.form { --mvlbt: 7.5px; }
			html body main div.container div.form > * { margin: 0px 0px 25px; }
			html body main div.container div.form section {
				padding: 12.5px 12.5px 27.5px;
				background-image: linear-gradient(145deg, #FFFFFF, #DBE2E0);;
				border-radius: 12.5px;
				box-shadow: 7.5px 7.5px 25px #B6BCBB, -7.5px -7.5px 25px #FFFFFF;
				transition: var(--time-tst-xfast);
			}
			html body main div.container div.form section.message { padding: 15px 15px 20px; background-image: initial; }
			html body main div.container div.form section.done { padding: 12.5px; }
			html body main div.container div.form input[type="text"], html body main div.container div.form select {
				margin: 7.5px 2.5px; padding: 2.5px 5px;
				width: calc(100% - 17px); height: 30px;
				font-size: 20px; line-height: 30px; font-family: "Sarabun", serif;
				border: 1px solid var(--clr-bs-gray-dark); border-radius: 3px;
				transition: var(--time-tst-fast);
			}
			html body main div.container div.form select { width: auto; height: 35px; line-height: 35px; }
			html body main div.container div.form input + label {
				padding: 2.5px 5px;
				position: absolute; left: 15px; transform: translate(calc(var(--mvlbt) + 12.5px), 10px);
				height: var(--txt-ipt-h);
				font-size: 18.75px; font-family: 'Sarabun', sans-serif; color: gray; line-height: var(--txt-ipt-h);
				transition: calc(var(--time-tst-xfast)/1.5); pointer-events: none;
			}
			html body main div.container div.form input[required] + label { color: var(--clr-bs-red); }
			html body main div.container div.form input:focus + label, html body main div.container div.form input[filled="true"] + label {
				transform: translate(var(--mvlbt), -7px) scale(0.75);
				color: var(--clr-main-black-absolute);
				background-image: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(255,255,255,0) 42.4%, rgba(255,255,255,1) 42.5%, rgba(255,255,255,1) 55%, rgba(255,255,255,0) 55.1%);
			}
			html body main div.container div.form select:focus { box-shadow: 0 0 7.5px .125px var(--clr-bs-blue) }
			html body main div.container div.form button { transform: translateY(10px); }
			html body main div.container div.form div.choice {
				margin-bottom: 12.5px; padding: 5px;
				width: calc(100% - 15px); height: 30px; line-height: 30px;
				background-color: var(--clr-main-white-absolute);
				box-shadow: 0px 0px var(--shd-little) var(--fade-black-6);
				border-radius: 2.5px;
				display: flex; cursor: pointer; transition: var(--time-tst-xfast);
			}
			html body main div.container div.form div.choice[chosed] {
				/* transform: scale(1.0125); */
				pointer-events: none;
			}
			html body main div.container div.form div.choice > input[type="radio"] {
				transform: scale(0);
				width: 0px; height: 0px;
				opacity: 0%; filter: opacity(0);
				overflow: hidden; visibility: hidden; display: none;
			}
			html body main div.container div.form div.choice div.radio { width: 30px; height: 30px; }
			html body main div.container div.form div.choice div.radio > span {
				position: relative; top: 50%; left: 50%; transform: translate(-50%, -50%);
				width: 12.5px; height: 12.5px;
				border-radius: 50%; border: 1.25px solid var(--clr-bs-dark);
				display: block; overflow: hidden; transition: var(--time-tst-xfast);
			}
			html body main div.container div.form div.choice input[type="radio"]:checked + div.radio > span {
				transform: translate(-50%, -50%) scale(1.5);
				border: 1.25px solid var(--clr-bs-indigo);
			}
			html body main div.container div.form div.choice div.radio > span:before {
				margin: auto;
				position: relative; top: 50%; transform: translate(-0.5px, calc(-50% - 0.5px)) scale(0);
				width: 80%; height: 80%;
				border-radius: 50%;
				background-color: var(--clr-bs-indigo);
				display: block; content: ""; transition: var(--time-tst-xfast);
			}
			html body main div.container div.form div.choice input[type="radio"]:checked + div.radio > span:before { transform: translate(-0.5px, calc(-50% - 0.5px)) scale(1); }
			html body main div.container div.form div.choice div.label { padding-left: 5px; }
			div.form section#form-3 div.centerup { display: flex; justify-content: space-evenly; }
			@media only screen and (max-width: 768px) {
				html body main div.container div.form input + label { transform: translate(calc(var(--mvlbt) + 7.5px), 12.5px); }
    			html body main div.container div.form input:focus + label, html body main div.container div.form input[filled="true"] + label { transform: translate(calc(var(--mvlbt) - 7.5px), -4px) scale(0.75); }
			}
		</style>
		<script type="text/javascript">
			$(document).ready(function() {
				$("div.form section:not(#form-1)").hide();
				$('div.form input[type="text"]').on("input change", validate_feild);
				validate_feild();
			});
			function validate_feild() {
				document.querySelectorAll('div.form input[type="text"]').forEach((eio) => {
					var ei = $(eio);
					ei.attr("filled", (ei.val()==""?"false":"true"));
				});
			}
			var fmns = {}; function formFx() {
				var fa = {};
				return {
					identify: function() {
						var btn = document.querySelector("div.form section#form-1 button"); btn.disabled = true;
						var raw = document.querySelector('div.form section#form-1 input[name="iEmail"]').value,
							enc = document.querySelector('div.form section#form-1 input[name="iName"]').value;
						if (raw != "" && enc != "") $.post("/e/WayToDPST39/organize/api", {app: "formPerm", cmd: "iden", attr: {email: raw, user: enc}}, function(res, hsc) {
							var dat = JSON.parse(res);
							if (dat.success) {
								fa.account = enc; $("div.form section#form-1").attr("disabled", "");
								$("div.form section#form-2").toggle("height");
								if (dat.answered) {
									$("div.form section#form-5").toggle("height");
									var chosen = document.querySelector('div.form section#form-2 input[name="perm"][value="'+dat.answer+'"]').parentNode;
									formApp.choose(chosen); chosen.setAttribute("disabled", "");
									document.querySelector("div.form section#form-2 button").disabled = true;
									btn.innerText = btn.innerText+"แล้ว";
								} app.io.confirm("leave");
							} else app.ui.notify(1, dat.reason);
							btn.disabled = false;
						}); else {
							app.ui.notify(1, [2, "Please fill up all fields above."]);
							btn.disabled = false;
						}
					}, allow: function() {
						var btn = document.querySelector("div.form section#form-2 button"); btn.disabled = true;
						var ans = document.querySelector('div.form section#form-2 input[name="perm"]:checked').value;
						if (ans != "" && ["V", "S", "N"].includes(ans)) {
							fa.perm = ans;
							var txt = $('div.form section#form-2 input[name="perm"]:checked ~ div.label span').text().replaceAll(" ", "").replace(":", "");
							document.querySelector("div.form section#form-3 output").innerText = txt;
							$("div.form section#form-2").toggle("height"); $("div.form section#form-3").toggle("height");
							btn.disabled = false;
						} else app.ui.notify(1, [2, "Invalid option. Please choose again"]);
					}, confirm: function(permission) {
						var btn = $("div.form section#form-3 button"); btn.attr("disabled", "");
						if (permission) {
							if (fa.perm != "" && ["V", "S", "N"].includes(fa.perm))
							$.post("/e/WayToDPST39/organize/api", {app: "formPerm", cmd: "set", attr: {user: fa.account, ans: fa.perm}}, function(res, hsc) {
								var dat = JSON.parse(res);
								if (dat.success) {
									app.ui.notify(1, [0, "Your permission has been saved"]);
									$("div.form section#form-4").toggle("height"); // $("div.form section#form-3").attr("disabled", "");
									$("div.form section#form-3").addClass("message cyan");
									$("div.form section#form-3 div.centerup").toggle("height");
									btn.removeAttr("disabled");
									$("div.form section#form-1 button").toggle("width"); $("div.form section#form-1").addClass("done");
								} else app.ui.notify(1, dat.reason);
							}); else {
								app.ui.notify(1, [2, "Invalid option. Please choose again"]);
								$("div.form section#form-2").toggle("height"); $("div.form section#form-3").toggle("height");
								btn.removeAttr("disabled");
							}
						} else {
							$("div.form section#form-2").toggle("height"); $("div.form section#form-3").toggle("height");
							btn.removeAttr("disabled");
						}
					}, choose: function(me) {
						me.children[1].click();
						$("div.form section#form-2 div.choice[chosed]").removeAttr("chosed");
						$(me).attr("chosed", "");
						document.querySelector("div.form section#form-2 button").disabled = false;
					}
				};
			} const formApp = formFx(), fmn = {
				start: function() {
					var title = "ค้นหาชื่อของคุณ", value = 'div.form section#form-1 input[name="iName"]', display = 'div.form section#form-1 input[name="iName"] + input', exclude = "";
					fmns.val = document.querySelector(value); fmns.disp = document.querySelector(display); fmns.exc = exclude;
					$("input:focus").blur();
					app.ui.lightbox.open("top", {title: title, allowclose: true, html: '<style> div.fs-wrapper { width: 65vw; max-width: 100%; min-width: 40vw; } div.fs-wrapper input[name="fs-i"] { margin-bottom: 10px; border-radius: 3px; border: 1px solid var(--clr-bs-gray-dark); padding: 0px 10px; width: calc(100% - 22.5px); transition: var(--time-tst-fast); font-size: 20px; font-family: "THSarabunNew", serif; } div.fs-wrapper input[name="fs-i"]:focus { box-shadow: 0 0 7.5px .125px var(--clr-bs-blue) } div.fs-wrapper div.rs span { display: block; float: left; cursor: pointer; background-color: var(--clr-main-white-absolute); box-shadow: 0.25px 0.25px var(--shd-tiny) var(--fade-black-4); transition: var(--time-tst-xfast); padding: 5px 7.5px; border-radius: 2.5px; font-family: "Sarabun"; font-size: 18.75px; margin: 2.5px; } div.fs-wrapper div.rs span:hover { color: var(--clr-bs-blue); } </style><div class="fs-wrapper"><input name="fs-i" onInput="fmn.find(this)" onChange="fmn.find(this)" placeholder="พิมพ์ชื่อของคุณ..." autofocus><div class="rs"><span onClick="fmn.end(null)"><font style="color: var(--clr-bs-red);">ลบออก</font></span></div></div>'});
					$('input[name="fs-i"]:not(:focus)').focus();
				}, find: function(me) {
					var search_for = me.value; if (/^[A-Za-zก-๛]{1,30}$/.test(search_for))
					$("div.fs-wrapper div.rs").load("/e/WayToDPST39/organize/api?app=formReg&cmd=find&q="+search_for+"&attr="+encodeURI(fmns.exc));
				}, end: function(who, me=null) {
					if (me == null) {
						fmns.val.removeAttribute("value");
						fmns.disp.value = "";
					} else {
						fmns.val.value = who;
						fmns.disp.value = me.innerText;
					}
					if (typeof validate_feild !== "undefined") validate_feild();
					app.ui.lightbox.close(); fmns = {};
				}
			};
		</script>
	</head>
	<body>
		<?php require("../resource/header.php"); ?>
		<main shrink="<?php echo($_COOKIE['sui_open-nt'])??"false"; ?>">
			<div class="container">
				<h2>การขออนุญาตบันทึก</h2>
				<div class="form">
					<section id="form-1">
						<div class="form-group">
							<input name="iEmail" type="text" max-length="100" required><label>E-mail address</label>
						</div>
						<div class="form-group">
							<input name="iName" type="hidden">
							<input type="text" onFocus="fmn.start()" required><label>Your name</label>
						</div>
						<div class="form-group">
							<button class="blue full-x" onClick="formApp.identify()">ยืนยันตัวตน</button>
						</div>
					</section>
					<section id="form-5" class="message yellow">
						<center>You have already responded this form.<br>To change your answer, edit below and continue the form</center>
					</section>
					<section id="form-2">
						<div class="form-group">
							<div class="choice ripple-click" onClick="formApp.choose(this)">
								<input name="perm" value="V" type="radio">
								<div class="radio"><span></span></div>
								<div class="label"><span><u>อนุญาต</u>ให้บันทึก : ภาพและเสียง</span></div>
							</div>
							<div class="choice ripple-click" onClick="formApp.choose(this)">
								<input name="perm" value="S" type="radio">
								<div class="radio"><span></span></div>
								<div class="label"><span><u>อนุญาต</u>ให้บันทึก : แค่เสียง</span></div>
							</div>
							<div class="choice ripple-click" onClick="formApp.choose(this)">
								<input name="perm" value="N" type="radio">
								<div class="radio"><span></span></div>
								<div class="label"><span><u>ไม่อนุญาต</u>ให้บันทึก สื่อใดๆเลย</span></div>
							</div>
						</div>
						<div class="form-group">
							<button class="blue full-x" onClick="formApp.allow()" disabled>ถัดไป</button>
						</div>
					</section>
					<section id="form-3">
						<div class="form-group">
							<center>
								<span>คุณเลือกที่จะ : </span>
								<b><output></output></b>
							<center>
						</div>
						<div class="form-group centerup">
							<button class="red" onClick="formApp.confirm(false)">ย้อนกลับ (แก้ไข)</button>
							<button class="green" onClick="formApp.confirm(true)">ยืนยันการให้สิทธิ์</button>
						</div>
					</section>
					<section id="form-4">
						
					</section>
				</div>
			</div>
		</main>
		<?php require("../../../resource/hpe/material.php"); ?>
		<footer>
			<?php require("../../../resource/hpe/footer.php"); ?>
		</footer>
	</body>
</html>