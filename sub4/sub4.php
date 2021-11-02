<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>군포시립도서관</title>
	<link rel="stylesheet" href="../include/css/sub_common_style.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<script src="js/cal.js"></script>
	<script src="../include/js/jquery-1.9.0.min.js"></script>
	<script src="../include/js/hl.js"></script>
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
						<li><a href="sub4.php">&nbsp;>&nbsp;이용안내</a></li>
						<li><a href="sub4.php">&nbsp;>&nbsp;도서관 휴관일</a></li>
					</ul>
				</div>
				<div class="menu_title">
					<h2>
						<strong>도서관 휴관일</strong>
					</h2>
				</div>
			</div>
			<div id="contents_wrap">
				<div id="sub_left">
					<aside>
						<div class="side_menu">
							<a href="#" class="s_header">이용안내</a>
							<ul class="s_menu_list">
								<li><a href="#">공지사항</a></li>
								<li><a href="../include/sub2/sub2.php">자주하는질문</a></li>
								<li><a href="#">공개자료실</a></li>
								<li><a href="#">이용시간</a></li>
								<li><a href="#">대출회원가입안내</a></li>
								<li><a href="#">대출안내</a></li>
								<li><a href="#">희망도서신청/조회</a></li>
								<li><a href="#">상호대차안내</a></li>
								<li><a href="#">타관도서 반납서비스</a></li>
								<li><a href="#">기타안내</a></li>
								<li><a href="#">도서관서비스헌장</a></li>
								<li><a href="#">신작/추천도서</a></li>
								<li><a href="#">뷰어다운로드</a></li>
								<li><a href="#">모바일앱 이용안내</a></li>
								<li><a href="sub4.php">도서관 휴관일</a></li>
							</ul>
						</div>
					</aside>
				</div>
				<div id="sub_right">
					<div class="calendar">
						<div class="calendar_header fl">
							<h2>휴관일</h2>
								<button type="button" value="prev" class="day_btn_pre" onClick="prev();" style="cursor:pointer;"class="arrow">이전 달 보기</button>
								<strong class="fl">
											<span id="calYear">YYYY</span>년
											<span id="calMonth">MM</span>월</strong>
								<button type="button" value="next" class="day_btn_next " onClick="next();" style="cursor:pointer;"class="arrow">다음 달 보기</button>	
								<div class="library_search">
									<p>
										<select name="day_option" class="day_option f l" title="도서관목록">		
										<option selected="selected">중앙도서관</option>	
										<option>당동도서관</option>
										<option>대야도서관</option>
										<option>부곡도서관</option>
										<option>어린이도서관</option>
										<option>이동도서관</option>
										<option>당정문화도서관</option>
										<option>누리천문대</option>
										<option>군포2동채움작은도서관</option>
										<option>금정작은도서관</option>
										<option>재궁꿈나무도서관</option>
										<option>궁내동작은도서관</option>
										<option>노루목작은도서관</option>
										<option>작은도서관 버드나무에 부는 바람</option>
										<option>꿈쟁이 도서관</option>
										<option>우리마을 도서관</option>
										<option>사랑아이엔지</option>
										<option>하늘정원작은도서관</option>
										<option>꿈드림작은도서관</option>
										</select>
										<button type="submit"><img src="../include/images/btn_board_search.png" alt="검색"></button>
									</p>
								</div>
						</div>
						<table class="scriptCalendar">
								<thead>
									<tr class="day_title">
										<td class="red"><font color ="#eb3b3e">SUN</td><td>MON</td><td>TUE</td><td>WED</td><td>THU</td><td>FRI</td><td class="blue"><font color ="#2150c7">SAT</td>
									</tr>
								</thead>
								<tbody></tbody>
							</table>
					</div>
				</div>
			</div>
		</section>
		<?php include "../include/footer.php";?>
</body>
</html>
		