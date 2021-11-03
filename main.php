			<div id="contents_wrap" >
				<h2>메인콘텐츠</h2>
					<div id="intro_contents">
						<div id="intro_search">
							<div class="intro_box">
								<div class="login_box">
									<div class="login_img">
										<img src="./main/images/login_icon01.png" alt="로그인을 해주세요"/>
									</div>
									<div class="login_top">
										<form name="login_form" method="post" action="login.php">
											<ul class="input">
												<li class="login loginicon">
													<img src="./main/images/user.png" alt="ID"/>
													<input type="text" name="id" class="guideText" value="아이디" >
												</li>
												<li class="password loginicon"><img src="./main/images/lock.png" alt="PW"/><input type="password" id="pass" name="pass" class="guideText" value="비밀번호"/></li>
											</ul>
										</form>
									</div>	
									<div class="login_check">
										<input type="checkbox" name="saveId" id="saveId" value="ID저장" />
										<label for="saveId">&nbsp;ID저장&nbsp;&nbsp;</label>
										<input type="checkbox" name="secure" id="secure" value="보안접속" />
										<label for="secure">&nbsp;보안접속</label>
									</div>
									<div class="button">
										<span><p onclick="check_input()">로그인</p></span>
									</div>
									
								</div>
								<div class="search_icon">
									<ul class="s_icon1">
										<li><a href="#">신간 도서</a></li>
									</ul>
									<span class="icon_bar">|</span>
									<ul class="s_icon2">
										<li><a href="sub6/sub6.php">추천 도서</a></li>
									</ul>
									<span class="icon_bar">|</span>
									<ul class="s_icon3">
										<li><a href="#">인기 도서</a></li>
									</ul>
								</div>
							</div>
							
							<div class="intro_select">
								<ul class="select_header">
									<li><a href="#" class="on">전체</a></li>
									<li><a href="#">중앙</a></li>
									<li><a href="#">산본</a></li>
									<li><a href="#">당동</a></li>
									<li><a href="#">대야</a></li>
									<li><a href="#">어린이</a></li>
									<li><a href="#">부곡</a></li>
									<li><a href="#">이동</a></li>
								</ul>
							</div>
							<div class="search_box">
								<span>추천도서</span>
								<p class="rc_book">
									<a href="sub6/sub6.php" style="top:0%;">오래된 질문</a>
									<a href="sub6/sub6.php">생각이 너무 많은 서른 살에게</a>
									<a href="sub6/sub6.php">미드나잇 라이브러리</a>
									<a href="sub6/sub6.php">마음을 쓰는 몽당연필</a>
									<a href="sub6/sub6.php">엄마 마음 설명서</a>
									<a href="sub6/sub6.php">가짜 뉴스 팩트체크 하겠습니다.</a>
									<a href="sub6/sub6.php">노마드 랜드</a>
									<a href="sub6/sub6.php">바이러스 과학 수업</a>
									<a href="sub6/sub6.php">오전의 살림 탐구</a> 
									<a href="sub6/sub6.php">오케스트라</a>
								</p>
								<ul class="search_bar">
									<li><input type="text" name="search_tent" class="search_text guideText" value="서명, 저자, 키워드 등 검색어를 입력하세요." ></li>
									<li><input type="button" name="search_ntn" class="btn_search" value="검색" ></li>
									<!-- <li class="detail_search"><a href="#">상세<br/>검색</a></li> -->
								</ul>
								<p class="in_search">도서관명을 선택하시면 <b>도서관별 검색</b>이 가능합니다.</p>
							</div>
						</div>
						<div class="animation_canvas">
							<div class="slider_panel">
								<img src="./main/images/bn43.jpg" class="slider_img" style="left: 0;"alt="메인베너1"/>
								<img src="./main/images/bn2.jpg" class="slider_img" alt="메인베너2"/>
								<img src="./main/images/bn3.jpg" class="slider_img" alt="메인베너3"/>
								<!-- <img src="./main/images/bn4.jpg" class="slider_img" alt="메인베너4"/> -->
								<img src="./main/images/bn5.jpg" class="slider_img" alt="메인베너5"/>
								<img src="./main/images/bn6.jpg" class="slider_img" alt="메인베너6"/>
								<!-- <img src="./main/images/bn7.jpg" class="slider_img" alt="메인베너7"/> -->
								<img src="./main/images/bn8.jpg" class="slider_img" alt="메인베너8"/> 
								<!-- <img src="./main/images/bn9.jpg" class="slider_img" alt="메인베너9"/> -->
							</div>   
							<div class="ar_pannel">
								<span class="left"><a href="#" onclick="return true"><img src="./main/images/ar_left.png" alt="이전"/ width="50"></a></span>
								<span class="right"><a href="#" onclick="return true"><img src="./main/images/ar_right.png" alt="다음"width="50"/></a></span>
							</div>
							<div class="control_panel">
								<div class="control_button b_first b_firston"></div>
								<div class="control_button"></div>
								<div class="control_button"></div>
								<!-- <div class="control_button"></div> -->
								<div class="control_button"></div>
								<div class="control_button"></div>
								<div class="control_button"></div>
								<!-- <div class="control_button"></div>
								<div class="control_button"></div> -->
							</div>
							<div class="stop_button start_button b_off"></div>
						</div>		
					</div><!-- "intro_contents" -->
					<div id="center_contents">
						<div id="center_widjet">
							<div id="center_day" class="fl">
								<h2>휴관일</h2>
									<p>
										<select name="day_option" id="day_option" title="도서관목록" class="fl" >		
										<option selected="selected">중앙도서관</option>	<option>당동도서관</option>
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
									</p>
									<button type="button" value="prev" class="day_btn_pre fl">이전 달 보기</button>
									<strong class="fl">2021년 9월<br/><span>쉬는날</span></strong>
									<button type="button" value="next" class="day_btn_next ">다음 달 보기</button>
									<span class="close_day">3</span>
									<span class="close_day">10</span>
									<span class="close_day">17</span>
									<span class="close_day">20</span>
									<span class="close_day">21</span>
									<span class="close_day">22</span>
									<span class="close_day">24</span>
									<a href="sub4/sub4.php">달력<br/>보기</a>
							</div>
							<div id="center_library">
								<a href="#" class="hope_bn fl">
									<strong>도서관에 바란다
									</strong><span>여러분에게 귀 기울이는 군포시도서관</span>
								</a>
								<a href="#" class="hope_btn"></a>
							</div>
						</div>
					</div><!-- id="center_contents" -->
					<div id="center_menu_box">
						<div id="menu_box">
							<ul class="intro_icon">
								<li class="intro_icon1"><a href="#" class="i_icon1"><span></span>대출연장/조회</a></li>
								<li class="intro_icon2"><a href="#" class="i_icon2"><span></span>희망도서 신청/조회</a></li>
								<li class="intro_icon3"><a href="#" class="i_icon3"><span></span>문화행사신청</a></li>
								<li class="intro_icon4"><a href="#" class="i_icon4"><span></span>디지털자료실 예약</a></li>
								<li class="intro_icon5"><a href="sub8/sub8.php" class="i_icon5"><span></span>열람실좌석현황</a></li>
								<li class="intro_icon6"><a href="sub7/sub7.php" class="i_icon6"><span></span>전자도서관</a></li>
								<li class="intro_icon7"><a href="#" class="i_icon7"><span></span>자원봉사신청</a></li>
								<li class="intro_icon8"><a href="#" class="i_icon8"><span></span>누리천문대</a></li>
							</ul>
						</div>
					</div>
					<div id="end_contents">
						<div id="end_left">
							<div id="end_notice">
								<ul class="tab">
									<li class="active"><a href="#">공지사항</a></li>
									<li><a href="#">문화행사</a></li>
									<div class="bar">|</div>
								</ul>
								<div class="tab_content">
									<div class="board">
										<ul>
											<li><a href="#" class="im">[중앙]제 20기 문예창작실 입실 작가 모집 공고</a><span>2021/09/07</span></li>
											<li><a href="#" class="im">[중앙][독서의 달 행사] 온라인 원화전시 안내</a><span>2021/09/01</span></li>
											<li><a href="#" class="im">[대야] 누리천문대 천체관측 여행이야기 3탄. "미국 서부 천문대 여행기" 특별강좌 안내</a><span>2021/08/27</span></li>
											<li><a href="#" class="im">[산본]산본도서관 리모델링 일정 안내</a><span>2021/08/12</span></li>
											<li><a href="#">군포시 도서관 부분개관 및 방역시간 안내(2021.7.13.~, 산본도서관 휴관)</a><span>2021/07/13</span></li>
											<li><a href="#" class="im">[당동]"나에게 남은 시간이 단 6개월이라면?" 이벤트 참여자2 #이별 #만화</a><span>2021/09/08</span></li>
											<li><a href="#">[작은도서관버드나무에부는바람] 독서문화프로그램 안내</a><span>2021/09/07</span></li>
										</ul>
										<div class="more">
												<a href="#">더보기</a>
										</div>
									</div>
									<div class="event">
										<div class="event_option_bg">
											<select name="event_option" class="event_option" title="도서관목록">
												<option selected="selected">중앙도서관</option>	<option>당동도서관</option>
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
										</div>
										<ul>
											<li><a href="#"><strong>청년, 여행을 떠나다</strong><span>접수기간 : 2021.09.06 ~ 2021.09.26</span></a></li>
											<li><a href="#"><strong>(추가접수)(문학으로 만나는 나, 너 그리고 우리를 알아가는) 공감소통 대화법</strong><span>접수기간 : 2021.09.02 ~ 2021.09.15</span></a></li>
											<li class="last"><a href="#"><strong>(추가접수)어린이 역사탐험대</strong><span>접수기간 : 2021.09.02 ~ 2021.09.15</span></a></li>
										</ul>
										<div class="more">
												<a href="#">더보기</a>
										</div>
									</div>
								</div>
							</div>
							
						</div><!-- id="end_left" -->
						<div id="end_right">
							<div class="book_banner">
								<div class="bookList">
									<ul>
										<li class="slideshow">
											<a href="sub6/sub6.php"><span><img src="./main/images/book11.jpg" width="147" height="206" alt="book1" class="frame"/><span class="hit"></span></span></a>
											<a href="sub6/sub6.php" class="alt"><span><img src="./main/images/book12.jpg" width="147" height="206" alt="book1" class="frame"/><span class="hit"></span></span></a>
											<a href="sub6/sub6.php" class="alt"><span><img src="./main/images/book13.jpg" width="147" height="206" alt="book1" class="frame"/><span class="hit"></span></span></a>
											<a href="sub6/sub6.php" class="alt"><span><img src="./main/images/book14.jpg"width="147" height="206" alt="book1" class="frame"/><span class="hit"></span></span></a>
										</li>
										<li class="slideshow second">
											<a href="sub6/sub6.php"><span><img src="./main/images/book15.jpg" width="147" height="206" alt="book2" class="frame"/><span class="hit"></span></span></a>
											<a href="sub6/sub6.php" class="alt"><span><img src="./main/images/book16.jpg" width="147" height="206" alt="book2" class="frame"/><span class="hit"></span></span></a>
											<a href="sub6/sub6.php" class="alt"><span><img src="./main/images/book17.gif" width="147" height="206" alt="book2" class="frame"/><span class="hit"></span></span></a>
										</li>
										<li class="slideshow last">
											<a href="sub6/sub6.php"><span><img src="./main/images/book18.jpg" width="147" height="206" alt="book3" /><span class="hit"></span></span></a>
											<a href="sub6/sub6.php" class="alt"><span><img src="./main/images/book19.jpg" width="147" height="206" alt="book3" /><span class="hit"></span></span></a>
											<a href="sub6/sub6.php" class="alt"><span><img src="./main/images/book20.jpg" width="147" height="206" alt="book3" /><span class="hit"></span></span></a>
										</li>
									</ul>
									<a href="sub6/sub6.php" class="bn_title">추천 도서</a>
								</div>
							</div>
						</div>	
						<div id="bot_contents">
							<div id="promotion_wrap" class=" cf">
								<div class="promo_box1 cf">
									<div class="promo_box1_theme cf">
										<h3 class="p_title cf">문화행사</h3>
										<a href="#"><img src="./main/images/bn3.jpg" width="280" height="280" alt="문화행사 썸네일이미지"/></a>
										<p class="promo_box_bar cf">문화행사 더보기</p>
										<div class="promo_box1_contentsImg cf">
											<div class="promo_box1_content1 fl">
												<a href="#"><img src="./main/images/ob2.jpg" width="280" height="280" alt="문화행사 서브1"/></a>
												<p>『학창시절하면 어떤 게 떠오르세요?』</p>
											</div>
											<div class="promo_box1_content2 fl">
												<a href="#"><img src="./main/images/ob3.jpg" width="280" height="280" alt="문화행사 서브1"/></a>
												<p>『이럴 땐 어떻게 해야 할까요?』</p>
											</div>
											<div class="promo_box1_content3 fl">
												<a href="#"><img src="./main/images/ob4.jpg" width="280" height="280" alt="문화행사 서브1"/></a>
												<p>『나이 들수록 인생이 점점 재밌어지네요』007081</p>
											</div>
										</div>
									</div>
									
								</div>
								<div class="promo_box2 cf">
									<div class="promo_box2_theme cf">
										<h3 class="p_title cf">Instagram</h3>
										<a href="https://www.instagram.com/p/CUwEY7SBhaX/"target="_blank"><img src="./main/images/igb2.jpg" width="280" height="280" alt="Instagram 썸네일이미지"/></a>
										<p class="promo_box_bar cf">Instagram 더보기</p>
									</div>
									<div class="promo_box2_contentsImg cf">
										<div class="promo_box2_content1 fl">
											<a href="
											https://www.instagram.com/p/CUpBmIWhcM4/" target="_blank"><img src="./main/images/igb1.jpg" width="280" height="280" alt="Instagram 사진1"/>
											</a>
											<p>자연밥상 뽐내기 이벤트</p>
										</div>
										<div class="promo_box2_content2 fl">
											<a href="https://www.instagram.com/p/CUq026JhLL-/" target="_blank"><img src="./main/images/igb3.jpg" width="280" height="280" alt="Instagram 사진1"/>
											</a>
											<p>마음을 울리는 오늘의 시 한 편</p>
										</div>
										<div class="promo_box2_content3 fl">
											<a href="https://www.instagram.com/p/CUtTRZMhGzZ/" target="_blank"><img src="./main/images/igb4.jpg" width="280" height="280" alt="Instagram 사진1"/></a>
											<p>&lt;요즘 아이들 마음고생의 비밀&gt;</p>
										</div>
									</div>
								</div>
								<div class="promo_box3 cf">
									<div class="promo_box3_theme cf">
										<h3 class="p_title cf">YouTube </h3>
										<iframe width="280" height="280" src="https://www.youtube.com/embed/EmGKYcOkZ7s?start=3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										<p class="promo_box_bar cf">YouTube 더보기</p>
									</div>
									<div class="promo_box3_contentsImg cf">
										<div class="promo_box3_content1 fl">
											<iframe width="280" height="280" src="https://www.youtube.com/embed/W_CUqETDxxQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										<p>"힘들어 하는 자녀를 어떻게 도와줄까?"</p>
										</div>
										<div class="promo_box3_content2 fl">
											<iframe width="280" height="280" src="https://www.youtube.com/embed/avHtDVcOaz8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										<p>"토마토 가스파초&애플민트 스쿼시"</p>
										</div>
										<div class="promo_box3_content3 fl">
											<iframe width="280" height="280" src="https://www.youtube.com/embed/U1u_v1gdXQo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										<p>"꽃과 정원의 문화사" 특별강연</p>
										</div>
									</div>
								</div>
								<div class="promo_box4 cf">
									<div class="promo_box4_theme cf">
										<h3 class="p_title cf">오늘의 도서관</h3>
										<div class="weather_title"><span class="kmonth">월 </span><span class="kdate">일 </span>군포시 날씨</div>
										<div class="kicon"></div>
										<div class="weather_content">
											<span class="kTemp">˚C</span>
											<span class="kminTemp">최저 : </span>
											<br/>
											<span class="kmaxTemp">&nbsp;&nbsp;최고 : </span>
											<br/><br/>
											<span class="kDeg"></span>&nbsp;<span class="kSpd"></span>
											
											<span class="kHumi">%</span>
										</div>
										<p class="promo_box_bar cf">오늘의 도서관 더보기</p>
									</div>
									<div class="promo_box4_contentsImg cf">
										<div class="promo_box4_content1 fl">
											<div class="calendar">
												<table class="scriptCalendar">
													<thead>
														<tr>
															<td colspan="2"onClick="prev();" style="cursor:pointer;"class="arrow"><img src="./main/images/day_pre.png" alt="prev"/></td>
															<td colspan="3" class="m_title">
																<span id="calYear">YYYY</span>년
																<span id="calMonth">MM</span>월
															</td>
															<td colspan="2" onClick="next();" style="cursor:pointer;"class="arrow"><img src="./main/images/day_next.png" alt="next"/></td>
														</tr>
														<tr class="day_title">
															<td class="red"><font color ="#eb3b3e">일</td><td>월</td><td>화</td><td>수</td><td>목</td><td>금</td><td class="blue"><font color ="#2150c7">토</td>
														</tr>
													</thead>
													<tbody class="cal_day">
													
													</tbody>
												</table>
											</div>
										</div>
										<div class="promo_box4_content2 fl">
											<h3 class="p_title cf">열람실좌석현황</h3>
											<table class="seats_table">
												<thead>
													<tr>
														<th>도서관</th>
														<th>열람실</th>
														<th>좌석수</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th>당동도서관</th>
														<td>4층 열람실</td>
														<td>206</td>
													</tr>
													<tr>	
														<th scope="row" rowspan="2">부곡도서관</th>
														<td>3층 노트북실</td>
														<td>34</td>
													</tr>
													<tr>
														<td>3층 일반열람실</td>
														<td>84</td>
													</tr>
												</tbody>
											</table>
										</div>
										
									</div>
								</div>
							</div>
						</div>					
					</div><!-- "end_contents" -->
					<div id="end_banner">
						<div class="banner_box">
							<span class="f_left"><a href="#" onclick="return true"><img src="./main/images/ar_left.png" alt="이전"/ width="50"></a></span>
							
							<span class="f_right"><a href="#" onclick="return true"><img src="./main/images/ar_right.png" alt="다음"/ width="50"></a></span>
							<div id="f_banner_box">
								<ul>
									<li class="thumb"><a href="#"><img src="./main/images/end_banner1.jpg" alt="하단배너1"/></a></li>
									<li class="thumb m5"><a href="#"><img src="./main/images/end_banner2.jpg" alt="하단배너2"/></a></li>
									<li class="thumb m5"><a href="#"><img src="./main/images/end_banner3.jpg" alt="하단배너3"/></a></li>
									<li class="thumb m5"><a href="#"><img src="./main/images/end_banner4.jpg" alt="하단배너4"/></a></li>
									<li class="thumb"><a href="#"><img src="./main/images/end_banner5.jpg" alt="하단배너5"/></a></li>
									<li class="thumb m5"><a href="#"><img src="./main/images/end_banner6.jpg" alt="하단배너6"/></a></li>
									<li class="thumb m8"><a href="#"><img src="./main/images/end_banner7.jpg" alt="하단배너7"/></a></li>
									<li class="thumb m8"><a href="#"><img src="./main/images/end_banner8.jpg" alt="하단배너8"/></a></li>
									<li class="thumb m6"><a href="#"><img src="./main/images/end_banner9.jpg"  alt="하단배너9"/></a></li>
									<li class="thumb"><a href="#"><img src="./main/images/end_banner10.png" alt="하단배너10"/></a></li>
									<li class="thumb m5"><a href="#"><img src="./main/images/end_banner11.jpg" alt="하단배너11"/></a></li>
									<li class="thumb m15"><a href="#"><img src="./main/images/end_banner12.jpg" class="m10" alt="하단배너12"/></a></li>
									<li class="thumb m5"><a href="#"><img src="./main/images/end_banner13.png" alt="하단배너13"/></a></li>
									<li class="thumb"><a href="#"><img src="./main/images/end_banner14.jpg" alt="하단배너14"/></a></li>
									<li class="thumb m5"><a href="#"><img src="./main/images/end_banner15.jpg" alt="하단배너15"/></a></li>
									<li class="thumb m5"><a href="#"><img src="./main/images/end_banner16.jpg" alt="하단배너16"/></a></li>
									<li class="thumb m10"><a href="#"><img src="./main/images/end_banner17.jpg" alt="하단배너17"/></a></li>
									<li class="thumb m7"><a href="#"><img src="./main/images/end_banner18.jpg" alt="하단배너18"/></a></li>
									<li class="thumb m10"><a href="#"><img src="./main/images/end_banner19.jpg" alt="하단배너19"/></a></li>
									<li class="thumb m7"><a href="#"><img src="./main/images/end_banner20.jpg" alt="하단배너20"/></a></li>
								</ul>
							</div>
						</div>
					</div>
			</div><!-- id="contents_Wrap" -->