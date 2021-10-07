<header>
    <section class="slider hscroll sscroll"><div class="ocs">
		<!--div class="head-item menu">
			<a onClick="app.ui.toggle.navtab()" href="javascript:void(0)" opened="<?php echo ($_COOKIE['sui_open-nt']??"false"); ?>"><div>
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</div></a>
		</div-->
			<div class="head-item logo contain-img text">
				<a href="/e/WayToDPST39/home"><img src="/resource/images/WayToDPST39.jpg" data-dark="false"><span>Home</span></a>
			</div><div class="head-item text">
				<a href="/e/WayToDPST39/details"><span>Schedule</span></a>
				<a href="/e/WayToDPST39/register"><span>Register</span></a>
				<a href="/e/WayToDPST39/contact"><span>Contact</span></a>
				<a href="/e/WayToDPST39/articles"><span>ร่วมสนุก</span></a>
				<?php
					if ($has_perm) echo '<a href="/e/WayToDPST39/organize/"><span>จัดการกิจกรรม</span></a>'.
						'<a onClick="sys.auth.out(\'e/WayToDPST39/landing?from=organize\')" href="javascript:void(0)"><span>ออกจากระบบ</span></a>';
					else if (!isset($_SESSION['auth'])) echo '<a onClick="sys.auth.orize(\'e/WayToDPST39/organize/\')" href="javascript:void(0)"><span>เข้าสู่ระบบ</span></a>';
				?>
			</div>
	</div></section>
    <section class="slider hscroll sscroll"><div class="ocs">
		<div class="head-item lang"><select name="hl">
			<option>th</option>
			<option>en</option>
		</select></div>
		<div class="head-item clrt contain-img">
			<a onClick="app.ui.change.theme('dark')" href="javascript:void(0)"><i class="material-icons">brightness_6</i></a>
		</div>
	</div></section>
</header>