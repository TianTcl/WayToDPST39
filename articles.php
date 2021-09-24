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
			html body main div.container section.list { margin: 0px auto; width: 75%; }
			html body main div.container section.list div.post {
				margin-bottom: 12.5px;
				border-radius: 7.5px; border: 1px solid var(--clr-main-black-absolute);
				background-color: var(--clr-main-white-absolute);
				overflow: hidden;
			}
			div.post.classic div.img {
				width: 100%;
				border-bottom: 1px solid var(--clr-main-black-absolute);
				display: flex; justify-content: center;
			}
			div.post.classic div.img[onClick^="app.io.warpto('"] { cursor: pointer;}
			div.post.classic div.imgfill {
				width: 100%; height: 100%;
				object-fit: contain;
			}
			div.post.classic div.imgfill img { width: 100%; height: auto; }
			div.post.classic div.text p { margin: 5px 0px; padding: 0px 5px; }
			html body main div.container section.list div.post.imgsldr { --em: 7.5px; }
			div.post.imgsldr div.frame {
				height: var(--h);
				/* border-radius: calc(var(--em) * 1) calc(var(--em) * 1) 0px 0px; border: 1px solid var(--clr-pp-blue-900); */
				border-bottom: 1px solid var(--clr-main-black-absolute);
				display: block; overflow: hidden;
			}
			div.post.imgsldr div.frame div.b { position: relative; width: 100%; height: 100%; }
			div.post.imgsldr div.frame div.b a {
				position: absolute; top: 0px; left: 0%;
				width: 100%; height: 100%;
				display: block; transition: var(--time-tst-fast);
			}
			div.post.imgsldr div.frame div.b a[state="pre"] { left: -100%; }
			div.post.imgsldr div.frame div.b a[state="shw"] { position: relative; }
			div.post.imgsldr div.frame div.b a[state="pst"] { left: 100%; }
			div.post.imgsldr div.frame div.b a div.pic2grad { max-width: 100%; max-height: var(--h); }
			div.post.imgsldr div.frame div.b a div.pic2grad img {
				/*position: relative; top: 50%; left: 50%; transform: translate(-50%, -50%);*/
				width: 100%; height: var(--h);
				object-fit: contain;
			}
			div.post.imgsldr div.ctrl {
				height: 75px;
				/* border-radius: 0px 0px calc(var(--em) * 1) calc(var(--em) * 1); */
				background-color: var(--clr-pp-teal-500);
				display: flex; justify-content: space-between;
				overflow: hidden;
			}
			div.post.imgsldr div.ctrl a {
				width: calc(var(--em) * 10); height: 100%;
				filter: opacity(0.25);
				display: inline-block; transition: var(--time-tst-fast);
			}
			div.post.imgsldr div.ctrl a:first-child { float: left; }
			div.post.imgsldr div.ctrl a:last-child { float: right; }
			div.post.imgsldr div.ctrl a:hover { filter: opacity(0.75); }
			div.post.imgsldr div.ctrl a span {
				position: relative; top: 50%; left: 50%;
				width: calc(var(--em) * 5); height: calc(var(--em) * 1);
				background-color: var(--clr-main-white-absolute); border-radius: calc(var(--em) * 0.5);
				display: block;
			}
			div.post.imgsldr div.ctrl a:first-child span:first-child { transform: translate(-75%, calc(var(--em) * -2)) rotate(-45deg); }
			div.post.imgsldr div.ctrl a:first-child span:last-child { transform: translate(-75%, 0px) rotate(45deg); }
			div.post.imgsldr div.ctrl a:last-child span:first-child { transform: translate(-25%, calc(var(--em) * -2)) rotate(45deg); }
			div.post.imgsldr div.ctrl a:last-child span:last-child { transform: translate(-25%, 0px) rotate(-45deg); }
			div.post.imgsldr div.ctrl a:first-child { background-image: linear-gradient(90deg, rgba(0,0,0, 0.5), rgba(0,0,0, 0)); }
			div.post.imgsldr div.ctrl a:last-child { background-image: linear-gradient(90deg, rgba(0,0,0, 0), rgba(0,0,0, 0.5)); }
			div.post.imgsldr div.ctrl div {
				padding: 0px calc(var(--em) * 0.5);
				height: 100%;
				display: inline-flex; justify-content: center;
			}
			div.post.imgsldr div.ctrl div span {
				margin: calc(var(--em) * 0.25);
				position: relative; top: 50%; transform: translateY(-50%) scale(0.75);
				width: calc(var(--em) * 2); height: calc(var(--em) * 2);
				background-color: var(--clr-bs-light); border-radius: 50%;
				display: block; overflow: hidden; transition: var(--time-tst-xfast);
			}
			div.post.imgsldr div.ctrl div span[on="true"] {
				transform: translateY(-50%);
				box-shadow: 0px 0px calc(var(--em) * 0.25) calc(var(--em) * 0.25) rgba(150, 150, 250, 0.5);
				pointer-events: none;
			}
			div.post.imgsldr div.ctrl div span:before, div.post.imgsldr div.ctrl div span:after {
				position: relative; top: 50%; left: 50%; transform: translate(-50%, -50%) scale(0.75);
				width: 100%; height: 100%;
				background-color: var(--clr-bs-white); border-radius: 50%;
				display: block; content: "";
			}
			div.post.imgsldr div.ctrl div span:after {
				transform: translate(-50%, -150%) scale(0);
				background-color: var(--clr-bs-blue);
				transition: var(--time-tst-xfast);
			}
			div.post.imgsldr div.ctrl div span[on="true"]:after { transform: translate(-50%, -150%) scale(0.75); }
			@media only screen and (max-width: 768px) {
				html body main div.container section.list { width: 100%; }
				html body main div.container section.list div.post.imgsldr { --em: 5px; }
			}
			@media only screen and (min-width: 1440px) {
				html body main div.container section.list div.post.imgsldr { --em: 10px; }
			}
		</style>
		<script type="text/javascript">
			$(function(){
				var $window = $(window).on('resize', function(){
					$("div.post.imgsldr").css("--h", $("div.post.imgsldr").width().toString()+"px");
				}).trigger('resize');
			});
			$(document).ready(function() {
				bc.init.ialize(); bc.init.tch_drg(); bc.init.loop();
				setTimeout(function() { Grade(document.querySelectorAll("div.post.imgsldr div.frame a div.pic2grad, div.imgfill")); }, 1000);
			});
			var bc = {
				i: {
					current: 1, max: 0,
					tch_pos: {x:null, y:null}, tp_new: {x:null, y:null}
				}, page: {
					load: function(pno) {
						for (var i=1; i<=bc.i.max; i++) {
							$("div.post.imgsldr div.frame div.b a[slide=\""+i.toString()+"\"]").attr("state", (i<pno)?"pre":((i==pno)?"shw":"pst"));
							$("div.post.imgsldr div.ctrl div span[no=\""+i.toString()+"\"]").attr("on", (i==pno)?"true":"false");
						} bc.i.current = pno;
					}, next: function() {
						var newno = bc.i.current==bc.i.max? 1 : bc.i.current+1;
						bc.page.load(newno);
					}, prev: function() {
						var newno = bc.i.current==1? bc.i.max : bc.i.current-1;
						bc.page.load(newno);
					}, ckq_moves: function() {
						var d_x = bc.i.tp_new.x-bc.i.tch_pos.x, d_y = bc.i.tp_new.y-bc.i.tch_pos.y;
						if (d_x>=50 && Math.abs(d_y)<=50) bc.page.back(); // Not working...
						if (d_x<=-50 && Math.abs(d_y)<=50) bc.page.next();
					}
				}, init: {
					loop: function() { setInterval(bc.page.next, 12000); },
					tch_drg: function() {
						var img_ctn = $("div.post.imgsldr div.frame");
						img_ctn.bind("touchstart", function(e) {
							bc.i.tch_pos = {x: e.touches[0].pageX, y: e.touches[0].pageY};
							setTimeout(bc.page.ckq_moves, 375);
						});
						img_ctn.bind("touchmove", function(e) {
							e.preventDefault();
							bc.i.tp_new = {x: e.touches[0].pageX, y: e.touches[0].pageY};
						});
					}, ialize: function() {
						bc.i.max = document.querySelectorAll("div.post.imgsldr div.frame div.b a").length;
						for (var i = 1; i<=bc.i.max; i++) $("div.post.imgsldr div.ctrl div").append($('<span no="'+i.toString()+'" onClick="javascript:bc.page.load('+i.toString()+')"></span>'));
						bc.page.load(bc.i.current);
					}
				}
			}
		</script>
		<script type="text/javascript" src="/resource/js/lib/grade.min.js"></script>
	</head>
	<body>
		<?php require("resource/header.php"); ?>
		<main shrink="<?php echo($_COOKIE['sui_open-nt'])??"false"; ?>">
			<div class="container">
				<section class="list">
					<div class="post classic">
						<div class="img" onClick="app.io.warpto('go?url=https%3A%2F%2Finstagr.am%2Fp%2FCUJuspzldT6JVoC0bwvQbdvmKQMyi3jHbaNigM0%2F', true)">
							<div class="imgfill"><img src="resource/postimg-02.jpg" data-dark="false"></div>
						</div>
						<div class="text">
							<p>ทุกคนนนนมาเล่นบิงโกกันดีกว่างับ<br>• แชร์ลงสตอรี่ได้เลย<br>มาเล่นกันเยอะๆนะคับ ( つ•̀ω•́)つ</p>
						</div>
					</div>
					<div class="post imgsldr">
						<div class="frame"><div class="b">
							<a slide="2" href="/go?url=https%3A%2F%2Finstagr.am%2Fp%2FCUJuxp0lGJRh-AZQS_D2hW44msS0bIxxIbQGxw0%2F" target="_blank"><div class="pic2grad"><img src="resource/postimg-03.jpg" data-dark="false"></div></a>
							<a slide="1" href="/go?url=https%3A%2F%2Finstagr.am%2Fp%2FCUHGrXeFb8ZMcR3tWiK_gP2ud85Qa7KxgXy7_U0%2F" target="_blank"><div class="pic2grad"><img src="resource/postimg-01.jpg" data-dark="false"></div></a>
						</div></div>
						<div class="ctrl" data-dark="false">
							<a onClick="bc.page.prev()" href="javascript:void(0)"><span></span><span></span></a>
							<div></div>
							<a onClick="bc.page.next()" href="javascript:void(0)"><span></span><span></span></a>
						</div>
					</div>
				</section>
			</div>
		</main>
		<?php require("../../resource/hpe/material.php"); ?>
		<footer>
			<?php require("../../resource/hpe/footer.php"); ?>
		</footer>
	</body>
</html>