<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>군포시립도서관</title>
	<link rel="stylesheet" href="../include/css/sub_common_style.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<script src="../include/js/jquery-1.9.0.min.js"></script>
	<script src="js/sub2.js"></script>
	<script src="../include/js/guide.js"></script>
	<script src="../include/js/html5div.js"></script>
	<script src="../include/js/html5shiv.js"></script>
	<script src="../include/js/common.js"></script>
	<meta name="Author" content="김인혁"/>
	<meta name="Keywords" content="김인혁,KimInHyeok, 포트폴리오, 김인혁 포트폴리오, portfolio, InHyeok's portfolio, 프로젝트, Project,  , 김 인 혁, 인혁 김, 인혁, rla, dls, gur, dlsgur"/>
	<meta name="Description" content="김인혁의 포트폴리오 페이지 입니다"/>
	<link rel="icon" type="image/png" sizes="32x32" href="../include/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../include/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../include/favicon/favicon-16x16.png">
<!--[if lt ie 9]> 
		<link rel="stylesheet" href="css/non-ie9.css" rel="stylesheet"/>
<![endif]-->	
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
						<li><a href="sub2.php">&nbsp;>&nbsp;이용안내</a></li>
						<li><a href="sub2.php">&nbsp;>&nbsp;자주하는질문</a></li>
					</ul>
				</div>
				<div class="menu_title">
					<h2>
						<strong>자주하는질문</strong>
					</h2>
				</div>
			</div>
			<div id="contents_wrap">
				<div id="sub_left">
					<aside>
						<div class="side_menu">
							<a href="sub2.php" class="s_header">이용안내</a>
							<ul class="s_menu_list">
								<li><a href="#">공지사항</a></li>
								<li><a href="sub2.php">자주하는질문</a></li>
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
								<li><a href="../include/sub4/sub4.php">도서관 휴관일</a></li>
							</ul>
						</div>
					</aside>
				</div>
				<div id="sub_right">
					<div id="search_wrap" class="cf">
						<p>
						총
						<span>19</span>
						개
						</p>
						<form action="#">
							<fieldset class="">
								
								<select name="search" id="search">
									<option value="전체">전체</option>
									<option value="제목">제목</option>
									<option value="내용">내용</option>
									<option value="작성자">작성자</option>
									<option value="댓글">댓글</option>
								</select>
								<input type="text" name="text" id="text"  class="search_text guideText" value="제목, 내용, 작성자, 댓글"/>
								<button type="submit"><img src="../include/images/btn_board_search.png" alt="검색"/></button>
							</fieldset>
						</form>
					</div>
					<div id="qna_board">
						<div class="first fl cf">
							<div class="qna_num fl"><span>번호</span></div>
							<div class="qna_title fl"><span>제목</span></div>
							<div class="qna_date fl"><span>게시일자</span></div>
							<div class="qna_writer fl"><span>작성자</span></div>
							<div class="qna_views fl"><span>조회수</span></div>
						</div>
					</div>
				</div>
				<div id="page" class="cf">
					<div class="prev">10페이지이전</div>
					<div class="prev2">이전</div>
					<div class="active">1</div>
					<div class="next">다음</div>
					<div class="next2">10페이지다음</div>
				</div>	
			</div>
		</section>
		<?php include "../include/footer.php";?>
</body>
</html>
		