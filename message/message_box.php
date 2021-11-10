<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>군포시립도서관</title>
	<link rel="stylesheet" href="../main/css/sub_common_style.css"/>
	<link rel="stylesheet" href="css/message.css"/>
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
	if (!$userid )
	{
		echo("<script>
				alert('로그인 후 이용해주세요!');
				location.href = '../login/login_form.php';
				</script>
			");
		exit;
	}
?> 
<section>
	<section>
			<div id="menu_header">
				<div class="location">
					<ul>
						<li class="first"><a href="../main/index.php">HOME</a></li>
						<li><a href="message_form.php">&nbsp;>&nbsp;나의 서재</a></li>
						<li><a href="message_form.php">&nbsp;>&nbsp;쪽지함</a></li>
					</ul>
				</div>
				<div class="menu_title">	
					<h2>
						<strong>쪽지함</strong>
					</h2>
				</div>
			</div>
			<div id="contents_wrap">
				<div id="sub_left">
					<aside>
						<div class="side_menu">
							<a href="#" class="s_header">나의 서재</a>
							<ul class="s_menu_list">
								<li ><a href="../board/board_list.php">게시판</a></li>
								<li><a href="message_form.php">쪽지함</a></li>
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
					
					<div class="mlib_title">쪽지함</div>
   	<div id="message_box">
	    <h3>
<?php
 		if (isset($_GET["page"]))
			$page = $_GET["page"];
		else
			$page = 1;

		$mode = $_GET["mode"];

		if ($mode=="send")
			echo "송신 쪽지함 > 목록보기";
		else
			echo "수신 쪽지함 > 목록보기";
?>
		</h3>
		<ul id="message">
			<li>
				<span class="col1">번호</span>
				<span class="col2">제목</span>
				<span class="col3">
<?php						
					if ($mode=="send")
						echo "받은이";
					else
						echo "보낸이";
?>
				</span>
				<span class="col4">등록일</span>
			</li>
<?php
	$con = mysqli_connect(DBhost, DBuser, DBpass, DBname);

	if ($mode=="send")
		$sql = "select * from message where send_id='$userid' order by num desc";
	else
		$sql = "select * from message where rv_id='$userid' order by num desc";

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
      $num    = $row["num"];
      $subject     = $row["subject"];
      $regist_day  = $row["regist_day"];

      if ($mode=="send")
	  		$msg_id = $row["rv_id"];
      else
	  		$msg_id = $row["send_id"];
	  
      $result2 = mysqli_query($con, "select name from members where id='$msg_id'");
      $record = mysqli_fetch_array($result2);
      $msg_name     = $record["name"];	  
?>
			<li>
				<span class="col1"><?=$number?></span>
				<span class="col2"><a href="message_view.php?mode=<?=$mode?>&num=<?=$num?>"><?=$subject?></a></span>
				<span class="col3"><?=$msg_name?>(<?=$msg_id?>)</span>
				<span class="col4"><?=$regist_day?></span>
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
		echo "<li><a href='message_box.php?mode=$mode&page=$new_page'>◀ 이전</a> </li>";
	}		
	else 
		echo "<li>&nbsp;</li>";

   	// 게시판 목록 하단에 페이지 링크 번호 출력
   	for ($i=1; $i<=$total_page; $i++)
   	{
			if ($page == $i)     // 현재 페이지 번호 링크 안함
			{
				echo"<li><b> $i </b></li>";
			}
			else
			{
				echo "<li> <a href='message_box.php?mode=$mode&page=$i'> $i </a> <li>";
			}
	}
   	
   	if ($total_page>=2 && $page != $total_page)		
   	{
			$new_page = $page+1;	
			echo "<li> <a href='message_box.php?mode=$mode&page=$new_page'>다음 ▶</a> </li>";
		}
		else 
			echo "<li>&nbsp;</li>";
?>
		</ul>
		<ul class="buttons">
			<li><button onclick="location.href='message_box.php?mode=rv'">받은쪽지함</button></li>
			<li><button onclick="location.href='message_box.php?mode=send'">보낸쪽지함</button></li>
			<li><button onclick="location.href='message_form.php'">쪽지 보내기</button></li>
		</ul>
				</div>
			</div>
		</section>
		<?php include "../main/footer.php";?>
</body>
</html>



















