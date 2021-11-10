<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>군포시립도서관</title>
	<link rel="stylesheet" href="../main/css/sub_common_style.css"/>
	<link rel="stylesheet" href="css/board.css"/>
	<script src="../main/js/jquery-1.9.0.min.js"></script>
	<script src="../main/js/html5div.js"></script>
	<script src="../main/js/html5shiv.js"></script>
	<script src="../main/js/common.js"></script>
	<script src="../main/js/login_count.js"></script>
	<meta name="Author" content="김인혁"/>
	<meta name="Keywords" content="김인혁,KimInHyeok, 포트폴리오, 김인혁 포트폴리오, portfolio, InHyeok's portfolio, 프로젝트, Project,  , 김 인 혁, 인혁 김, 인혁, rla, dls, gur, dlsgur"/>
	<meta name="Description" content="김인혁의 포트폴리오 페이지 입니다"/>
	<link rel="icon" type="image/png" sizes="32x32" href="../main/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../main/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../main/favicon/favicon-16x16.png">
</head>
<body> 
<header>
    <?php include "../main/header.php";?>
</header> 
<?php
	$catagory = $_GET['catgo'];
 	$search_con = $_GET['search'];
?> 
<section>
			<div id="menu_header">
				<div class="location">
					<ul>
						<li class="first"><a href="../main/index.php">HOME</a></li>
						<li><a href="board_form.php">&nbsp;>&nbsp;나의 서재</a></li>
						<li><a href="board_form.php">&nbsp;>&nbsp;게시판</a></li>
					</ul>
				</div>
				<div class="menu_title">	
					<h2>
						<strong>게시판</strong>
					</h2>
				</div>
			</div>
			<div id="contents_wrap">
				<div id="sub_left">
					<aside>
						<div class="side_menu">
							<a href="#" class="s_header">나의 서재</a>
							<ul class="s_menu_list">
								<li ><a href="board_list.php">게시판</a></li>
								<li><a href="../message/message_form.php">쪽지함</a></li>
<?php 
	if(!$userid){
?>									
								<li><a href="../login/member_form.php">회원가입</a></li>
<?php 
	} else {
?>								
								<li><a href="../login/member_modify_form.php">정보수정</a></li>	
<?php 
	} 
?>
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
					
					<div class="mlib_title2">게시판 > '<?php echo $search_con; ?>' 검색결과</div>
					<div class="search_box">
						<form action="search_view.php" method="get" class="searcharea">
							<select name="catgo">
								<option value="subject">제목</option>
								<option value="name">글쓴이</option>
								<option value="content">내용</option>
							</select>
							<span class="idtxt active">
								<input type="text" name="search" required="required" placeholder="검색 내용을 입력해주세요."/>
							</span>
							<button id="search_btn">
								<img src="../main/images/btn_board_search.png" alt="검색">
							</button>
						</form>
					</div>					
	<div id="board_box2">			

		<ul id="board_list">
			<li>
				<span class="col1">번호</span>
				<span class="col2 tt">제목</span>
				<span class="col3">글쓴이</span>
				<span class="col4">첨부</span>
				<span class="col5">등록일</span>
				<span class="col6">조회</span>
			</li>
			
<?php
	if (isset($_GET["page"]))
		$page = $_GET["page"];
	else
		$page = 1;

    $con = mysqli_connect("localhost", DBuser, DBpass, DBname);
	$sql = "select * from board where $catagory like '%$search_con%' order by num desc";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 글 수

	$scale = 10;

	// 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale);      
	else
		$total_page = floor($total_record/$scale) + 1; 
 
	// 표시할 페이지($page)에 따라 $start 계산  
	$start = ($page - 1) * $scale;      

	$number = $total_record - $start;

	for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
	{
		mysqli_data_seek($result, $i);
		// 가져올 레코드로 위치(포인터) 이동
		$row = mysqli_fetch_array($result);
		// 하나의 레코드 가져오기
		$num         = $row["num"];
		$id          = $row["id"];
		$name        = $row["name"];
		$subject     = $row["subject"];
		$regist_day  = $row["regist_day"];
		$hit         = $row["hit"];
		if ($row["file_name"])
			$file_image = "<img src='../main/images/file.gif'>";
		else
			$file_image = " ";
?>
		<li>
				<span class="col1"><?=$number?></span>
				<span class="col2"><a href="board_view.php?num=<?=$num?>&page=<?=$page?>"><?=$subject?></a></span>
				<span class="col3"><?=$name?></span>
				<span class="col4"><?=$file_image?></span>
				<span class="col5"><?=$regist_day?></span>
				<span class="col6"><?=$hit?></span>
			</li>	
<?php
		$number--;
	}
	mysqli_close($con);
?>
		</ul>
		<ul id="page_num"> 	
<?php
	if ($total_page>=2 && $page >= 2)	
	{
		$new_page = $page-1;
		echo "<li> <a href='search_view.php?catgo=$catagory&search=$search_con&page=$new_page'><img src='../main/images/btn_pagination_prev2.png' width='8'/></a> </li>";
	}		
	else 
		echo "<li>&nbsp;</li>";

	// 게시판 목록 하단에 페이지 링크 번호 출력
	for ($i=1; $i<=$total_page; $i++)
	{
		if ($page == $i)     // 현재 페이지 번호 링크 안함
		{
			echo "<li><b> $i </b></li>";
		}
		else
		{
			echo "<li> <a href='search_view.php?catgo=$catagory&search=$search_con&page=$i'> $i </a> <li>";
		}
	}
	if ($total_page>=2 && $page != $total_page)		
	{
		$new_page = $page+1;	
		echo "<li class='mg5'> <a href='search_view.php?catgo=$catagory&search=$search_con&page=$new_page'><img src='../main/images/btn_pagination_next2.png' width='8'/></a> </li>";
	}
	else 
		echo "<li>&nbsp;</li>";
?>
		</ul> <!-- page -->	    	
		<ul class="buttons">
			<li><button onclick="location.href='board_list.php'">목록</button></li>
			<li>
<?php 
	if($userid) {
?>
				<button onclick="location.href='board_form.php'">글쓰기</button>
<?php
	} else {
?>
				<a href="javascript:alert('로그인 후 이용해 주세요!')"><button>글쓰기</button></a>
<?php
	}
?>
			</li>
		</ul>
	</div> <!-- board_box -->
				</div>
			</div>
		</section>
		<?php include "../main/footer.php";?>
</body>
</html>


















