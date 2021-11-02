<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>군포시립도서관</title>
	<link rel="stylesheet" href="../include/css/sub_common_style.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<script src="../include/js/jquery-1.9.0.min.js"></script>
	<script src="js/login.js"></script>
	<script src="../include/js/html5div.js"></script>
	<script src="../include/js/html5shiv.js"></script>
	<script src="../include/js/common.js"></script>
	<meta name="Author" content="김인혁"/>
	<meta name="Keywords" content="김인혁,KimInHyeok, 포트폴리오, 김인혁 포트폴리오, portfolio, InHyeok's portfolio, 프로젝트, Project,  , 김 인 혁, 인혁 김, 인혁, rla, dls, gur, dlsgur"/>
	<meta name="Description" content="김인혁의 포트폴리오 페이지 입니다"/>
	<link rel="icon" type="image/png" sizes="32x32" href="../include/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../include/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../include/favicon/favicon-16x16.png">
</head>
<body>
	<div id="wrap">
		<header>
			<?php include "../include/header.php";?>
		</header>
				<section>
			<div id="menu_header">
				<div class="location">
					<ul>
						<li class="first"><a href="../include/index.php">HOME</a></li>
						<li><a href="sub9.php">&nbsp;>&nbsp;나의 서재</a></li>
						<li><a href="sub9.php">&nbsp;>&nbsp;로그인</a></li>
					</ul>
				</div>
				<div class="menu_title">	
					<h2>
						<strong>로그인</strong>
					</h2>
				</div>
			</div>
			<div id="contents_wrap">
				<div id="sub_left">
					<aside>
						<div class="side_menu">
							<a href="#" class="s_header">나의 서재</a>
							<ul class="s_menu_list">
								<li><a href="sub9.php">로그인</a></li>
								<li><a href="#">개인공지사항</a></li>
								<li><a href="#">대출/연장/예약조회</a></li>
								<li><a href="#">상호대차신청조회</a></li>
								<li><a href="#">희망도서신청/조회</a></li>
								<li><a href="#">책이음대출현황/이력</a></li>
								<li><a href="#">자원봉사신청내역</a></li>
								<li><a href="#">인문학강좌신청내역</a></li>
								<li><a href="#">개인정보수정/탈퇴</a></li>
								<li><a href="#">나의폴더</a></li>
								<li><a href="#">서평관리</a></li>
							</ul>
						</div>
					</aside>
				</div>
				<div id="sub_right">
					
					<div class="mlib_title">로그인</div>
					<div class="login_box">
						<div class="login_img">
							<img src="../include/images/login_icon01.png" alt="로그인을 해주세요"/>
						</div>
						<div class="login_top">
							<form name="login_form" method="post" action="login.php">
								<ul class="input">
									<li class="login loginicon">
										<img src="../include/images/user.png" alt="ID"/>
										<input type="text" name="id" class="guideText" value="아이디" >
									</li>
									<li class="password loginicon"><img src="../include/images/lock.png" alt="PW"/><input type="password" id="pass" name="pass" class="guideText" value="비밀번호"/></li>
								</ul>
								<div class="check_box">
									<input type="radio" name="radio" id="saveId" value="ID저장" />
									<label for="saveId">개인회원 - 문화행사 신청, 디지털자료실·열람실 좌석 예약, 동네서점 바로대출 신청개인 회원일 경우, 도서 대출정보 등 확인<br></label>
									<input type="radio" name="radio" id="secure" value="보안접속" />
									<label for="secure"><span>가족회원 - 가족회원이신 경우의 도서대출정보 , 도서 예약 등 확인</span><br><strong>F ********* 아이디는 로그인 되지 않습니다.</strong></label>
								</div>
							</form>
							<div class="button">
								<button type="button">LOGIN</button>
							</div>
						</div>
					</div>
					<div class="guide_box">
						<div class="mlib_guide">
							<ul>
								<li>도서관 열람실 좌석 현황을 홈페이지에서 실시간으로 확인하실 수 있습니다.</li>
							</ul>	
							<div class="white_box">
								<input type="checkbox" id="installProgram">
								<label for="installProgram">키보드 보안 프로그램 설치 선택</label>
								<button class="btn_block" type="button">설치</button>
							</div>
						</div>
					</div>
					<div class="guide_box last">
						<div class="mlib_guide">
							<ul>
								<li>'비밀번호 재설정' 및 '아이디 찾기' 시행시 발송되는 '인증번호' 안내 문자는 발송됩니다.</li>
								<li>'인증번호' 안내 문자 발송시 1~2분 정도의 시간이 걸리오니 양해해주시기 바랍니다.</li>
							</ul>	
							<div class="white_box">
								<button class="btn_block" type="button">비밀번호 재설정</button>
								<button class="btn_block" type="button">아이디 찾기</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include "../include/footer.php";?>
</body>
</html>
		
