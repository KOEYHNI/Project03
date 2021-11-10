<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>군포시립도서관</title>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/common_style.css"/>
	<script src="js/popup.js"></script>
	<script src="js/count.js"></script>
	<script src="js/jquery-1.9.0.min.js"></script>
	<script src="js/icon.js"></script>
	<script src="js/jquery.easing.1.3.min.js"></script>
	<script src="js/jquery-ui-1.10.4.custom.min.js"></script> 
	<script src="js/jquery.bxslider.min.js"></script> 
	<script src="js/jquery.cookie.js"></script> 
	<script src="js/guide.js"></script>
	<script src="js/weather.js"></script>
	<script src="js/common.js"></script>
	<script src="js/index.js"></script>
	<script src="js/html5div.js"></script>
	<script src="js/html5shiv.js"></script>
	<script src="../login/js/login3.js"></script>
	<meta name="Author" content="김인혁"/>
	<meta name="Keywords" content="김인혁,KimInHyeok, 포트폴리오, 김인혁 포트폴리오, portfolio, InHyeok's portfolio, 프로젝트, Project,  , 김 인 혁, 인혁 김, 인혁, rla, dls, gur, dlsgur"/>
	<meta name="Description" content="김인혁의 포트폴리오 페이지 입니다"/>
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<script src="../main/js/login_count.js"></script>
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
	</div><!-- id="wrap" -->
	<div class="popup">
		<p class="popup_title">산본도서관 리모델링 공사에 따른<br/><span>도서반납기&middot;주차장 이용 불가안내</span></p>
		<ul class="popup_list">
			<li class="stop_day"><span>이용불가 기간</span>
				<ul>
					<li class="text_list"><strong>주차장</strong> :  2021년 09월 24일 &#40;금&#41; 07&#58;00 &#126; 재개관까지</li>
					<li class="text_list"><strong>반납기</strong> :  2021년 09월 27일 &#40;월&#41; 07&#58;00 &#126; 재개관까지</li>
					<!-- <li class="popup_sub">※ 2021년 09월 27일 &#40;월&#41; 부터 산본도서관 내 대형차량 출입으로 <br/> 위험하오니 출입을 삼가 주시기 바랍니다.</li> -->
				</ul>
			</li>
		</ul>
			<div id="count_wrap">
				<h3 id="countment">재개관까지</h3>
				<div class="counter">
				<script>ddaycount()</script>
					<ul class="cf">
						<li id="countD" class="firstli fl">
							<img src="../main/images/num0.png" width="20" id="day100" class="fl" />
							<img src="../main/images/num0.png" width="20" id="day10" class="fl" />
							<img src="../main/images/num0.png" width="20" id="day1" class="fl" />
							<p>일</p>
						</li>
						<li id="counterH" class="fl">
							<img src="../main/images/num0.png" width="20" id="hour10" class="fl" alt="시간10의자리" />
							<img src="../main/images/num0.png" width="20" id="hour1" class="fl" alt="시간1의자리" />
							<p>시</p>
						</li>
						<li id="counterM" class="fl">
							<img src="../main/images/num0.png" width="20" id="min10" class="fl" alt="분10의자리" />
							<img src="../main/images/num0.png" width="20" id="min1" class="fl" alt="분1의자리" />
							<p>분</p>
						</li>
						<li id="counterS" class="fl">
							<img src="../main/images/num0.png" width="20" id="sec10" class="fl" alt="초10의자리" />
							<img src="../main/images/num0.png" width="20" id="sec1" class="fl" alt="초1의자리" />
							<p>초</p>
						</li>
					</ul>
					<br/> <br/>
				</div>
			</div>
		<div class="pop_btn">
			<div class="close_btndy">하루동안 열지 않음</div>
			<div class="close_btn"></div>
		</div>
	</div>
	<span class="quick_toggle qm"></span>
	<div class="quickmenu">
		<a href class="quickhead">QUICK MENU</a>
		<ul class="quick_list">
			<li class="quick"><a href="../sub9/sub9.php">로그인</a></li>
			<li class="quick"><a href="../sub6/sub6.php">추천도서</a></li>
			<li class="quick"><a href="../sub7/sub7.php">오디오북</a></li>
			<li class="quick"><a href="../sub1/sub1.php">작은도서관</a></li>
			<li class="quick"><a href="../sub8/sub8.php">열람실좌석현황</a></li>
			<li class="quick"><a href="../sub4/sub4.php">도서관 휴관일</a></li>
			<li class="quick"><a href="../sub5/sub5.php">한줄감상</a></li>
			<li class="quick"><a href="../sub2/sub2.php">자주하는질문</a></li>
			<li class="quick"><a href="../sub3/sub3.php">인사말</a></li>
			<li class="top"><a href="#wrap">TOP</a></li>
		</ul>
	</div>			
</body>
</html>