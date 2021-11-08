<?php 
	include "./include/define.php";

	session_start();
	if(isset($_SESSION["userid"]))$userid= $_SESSION["userid"];
	else $userid = "";
	if(isset($_SESSION["username"]))$username= $_SESSION["username"];
	else $username = "";
	if(isset($_SESSION["userlevel"]))$userlevel= $_SESSION["userlevel"];
	else $userlevel = "";
	if(isset($_SESSION["userpoint"]))$userpoint= $_SESSION["userpoint"];
	else $userpoint = "";
?>
			<div id="top_event">
				<div class="event">
					<div class="t_close_btn"></div>
				</div>
			</div>	

			<div id="main_top">
				<div id="logo">
					<h1><span>군포시도서관</span></h1>
					<a class="show_balloon" title="홈 화면으로 이동합니다." href="index.php" tabindex="1"><img src="./main/images/library_logo.png" alt="도서관로고"/></a>
				</div>

<?php 
	if(!$userid){
?>				
					<div class="member_if">
						<span id="counter"></span><span>후 로그인 페이지로 이동합니다.</span> <input type="button" value="연장" onclick="counter_reset()"/>
					</div>
<?php 
	} else {
		$logged = $username."(".$userid.")님[level: ".$userlevel.",point: ".$userpoint."]";
?>					
					<div class="member_if">
						<span id="counter1"></span><span>후 자동 로그아웃</span> <input type="button" value="연장" onclick="counter_reset1()"/><?=$logged?>
					</div>
<?php 
	} 
?>					
					<ul class="gnb_menu">
						<li class="show_balloon" title="홈 화면으로 이동합니다."><a href="index.php">홈</a></li>
<?php 
	if(!$userid){
?>	
						<li class="show_balloon" title="로그인 화면으로 이동합니다."><a href="./login/login_form.php">로그인</a></li>
						<li class="show_balloon" title="회원가입 화면으로 이동합니다."><a href="./login/member_form.php">회원가입</a></li>
<?php 
	} else {
		$logged = $username."(".$userid.")님[level: ".$userlevel.",point: ".$userpoint."]";
?>	
						<li class="show_balloon" title="로그아웃 화면으로 이동합니다."><a href="./login/logout.php">로그아웃</a></li>
						<li class="show_balloon" title="정보수정 화면으로 이동합니다."><a href="./login/member_modify_form.php">정보수정</a></li>											
<?php 
	} 
?>				
<?php 
	if($userlevel==1){
?>
						<li class="show_balloon" title="로그인 화면으로 이동합니다."><a href="./admin/admin.php">관리자 모드</a></li>				
<?php 
	} 
