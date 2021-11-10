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
	<script>
	  function check_input() {
	  	  if (!document.message_form.rv_id.value.trim())
	      {
	          alert("수신 아이디를 입력하세요!");
	          document.message_form.rv_id.focus();
	          return;
	      }
	      if (!document.message_form.subject.value.trim())
	      {
	          alert("제목을 입력하세요!");
	          document.message_form.subject.focus();
	          return;
	      }
	      if (!document.message_form.content.value.trim())
	      {
	          alert("내용을 입력하세요!");    
	          document.message_form.content.focus();
	          return;
	      }
	      document.message_form.submit();
	   }
	</script>
</head>
<body>
	<div id="wrap">
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
						<ul class="top_buttons">
								<li><span><a href="message_box.php?mode=rv">받은쪽지함 </a></span></li>
								<li><span><a href="message_box.php?mode=send">보낸쪽지함</a></span></li>
						</ul>
						<form  name="message_form" method="post" action="message_insert.php?send_id=<?=$userid?>">
							<div id="write_msg">
								<ul>
											<li>
												<span class="col1">보내는 사람 : </span>
												<span class="col2"><?=$userid?></span>
											</li>	
											<li>
												<span class="col1">수신 아이디 : </span>
												<span class="col2"><input name="rv_id" type="text"></span>
											</li>	
											<li>
												<span class="col1">제목 : </span>
												<span class="col2"><input name="subject" type="text"></span>
											</li>	    	
											<li id="text_area">	
												<span class="col1">내용 : </span>
												<span class="col2">
													<textarea name="content"></textarea>
												</span>
											</li>
								</ul>
								<button type="button" onclick="check_input()">보내기</button>
							</div>	    	
						</form>
					</div>
				</div>
			</div>
		</section>
		<?php include "../main/footer.php";?>
</body>
</html>