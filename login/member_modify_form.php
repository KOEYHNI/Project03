<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>군포시립도서관</title>
	<link rel="stylesheet" href="../main/css/sub_common_style.css"/>
	<link rel="stylesheet" href="css/join.css"/>
	<script src="../main/js/jquery-1.9.0.min.js"></script>
	<script src="js/login2.js"></script>
	<script src="js//member_modify.js"></script>
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
	<div id="wrap">
		<header>
			<?php include "../main/header.php";?>
		</header>
<?php
	$con = mysqli_connect(DBhost, DBuser, DBpass, DBname);
	$sql    = "select * from members where id='$userid'";
	$result = mysqli_query($con, $sql);
	$row    = mysqli_fetch_array($result);

	$pass = $row["pass"];
	$name = $row["name"];

	$email = explode("@", $row["email"]);
	$email1 = $email[0];
	$email2 = $email[1];

	mysqli_close($con);
?>
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
				<a href="../message/message_form.php" class="msms show_balloon" title="쪽지 보내기""></a>
				<a href="../board/board_list.php" class="bdbd show_balloon" title="게시판"></a>
				<div class="location">
					<ul>
						<li class="first"><a href="../main/index.php">HOME</a></li>
						<li><a href="#">&nbsp;>&nbsp;나의 서재</a></li>
						<li><a href="member_modify_form.php">&nbsp;>&nbsp;정보수정</a></li>
					</ul>
				</div>
				<div class="menu_title">	
					<h2>
						<strong>정보수정</strong>
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
								<li><a href="../message/message_form.php">쪽지함</a></li>
								<li><a href="member_modify_form.php">정보수정</a></li>
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
					
					<div class="mlib_title">정보수정</div>
					<div class="login_box">
						<form name="member_form" method="post" action="member_insert.php">
						<div class="join_form">
							<div class="form id"> 
								<div class="col1">아이디</div> 
								<div class="col2 login"> 
									<img src="../main/images/user.png" alt="ID"/>
									<span><?=$userid?></span>
								</div> 
							</div> 
							<div class="clear"></div>
<?php
if ($userlevel==1) {
					echo "<script>alert(\"관리자 아이디에서는 비밀번호를 수정할 수 없습니다!\");</script>";
				    echo "
											
							<div class='form pass'> 
								<div class='col1'>비밀번호</div> 
								<div class='col2'> 
									<img src='../main/images/lock.png' alt='PW'/>
									<input type='password' id='pass' name='pass' class='guideText'  value='$pass' readonly />
								</div>  
							</div> 
							<div class='clear'></div> 
									
							<div class='form pass'> 
								<div class='col1'>비밀번호 확인</div> 
								<div class='col2'> 
									<img src='../main/images/lock.png'alt='PW'/>
									<input type='password'  name='pass_confirm' class='guideText' value='$pass' readonly />
								</div>  
							</div> 
							<div class='clear'></div> 

					";
}else{
				    echo "
											
							<div class='form pass'> 
								<div class='col1'>비밀번호</div> 
								<div class='col2'> 
									<img src='../main/images/lock.png' alt='PW'/>
									<input type='password' id='pass' name='pass' class='guideText'  value='$pass' readonly />
								</div>  
							</div> 
							<div class='clear'></div> 
									
							<div class='form pass'> 
								<div class='col1'>비밀번호 확인</div> 
								<div class='col2'> 
									<img src='../main/images/lock.png'alt='PW'/>
									<input type='password'  name='pass_confirm' class='guideText' value='$pass' readonly />
								</div>  
							</div> 
							<div class='clear'></div> 

					";
}
?>									
							<div class="form name"> 
								<div class="col1">이름</div> 
								<div class="col2"> 
									
									<img src="../main/images/user.png" alt="ID"/>
									<input type="text" name="name" class="guideText" value="<?=$name?>" >									
								</div>  
							</div> 
							<div class="clear"></div> 
									
							<div class="form email"> 
								<div class="col1">이메일</div> 
								<div class="col2"> 
									<div class="em1">
										<img src="../main/images/mail.png" alt="mail"/>
										<input type="text" name="email1"class="guideText" value="<?=$email1?>">
									</div>
									<span>@</span>
									<div class="em2">
										<input type="text" name="email2" class="guideText" value="<?=$email2?>">
									</div> 
								</div>  
							</div> 
							<div class="clear"></div> 
									
							<div class="bottom_line"> </div> 
							<div class="buttons"> 
								
									
								<p onclick="check_input()">저장하기</p> 	
								
								<p onclick="reset_form()">취소</p>									
							</div>
						</div>
					</form> 
					</div>
				</div>
			</div>
		</section>
		<?php include "../main/footer.php";?>
</body>
</html>