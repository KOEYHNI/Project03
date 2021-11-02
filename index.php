<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>군포시립도서관</title>
	<link rel="stylesheet" href="./main/css/common_style.css"/>
	<link rel="stylesheet" href="./main/css/style2.css"/>
	<script src="./main/js/popup.js"></script>
	<script src="./main/js/count.js"></script>
	<script src="./main/js/jquery-1.9.0.min.js"></script>
	<script src="./main/js/icon.js"></script>
	<script src="./main/js/jquery.easing.1.3.min.js"></script>
	<script src="./main/js/jquery-ui-1.10.4.custom.min.js"></script> 
	<script src="./main/js/jquery.bxslider.min.js"></script> 
	<script src="./main/js/jquery.cookie.js"></script> 
	<script src="./main/js/guide.js"></script>
	<script src="./main/js/weather2.js"></script>
	<script src="./main/js/common2.js"></script>
	<script src="./main/js/index.js"></script>
	<script src="./main/js/html5div.js"></script>
	<script src="./main/js/html5shiv.js"></script>
	<meta name="Author" content="김인혁"/>
	<meta name="Keywords" content="김인혁,KimInHyeok, 포트폴리오, 김인혁 포트폴리오, portfolio, InHyeok's portfolio, 프로젝트, Project,  , 김 인 혁, 인혁 김, 인혁, rla, dls, gur, dlsgur"/>
	<meta name="Description" content="김인혁의 포트폴리오 페이지 입니다"/>
	<link rel="icon" type="image/png" sizes="32x32" href="./main/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="./main/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./main/favicon/favicon-16x16.png">
	<script>

			var tid;
			var cnt = parseInt(5);//초기값(초단위)
			
			function counter_init() {
				tid = setInterval(function(){
					counter_run();
				}, 1000);
			};

			function counter_reset(){
				clearInterval(tid);
				cnt = parseInt(60);
				counter_init();
			};

			function counter_run(){
				document.getElementById("counter").innerText = time_format(cnt);
				cnt--;
				if(cnt < 0) {
					clearInterval(tid);
					//self.location = "login/login.php";
				}
			};
			function time_format(s) {
				var nHour=0;
				var nMin=0;
				var nSec=0;
				if(s>0) {
					nMin = parseInt(s/60);
					nSec = s%60;

					if(nMin>60) {
						nHour = parseInt(nMin/60);
						nMin = nMin%60;
					}
				} 
				if(nSec<10) nSec = "0"+nSec;
				if(nMin<10) nMin = "0"+nMin;

				return ""+nHour+":"+nMin+":"+nSec;
			};
			counter_init();
		
	</script>
</head>
<body>
	<div id="wrap">
		<header>
			<?php include "./header.php";?>
		</header>	
		<section>
			<?php include "./main.php";?>
		</section>
			<?php include "./footer.php";?>
</body>
</html>