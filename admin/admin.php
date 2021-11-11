<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>군포시립도서관</title>
	<link rel="stylesheet" href="../main/css/sub_common_style.css"/>
	<link rel="stylesheet" href="css/admin.css"/>
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
<body> 
</head>
<body>
	<div id="wrap">
		<header>
			<?php include "../main/header.php";?>
		</header>  
<?php
	if ($userlevel != 1)
	{
		echo("<script>
				alert('관리자 아이디로만 접근이 가능합니다.');
				history.go(-1);
				</script>
			");
		exit;
	}
?>
		<section>
			<div id="menu_header">
				<a href="../message/message_form.php" class="msms show_balloon" title="쪽지 보내기""></a>
				<a href="../board/board_list.php" class="bdbd show_balloon" title="게시판"></a>
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
								<li ><a href="../board/board_form.php">게시판</a></li>
								<li><a href="../message/message_form.php">쪽지함</a></li>
								<li><a href="admin.php">관리자 모드</a></li>
								<li><a href="../login/member_modify_form.php">정보수정</a></li>
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
					
					<div class="mlib_title2">관리자 모드 > 회원 관리</div>
						<div id="admin_box">
							<ul id="member_list">
								<li>
									<span class="col1">번호</span>
									<span class="col2">아이디</span>
									<span class="col3">이름</span>
									<span class="col4">레벨</span>
									<span class="col5">포인트</span>
									<span class="col6">가입일</span>
									<span class="col7">수정</span>
									<span class="col8">삭제</span>
								</li>
<?php
	$con = mysqli_connect(DBhost, DBuser, DBpass, DBname);
	$sql = "select * from members order by num desc";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 회원 수

	$number = $total_record;

	while ($row = mysqli_fetch_array($result))
	{
		$num         = $row["num"];
		$id          = $row["id"];
		$name        = $row["name"];
		$level       = $row["level"];
		$point       = $row["point"];
		$regist_day  = $row["regist_day"];
?>
			
								<li>
									<form method="post" action="admin_member_update.php?num=<?=$num?>">
										<span class="col1"><?=$number?></span>
										<span class="col2"><?=$id?></span>
										<span class="col3"><?=$name?></span>
										<span class="col4"><input type="text" name="level" value="<?=$level?>"></span>
										<span class="col5"><input type="text" name="point" value="<?=$point?>"></span>
										<span class="col6"><?=$regist_day?></span>
										<span class="col7"><button type="submit">수정</button></span>
										<span class="col8"><button type="button" onclick="location.href='admin_member_delete.php?num=<?=$num?>'">삭제</button></span>
									</form>
								</li>		
<?php
		$number--;
   }
?>
							</ul>
						<div class="mlib_title2">관리자 모드 > 게시판 관리</div>
							<ul id="board_list">
								<li class="title">
									<span class="col2">번호</span>
									<span class="col3">이름</span>
									<span class="col4">제목</span>
									<span class="col5">첨부파일명</span>
									<span class="col6">작성일</span>
									<span class="col1">선택</span>
								</li>
<?php
	$sql = "select * from board order by num desc";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 글의 수

	$number = $total_record;

	while ($row = mysqli_fetch_array($result))
	{
		$num         = $row["num"];
		$name        = $row["name"];
		$subject     = $row["subject"];
		$file_name   = $row["file_name"];
		$regist_day  = $row["regist_day"];
		$regist_day  = substr($regist_day, 0, 10)
?>
									<li>
										
										<span class="col2"><?=$number?></span>
										<span class="col3"><?=$name?></span>
										<span class="col4"><a href="../board/board_view.php?num=<?=$num?>&page=1"><?=$subject?></a></span>
										<span class="col55"><?=$file_name?></span>
										<span class="col6"><?=$regist_day?></span>
										<span class="col1"><button type="button" onclick="location.href='admin_bd_delete.php?num=<?=$num?>'">삭제</button></span>
										
									</li>	
<?php
		$number--;
	}
	mysqli_close($con);
?>
							</ul>
						</div> <!-- admin_box -->
</section> 
<footer>
    <?php include "../main/footer.php";?>
</footer>
</body>
</html>	