?>
						<li class="show_balloon" title="군포시립도서관 사이트맵으로 이동합니다."><a href="#">사이트맵</a></li>
						<li class="show_balloon" title="영문페이지로 이동합니다."><a href="#">ENG</a></li>
						<li class="social show_balloon" title="트위터로 이동"><a href="#"><img src="./main/images/top_sns_twitter.png" alt="트위터"/></a></li>
						<li class="social show_balloon" title="인스타그램으로 이동"><a href="#"><img src="./main/images/top_sns_insta.png" alt="인스타그램"/></a></li>
						<li class="social show_balloon" title="페이스북으로 이동"><a href="#"><img src="./main/images/top_sns_facebook.png" alt="페이스북"/></a></li>
						<li class="social show_balloon" title="유튜브로 이동"><a href="#"><img src="./main/images/top_sns_youtube.png" alt="유튜브"/></a></li>
					</ul>
			</div>
			<div id="header_lnb">
				<div id="main_menu">
					<ul class="m_menu">
						<li class="one_depth show_balloon" title="자료검색"><a href="sub6/sub6.php" tabindex="2">자료검색</a>
							<div class="sub_menu show_two_depth">
								<div class="two_depth">
									<ul class="s_menu1">
										<li><a href="sub6/sub6.php">통합검색</a></li>
										<li><a href="sub6/sub6.php">일반도서</a></li>
										<li><a href="sub6/sub6.php">아동도서</a></li>
										<li><a href="sub6/sub6.php">비도서</a></li>
										<li><a href="sub6/sub6.php">신착자료</a></li>
										<li><a href="sub6/sub6.php">추천도서</a></li>
										<li><a href="sub6/sub6.php">인기도서</a></li>
									</ul>
									<ul class="s_menu2">
										<li><a href="./login/login_form.php">개인공지사항</a></li>
										<li><a href="./login/login_form.php">대출/연장/예약조회</a></li>
										<li><a href="./login/login_form.php">상호대차신청조회</a></li>
										<li><a href="./login/login_form.php">희망도서신청/조회</a></li>
										<li><a href="./login/login_form.php">책이음대출현황/이력</a></li>
										<li><a href="./login/login_form.php">자원봉사신청내역</a></li>
										<li><a href="./login/login_form.php">인문학강좌신청내역</a></li>
										<li><a href="./login/login_form.php">개인정보수정/탈퇴</a></li>
										<li><a href="./login/login_form.php">나의폴더</a></li>
										<li><a href="./login/login_form.php">서평관리</a></li>
									</ul>
									<ul class="s_menu3">
										<li><a href="sub7/sub7.php">전자책</a></li>
										<li><a href="sub7/sub7.php">사이버학습</a></li>
										<li><a href="sub7/sub7.php">오디오북</a></li>
										<li><a href="sub7/sub7.php">전자잡지</a></li>
										<li><a href="sub7/sub7.php">전자인문관</a></li>
										<li><a href="sub7/sub7.php">KISS</a></li>
									</ul>
									<ul class="s_menu4">
										<li><a href="sub1/sub1.php">설립안내</a></li>
										<li><a href="sub1/sub1.php">작은도서관 현황</a></li>
										<li><a href="sub1/sub1.php">소장자료검색</a></li>
										<li><a href="sub1/sub1.php">작은도서관 공지사항</a></li>
									</ul>
									<ul class="s_menu5">
										<li><a href="sub8/sub8.php">책바다서비스</a></li>
										<li><a href="sub8/sub8.php">책이음서비스</a></li>
										<li><a href="sub8/sub8.php">1일도서관학교</a></li>
										<li><a href="sub8/sub8.php">내생애첫도서관</a></li>
										<li><a href="sub8/sub8.php">장애인대출방문</a></li>
										<li><a href="sub8/sub8.php">이동도서관</a></li>
										<li><a href="sub8/sub8.php">동네서점 바로대출</a></li>
										<li><a href="sub8/sub8.php">미니문고 및 독서시설</a></li>
										<li><a href="sub8/sub8.php">디지털 자료실예약</a></li>
										<li><a href="sub8/sub8.php">열람실좌석현황</a></li>
									</ul>
									<ul class="s_menu6">
										<li><a href="sub4/sub4.php">문화행사신청</a></li>
										<li><a href="sub4/sub4.php">인문학강좌신청</a></li>
										<li><a href="sub4/sub4.php">온라인 원화전시</a></li>
										<li><a href="sub4/sub4.php">오픈갤러리 신청</a></li>
										<li><a href="sub4/sub4.php">동아리 마당</a></li>
										<li><a href="sub4/sub4.php">포토앨범</a></li>
									</ul>
									<ul class="s_menu7">
										<li><a href="sub5/sub5.php">도서기증</a></li>
										<li><a href="sub5/sub5.php">자원봉사신청</a></li>
										<li><a href="sub5/sub5.php">한줄감상</a></li>
										<li><a href="sub5/sub5.php">도서관에바란다</a></li>
									</ul>
									<ul class="s_menu8">
										<li><a href="sub2/sub2.php">공지사항</a></li>
										<li><a href="sub2/sub2.php">자주하는질문</a></li>
										<li><a href="sub2/sub2.php">공개자료실</a></li>
										<li><a href="sub2/sub2.php">이용시간</a></li>
										<li><a href="sub2/sub2.php">대출회원가입안내</a></li>
										<li><a href="sub2/sub2.php">대출안내</a></li>
										<li><a href="sub2/sub2.php">희망도서신청/조회</a></li>
										<li><a href="sub2/sub2.php">상호대차안내</a></li>
										<li><a href="sub2/sub2.php">타관도서 반납서비스</a></li>
										<li><a href="sub2/sub2.php">기타안내</a></li>
										<li><a href="sub2/sub2.php">도서관서비스헌장</a></li>
										<li><a href="sub2/sub2.php">신작/추천도서</a></li>
										<li><a href="sub2/sub2.php">뷰어다운로드</a></li>
										<li><a href="sub2/sub2.php">모바일앱 이용안내</a></li>
										<li><a href="sub4/sub4.php">도서관 휴관일</a></li>
									</ul>
									<ul class="s_menu9">
										<li><a href="sub3/sub3.php">인사말</a></li>
										<li><a href="sub3/sub3.php">연혁</a></li>
										<li><a href="sub3/sub3.php">조직도</a></li>
										<li><a href="sub3/sub3.php">자료현황</a></li>
										<li><a href="sub3/sub3.php">시설현황</a></li>
										<li><a href="sub3/sub3.php">도서관소식지</a></li>
										<li><a href="sub3/sub3.php">찾아오시는길</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li class="one_depth show_balloon" title="나의 서재"><a href="./login/login_form.php" tabindex="3">나의 서재</a>
							<div class="sub_menu">
								<div class="two_depth">
									<ul class="s_menu1">
										<li><a href="sub6/sub6.php">통합검색</a></li>
										<li><a href="sub6/sub6.php">일반도서</a></li>
										<li><a href="sub6/sub6.php">아동도서</a></li>
										<li><a href="sub6/sub6.php">비도서</a></li>
										<li><a href="sub6/sub6.php">신착자료</a></li>
										<li><a href="sub6/sub6.php">추천도서</a></li>
										<li><a href="sub6/sub6.php">인기도서</a></li>
									</ul>
									<ul class="s_menu2">
										<li><a href="./login/login_form.php">개인공지사항</a></li>
										<li><a href="./login/login_form.php">대출/연장/예약조회</a></li>
										<li><a href="./login/login_form.php">상호대차신청조회</a></li>
										<li><a href="./login/login_form.php">희망도서신청/조회</a></li>
										<li><a href="./login/login_form.php">책이음대출현황/이력</a></li>
										<li><a href="./login/login_form.php">자원봉사신청내역</a></li>
										<li><a href="./login/login_form.php">인문학강좌신청내역</a></li>
										<li><a href="./login/login_form.php">개인정보수정/탈퇴</a></li>
										<li><a href="./login/login_form.php">나의폴더</a></li>
										<li><a href="./login/login_form.php">서평관리</a></li>
									</ul>
									<ul class="s_menu3">
										<li><a href="sub7/sub7.php">전자책</a></li>
										<li><a href="sub7/sub7.php">사이버학습</a></li>
										<li><a href="sub7/sub7.php">오디오북</a></li>
										<li><a href="sub7/sub7.php">전자잡지</a></li>
										<li><a href="sub7/sub7.php">전자인문관</a></li>
										<li><a href="sub7/sub7.php">KISS</a></li>
									</ul>
									<ul class="s_menu4">
										<li><a href="sub1/sub1.php">설립안내</a></li>
										<li><a href="sub1/sub1.php">작은도서관 현황</a></li>
										<li><a href="sub1/sub1.php">소장자료검색</a></li>
										<li><a href="sub1/sub1.php">작은도서관 공지사항</a></li>
									</ul>
									<ul class="s_menu5">
										<li><a href="sub8/sub8.php">책바다서비스</a></li>
										<li><a href="sub8/sub8.php">책이음서비스</a></li>
										<li><a href="sub8/sub8.php">1일도서관학교</a></li>
										<li><a href="sub8/sub8.php">내생애첫도서관</a></li>
										<li><a href="sub8/sub8.php">장애인대출방문</a></li>
										<li><a href="sub8/sub8.php">이동도서관</a></li>
										<li><a href="sub8/sub8.php">동네서점 바로대출</a></li>
										<li><a href="sub8/sub8.php">미니문고 및 독서시설</a></li>
										<li><a href="sub8/sub8.php">디지털 자료실예약</a></li>
										<li><a href="sub8/sub8.php">열람실좌석현황</a></li>
									</ul>
									<ul class="s_menu6">
										<li><a href="sub4/sub4.php">문화행사신청</a></li>
										<li><a href="sub4/sub4.php">인문학강좌신청</a></li>
										<li><a href="sub4/sub4.php">온라인 원화전시</a></li>
										<li><a href="sub4/sub4.php">오픈갤러리 신청</a></li>
										<li><a href="sub4/sub4.php">동아리 마당</a></li>
										<li><a href="sub4/sub4.php">포토앨범</a></li>
									</ul>
									<ul class="s_menu7">
										<li><a href="sub5/sub5.php">도서기증</a></li>
										<li><a href="sub5/sub5.php">자원봉사신청</a></li>
										<li><a href="sub5/sub5.php">한줄감상</a></li>
										<li><a href="sub5/sub5.php">도서관에바란다</a></li>
									</ul>
									<ul class="s_menu8">
										<li><a href="sub2/sub2.php">공지사항</a></li>
										<li><a href="sub2/sub2.php">자주하는질문</a></li>
										<li><a href="sub2/sub2.php">공개자료실</a></li>
										<li><a href="sub2/sub2.php">이용시간</a></li>
										<li><a href="sub2/sub2.php">대출회원가입안내</a></li>
										<li><a href="sub2/sub2.php">대출안내</a></li>
										<li><a href="sub2/sub2.php">희망도서신청/조회</a></li>
										<li><a href="sub2/sub2.php">상호대차안내</a></li>
										<li><a href="sub2/sub2.php">타관도서 반납서비스</a></li>
										<li><a href="sub2/sub2.php">기타안내</a></li>
										<li><a href="sub2/sub2.php">도서관서비스헌장</a></li>
										<li><a href="sub2/sub2.php">신작/추천도서</a></li>
										<li><a href="sub2/sub2.php">뷰어다운로드</a></li>
										<li><a href="sub2/sub2.php">모바일앱 이용안내</a></li>
										<li><a href="sub4/sub4.php">도서관 휴관일</a></li>
									</ul>
									<ul class="s_menu9">
										<li><a href="sub3/sub3.php">인사말</a></li>
										<li><a href="sub3/sub3.php">연혁</a></li>
										<li><a href="sub3/sub3.php">조직도</a></li>
										<li><a href="sub3/sub3.php">자료현황</a></li>
										<li><a href="sub3/sub3.php">시설현황</a></li>
										<li><a href="sub3/sub3.php">도서관소식지</a></li>
										<li><a href="sub3/sub3.php">찾아오시는길</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li class="one_depth show_balloon" title="전자도서관"><a href="sub7/sub7.php" tabindex="4">전자도서관</a>
							<div class="sub_menu">
								<div class="two_depth">
									<ul class="s_menu1">
										<li><a href="sub6/sub6.php">통합검색</a></li>
										<li><a href="sub6/sub6.php">일반도서</a></li>
										<li><a href="sub6/sub6.php">아동도서</a></li>
										<li><a href="sub6/sub6.php">비도서</a></li>
										<li><a href="sub6/sub6.php">신착자료</a></li>
										<li><a href="sub6/sub6.php">추천도서</a></li>
										<li><a href="sub6/sub6.php">인기도서</a></li>
									</ul>
									<ul class="s_menu2">
										<li><a href="./login/login_form.php">개인공지사항</a></li>
										<li><a href="./login/login_form.php">대출/연장/예약조회</a></li>
										<li><a href="./login/login_form.php">상호대차신청조회</a></li>
										<li><a href="./login/login_form.php">희망도서신청/조회</a></li>
										<li><a href="./login/login_form.php">책이음대출현황/이력</a></li>
										<li><a href="./login/login_form.php">자원봉사신청내역</a></li>
										<li><a href="./login/login_form.php">인문학강좌신청내역</a></li>
										<li><a href="./login/login_form.php">개인정보수정/탈퇴</a></li>
										<li><a href="./login/login_form.php">나의폴더</a></li>
										<li><a href="./login/login_form.php">서평관리</a></li>
									</ul>
									<ul class="s_menu3">
										<li><a href="sub7/sub7.php">전자책</a></li>
										<li><a href="sub7/sub7.php">사이버학습</a></li>
										<li><a href="sub7/sub7.php">오디오북</a></li>
										<li><a href="sub7/sub7.php">전자잡지</a></li>
										<li><a href="sub7/sub7.php">전자인문관</a></li>
										<li><a href="sub7/sub7.php">KISS</a></li>
									</ul>
									<ul class="s_menu4">
										<li><a href="sub1/sub1.php">설립안내</a></li>
										<li><a href="sub1/sub1.php">작은도서관 현황</a></li>
										<li><a href="sub1/sub1.php">소장자료검색</a></li>
										<li><a href="sub1/sub1.php">작은도서관 공지사항</a></li>
									</ul>
									<ul class="s_menu5">
										<li><a href="sub8/sub8.php">책바다서비스</a></li>
										<li><a href="sub8/sub8.php">책이음서비스</a></li>
										<li><a href="sub8/sub8.php">1일도서관학교</a></li>
										<li><a href="sub8/sub8.php">내생애첫도서관</a></li>
										<li><a href="sub8/sub8.php">장애인대출방문</a></li>
										<li><a href="sub8/sub8.php">이동도서관</a></li>
										<li><a href="sub8/sub8.php">동네서점 바로대출</a></li>
										<li><a href="sub8/sub8.php">미니문고 및 독서시설</a></li>
										<li><a href="sub8/sub8.php">디지털 자료실예약</a></li>
										<li><a href="sub8/sub8.php">열람실좌석현황</a></li>
									</ul>
									<ul class="s_menu6">
										<li><a href="sub4/sub4.php">문화행사신청</a></li>
										<li><a href="sub4/sub4.php">인문학강좌신청</a></li>
										<li><a href="sub4/sub4.php">온라인 원화전시</a></li>
										<li><a href="sub4/sub4.php">오픈갤러리 신청</a></li>
										<li><a href="sub4/sub4.php">동아리 마당</a></li>
										<li><a href="sub4/sub4.php">포토앨범</a></li>
									</ul>
									<ul class="s_menu7">
										<li><a href="sub5/sub5.php">도서기증</a></li>
										<li><a href="sub5/sub5.php">자원봉사신청</a></li>
										<li><a href="sub5/sub5.php">한줄감상</a></li>
										<li><a href="sub5/sub5.php">도서관에바란다</a></li>
									</ul>
									<ul class="s_menu8">
										<li><a href="sub2/sub2.php">공지사항</a></li>
										<li><a href="sub2/sub2.php">자주하는질문</a></li>
										<li><a href="sub2/sub2.php">공개자료실</a></li>
										<li><a href="sub2/sub2.php">이용시간</a></li>
										<li><a href="sub2/sub2.php">대출회원가입안내</a></li>
										<li><a href="sub2/sub2.php">대출안내</a></li>
										<li><a href="sub2/sub2.php">희망도서신청/조회</a></li>
										<li><a href="sub2/sub2.php">상호대차안내</a></li>
										<li><a href="sub2/sub2.php">타관도서 반납서비스</a></li>
										<li><a href="sub2/sub2.php">기타안내</a></li>
										<li><a href="sub2/sub2.php">도서관서비스헌장</a></li>
										<li><a href="sub2/sub2.php">신작/추천도서</a></li>
										<li><a href="sub2/sub2.php">뷰어다운로드</a></li>
										<li><a href="sub2/sub2.php">모바일앱 이용안내</a></li>
										<li><a href="sub4/sub4.php">도서관 휴관일</a></li>
									</ul>
									<ul class="s_menu9">
										<li><a href="sub3/sub3.php">인사말</a></li>
										<li><a href="sub3/sub3.php">연혁</a></li>
										<li><a href="sub3/sub3.php">조직도</a></li>
										<li><a href="sub3/sub3.php">자료현황</a></li>
										<li><a href="sub3/sub3.php">시설현황</a></li>
										<li><a href="sub3/sub3.php">도서관소식지</a></li>
										<li><a href="sub3/sub3.php">찾아오시는길</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li class="one_depth show_balloon" title="작은도서관"><a href="sub1/sub1.php" tabindex="5">작은도서관</a>
							<div class="sub_menu">
								<div class="two_depth">
									<ul class="s_menu1">
										<li><a href="sub6/sub6.php">통합검색</a></li>
										<li><a href="sub6/sub6.php">일반도서</a></li>
										<li><a href="sub6/sub6.php">아동도서</a></li>
										<li><a href="sub6/sub6.php">비도서</a></li>
										<li><a href="sub6/sub6.php">신착자료</a></li>
										<li><a href="sub6/sub6.php">추천도서</a></li>
										<li><a href="sub6/sub6.php">인기도서</a></li>
									</ul>
									<ul class="s_menu2">
										<li><a href="./login/login_form.php">개인공지사항</a></li>
										<li><a href="./login/login_form.php">대출/연장/예약조회</a></li>
										<li><a href="./login/login_form.php">상호대차신청조회</a></li>
										<li><a href="./login/login_form.php">희망도서신청/조회</a></li>
										<li><a href="./login/login_form.php">책이음대출현황/이력</a></li>
										<li><a href="./login/login_form.php">자원봉사신청내역</a></li>
										<li><a href="./login/login_form.php">인문학강좌신청내역</a></li>
										<li><a href="./login/login_form.php">개인정보수정/탈퇴</a></li>
										<li><a href="./login/login_form.php">나의폴더</a></li>
										<li><a href="./login/login_form.php">서평관리</a></li>
									</ul>
									<ul class="s_menu3">
										<li><a href="sub7/sub7.php">전자책</a></li>
										<li><a href="sub7/sub7.php">사이버학습</a></li>
										<li><a href="sub7/sub7.php">오디오북</a></li>
										<li><a href="sub7/sub7.php">전자잡지</a></li>
										<li><a href="sub7/sub7.php">전자인문관</a></li>
										<li><a href="sub7/sub7.php">KISS</a></li>
									</ul>
									<ul class="s_menu4">
										<li><a href="sub1/sub1.php">설립안내</a></li>
										<li><a href="sub1/sub1.php">작은도서관 현황</a></li>
										<li><a href="sub1/sub1.php">소장자료검색</a></li>
										<li><a href="sub1/sub1.php">작은도서관 공지사항</a></li>
									</ul>
									<ul class="s_menu5">
										<li><a href="sub8/sub8.php">책바다서비스</a></li>
										<li><a href="sub8/sub8.php">책이음서비스</a></li>
										<li><a href="sub8/sub8.php">1일도서관학교</a></li>
										<li><a href="sub8/sub8.php">내생애첫도서관</a></li>
										<li><a href="sub8/sub8.php">장애인대출방문</a></li>
										<li><a href="sub8/sub8.php">이동도서관</a></li>
										<li><a href="sub8/sub8.php">동네서점 바로대출</a></li>
										<li><a href="sub8/sub8.php">미니문고 및 독서시설</a></li>
										<li><a href="sub8/sub8.php">디지털 자료실예약</a></li>
										<li><a href="sub8/sub8.php">열람실좌석현황</a></li>
									</ul>
									<ul class="s_menu6">
										<li><a href="sub4/sub4.php">문화행사신청</a></li>
										<li><a href="sub4/sub4.php">인문학강좌신청</a></li>
										<li><a href="sub4/sub4.php">온라인 원화전시</a></li>
										<li><a href="sub4/sub4.php">오픈갤러리 신청</a></li>
										<li><a href="sub4/sub4.php">동아리 마당</a></li>
										<li><a href="sub4/sub4.php">포토앨범</a></li>
									</ul>
									<ul class="s_menu7">
										<li><a href="sub5/sub5.php">도서기증</a></li>
										<li><a href="sub5/sub5.php">자원봉사신청</a></li>
										<li><a href="sub5/sub5.php">한줄감상</a></li>
										<li><a href="sub5/sub5.php">도서관에바란다</a></li>
									</ul>
									<ul class="s_menu8">
										<li><a href="sub2/sub2.php">공지사항</a></li>
										<li><a href="sub2/sub2.php">자주하는질문</a></li>
										<li><a href="sub2/sub2.php">공개자료실</a></li>
										<li><a href="sub2/sub2.php">이용시간</a></li>
										<li><a href="sub2/sub2.php">대출회원가입안내</a></li>
										<li><a href="sub2/sub2.php">대출안내</a></li>
										<li><a href="sub2/sub2.php">희망도서신청/조회</a></li>
										<li><a href="sub2/sub2.php">상호대차안내</a></li>
										<li><a href="sub2/sub2.php">타관도서 반납서비스</a></li>
										<li><a href="sub2/sub2.php">기타안내</a></li>
										<li><a href="sub2/sub2.php">도서관서비스헌장</a></li>
										<li><a href="sub2/sub2.php">신작/추천도서</a></li>
										<li><a href="sub2/sub2.php">뷰어다운로드</a></li>
										<li><a href="sub2/sub2.php">모바일앱 이용안내</a></li>
										<li><a href="sub4/sub4.php">도서관 휴관일</a></li>
									</ul>
									<ul class="s_menu9">
										<li><a href="sub3/sub3.php">인사말</a></li>
										<li><a href="sub3/sub3.php">연혁</a></li>
										<li><a href="sub3/sub3.php">조직도</a></li>
										<li><a href="sub3/sub3.php">자료현황</a></li>
										<li><a href="sub3/sub3.php">시설현황</a></li>
										<li><a href="sub3/sub3.php">도서관소식지</a></li>
										<li><a href="sub3/sub3.php">찾아오시는길</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li class="one_depth show_balloon" title="도서관서비스"><a href="sub8/sub8.php" tabindex="6">도서관서비스</a>
							<div class="sub_menu">
								<div class="two_depth">
									<ul class="s_menu1">
										<li><a href="sub6/sub6.php">통합검색</a></li>
										<li><a href="sub6/sub6.php">일반도서</a></li>
										<li><a href="sub6/sub6.php">아동도서</a></li>
										<li><a href="sub6/sub6.php">비도서</a></li>
										<li><a href="sub6/sub6.php">신착자료</a></li>
										<li><a href="sub6/sub6.php">추천도서</a></li>
										<li><a href="sub6/sub6.php">인기도서</a></li>
									</ul>
									<ul class="s_menu2">
										<li><a href="./login/login_form.php">개인공지사항</a></li>
										<li><a href="./login/login_form.php">대출/연장/예약조회</a></li>
										<li><a href="./login/login_form.php">상호대차신청조회</a></li>
										<li><a href="./login/login_form.php">희망도서신청/조회</a></li>
										<li><a href="./login/login_form.php">책이음대출현황/이력</a></li>
										<li><a href="./login/login_form.php">자원봉사신청내역</a></li>
										<li><a href="./login/login_form.php">인문학강좌신청내역</a></li>
										<li><a href="./login/login_form.php">개인정보수정/탈퇴</a></li>
										<li><a href="./login/login_form.php">나의폴더</a></li>
										<li><a href="./login/login_form.php">서평관리</a></li>
									</ul>
									<ul class="s_menu3">
										<li><a href="sub7/sub7.php">전자책</a></li>
										<li><a href="sub7/sub7.php">사이버학습</a></li>
										<li><a href="sub7/sub7.php">오디오북</a></li>
										<li><a href="sub7/sub7.php">전자잡지</a></li>
										<li><a href="sub7/sub7.php">전자인문관</a></li>
										<li><a href="sub7/sub7.php">KISS</a></li>
									</ul>
									<ul class="s_menu4">
										<li><a href="sub1/sub1.php">설립안내</a></li>
										<li><a href="sub1/sub1.php">작은도서관 현황</a></li>
										<li><a href="sub1/sub1.php">소장자료검색</a></li>
										<li><a href="sub1/sub1.php">작은도서관 공지사항</a></li>
									</ul>
									<ul class="s_menu5">
										<li><a href="sub8/sub8.php">책바다서비스</a></li>
										<li><a href="sub8/sub8.php">책이음서비스</a></li>
										<li><a href="sub8/sub8.php">1일도서관학교</a></li>
										<li><a href="sub8/sub8.php">내생애첫도서관</a></li>
										<li><a href="sub8/sub8.php">장애인대출방문</a></li>
										<li><a href="sub8/sub8.php">이동도서관</a></li>
										<li><a href="sub8/sub8.php">동네서점 바로대출</a></li>
										<li><a href="sub8/sub8.php">미니문고 및 독서시설</a></li>
										<li><a href="sub8/sub8.php">디지털 자료실예약</a></li>
										<li><a href="sub8/sub8.php">열람실좌석현황</a></li>
									</ul>
									<ul class="s_menu6">
										<li><a href="sub4/sub4.php">문화행사신청</a></li>
										<li><a href="sub4/sub4.php">인문학강좌신청</a></li>
										<li><a href="sub4/sub4.php">온라인 원화전시</a></li>
										<li><a href="sub4/sub4.php">오픈갤러리 신청</a></li>
										<li><a href="sub4/sub4.php">동아리 마당</a></li>
										<li><a href="sub4/sub4.php">포토앨범</a></li>
									</ul>
									<ul class="s_menu7">
										<li><a href="sub5/sub5.php">도서기증</a></li>
										<li><a href="sub5/sub5.php">자원봉사신청</a></li>
										<li><a href="sub5/sub5.php">한줄감상</a></li>
										<li><a href="sub5/sub5.php">도서관에바란다</a></li>
									</ul>
									<ul class="s_menu8">
										<li><a href="sub2/sub2.php">공지사항</a></li>
										<li><a href="sub2/sub2.php">자주하는질문</a></li>
										<li><a href="sub2/sub2.php">공개자료실</a></li>
										<li><a href="sub2/sub2.php">이용시간</a></li>
										<li><a href="sub2/sub2.php">대출회원가입안내</a></li>
										<li><a href="sub2/sub2.php">대출안내</a></li>
										<li><a href="sub2/sub2.php">희망도서신청/조회</a></li>
										<li><a href="sub2/sub2.php">상호대차안내</a></li>
										<li><a href="sub2/sub2.php">타관도서 반납서비스</a></li>
										<li><a href="sub2/sub2.php">기타안내</a></li>
										<li><a href="sub2/sub2.php">도서관서비스헌장</a></li>
										<li><a href="sub2/sub2.php">신작/추천도서</a></li>
										<li><a href="sub2/sub2.php">뷰어다운로드</a></li>
										<li><a href="sub2/sub2.php">모바일앱 이용안내</a></li>
										<li><a href="sub4/sub4.php">도서관 휴관일</a></li>
									</ul>
									<ul class="s_menu9">
										<li><a href="sub3/sub3.php">인사말</a></li>
										<li><a href="sub3/sub3.php">연혁</a></li>
										<li><a href="sub3/sub3.php">조직도</a></li>
										<li><a href="sub3/sub3.php">자료현황</a></li>
										<li><a href="sub3/sub3.php">시설현황</a></li>
										<li><a href="sub3/sub3.php">도서관소식지</a></li>
										<li><a href="sub3/sub3.php">찾아오시는길</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li class="one_depth show_balloon" title="문화행사"><a href="sub4/sub4.php" tabindex="7">문화행사</a>
							<div class="sub_menu">
								<div class="two_depth">
									<ul class="s_menu1">
										<li><a href="sub6/sub6.php">통합검색</a></li>
										<li><a href="sub6/sub6.php">일반도서</a></li>
										<li><a href="sub6/sub6.php">아동도서</a></li>
										<li><a href="sub6/sub6.php">비도서</a></li>
										<li><a href="sub6/sub6.php">신착자료</a></li>
										<li><a href="sub6/sub6.php">추천도서</a></li>
										<li><a href="sub6/sub6.php">인기도서</a></li>
									</ul>
									<ul class="s_menu2">
										<li><a href="./login/login_form.php">개인공지사항</a></li>
										<li><a href="./login/login_form.php">대출/연장/예약조회</a></li>
										<li><a href="./login/login_form.php">상호대차신청조회</a></li>
										<li><a href="./login/login_form.php">희망도서신청/조회</a></li>
										<li><a href="./login/login_form.php">책이음대출현황/이력</a></li>
										<li><a href="./login/login_form.php">자원봉사신청내역</a></li>
										<li><a href="./login/login_form.php">인문학강좌신청내역</a></li>
										<li><a href="./login/login_form.php">개인정보수정/탈퇴</a></li>
										<li><a href="./login/login_form.php">나의폴더</a></li>
										<li><a href="./login/login_form.php">서평관리</a></li>
									</ul>
									<ul class="s_menu3">
										<li><a href="sub7/sub7.php">전자책</a></li>
										<li><a href="sub7/sub7.php">사이버학습</a></li>
										<li><a href="sub7/sub7.php">오디오북</a></li>
										<li><a href="sub7/sub7.php">전자잡지</a></li>
										<li><a href="sub7/sub7.php">전자인문관</a></li>
										<li><a href="sub7/sub7.php">KISS</a></li>
									</ul>
									<ul class="s_menu4">
										<li><a href="sub1/sub1.php">설립안내</a></li>
										<li><a href="sub1/sub1.php">작은도서관 현황</a></li>
										<li><a href="sub1/sub1.php">소장자료검색</a></li>
										<li><a href="sub1/sub1.php">작은도서관 공지사항</a></li>
									</ul>
									<ul class="s_menu5">
										<li><a href="sub8/sub8.php">책바다서비스</a></li>
										<li><a href="sub8/sub8.php">책이음서비스</a></li>
										<li><a href="sub8/sub8.php">1일도서관학교</a></li>
										<li><a href="sub8/sub8.php">내생애첫도서관</a></li>
										<li><a href="sub8/sub8.php">장애인대출방문</a></li>
										<li><a href="sub8/sub8.php">이동도서관</a></li>
										<li><a href="sub8/sub8.php">동네서점 바로대출</a></li>
										<li><a href="sub8/sub8.php">미니문고 및 독서시설</a></li>
										<li><a href="sub8/sub8.php">디지털 자료실예약</a></li>
										<li><a href="sub8/sub8.php">열람실좌석현황</a></li>
									</ul>
									<ul class="s_menu6">
										<li><a href="sub4/sub4.php">문화행사신청</a></li>
										<li><a href="sub4/sub4.php">인문학강좌신청</a></li>
										<li><a href="sub4/sub4.php">온라인 원화전시</a></li>
										<li><a href="sub4/sub4.php">오픈갤러리 신청</a></li>
										<li><a href="sub4/sub4.php">동아리 마당</a></li>
										<li><a href="sub4/sub4.php">포토앨범</a></li>
									</ul>
									<ul class="s_menu7">
										<li><a href="sub5/sub5.php">도서기증</a></li>
										<li><a href="sub5/sub5.php">자원봉사신청</a></li>
										<li><a href="sub5/sub5.php">한줄감상</a></li>
										<li><a href="sub5/sub5.php">도서관에바란다</a></li>
									</ul>
									<ul class="s_menu8">
										<li><a href="sub2/sub2.php">공지사항</a></li>
										<li><a href="sub2/sub2.php">자주하는질문</a></li>
										<li><a href="sub2/sub2.php">공개자료실</a></li>
										<li><a href="sub2/sub2.php">이용시간</a></li>
										<li><a href="sub2/sub2.php">대출회원가입안내</a></li>
										<li><a href="sub2/sub2.php">대출안내</a></li>
										<li><a href="sub2/sub2.php">희망도서신청/조회</a></li>
										<li><a href="sub2/sub2.php">상호대차안내</a></li>
										<li><a href="sub2/sub2.php">타관도서 반납서비스</a></li>
										<li><a href="sub2/sub2.php">기타안내</a></li>
										<li><a href="sub2/sub2.php">도서관서비스헌장</a></li>
										<li><a href="sub2/sub2.php">신작/추천도서</a></li>
										<li><a href="sub2/sub2.php">뷰어다운로드</a></li>
										<li><a href="sub2/sub2.php">모바일앱 이용안내</a></li>
										<li><a href="sub4/sub4.php">도서관 휴관일</a></li>
									</ul>
									<ul class="s_menu9">
										<li><a href="sub3/sub3.php">인사말</a></li>
										<li><a href="sub3/sub3.php">연혁</a></li>
										<li><a href="sub3/sub3.php">조직도</a></li>
										<li><a href="sub3/sub3.php">자료현황</a></li>
										<li><a href="sub3/sub3.php">시설현황</a></li>
										<li><a href="sub3/sub3.php">도서관소식지</a></li>
										<li><a href="sub3/sub3.php">찾아오시는길</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li class="one_depth show_balloon" title="참여마당"><a href="sub5/sub5.php" tabindex="8">참여마당</a>
							<div class="sub_menu">
								<div class="two_depth">
									<ul class="s_menu1">
										<li><a href="sub6/sub6.php">통합검색</a></li>
										<li><a href="sub6/sub6.php">일반도서</a></li>
										<li><a href="sub6/sub6.php">아동도서</a></li>
										<li><a href="sub6/sub6.php">비도서</a></li>
										<li><a href="sub6/sub6.php">신착자료</a></li>
										<li><a href="sub6/sub6.php">추천도서</a></li>
										<li><a href="sub6/sub6.php">인기도서</a></li>
									</ul>
									<ul class="s_menu2">
										<li><a href="./login/login_form.php">개인공지사항</a></li>
										<li><a href="./login/login_form.php">대출/연장/예약조회</a></li>
										<li><a href="./login/login_form.php">상호대차신청조회</a></li>
										<li><a href="./login/login_form.php">희망도서신청/조회</a></li>
										<li><a href="./login/login_form.php">책이음대출현황/이력</a></li>
										<li><a href="./login/login_form.php">자원봉사신청내역</a></li>
										<li><a href="./login/login_form.php">인문학강좌신청내역</a></li>
										<li><a href="./login/login_form.php">개인정보수정/탈퇴</a></li>
										<li><a href="./login/login_form.php">나의폴더</a></li>
										<li><a href="./login/login_form.php">서평관리</a></li>
									</ul>
									<ul class="s_menu3">
										<li><a href="sub7/sub7.php">전자책</a></li>
										<li><a href="sub7/sub7.php">사이버학습</a></li>
										<li><a href="sub7/sub7.php">오디오북</a></li>
										<li><a href="sub7/sub7.php">전자잡지</a></li>
										<li><a href="sub7/sub7.php">전자인문관</a></li>
										<li><a href="sub7/sub7.php">KISS</a></li>
									</ul>
									<ul class="s_menu4">
										<li><a href="sub1/sub1.php">설립안내</a></li>
										<li><a href="sub1/sub1.php">작은도서관 현황</a></li>
										<li><a href="sub1/sub1.php">소장자료검색</a></li>
										<li><a href="sub1/sub1.php">작은도서관 공지사항</a></li>
									</ul>
									<ul class="s_menu5">
										<li><a href="sub8/sub8.php">책바다서비스</a></li>
										<li><a href="sub8/sub8.php">책이음서비스</a></li>
										<li><a href="sub8/sub8.php">1일도서관학교</a></li>
										<li><a href="sub8/sub8.php">내생애첫도서관</a></li>
										<li><a href="sub8/sub8.php">장애인대출방문</a></li>
										<li><a href="sub8/sub8.php">이동도서관</a></li>
										<li><a href="sub8/sub8.php">동네서점 바로대출</a></li>
										<li><a href="sub8/sub8.php">미니문고 및 독서시설</a></li>
										<li><a href="sub8/sub8.php">디지털 자료실예약</a></li>
										<li><a href="sub8/sub8.php">열람실좌석현황</a></li>
									</ul>
									<ul class="s_menu6">
										<li><a href="sub4/sub4.php">문화행사신청</a></li>
										<li><a href="sub4/sub4.php">인문학강좌신청</a></li>
										<li><a href="sub4/sub4.php">온라인 원화전시</a></li>
										<li><a href="sub4/sub4.php">오픈갤러리 신청</a></li>
										<li><a href="sub4/sub4.php">동아리 마당</a></li>
										<li><a href="sub4/sub4.php">포토앨범</a></li>
									</ul>
									<ul class="s_menu7">
										<li><a href="sub5/sub5.php">도서기증</a></li>
										<li><a href="sub5/sub5.php">자원봉사신청</a></li>
										<li><a href="sub5/sub5.php">한줄감상</a></li>
										<li><a href="sub5/sub5.php">도서관에바란다</a></li>
									</ul>
									<ul class="s_menu8">
										<li><a href="sub2/sub2.php">공지사항</a></li>
										<li><a href="sub2/sub2.php">자주하는질문</a></li>
										<li><a href="sub2/sub2.php">공개자료실</a></li>
										<li><a href="sub2/sub2.php">이용시간</a></li>
										<li><a href="sub2/sub2.php">대출회원가입안내</a></li>
										<li><a href="sub2/sub2.php">대출안내</a></li>
										<li><a href="sub2/sub2.php">희망도서신청/조회</a></li>
										<li><a href="sub2/sub2.php">상호대차안내</a></li>
										<li><a href="sub2/sub2.php">타관도서 반납서비스</a></li>
										<li><a href="sub2/sub2.php">기타안내</a></li>
										<li><a href="sub2/sub2.php">도서관서비스헌장</a></li>
										<li><a href="sub2/sub2.php">신작/추천도서</a></li>
										<li><a href="sub2/sub2.php">뷰어다운로드</a></li>
										<li><a href="sub2/sub2.php">모바일앱 이용안내</a></li>
										<li><a href="sub4/sub4.php">도서관 휴관일</a></li>
									</ul>
									<ul class="s_menu9">
										<li><a href="sub3/sub3.php">인사말</a></li>
										<li><a href="sub3/sub3.php">연혁</a></li>
										<li><a href="sub3/sub3.php">조직도</a></li>
										<li><a href="sub3/sub3.php">자료현황</a></li>
										<li><a href="sub3/sub3.php">시설현황</a></li>
										<li><a href="sub3/sub3.php">도서관소식지</a></li>
										<li><a href="sub3/sub3.php">찾아오시는길</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li class="one_depth show_balloon" title="이용안내"><a href="sub2/sub2.php" tabindex="9">이용안내</a>
							<div class="sub_menu">
								<div class="two_depth">
									<ul class="s_menu1">
										<li><a href="sub6/sub6.php">통합검색</a></li>
										<li><a href="sub6/sub6.php">일반도서</a></li>
										<li><a href="sub6/sub6.php">아동도서</a></li>
										<li><a href="sub6/sub6.php">비도서</a></li>
										<li><a href="sub6/sub6.php">신착자료</a></li>
										<li><a href="sub6/sub6.php">추천도서</a></li>
										<li><a href="sub6/sub6.php">인기도서</a></li>
									</ul>
									<ul class="s_menu2">
										<li><a href="./login/login_form.php">개인공지사항</a></li>
										<li><a href="./login/login_form.php">대출/연장/예약조회</a></li>
										<li><a href="./login/login_form.php">상호대차신청조회</a></li>
										<li><a href="./login/login_form.php">희망도서신청/조회</a></li>
										<li><a href="./login/login_form.php">책이음대출현황/이력</a></li>
										<li><a href="./login/login_form.php">자원봉사신청내역</a></li>
										<li><a href="./login/login_form.php">인문학강좌신청내역</a></li>
										<li><a href="./login/login_form.php">개인정보수정/탈퇴</a></li>
										<li><a href="./login/login_form.php">나의폴더</a></li>
										<li><a href="./login/login_form.php">서평관리</a></li>
									</ul>
									<ul class="s_menu3">
										<li><a href="sub7/sub7.php">전자책</a></li>
										<li><a href="sub7/sub7.php">사이버학습</a></li>
										<li><a href="sub7/sub7.php">오디오북</a></li>
										<li><a href="sub7/sub7.php">전자잡지</a></li>
										<li><a href="sub7/sub7.php">전자인문관</a></li>
										<li><a href="sub7/sub7.php">KISS</a></li>
									</ul>
									<ul class="s_menu4">
										<li><a href="sub1/sub1.php">설립안내</a></li>
										<li><a href="sub1/sub1.php">작은도서관 현황</a></li>
										<li><a href="sub1/sub1.php">소장자료검색</a></li>
										<li><a href="sub1/sub1.php">작은도서관 공지사항</a></li>
									</ul>
									<ul class="s_menu5">
										<li><a href="sub8/sub8.php">책바다서비스</a></li>
										<li><a href="sub8/sub8.php">책이음서비스</a></li>
										<li><a href="sub8/sub8.php">1일도서관학교</a></li>
										<li><a href="sub8/sub8.php">내생애첫도서관</a></li>
										<li><a href="sub8/sub8.php">장애인대출방문</a></li>
										<li><a href="sub8/sub8.php">이동도서관</a></li>
										<li><a href="sub8/sub8.php">동네서점 바로대출</a></li>
										<li><a href="sub8/sub8.php">미니문고 및 독서시설</a></li>
										<li><a href="sub8/sub8.php">디지털 자료실예약</a></li>
										<li><a href="sub8/sub8.php">열람실좌석현황</a></li>
									</ul>
									<ul class="s_menu6">
										<li><a href="sub4/sub4.php">문화행사신청</a></li>
										<li><a href="sub4/sub4.php">인문학강좌신청</a></li>
										<li><a href="sub4/sub4.php">온라인 원화전시</a></li>
										<li><a href="sub4/sub4.php">오픈갤러리 신청</a></li>
										<li><a href="sub4/sub4.php">동아리 마당</a></li>
										<li><a href="sub4/sub4.php">포토앨범</a></li>
									</ul>
									<ul class="s_menu7">
										<li><a href="sub5/sub5.php">도서기증</a></li>
										<li><a href="sub5/sub5.php">자원봉사신청</a></li>
										<li><a href="sub5/sub5.php">한줄감상</a></li>
										<li><a href="sub5/sub5.php">도서관에바란다</a></li>
									</ul>
									<ul class="s_menu8">
										<li><a href="sub2/sub2.php">공지사항</a></li>
										<li><a href="sub2/sub2.php">자주하는질문</a></li>
										<li><a href="sub2/sub2.php">공개자료실</a></li>
										<li><a href="sub2/sub2.php">이용시간</a></li>
										<li><a href="sub2/sub2.php">대출회원가입안내</a></li>
										<li><a href="sub2/sub2.php">대출안내</a></li>
										<li><a href="sub2/sub2.php">희망도서신청/조회</a></li>
										<li><a href="sub2/sub2.php">상호대차안내</a></li>
										<li><a href="sub2/sub2.php">타관도서 반납서비스</a></li>
										<li><a href="sub2/sub2.php">기타안내</a></li>
										<li><a href="sub2/sub2.php">도서관서비스헌장</a></li>
										<li><a href="sub2/sub2.php">신작/추천도서</a></li>
										<li><a href="sub2/sub2.php">뷰어다운로드</a></li>
										<li><a href="sub2/sub2.php">모바일앱 이용안내</a></li>
										<li><a href="sub4/sub4.php">도서관 휴관일</a></li>
									</ul>
									<ul class="s_menu9">
										<li><a href="sub3/sub3.php">인사말</a></li>
										<li><a href="sub3/sub3.php">연혁</a></li>
										<li><a href="sub3/sub3.php">조직도</a></li>
										<li><a href="sub3/sub3.php">자료현황</a></li>
										<li><a href="sub3/sub3.php">시설현황</a></li>
										<li><a href="sub3/sub3.php">도서관소식지</a></li>
										<li><a href="sub3/sub3.php">찾아오시는길</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li class="one_depth show_balloon" title="도서관소개"><a href="sub3/sub3.php" tabindex="10">도서관소개</a>
							<div class="sub_menu">
								<div class="two_depth">
									<ul class="s_menu1">
										<li><a href="sub6/sub6.php">통합검색</a></li>
										<li><a href="sub6/sub6.php">일반도서</a></li>
										<li><a href="sub6/sub6.php">아동도서</a></li>
										<li><a href="sub6/sub6.php">비도서</a></li>
										<li><a href="sub6/sub6.php">신착자료</a></li>
										<li><a href="sub6/sub6.php">추천도서</a></li>
										<li><a href="sub6/sub6.php">인기도서</a></li>
									</ul>
									<ul class="s_menu2">
										<li><a href="./login/login_form.php">개인공지사항</a></li>
										<li><a href="./login/login_form.php">대출/연장/예약조회</a></li>
										<li><a href="./login/login_form.php">상호대차신청조회</a></li>
										<li><a href="./login/login_form.php">희망도서신청/조회</a></li>
										<li><a href="./login/login_form.php">책이음대출현황/이력</a></li>
										<li><a href="./login/login_form.php">자원봉사신청내역</a></li>
										<li><a href="./login/login_form.php">인문학강좌신청내역</a></li>
										<li><a href="./login/login_form.php">개인정보수정/탈퇴</a></li>
										<li><a href="./login/login_form.php">나의폴더</a></li>
										<li><a href="./login/login_form.php">서평관리</a></li>
									</ul>
									<ul class="s_menu3">
										<li><a href="sub7/sub7.php">전자책</a></li>
										<li><a href="sub7/sub7.php">사이버학습</a></li>
										<li><a href="sub7/sub7.php">오디오북</a></li>
										<li><a href="sub7/sub7.php">전자잡지</a></li>
										<li><a href="sub7/sub7.php">전자인문관</a></li>
										<li><a href="sub7/sub7.php">KISS</a></li>
									</ul>
									<ul class="s_menu4">
										<li><a href="sub1/sub1.php">설립안내</a></li>
										<li><a href="sub1/sub1.php">작은도서관 현황</a></li>
										<li><a href="sub1/sub1.php">소장자료검색</a></li>
										<li><a href="sub1/sub1.php">작은도서관 공지사항</a></li>
									</ul>
									<ul class="s_menu5">
										<li><a href="sub8/sub8.php">책바다서비스</a></li>
										<li><a href="sub8/sub8.php">책이음서비스</a></li>
										<li><a href="sub8/sub8.php">1일도서관학교</a></li>
										<li><a href="sub8/sub8.php">내생애첫도서관</a></li>
										<li><a href="sub8/sub8.php">장애인대출방문</a></li>
										<li><a href="sub8/sub8.php">이동도서관</a></li>
										<li><a href="sub8/sub8.php">동네서점 바로대출</a></li>
										<li><a href="sub8/sub8.php">미니문고 및 독서시설</a></li>
										<li><a href="sub8/sub8.php">디지털 자료실예약</a></li>
										<li><a href="sub8/sub8.php">열람실좌석현황</a></li>
									</ul>
									<ul class="s_menu6">
										<li><a href="sub4/sub4.php">문화행사신청</a></li>
										<li><a href="sub4/sub4.php">인문학강좌신청</a></li>
										<li><a href="sub4/sub4.php">온라인 원화전시</a></li>
										<li><a href="sub4/sub4.php">오픈갤러리 신청</a></li>
										<li><a href="sub4/sub4.php">동아리 마당</a></li>
										<li><a href="sub4/sub4.php">포토앨범</a></li>
									</ul>
									<ul class="s_menu7">
										<li><a href="sub5/sub5.php">도서기증</a></li>
										<li><a href="sub5/sub5.php">자원봉사신청</a></li>
										<li><a href="sub5/sub5.php">한줄감상</a></li>
										<li><a href="sub5/sub5.php">도서관에바란다</a></li>
									</ul>
									<ul class="s_menu8">
										<li><a href="sub2/sub2.php">공지사항</a></li>
										<li><a href="sub2/sub2.php">자주하는질문</a></li>
										<li><a href="sub2/sub2.php">공개자료실</a></li>
										<li><a href="sub2/sub2.php">이용시간</a></li>
										<li><a href="sub2/sub2.php">대출회원가입안내</a></li>
										<li><a href="sub2/sub2.php">대출안내</a></li>
										<li><a href="sub2/sub2.php">희망도서신청/조회</a></li>
										<li><a href="sub2/sub2.php">상호대차안내</a></li>
										<li><a href="sub2/sub2.php">타관도서 반납서비스</a></li>
										<li><a href="sub2/sub2.php">기타안내</a></li>
										<li><a href="sub2/sub2.php">도서관서비스헌장</a></li>
										<li><a href="sub2/sub2.php">신작/추천도서</a></li>
										<li><a href="sub2/sub2.php">뷰어다운로드</a></li>
										<li><a href="sub2/sub2.php">모바일앱 이용안내</a></li>
										<li><a href="sub4/sub4.php">도서관 휴관일</a></li>
									</ul>
									<ul class="s_menu9">
										<li><a href="sub3/sub3.php">인사말</a></li>
										<li><a href="sub3/sub3.php">연혁</a></li>
										<li><a href="sub3/sub3.php">조직도</a></li>
										<li><a href="sub3/sub3.php">자료현황</a></li>
										<li><a href="sub3/sub3.php">시설현황</a></li>
										<li><a href="sub3/sub3.php">도서관소식지</a></li>
										<li><a href="sub3/sub3.php">찾아오시는길</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li class="all_menu show_balloon" title="전체메뉴"><a href="#"><img src="./main/images/all_menu_size.png" alt="전체메뉴"/></a></li>
					</ul>
				</div>
			</div><!-- id="main_top" -->				