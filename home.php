<?php
	require("resource/init_ps.php");
	$header_title = "Home";
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php require("resource/heading.php"); require("../../resource/hpe/init_ss.php"); ?>
		<style type="text/css">
			html body main div.container { overflow: visible; }
			html body main div.container div.banner {
				width: calc(100% - 2px);
				border-radius: 7.5px; border: 1px solid var(--clr-pp-teal-a700);
				overflow: hidden;
			}
			html body main div.container div.banner div.imgfill {
				width: 100%;
				object-fit: contain;
				display: flex; justify-content: center;
			}
			html body main div.container div.banner div.imgfill img {
				margin: auto 0px;
				width: 100%; height: auto;
			}
			html body main div.container > center.topic > h1 {
				margin: 20px 0px 10px;
				color: transparent; -webkit-background-clip: text;
				font-family: "Ranchers"; font-size: 2.5em;
				background-image: linear-gradient(to bottom, var(--clr-pp-teal-a200), var(--clr-pp-teal-a700));
			}
			html body main div.container > center.topic > h4 {
				margin: 0px;
				color: var(--clr-pp-deep-purple-800);
				font-family: "Modak"; font-size: 1.5em; font-weight: 100;
			}
			html body main div.container section.blog { padding-top: 20px; }
			section.blog, section.blog div.sub { display: flex; flex-direction: column; }
			section.blog div.sub[deleted] .msg { opacity: 50%; }
			section.blog div.sub .msg {
				padding: 6.25px 12.5px;
				max-width: 75%;
				border-radius: 12.5px; border: var(--bd);
				background-color: var(--bg);
				display: block;
			}
			section.blog div.sub .msg:after {
				position: fixed;
				width: 12.5px; height: 12.5px;
				background-color: var(--bg);
				border-bottom: var(--bd); border-right: var(--bd);
				display: block; content: "";
			}
			section.blog div.sub .msg.q {
				--bd: 1.25px solid var(--clr-main-black-absolute); --bg: var(--clr-main-white-absolute);
				margin: 0px 0px 10px auto;
				font-family: "THKrub", "Itim";
			}
			section.blog div.sub .msg.q:after { right: 3.5px; transform: translateY(calc(-100% - 6.25px)) rotate(-45deg); }
			section.blog div.sub .msg.a {
				--bd: 1.25px solid var(--clr-main-black-absolute); --bg: var(--clr-main-white-absolute);
				margin: 0px auto 10px 0px;
				font-family: "THKodchasal", "Itim";
			}
			section.blog div.sub .msg.a:after { left: 3.5px; transform: translateY(calc(-100% - 6.25px)) rotate(135deg); }
			html body main div.container div.register { padding-top: 20px; }
			div.register div.btn-warp { display: flex; justify-content: center; }
			div.register div.btn-warp a[role="button"] {
				padding: 7.5px 32.5px;
				height: 40px; line-height: 40px;
				text-transform: uppercase; font-family: "Prompt";
				border-radius: 27.5px;
			}
			@media only screen and (max-width: 768px) {
				html body main div.container > center.topic > h1 {
					margin: 27.5px 0px 17.5px;
					height: 50px; line-height: 50px;
				}
				html body main div.container section.blog div.sub > * { max-width: 82.5%; }
				section.blog div.sub .msg:after { width: 10px; height: 10px; }
				section.blog div.sub .msg.q:after { right: 5px; transform: translateY(calc(-100% - 2.5px)) rotate(-45deg); }
				section.blog div.sub .msg.a:after { left: 5px; transform: translateY(calc(-100% - 2.5px)) rotate(135deg); }
				div.register div.btn-warp a[role="button"] { font-size: 18.75px; }
			}
		</style>
		<script type="text/javascript">
			/* $(document).ready(function() {
				setTimeout(function() {
					Grade(document.querySelectorAll("div.imgfill"));
				}, 625);
			}); */
		</script>
		<!--script type="text/javascript" src="/resource/js/lib/grade.min.js"></script-->
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
				<section class="blog">
					<div class="sub">
						<span class="msg q">Way To DPST 39 คืออะไร?</span>
						<span class="msg a">Way To DPST 39 คือค่ายที่พี่ๆ DPST รุ่น 38 จัดขึ้นให้น้องๆม.ต้นได้มีโอกาสทำความรู้จักกับโครงการพสวท. และ พสวท.สู่ความเป็นเลิศ ว่าคืออะไร</span>
						<span class="msg a">เมื่อเข้ามาเรียนแล้วจะมีลักษณะเป็นอย่างไร มีการแนะแนวถึงวิธีการเรียนและการสอบเข้า อีกทั้งยังมีการจัดกิจกรรมให้น้องๆเพื่อสร้างแรงบันดาลใจและเป็นกำลังใจให้กับน้องๆที่ต้องการสอบเข้าอีกด้วย</span>
					</div>
					<div class="sub">
						<span class="msg q">ทำไมพี่ๆถึงทำค่ายนี้</span>
						<span class="msg a">เป็นการประชาสัมพันธ์ให้น้องๆได้รู้จักโครงการดีๆอย่างโครงการพสวท. และเพื่อน้องๆที่จะต้องสอบเข้าม.4 มีทางเลือกในการสอบมากขึ้น</span>
						<span class="msg a">เพื่อให้น้องๆที่สนใจและต้องการสอบเข้าโครงการพสวท.มีข้อมูลเกี่ยวกับโครงการและรู้แนวทางในการสอบมากขึ้น</span>
						<span class="msg a">เพื่อให้น้องๆได้สร้างสัมพันธ์และทำความรู้จักกับรุ่นพี่</span>
						<span class="msg a">เพื่อสร้างแรงบันดาลใจให้กับน้องๆที่จะสอบเข้า</span>
					</div>
					<div class="sub">
						<span class="msg q">What is DPST (ทุนเต็มจำนวน)</span>
						<span class="msg a">พสวท.ย่อมาจาก "โครงการพัฒนาและส่งเสริมผู้มีความสามารถพิเศษทางวิทยาศาสตร์และเทคโนโลยี" สำหรับทุนพสวท.ในระดับนั้นมีธยมปลายนักเรียนที่ได้รับการคัดเลือกเข้าโครงการจะได้รับการพัฒนาให้เต็มศักยภาพโดยมีหลักสูตรโปรแกรมเสริมวิทยาศาสตร์ คณิตศาสตร์ และคอมพิวเตอร์รวมไปถึง มีกิจกรรมเสริมหลักสูตรเช่น ค่ายวิทยาศาสตร์ การฝึกงานและการนำเสนอโครงงานวิทยาศาสตร์ โครงการฯ</span>
						<span class="msg a">จะจัดให้มีการสอบคัดเลือกนักเรียนที่กำลังศึกษาชั้นปีที่ 3 ทั่วประเทศที่มีผลการเรียนเฉลี่ยสะสมไม่ต่ำกว่า 3.00 เข้าโครงการพสวท. ทุกๆปี ปีละไม่เกิน 40 คน กระจายไปศึกษาตามศูนย์โรงเรียนต่างๆทั่วทุกภูมิภาคของประเทศไทยซึ่งโครงการนี้ได้มีมานานถึง 38 รุ่นแล้ว</span>
					</div>
					<div class="sub" deleted>
						<span class="msg q">What is DPST (สู่ความเป็นเลิศ)</span>
						<span class="msg a">โครงการนี้เป็นโครงการที่ต่อยอดมาจากโครงการพสวท. โดยเป็นโครงการที่จะสร้างห้องเรียนของนักเรียนพสวท. (สู่ความเป็นเลิศ) ขึ้นมา ซึ่งนักเรียนในห้องนี้จะได้รับการพัฒนาศักยภาพในลักษณะเดียวกันกับเด็กนักเรียนทุนพสวท. สำหรับห้องพสวท. (สู่ความเป็นเลิศ) จะมีศูนย์ในโรงเรียนทั้งหมด 10 แห่ง (โรงเรียนละ 1 ห้อง ห้องละไม่เกิน 24 คน)</span>
						<span class="msg a">ซึ่งโครงการนี้มีเพื่อยกระดับมาตรฐานการพัฒนานักเรียนที่มีความสามารถพิเศษของประเทศ และขยายฐานความรู้มากขึ้นสำหรับเป็นต้นแบบการวิจัยและพัฒนา ปัจจุบันโครงการนี้เพิ่งเริ่มต้นจัดทำมาได้เพียง 3 ปีเท่านั้น</span>
					</div>
					<div class="sub">
						<span class="msg q">ข้อดีของพสวท.</span>
						<span class="msg a">1) นักเรียนทุนพสวท. และพสวท. (สู่ความเป็นเลิศ) จะได้รับการสนับสนุนทางด้านการเงิน เช่นจะมีเงินสนับสนุนในส่วนของค่าบำรุงการศึกษาช่วยให้เราไม่ต้องชำระในส่วนนี้ และโดยเฉพาะเด็กนักเรียนทุนเต็มจำนวนจะมีทุนการศึกษาให้เป็นเหมือนเงินเดือน เดือนละ 7,152 บาท (ข้อมูลอิงจากปีล่าสุดดังนั้นจำนวนเงินในแต่ละปีอาจมีการเปลี่ยนแปลงในอนาคต)</span>
						<span class="msg a">2) ทั้งนักเรียนทุนพสวท. และพสวท. (สู่ความเป็นเลิศ) จะได้รับโอกาสในการพัฒนาศักยภาพในหลากหลายด้านมาก</span>
						<span class="msg a">3) นักเรียนทุนพสวท.ในระดับมัธยมศึกษาตอนปลายมีโอกาสได้รับทุนการศึกษาต่อในระดับชั้นปริญญาตรี โท และเอก ทั้งในและต่างประเทศ</span>
						<span class="msg a">4) เมื่อเข้ามาแล้วน้องๆจะได้พบเจอกับสังคมของนักเรียนพสวท. และได้มีโอกาสทำความรู้จักและฟังคำแนะนำจากรุ่นพี่ที่จบไปแล้ว</span>
						<span class="msg a">5) การเรียนรู้มักจะอยู่ในรูปแบบของการปฏิบัติจริงซะส่วนใหญ่คือจะมีการทำ LAB และอีกมากมาย ทำให้น้องๆได้นำความรู้ไปใช้จริงไม่ใช่แค่เพียงเชิงทฤษฎี</span>
						<span class="msg a">6) มีการจัดทำค่ายวิทยาศาสตร์ภาคฤดูร้อนสำหรับเด็กนักเรียนทุน พสวท.เท่านั้น</span>
					</div>
					<div class="sub">
						<span class="msg q">จบไปเป็นนักวิทยาศาสตร์เท่านั้นหรอ???</span>
						<span class="msg a">คำตอบคือไม่จริง</span>
						<span class="msg a">เพราะปัจจุบันโครงการได้มีการเปิดกว้างมากขึ้นทำให้นักเรียนสามารถเป็นได้ทุกอาชีพที่น้องสนใจ เพียงแต่จะเน้นไปทางสาขาเกี่ยวกับวิทยาศาสตร์ เพราะโครงการนี้ต้องการผลักดันศักยภาพทางวิทยาศาสตร์และเทคโนโลยี</span>
					</div>
					<!--div class="sub">
						<span class="msg q"></span>
						<span class="msg a"></span>
					</div-->
				</section>
				<div class="register">
					<div class="btn-warp"><a href="register" role="button" class="cyan"><?php echo $_COOKIE['set_lang']=="th"?"ลงทะเบียน":"Register"; ?></a></div>
					<center><br><a href="details">ข้อมูลกิจกรรมค่าย</a> | <a href="contact">ช่องทางการติดต่อสอบถาม</a></center>
				</div>
			</div>
		</main>
		<?php require("../../resource/hpe/material.php"); ?>
		<footer>
			<?php require("../../resource/hpe/footer.php"); ?>
		</footer>
	</body>
</html>