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
	<script>
	  function check_input() {
	      if (!document.repley_form.content.value.trim())
	      {
	          alert("내용을 입력하세요!");    
	          document.repley_form.content.focus();
	          return;
	      }
	      document.repley_form.submit();
	   }
	</script>	
</head>
<body> 
<header>
    <?php include "../main/header.php";?>
</header> 
<section>
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
								<li><a href="board_list.php">게시판</a></li>
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
					
					<div class="mlib_title">게시판</div>
						<div id="board_box">
							<h3 class="title">
								게시판 > 내용보기
							</h3>
<?php
	$num  = $_GET["num"];
	$page  = $_GET["page"];

	$con = mysqli_connect(DBhost, DBuser, DBpass, DBname);
	$sql = "select * from board where num=$num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
	$id    = $row["id"];
	$name      = $row["name"];
	$regist_day = $row["regist_day"];
	$subject    = $row["subject"];
	$content    = $row["content"];
	$file_name    = $row["file_name"];
	$file_type    = $row["file_type"];
	$file_copied    = $row["file_copied"];
	$hit    = $row["hit"];

	$content = str_replace(" ", "&nbsp;", $content);
	$content = str_replace("\n", "<br>", $content);

	$new_hit = $hit + 1;
	$sql = "update board set hit=$new_hit where num=$num";
	mysqli_query($con, $sql);
?>
		<ul id="view_content">
			<li>
				<span class="col1"><b>제목 :</b> <?=$subject?></span>
				<span class="col2"><?=$name?> | <?=$regist_day?></span>
			</li>
			<li>
				<?php
					if($file_name){
						$real_name = $file_copied;
						$file_path = "../data/".$real_name;
						$file_size = filesize($file_path);

						echo "▷ 첨부파일 : $file_name ($file_size Byte) &nbsp;&nbsp;&nbsp;&nbsp;
						<a href='download.php?num=$num&real_name=$real_name&file_name=$file_name&file_type=$file_type'>[저장]</a><br><br>";
						$image ="image";
						if(strpos($file_type,$image)!==false){
							echo "<div class='board_imgbox'>
									<img src='../data/$real_name' alt='첨부이미지'/>
								</div>";
						}
						
					}
				?>
				<?=$content?>
			</li>		
		</ul>
		<ul class="buttons">
				<li><button onclick="location.href='board_list.php?page=<?=$page?>'">목록</button></li>
				<li><button onclick="location.href='board_modify_form.php?num=<?=$num?>&page=<?=$page?>'">수정</button></li>
				<li><button onclick="location.href='board_delete.php?num=<?=$num?>&page=<?=$page?>'">삭제</button></li>
				<li><button onclick="location.href='board_form.php'">글쓰기</button></li>
		</ul>
<?php  
	$sql = "select * from repley where id_num=$num";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 글의 수
?>	
		<div class="rp_title">댓글 <span>(<?=$total_record?>)</span></div>

<?php
	$scale = 5;

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
		$name   = $row["name"];
		$numm   = $row["num"];
		$id    = $row["id"];
		$content    = $row["content"];
		$content = str_replace(" ", "&nbsp;", $content);
		$content = str_replace("\n", "<br>", $content);
		$regist_day  = $row["regist_day"];
?>		
	<ul id="repley_content">
			<li>
				<span class="re_wr"><b><?=$name?>(<?=$id?>) :</b></span>
				<span class="re_con"><?=$content?></span>
<?php 
	if($userid == $id or $userlevel==1){
?>	
			<button onclick="location.href='repley_delete.php?numm=<?=$numm?>&num=<?=$num?>'">삭제</button>
<?php 

	}
?>				
				<span class="re_day"><?=$regist_day?></span>

			</li>
	</ul>
<?php
		$number--;
	}
	mysqli_close($con);
?>
		<ul id="page_numm"> 	
<?php
	if ($total_page>=2 && $page >= 2)	
	{
		$new_page = $page-1;
		echo "<li><a href='board_view.php?num=$num&page=$new_page'><img src='../main/images/btn_pagination_prev2.png' width='6'/></a> </li>";
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
				echo "<li><a href='board_view.php?num=$num&page=$i'> $i </a> <li>";
			}
	}
   	
   	if ($total_page>=2 && $page != $total_page)		
   	{
			$new_page = $page+1;	
			echo "<li class='mg5'> <a href='board_view.php?num=$num&page=$new_page'><img src='../main/images/btn_pagination_next2.png' width='6'/></a> </li>";
		}
		else 
			echo "<li>&nbsp;</li>";
?>
		</ul>			
<?php 
	if(!$userid){
?>	
			<span class="no_id">댓글을 작성하시려면 <a href="../login/login.php">로그인</a> 후 이용해 주세요.</span>
<?php 
	} else {
?>		
	<form  name="repley_form" method="post" action="repley_insert.php?id_num=<?=$num?>&id=<?=$userid?>&name=<?=$username?>">
	    	<div id="write_repley">
					<span class="writer"><?=$username?>(<?=$userid?>)</span>    	
				    <span class="text_box">
				    		<textarea name="content" placeholder="댓글을 입력해주세요.(200자까지 입력가능합니다.)"></textarea>
							<button type="button" onclick="check_input()" >댓글 달기</button>
				    </span>
	    	</div>	    	
	    </form>
<?php 
	} 
?>	
	
	</div> <!-- board_box -->
			</div>
		</section>
		<?php include "../main/footer.php";?>
</body>
</html>



















