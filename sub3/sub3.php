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
	<script src="../main/js/login_count.js"></script>
	<script>
    jQuery(document).ready(function(){
        $('.m_menu > li').eq(8).addClass('on');
        $('.m_menu > li').eq(8).addClass('onn');
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
						<li><a href="sub3.php">&nbsp;>&nbsp;도서관소개</a></li>
						<li><a href="sub3.php">&nbsp;>&nbsp;인사말</a></li>
					</ul>
				</div>
				<div class="menu_title">
					<h2>
						<strong>인사말</strong>
					</h2>
				</div>
			</div>
			<div id="contents_wrap">
				<div id="sub_left">
					<aside>
						<div class="side_menu">
							<a href="#" class="s_header">도서관소개</a>
							<ul class="s_menu_list">
								<li><a href="sub3.php">인사말</a></li>
								<li><a href="#">연혁</a></li>
								<li><a href="#">조직도</a></li>
								<li><a href="#">자료현황</a></li>
								<li><a href="#">시설현황</a></li>
								<li><a href="#">도서관소식지</a></li>
								<li><a href="#">찾아오시는길</a></li>
							</ul>
						</div>
					</aside>
				</div>
				<div id="sub_right">
					<div class="introduce">
						<div class="main_intro">
							<img src="../main/images/intro_title.gif" alt="꿈이 열리는 창 군포시도서관">
							<p><strong>군포시 도서관을 찾아주셔서 감사합니다.</strong><br/>
							안녕하십니까?
							우리도서관의 홈페이지에 오신 것을 진심으로 환영합니다.<br/>
							군포시 도서관에서는 지역 주민 여러분에게 문화욕구 충족과 건전한 여가생활 장소를 제공하고<br/>
							지역정보화를 선도하는 앞서가는 도서관이 되고자 지속적인 노력을 기울이고 있습니다.<br/> </p>
						</div>
						<div class="sb_intro"><a href="#">군포시 산본도서관</a></div>
						<div class="gp_intro"></div>
						<div class="dy_intro"><a href="#">군포시 대야도서관</a></div>
						<div class="dd_intro"><a href="#">군포시 당동도서관</a></div>
						<div class="cd_intro"><a href="#">군포시 어린이도서관</a></div>
						<div class="bg_intro"><a href="#">군포시 부곡도서관</a></div>
					</div>
				</div>
			</div>
		</section>
		<?php include "../main/footer.php";?>
</body>
</html>