<?php
	require("resource/init_ps.php");
	$header_title = "Schedule & Intel";
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php require("resource/heading.php"); require("../../resource/hpe/init_ss.php"); ?>
		<style type="text/css">
			html body main div.container div.schd {
				white-space: nowrap;
				display: flex; flex-direction: column;
			}
			div.schd div.set {
				min-width: 625px;
				display: flex;
				transition: var(--time-tst-medium);
			}
			div.schd div.set:hover { background-color: var(--fade-white-5); }
			div.schd div.set div.tmln {
				--boxH: 150px;
				width: 75px; height: var(--boxH);
				text-align: center;
			}
			div.schd div.set div.tmln span {
				margin: auto;
				background-color: var(--clr-pp-teal-a700);
				display: block;
			}
			div.schd div.set:first-child div.tmln span.line { border-radius: 5px 5px 0px 0px; }
			div.schd div.set:last-child div.tmln span.line { border-radius: 0px 0px 5px 5px; }
			div.schd div.set div.tmln span.line { width: 10px; height: 100%; }
			div.schd div.set div.tmln span.dot {
				transform: translateY(calc(-50% - var(--boxH) / 2));
				width: 30px; min-height: 15px; height: calc(100% * 2 / 3);
				border-radius: 15px;
			}
			div.schd div.set div.date, div.schd div.set div.intl { display: flex; flex-direction: column; justify-content: space-around; }
			div.schd div.set div.date { width: 175px; } div.schd div.set div.intl { min-width: 375px; }
			/* div.schd div.set div.intl span.info { transition: var(--time-tst-xfast); }
			div.schd div.set div.intl span.info:hover { background-color: var(--fade-black-8); } */
			div.timetbl div.table {
				border-radius: 5px;
				background-color: var(--fade-white-4);
			}
			div.timetbl table tbody td:nth-child(1) { text-align: center; }
			div.timetbl table tbody td[colspan] { text-align: center; font-style: italic; }
			@media only screen and (max-width: 768px) {
				div.schd div.set { min-width: 525px; }
				div.schd div.set div.date { width: 125px; } div.schd div.set div.intl { min-width: 325px; }
			}
		</style>
		<script type="text/javascript">
			
		</script>
	</head>
	<body>
		<?php require("resource/header.php"); ?>
		<main shrink="<?php echo($_COOKIE['sui_open-nt'])??"false"; ?>">
			<div class="container">
				<h2>กำหนดการ</h2>
				<div class="schd slider">
					<div class="set">
						<div class="tmln"><span class="line"></span><span class="dot"></span></div>
						<div class="date">
							<span class="time">1 October 2021</span>
							<span class="time">15 October 2021</span>
						</div>
						<div class="intl">
							<span class="info">เปิดรับลงทะเบียนให้น้องๆได้เข้าร่วมค่าย</span>
							<span class="info">ปิดรับลงทะเบียน</span>
						</div>
					</div>
					<div class="set">
						<div class="tmln"><span class="line"></span><span class="dot"></span></div>
						<div class="date">
							<span class="time">22 October 2021</span>
							<span class="time">24 October 2021</span>
						</div>
						<div class="intl">
							<span class="info">ค่ายเริ่มต้นและมีระยะเวลา 3 วัน</span>
							<span class="info">สิ้นสุดกิจกรรมค่าย</span>
						</div>
					</div>
				</div>
				<h2>ตารางเวลา</h2>
				<div class="timetbl">
					<div class="day">
						<p>วันศุกร์ที่ 22 เดือน ตุลาคม ปี พ.ศ.2564</p>
						<div class="table"><table><thead><th>ช่วงเวลา</th><th>กิจกรรม</th><th>ผู้ดำเนินการ</th><th>หมายเหตุ</th></thead><tbody>
							<tr>
								<td>8:30 - 9:00</td>
								<td>เตรียมตัวเข้ากิจกรรม</td>
								<td>ผู้ร่วมกิจกรรม | ICT</td>
								<td></td>
							</tr>
							<tr>
								<td>9:00 - 9:30</td>
								<td>เปิดค่าย & แจ้งรายการกิจกรรมประจำวัน</td>
								<td>พิธีกร | Acti</td>
								<td></td>
							</tr>
							<tr>
								<td>9:30 - 10:50</td>
								<td>บรรยายโครงการพสวท.</td>
								<td><a href="/supattra.c" target="_blank">ครูสุพัตตรา  เฉลิมเผ่า</a></td>
								<td></td>
							</tr>
							<tr>
								<td>10:50 - 11:00</td>
								<td colspan="2">พัก 10 นาที</td>
								<td></td>
							</tr>
							<tr>
								<td>11:00 - 12:00</td>
								<td>กิจกรรมเด็กน้อยแฮปปี้ พี่พาเพลิน</td>
								<td>พิธีกร | Acti</td>
								<td></td>
							</tr>
							<tr>
								<td>12:00 - 13:00</td>
								<td colspan="2">พัก รับประทานอาหารกลางวัน</td>
								<td></td>
							</tr>
							<tr>
								<td>13:00 - 14:20</td>
								<td>สัมภาษณ์รุ่นพี่และเพื่อนศูนย์อื่นๆ</td>
								<td>ผู้ให้สัมภาษณ์ | Acti</td>
								<td></td>
							</tr>
							<tr>
								<td>14:20 - 14:30</td>
								<td colspan="2">พัก 10 นาที</td>
								<td></td>
							</tr>
							<tr>
								<td>14:30 - 15:45</td>
								<td>ถามตอบ กับ 5217⨯1405</td>
								<td>DPST38⨯BD52</td>
								<td></td>
							</tr>
						</tbody></table></div>
					</div>
					<div class="day">
						<p>วันเสาร์ที่ 23 เดือน ตุลาคม ปี พ.ศ.2564</p>
						<div class="table"><table><thead><th>ช่วงเวลา</th><th>กิจกรรม</th><th>ผู้ดำเนินการ</th><th>หมายเหตุ</th></thead><tbody>
							<tr>
								<td>9:30 - 10:00</td>
								<td>เตรียมตัวเข้ากิจกรรม</td>
								<td>ผู้ร่วมกิจกรรม | ICT</td>
								<td></td>
							</tr>
							<tr>
								<td>10:00 - 10:10</td>
								<td>แจ้งรายการกิจกรรมประจำวัน</td>
								<td>พิธีกร | Acti</td>
								<td></td>
							</tr>
							<tr>
								<td>11:00 - 12:00</td>
								<td>แนะนำหนังสือ & วิธีการเตรียมตัว</td>
								<td>พิธีกร | Acad</td>
								<td></td>
							</tr>
							<tr>
								<td>12:00 - 13:30</td>
								<td colspan="2">พัก รับประทานอาหารกลางวัน</td>
								<td></td>
							</tr>
							<tr>
								<td>13:30 - 15:30</td>
								<td>ติวคณิตศาสตร์</td>
								<td>กลุ่มคณะ | Acad</td>
								<td></td>
							</tr>
							<tr>
								<td>15:30 - 15:40</td>
								<td colspan="2">พัก 10 นาที</td>
								<td></td>
							</tr>
							<tr>
								<td>15:40 - 17:40</td>
								<td>ติววิทยาศาสตร์</td>
								<td>กลุ่มคณะ | Acad</td>
								<td></td>
							</tr>
						</tbody></table></div>
					</div>
					<div class="day">
						<p>วันอาทิตย์ที่ 24 เดือน ตุลาคม ปี พ.ศ.2564</p>
						<div class="table"><table><thead><th>ช่วงเวลา</th><th>กิจกรรม</th><th>ผู้ดำเนินการ</th><th>หมายเหตุ</th></thead><tbody>
							<tr>
								<td>9:30 - 10:00</td>
								<td>เตรียมตัวเข้ากิจกรรม</td>
								<td>ผู้ร่วมกิจกรรม | ICT</td>
								<td></td>
							</tr>
							<tr>
								<td>10:00 - 10:10</td>
								<td>แจ้งรายการกิจกรรมประจำวัน</td>
								<td>พิธีกร | Acti</td>
								<td></td>
							</tr>
							<tr>
								<td>10:10 - 12:00</td>
								<td>กิจกรรมละลายพฤติกรรม</td>
								<td>พิธีกร | Acti</td>
								<td></td>
							</tr>
							<tr>
								<td>12:00 - 13:30</td>
								<td colspan="2">พัก รับประทานอาหารกลางวัน</td>
								<td></td>
							</tr>
							<tr>
								<td>13:30 - 14:30</td>
								<td>ติวสำหรับการสอบสัมภาษณ์</td>
								<td>กลุ่มคณะ | Acad</td>
								<td></td>
							</tr>
							<tr>
								<td>14:30 - 14:40</td>
								<td colspan="2">พัก 10 นาที</td>
								<td></td>
							</tr>
							<tr>
								<td>14:40 - 16:00</td>
								<td>สอบสัมภาษณ์ทิพย์</td>
								<td>กลุ่มคณะ | Acad</td>
								<td></td>
							</tr>
							<tr>
								<td>16:00 - 16:30</td>
								<td>ให้กำลังใจน้อง & ปิดค่าย</td>
								<td>พิธีกร | Acti</td>
								<td></td>
							</tr>
						</tbody></table></div>
					</div>
				</div>
			</div>
		</main>
		<?php require("../../resource/hpe/material.php"); ?>
		<footer>
			<?php require("../../resource/hpe/footer.php"); ?>
		</footer>
	</body>
</html>