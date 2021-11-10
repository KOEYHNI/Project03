<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>군포시립도서관</title>
	<link rel="stylesheet" href="../main/css/sub_common_style.css"/>
	<link rel="stylesheet" href="./css/style.css"/>
	<script src="../main/js/jquery-1.9.0.min.js"></script>
	<script src="../main/js/guide.js"></script>
	<script src="../main/js/html5div.js"></script>
	<script src="../main/js/html5shiv.js"></script>
	<script src="../main/js/common.js"></script>
	<script src="../main/js/login_count.js"></script>
	<script>
    jQuery(document).ready(function(){
        $('.m_menu > li').eq(3).addClass('on');
        $('.m_menu > li').eq(3).addClass('onn');
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
						<li class="first"><a href="../main/index.html">HOME</a></li>
						<li><a href="sub1.html">&nbsp;>&nbsp;작은도서관</a></li>
					</ul>
				</div>
				<div class="menu_title">	
					<h2>
						<strong>작은도서관</strong>
					</h2>
				</div>
			</div>
			<div id="contents_wrap">
				<div id="sub_left">
					<aside>
							<div class="side_menu">
								<a href="#" class="s_header">작은도서관</a>
								<ul class="s_menu_list">
									<li><a href="#">설립안내</a></li>
									<li><a href="#">작은도서관 현황</a></li>
									<li><a href="#">소장자료검색</a></li>
									<li><a href="#">작은도서관 공지사항</a></li>
								</ul>
							</div>
					</aside>
				</div>
				<div id="sub_right">
					<div class="guide_box">
						<div class="mlib_title">작은도서관(문고)이란?</div>
						<div class="mlib_guide">
							<ul>
								<li>공중의 생활권역에서 지식정보 및 독서문화 서비스의 제공을 주된 목적으로 하는 소규모 도서관</li>
							</ul>
							<div class="guide_btn">
								<a href="#">작은도서관 설립안내</a>
							</div>
						</div>
					</div>
					<div class="search_box">
						<div class="mlib_title">작은도서관 소장자료 검색</div>
						<div class="m_search_box">
							<ul class="search_bar">
								<li><input type="text" name="search_tent" class="search_text guideText" value="검색어를 입력하세요."></li>
								<li><input type="button" name="search_ntn" class="btn_search" value="검색" ></li>
								<li class="detail_search"><a href="#">상세검색</a></li>
							</ul>
						</div>
					</div>
					<div class="notice_box">
						<div class="mlib_title_im">
							작은도서관 공지사항
								<a href="#">더보기</a>
						</div>
						<ul class="tab_text cf">
								<li><a href="#">[작은도서관버드나무에부는바람] 독서문화프로그램 안내</a><span>2021/09/09</span></li>
								<li><a href="#">[작은도서관버드나무에부는바람] 독서문화프로그램 안내</a><span>2021/09/07</span></li>
								<li><a href="#">[작은도서관버드나무에부는바람] 보드게임으로 코로나 이겨내기 수강생 모집 안내</a><span>2021/08/31</span></li>
								<li><a href="#">[우리마을작은도서관]임시휴관 안내</a><span>2021/08/19</span></li>
								<li><a href="#">[우리마을작은도서관]어린이 프로그램 참가자 모집 안내</a><span>2021/08/17</span></li>
							</ul>
							
					</div>
					<div class="map_box">
						<div class="mlib_title">행정별 작은도서관</div>
						<ul class="lib_map">
							<li>
								<div class="gp_area">군포1동(8)</div>
								<p>
									<a href="#">신산본자이 2차</a>
									<a href="#">당정문화</a>
									<a href="#">농심</a>
									<a href="#">주품북카페</a>
									<a href="#">큰나무</a>
									<a href="#">테바</a>
									<a href="#">사랑이 꽃피는</a>
									<a href="#">하늘정원</a>
								</p>
							</li>
							<li>
								<div class="gp_area">군포2동(16)</div>
								<p>
									<a href="#">군포2동채움</a>
									<a href="#">해오름문고</a>
									<a href="#">느티나무</a>
									<a href="#">토리</a>
									<a href="#">꿈드림</a>
									<a href="#">꿈쟁이</a>
									<a href="#">쁘레네 별찌</a>
									<a href="#">삼성마을5단지</a>
									<a href="#">꿈마을</a>
									<a href="#">새봄</a>
									<a href="#">책놀이터</a>
									<a href="#">끔을노래하는</a>
									<a href="#">숲속</a>
									<a href="#">글고운</a>
									<a href="#">꿈미</a>
									<a href="#">다온숲</a>
								</p>
							</li>
							<li>
								<div class="gp_area">금정동(3)</div>
								<p>
									<a href="#">금정</a>
									<a href="#">버드나무에부는바람</a>
									<a href="#">샤론</a>
								</p>
							</li>
							<li>
								<div class="gp_area">산본1동(3)</div>
								<p>
									<a href="#">우리마을</a>
									<a href="#">노루목</a>
									<a href="#">그리심</a>
								</p>
							</li>
							<li>
								<div class="gp_area">재궁동(2)</div>
								<p>
									<a href="#">재궁꿈나무</a>
									<a href="#">사랑이있는</a>
								</p>
							</li>
							<li>
								<div class="gp_area">오금동(1)</div>
								<p>
									<a href="#">율곡마을</a>
								</p>
							</li>
							<li>
								<div class="gp_area">궁내동(1)</div>
								<p>
									<a href="#">궁내동</a>
								</p>
							</li>
							<li>
								<div class="gp_area">광정동(1)</div>
								<p>
									<a href="#">산본녹색</a>
								</p>
							</li>
							<li>
								<div class="gp_area">대야동(1)</div>
								<p>
									<a href="#">공군 제8249부대</a>
								</p>
							</li>
							<li>
								<div class="gp_area">송부동(4)</div>
								<p>
									<a href="#">큰꿈</a>
									<a href="#">사랑아이엔지</a>
									<a href="#">송안</a>
									<a href="#">송정</a>
								</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<?php include "../main/footer.php";?>
</body>
</html>
