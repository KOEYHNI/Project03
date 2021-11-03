<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>군포시립도서관</title>
	<link rel="stylesheet" href="../include/css/sub_common_style.css"/>
	<link rel="stylesheet" href="css/join.css"/>
	<script src="../include/js/jquery-1.9.0.min.js"></script>
	<script src="js/login.js"></script>
	<script src="../include/js/html5div.js"></script>
	<script src="../include/js/html5shiv.js"></script>
	<script src="../include/js/common.js"></script>
	<meta name="Author" content="김인혁"/>
	<meta name="Keywords" content="김인혁,KimInHyeok, 포트폴리오, 김인혁 포트폴리오, portfolio, InHyeok's portfolio, 프로젝트, Project,  , 김 인 혁, 인혁 김, 인혁, rla, dls, gur, dlsgur"/>
	<meta name="Description" content="김인혁의 포트폴리오 페이지 입니다"/>
	<link rel="icon" type="image/png" sizes="32x32" href="../include/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../include/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../include/favicon/favicon-16x16.png">
	<script> 
		function check_input() 
		{
		    if (!document.member_form.id.value.trim()) { 
		        alert("아이디를 입력하세요!");  
		        document.member_form.id.focus(); 
		        return; 
		    }
		    if (!document.member_form.pass.value.trim()) { 
		        alert("비밀번호를 입력하세요!");  
		        document.member_form.pass.focus(); 
		        return; 
		    }
		    if (!document.member_form.pass_confirm.value.trim()) { 
		        alert("비밀번호확인을 입력하세요!");  
		        document.member_form.pass_confirm.focus(); 
		        return; 
		    }
		
		    if (!document.member_form.name.value.trim()) { 
		        alert("이름을 입력하세요!");  
		        document.member_form.name.focus(); 
		        return; 
		    }
		    if (!document.member_form.email1.value.trim()) { 
		        alert("이메일 주소를 입력하세요!");  
		        document.member_form.email1.focus(); 
		        return; 
		    }
		
		    if (!document.member_form.email2.value.trim()) { 
		        alert("이메일 주소를 입력하세요!");  
		        document.member_form.email2.focus(); 
		        return; 
		    }
		
		    if (document.member_form.pass.value.trim() != document.member_form.pass_confirm.value.trim()) 
		    { 
		        alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!"); 
		        document.member_form.pass.focus(); 
		        // select()를 사용하여 블럭지정
		        document.member_form.pass.select(); 
		        return; 
		    }
		
		    document.member_form.submit(); 
		}

		function reset_form() {
		    document.member_form.id.value = "";  
		    document.member_form.pass.value = ""; 
		    document.member_form.pass_confirm.value = ""; 
		    document.member_form.name.value = ""; 
		    document.member_form.email1.value = ""; 
		    document.member_form.email2.value = ""; 
		    document.member_form.id.focus(); 
		    return; 
		}  

		function check_id() {
		    window.open("member_check_id.php?id=" + document.member_form.id.value, 
		        "IDcheck", 
		        "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes"); 
		}
	</script>
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
						<li class="first"><a href="../index.html">HOME</a></li>
						<li><a href="sub9.html">&nbsp;>&nbsp;나의 서재</a></li>
						<li><a href="sub9.html">&nbsp;>&nbsp;회원가입</a></li>
					</ul>
				</div>
				<div class="menu_title">	
					<h2>
						<strong>회원가입</strong>
					</h2>
				</div>
			</div>
			<div id="contents_wrap">
				<div id="sub_left">
					<aside>
						<div class="side_menu">
							<a href="#" class="s_header">나의 서재</a>
							<ul class="s_menu_list">
								<li><a href="sub9.html">회원가입</a></li>
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
					
					<div class="mlib_title">회원가입</div>
					<div class="login_box">
						<form name="member_form" method="post" action="member_insert.php">
						<div class="join_form">
							<div class="form id"> 
								<div class="col1">아이디</div> 
								<div class="col2 login"> 
									<img src="../images/user.png" alt="ID"/>
									<input type="text" name="id" class="guideText" placeholder="아이디" >
								</div>  
								<div class="col3"> 
									<p onclick="check_id()">중복확인</p> 
								</div>  
							</div> 
							<div class="clear"></div>
									
							<div class="form pass"> 
								<div class="col1">비밀번호</div> 
								<div class="col2"> 
									<img src="../images/lock.png" alt="PW"/>
									<input type="password" id="pass" name="pass" class="guideText" placeholder="비밀번호"/>
								</div>  
							</div> 
							<div class="clear"></div> 
									
							<div class="form pass"> 
								<div class="col1">비밀번호 확인</div> 
								<div class="col2"> 
									<img src="../images/lock.png" alt="PW"/>
									<input type="password"  name="pass_confirm" class="guideText" placeholder="비밀번호"/>
								</div>  
							</div> 
							<div class="clear"></div> 
									
							<div class="form name"> 
								<div class="col1">이름</div> 
								<div class="col2"> 
									
									<img src="../images/user.png" alt="ID"/>
									<input type="text" name="name" class="guideText" placeholder="이름" >									
								</div>  
							</div> 
							<div class="clear"></div> 
									
							<div class="form email"> 
								<div class="col1">이메일</div> 
								<div class="col2"> 
									<div class="em1">
										<img src="../images/mail.png" alt="mail"/>
										<input type="text" name="email1"class="guideText" placeholder="아이디">
									</div>
									<span>@</span>
									<div class="mail2">
										<input type="text" name="email2" class="guideText em2" placeholder="naver.com">
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
					</div>
					</form>
				</div>
			</div>
		</section>
		<?php include "../include/footer.php";?>
</body>
</html>