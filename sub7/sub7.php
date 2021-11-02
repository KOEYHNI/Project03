<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>군포시립도서관</title>
	<link rel="stylesheet" href="../main/css/sub_common_style.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<script src="../main/js/jquery-1.9.0.min.js"></script>
	<script src="../main/js/html5div.js"></script>
	<script src="../main/js/html5shiv.js"></script>
	<script src="../main/js/common.js"></script>
	<script>
    jQuery(document).ready(function(){
        $('.m_menu > li').eq(2).addClass('on');
        $('.m_menu > li').eq(2).addClass('onn');
    });
    </script>	
	<meta name="Author" content="김인혁"/>
	<meta name="Keywords" content="김인혁,KimInHyeok, 포트폴리오, 김인혁 포트폴리오, portfolio, InHyeok's portfolio, 프로젝트, Project,  , 김 인 혁, 인혁 김, 인혁, rla, dls, gur, dlsgur"/>
	<meta name="Description" content="김인혁의 포트폴리오 페이지 입니다"/>
	<link rel="icon" type="image/png" sizes="32x32" href="../main/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../main/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../main/favicon/favicon-16x16.png">
</head>
<body>
	<div id="wrap">
		<header>
			<?php include "../main/header.php";?>
		</header>
		<section>
			<div id="menu_header">
				<div class="location">
					<ul>
						<li class="first"><a href="../main/index.php">HOME</a></li>
						<li><a href="sub7.php">&nbsp;>&nbsp;전자도서관</a></li>
						<li><a href="sub7.php">&nbsp;>&nbsp;오디오북</a></li>
					</ul>
				</div>
				<div class="menu_title">	
					<h2>
						<strong>오디오북</strong>
					</h2>
				</div>
			</div>
			<div id="contents_wrap">
				<div id="sub_left">
					<aside>
						<div class="side_menu">
							<a href="#" class="s_header">전자도서관</a>
							<ul class="s_menu_list">
								<li><a href="#">전자책</a></li>
								<li><a href="#">사이버학습</a></li>
								<li><a href="sub7.php">오디오북</a></li>
								<li><a href="#">전자잡지</a></li>
								<li><a href="#">전자인문관</a></li>
								<li><a href="#">KISS</a></li>
							</ul>
						</div>
					</aside>
				</div>
				<div id="sub_right">
					<div class="guide_box">
						<div class="mlib_guide">
							<ul>
								<li>오디오북은 스토리를 가진 다양한 장르의 도서를 그대로 읽어주거나(Telling), 극화하여(Drama) 녹음/편집의 과정을 통해 Audio-File 형태로 제작된 도서를 말합니다.</li>
								<li>책을 읽을 시간이 부족한 바쁜 현대인 및 학생, 시각장애인과 거동이 불편한 노인들까지 도서관을 방문할 필요 없이 편리하게 다양한 정보를 쉽고 편하게 접할 수 있습니다.</li>
							</ul>
						</div>
					</div>
					
					<div class="notice_box">
						<div class="mlib_title">
							운영안내
						</div>
						<ul class="tab_text cf">
							<li><a href="#"><strong>이용대상</strong> : 군포시 도서대출회원 또는 도서관홈페이지 회원</a></li>
							<li><a href="#"><strong>이용대상</strong> :  도서관 홈페이지 회원가입 후 로그인하여 오디오북 서비스 이용</a></li>
						</ul>
					</div>
					<div class="voice_book">
						<a href="#">오디오북 바로가기</a>
					</div>
				</div>
			</div>
		</section>
		<?php include "../main/footer.php";?>
</body>
</html>
				