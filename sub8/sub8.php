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
        $('.m_menu > li').eq(4).addClass('on');
        $('.m_menu > li').eq(4).addClass('onn');
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
						<li><a href="sub8.php">&nbsp;>&nbsp;도서관 서비스</a></li>
						<li><a href="sub8.php">&nbsp;>&nbsp;열람실좌석현황</a></li>
					</ul>
				</div>
				<div class="menu_title">	
					<h2>
						<strong>열람실좌석현황</strong>
					</h2>
				</div>
			</div>
			<div id="contents_wrap">
				<div id="sub_left">
					<aside>
						<div class="side_menu">
							<a href="#" class="s_header">도서관 서비스</a>
							<ul class="s_menu_list">
								<li><a href="#">책바다서비스</a></li>
								<li><a href="#">책이음서비스</a></li>
								<li><a href="#">1일도서관학교</a></li>
								<li><a href="#">내생애첫도서관</a></li>
								<li><a href="#">장애인대출방문</a></li>
								<li><a href="#">이동도서관</a></li>
								<li><a href="#">동네서점 바로대출</a></li>
								<li><a href="#">미니문고 및 독서시설</a></li>
								<li><a href="#">디지털 자료실예약</a></li>
								<li><a href="sub8.php">열람실좌석현황</a></li>
							</ul>
						</div>
					</aside>
				</div>
				<div id="sub_right">
					<div class="notice_box">
						<div class="mlib_title">
							열람실 안내
						</div>
						<table class="seats_table">
							<thead>
								<tr>
									<th>도서관</th>
									<th>열람실</th>
									<th>좌석수</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>당동도서관</th>
									<td>4층 열람실</td>
									<td>206</td>
								</tr>
								<tr>	
									<th scope="row" rowspan="2">부곡도서관</th>
									<td>3층 노트북실</td>
									<td>34</td>
								</tr>
								<tr>
									<td>3층 일반열람실</td>
									<td>84</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="guide_box">
						<div class="mlib_guide">
							<ul>
								<li>도서관 열람실 좌석 현황을 홈페이지에서 실시간으로 확인하실 수 있습니다.</li>
							</ul>
						</div>
					</div>
					<div class="btn_box">
						<div class="seats_btn">
							<a href="#" class="first">당동도서관 좌석현황</a>
							<a href="#">부곡도서관 좌석현황</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include "../main/footer.php";?>
</body>
</html>
				