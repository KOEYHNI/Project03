<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>군포시립도서관</title>
	<link rel="stylesheet" href="../main/css/sub_common_style.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<script src="../main/js/jquery-1.9.0.min.js"></script>
	<script src="../main/js/html5div.js"></script>
	<script src="../main/js/html5shiv.js"></script>
	<script src="../main/js/common.js"></script>
	<script src="../main/js/login_count.js"></script>
	<script>
    jQuery(document).ready(function(){
        $('.m_menu > li').eq(0).addClass('on');
        $('.m_menu > li').eq(0).addClass('onn');
    });
    </script>	
	<meta name="Author" content="김인혁"/>
	<meta name="Keywords" content="김인혁,KimInHyeok, 포트폴리오, 김인혁 포트폴리오, portfolio, InHyeok's portfolio, 프로젝트, Project,  , 김 인 혁, 인혁 김, 인혁, rla, dls, gur, dlsgur"/>
	<meta name="Description" content="김인혁의 포트폴리오 페이지 입니다"/>
	<link rel="icon" type="image/png" sizes="32x32" href="../main/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../main/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../main/favicon/favicon-16x16.png">
<!--[if lt ie 9]> 
		<link rel="stylesheet" href="css/non-ie9.css" rel="stylesheet"/>
<![endif]-->	
</head>
<body>
	<div id="wrap">
		<header>
			<?php include "../main/header.php";?>
		</header>
		<section>
			<div id="menu_header">
				<div class="location">
					<ul>
						<li class="first"><a href="../main/index.php">HOME</a></li>
						<li><a href="sub6.php">&nbsp;>&nbsp;자료검색</a></li>
						<li><a href="sub6.php">&nbsp;>&nbsp;추천도서</a></li>
					</ul>	
				</div>
				<div class="menu_title">
					<h2>
						<strong>추천도서</strong>
					</h2>
				</div>
			</div> 
			<div id="contents_wrap">
				<aside>
					<div id="sub_left">
						<div class="side_menu">
							<a href="#" class="s_header">자료검색</a>
							<ul class="s_menu_list">
								<li><a href="#">통합검색</a></li>
								<li><a href="#">일반도서</a></li>
								<li><a href="#">아동도서</a></li>
								<li><a href="#">비도서</a></li>
								<li><a href="#">신착자료</a></li>
								<li><a href="sub6.php">추천도서</a></li>
								<li><a href="#">인기도서</a></li>
							</ul>
						</div>
					</div>
				</aside>
				<div id="sub_right">
					<div id="recommend_book">
						<div class="recmommend_header cf">
							<div class="header_box">
								<p>총 <span>12</span> 건</p>
								<select name="libray_option" class="libray_option">
									<option>2021년 9월 사서추천도서</option>								
									<option>2021년 8월 사서추천도서</option>								
									<option>2021년 7월 사서추천도서</option>								
									<option>2021년 6월 사서추천도서</option>								
									<option>2021년 5월 사서추천도서</option>								
									<option>2021년 4월 사서추천도서</option>								
									<option>2021년 3월 사서추천도서</option>								
									<option>2021년 2월 사서추천도서</option>								
									<option>2021년 1월 사서추천도서</option>								
								</select>
							</div>							
						</div>
						
						<div class="contents cf">
							<div class="content">
								<div class="contents_box contentsboxfirst"><p>1</p></div>
								<div class="img_box"><img src="../main/images/book11.jpg" alt="오래된 질문"/></div>					
								<div class="con_box_header">
									<div class="book_title"><a href="#">오래된 질문</a></div>
									<p>다큐멘터리 제작팀</p>
									<p>파주:다산초당:다산북스,2021</p>
								</div>
								<input type="checkbox" id="click1" name="click" />
								<label for="click1" class="cf">추천이유</label>
									<div class="content_wrap">
										<div class="review">“What is Life?” 사는 게 왜 이리 괴로울까? 나는 누구인가? 마음은 어떻게 다스리는가? 어떻게 살아야 잘 사는 걸까? 우리는 답을 얻기 위해 심리학 책을 보기도 하고, 과학적 접근을 해보기도 한다. 하지만 크게 나아지지 않고 계속 헤맨다. 이 책은 삶과 존재에 대한 4가지 근원적 질문에 대해 세계적인 생물학자와 한국 대표 스님들의 대화를 통해 이제껏 본 적 없던 새로운 철학적 메시지를 전하고 삶의 본질을 발견하는데 도움이 되는 방법을 제시한다.
										</div>
									</div>
							</div>
							<div class="content">
								<div class="contents_box"><p>2</p></div>
								<div class="img_box"><img src="../main/images/book12.jpg" alt="생각이 너무 많은 서른 살에게"/></div>					
								<div class="con_box_header">
									<div class="book_title"><a href="#">생각이 너무 많은 서른 살에게</a></div>
									<p>김은주</p>
									<p>서울:메이븐,2021</p>
								</div>
								<input type="checkbox" id="click2" name="click" />
								<label for="click2" class="cf">추천이유</label>
									<div class="content_wrap">
										<div class="review">
										미래에 대한 불안과 걱정으로 생각이 너무 많은 서른 살들에게 스마트하게 일하는 법과 후회 없는 삶을 사는 기술을 전하는 책이다. 아무 준비없이 스물일곱 살에 남편을 따라 미국으로 간 저자는 영어 한마디 제대로 못하는 실력에도 불구하고 수많은 도전과 실패 끝에 한국과 미국의 10개 글로벌 회사를 거쳐 구글 수석 디자이너가 되었고 그 경험을 바탕으로 서른 살들에게 말한다. 고민은 짧게, 행동은 빠르게! 서른 살은 마음먹은 만큼 성공할 수 있는 나이라고, ‘끝까지 나답게!’걸어가라고 조언한다.
										</div>
									</div>
							</div>
							<div class="content">
								<div class="contents_box"><p>3</p></div>
								<div class="img_box"><img src="../main/images/book13.jpg" alt="미드나잇 라이브러리"/></div>					
								<div class="con_box_header">
									<div class="book_title"><a href="#">미드나잇 라이브러리</a></div>
									<p>헤이그,매트</p>
									<p>서울:인플루앤셜,2021</p>
								</div>
								<input type="checkbox" id="click3" name="click" />
								<label for="click3" class="cf">추천이유</label>
									<div class="content_wrap">
										<div class="review">
										[내 인생에 다시 시작할 수 있는 기회가 주어진다면~?] 모든 삶을 다 포기 했을때 주인공 로라의 앞에 자정의 도서관이 나타납니다. 이 도서관에서는 후회의 순간으로 돌아가 다시 살아볼 수 있는 경험을 할 수 있는데요. 살면서 되돌리고 싶던 순간으로 돌아가면 과연 행복을 찾을 수 있을까요? 다시 후회할 일은 없을까요? 주인공 로라의 후회의 책을 통해 우리는 간접경험을 할 수 있습니다. 내 인생에 리셋 버튼이 필요하다고 느끼는 그 순간 정말 리셋이 되어 다시 살수 있는 삶을 가지면 행복할 수 있을 지, 미드나잇 라이브러리에서 경험해보세요
										</div>
									</div>
								</div>	
							<div class="content">
								<div class="contents_box"><p>4</p></div>
								<div class="img_box"><img src="../main/images/book14.jpg" alt="마음을 쓰는 몽당연필"/></div>					
								<div class="con_box_header">
									<div class="book_title"><a href="#">마음을 쓰는 몽당연필</a></div>
									<p>류미정</p>
									<p>파주:주니어딘딘,2021</p>
								</div>
								<input type="checkbox" id="click4" name="click" />
								<label for="click4" class="cf">추천이유</label>
									<div class="content_wrap">
										<div class="review">
										[바른 글씨가 성공한 인생을 만든다] 악필인 동우의 이야기 입니다. 동우는 바른 글씨 쓰기가 너무 어렵습니다. 그런데 동우 엄마는 바른 글씨가 성공한 인생을 만든다는 글귀를 보고 동우에게 학교에서 하는 바른 글씨 쓰기 대회에 나가서 상을 받지 못하면 용돈도 반으로 줄이고 게임 시간도 사라질 거라고 했습니다. 바른 글씨 쓰기 대회에서 너무 긴장해서 글씨 쓰기를 망친 동우는 공원에서 붓글씨 할아버지를 만나게 됩니다. 과연 동우의 글씨체는 어떻게 달라지게 되었을까요? 마음먹은대로 뭐든지 할 수 있는 친구들에게 이 책을 권합니다.
										</div>
									</div>
								</div>	
							<div class="content">
								<div class="contents_box"><p>5</p></div>
								<div class="img_box"><img src="../main/images/book15.jpg" alt="엄마 마음 설명서"/></div>					
								<div class="con_box_header">
									<div class="book_title"><a href="#">엄마 마음 설명서</a></div>
									<p>스태들런, 나오미</p>
									<p>파주:월북,2021</p>
								</div>
								<input type="checkbox" id="click5" name="click" />
								<label for="click5" class="cf">추천이유</label>
									<div class="content_wrap">
										<div class="review">
										엄마가 처음인 사람들을 위한 위로의 심리학 육아를 하면서 아무도 내 마음을 알아주지 않을 때, 끊임없이 칭얼거리는 아이가 미워졌을 때, 진정한 모성애가 내게 있기는 한 건지 고민될 때, 아이가 무엇을 원하는지 모르겠고 육아가 너무 힘들어서 포기하고 싶을 때 마음의 휴식처가 되어주는 책입니다.
										</div>
									</div>
							</div>
							<div class="content">
								<div class="contents_box"><p>6</p></div>
								<div class="img_box"><img src="../main/images/book16.jpg" alt="가짜 뉴스 팩트체크 하겠습니다"/></div>					
								<div class="con_box_header">
									<div class="book_title"><a href="#">가짜 뉴스 팩트체크 하겠습니다</a></div>
									<p>조아라</p>
									<p>고양:엠앤키즈:M&Kids, 2020</p>
								</div>
								<input type="checkbox" id="click6" name="click" />
								<label for="click6" class="cf">추천이유</label>
									<div class="content_wrap">
										<div class="review">
										진실하고 올바른 기자가 꿈인 어린이가 학급 뉴스 블로그를 운영하게 되면서 더 많은 독자들을 불러 모으기 위해 자극적인 가짜 뉴스를 만들어낸다. 이 가짜뉴스는 어떤 결과를 가져오게 될까요? 요즈음 우리 사회는 정보의 홍수 속에서 살고 있다. 책임감 없이 그저 대중이 원하고 듣고 싶어 하는 자극적인 이야기로 버무린 가짜 뉴스를 무분별하게 받아들일 때 어떤 일이 생기는지 어린이의 눈을 통해 보여준다..
										</div>
									</div>
							</div>
							<div class="content">
								<div class="contents_box"><p>7</p></div>
								<div class="img_box"><img src="../main/images/book17.gif" alt="노마드랜드"/></div>					
								<div class="con_box_header">
									<div class="book_title"><a href="#">노마드랜드</a></div>
									<p>브루더, 제시카</p>
									<p>서울:엘리,2021</p>
								</div>
								<input type="checkbox" id="click7" name="click" />
								<label for="click7" class="cf">추천이유</label>
									<div class="content_wrap">
										<div class="review">
										평생 쉼 없이 노동하는, 그러나 집 한 채 가질 수 없는 삶에 대하여 미국에서 고정된 주거지 없이 자동차에서 살며 저임금 떠돌이 노동을 하는 사람들의 삶을 한 노년 여성을 중심으로 밀도 있게 묘사한 논픽션. 이 ‘노마드’ 노동자들은 미국 전역을 돌아다니고 있는데, 주거비용을 감당할 수 없어 길 위의 삶을 택한 퇴직한 노년의 노동자들이 주를 이룬다. 평생을 끊임없이 일했고, 집 한 채 가질 수 없는 사람들. 이들의 이야기는 사회적 불의에 분노하고 문제를 절감하게 하는 한편 우리에게 꿈이란 무엇인가, 또 집은 무엇인가를 되묻게 만든다.
										</div>
									</div>
							</div>
							<div class="content">
								<div class="contents_box"><p>8</p></div>
								<div class="img_box"><img src="../main/images/book18.jpg" alt="바이러스 과학 수업"/></div>					
								<div class="con_box_header">
									<div class="book_title"><a href="#">바이러스 과학 수업</a></div>
									<p>섀들리히, 수잔</p>
									<p>파주:비룡소, 2020</p>
								</div>
								<input type="checkbox" id="click8" name="click" />
								<label for="click8" class="cf">추천이유</label>
									<div class="content_wrap">
										<div class="review">
										코로나19를 비롯한 바이러스 전반의 지식을 매우 과학적이고 체계적으로 정리한 책! 미생물의 정의부터 시작해“세균은 어떻게 생겼을까?”, “바이러스는 괴짜 생물?” 같은 바이러스와 세균의 기본 개념,“세균과 바이러스는 어떻게 우리 몸속에 침입할까?”, “백혈구 부대의 놀라운 방어법” 같은 우리 몸의 면역 시스템, 그 밖에도 백신, 예방 접종, 코로나19까지 중요한 바이러스 과학 지식을 단계별로 짚어 가며 깊이 있게 다룬다.
										</div>
									</div>
							</div>
							<div class="content">
								<div class="contents_box"><p>9</p></div>
								<div class="img_box"><img src="../main/images/book19.jpg" alt="오전의 살림 탐구"/></div>					
								<div class="con_box_header">
									<div class="book_title"><a href="#">오전의 살림 탐구</a></div>
									<p>정이숙</p>
									<p>서울:라이프앤페이지,2021</p>
								</div>
								<input type="checkbox" id="click9" name="click" />
								<label for="click9" class="cf">추천이유</label>
									<div class="content_wrap">
										<div class="review">
										정리정돈, 수납, 청소, 요리, 레스 웨이스트 실천법까지 살림의 모든 것을 총망라한 살림의 교과서. 반짝이는 아이디어와 함께 한결같이 정돈된 살림살이로 수많은 이들의 감탄을 자아내게 한 살림 분야 파워 인플루언서 ‘오전열한시’ 정이숙 작가가 자신만의 살림 노하우를 모두 담았습니다. 누구라도 쉽게 정리하고 쉽게 청소할 수 있는 효율적인 시스템, 간소하지만 건강까지 생각한 요리법, 레스 웨이스트(Less Waste) 실천팁 등 180가지 살림 아이디어들이 담겨 있습니다.
										</div>
									</div>
							</div>
							<div class="content">
								<div class="contents_box"><p>10</p></div>
								<div class="img_box"><img src="../main/images/book20.jpg" alt="오케스트라"/></div>					
								<div class="con_box_header">
									<div class="book_title"><a href="#">오케스트라</a></div>
									<p>누오보, 아발론</p>
									<p>서울:찰리북,2021</p>
								</div>
								<input type="checkbox" id="click10" name="click" />
								<label for="click10" class="cf">추천이유</label>
									<div class="content_wrap">
										<div class="review">
											&lt;오케스트라	&gt;는 다양한 악기가 어우러져 아름다운 하모니를 전하는 오케스트라의 구성과 배치, 악기와 연주자에 대해 상세히 일러주는 지식정보 그림책입니다. 바이올린, 비올라, 첼로, 더블베이스 같은 현악기를 시작으로 금관악기, 목관악기, 타악기, 기타 여러 악기들의 종류와 구조, 연주 원리를 알려 줍니다. 악보를 읽는 방법부터 지휘자, 연주자, 작곡가가 어떻게 소리를 만들고 어우러지게 화합하는지까지 담은 이 책은 독자들이 음악의 세계로 한 발짝 쉽고 재미있게 다가가도록 이끕니다.
										</div>
									</div>
							</div>		
						<div id="page" class="cf">
							<div class="prev">10페이지이전</div>
							<div class="prev2">이전</div>
							<div class="active">1</div>
							<div><a href="#">2</a></div>
							<div class="next">다음</div>
							<div class="next2">10페이지다음</div>
						</div><!-- id="page" -->	
							
						</div>
					</div>
				</div>
			</div>
			
		</section>
		<?php include "../main/footer.php";?>
</body>
</html>		