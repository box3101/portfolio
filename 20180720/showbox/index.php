<!DOCTYPE html >
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" charset="utf-8"/>
	<title> showbox </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/common.css" />
	<link rel="stylesheet" href="css/tb.css" />
	<link rel="stylesheet" href="css/swiper.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="http://vjs.zencdn.net/6.6.3/video-js.css" rel="stylesheet">
	<script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/mainpopup.js"></script>
	<script src="js/main.js"></script>
	<script src="js/swiper.min.js"></script>
</head>
<body>
	<script>
	  var swiper = new Swiper('.swiper-container', {
	    scrollbar: '.swiper-scrollbar’,
	    direction: 'horizontal’, // 슬라이드 진행방향은 수평(vertical하면 수직으로 움직임)
	    slidesPerView: 1, // 한번에 보이는 슬라이드 갯수
	    spaceBetween: 20, // 슬라이드 사이의 간격 px 단위
	    mousewheelControl: true // 마우스 휠로 슬라이드 움직임
	    // 더 외 추가 가능 요소들
    });
</script>

	<?php
		include 'header.php';
	 ?>


	<div class="visualWrap">
		<div id="slider">

			<ul class="panel">
				<li class="panel1 on">01</li>
				<li class="panel2">02</li>
				<li class="panel3">03</li>
				<li class="panel4">04</li>
			</ul>

			<ul class="navi">
				<li><a href="#" class="on"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
			</ul>

			<div class="btnSet">
				<a href="#" class="prev"></a>
				<a href="#" class="next"></a>
			</div>

			<div class="toggle">
				<a href="#" class="start">start</a>
				<a href="#" class="stop">stop</a>
			</div>

	</div>
		<!-- visual e -->
	</div>
	<!-- visualWrap e -->

	<div id="content">
		<section class="conTop">
			<div class="con1">
				<h2>
					IN THEATERS
				</h2>
				<div class="con11">
					<video controls="controls"
					       class="video-js vjs-default-skin" data-setup="{}" alt="조선명탐정 예고 ">
						 <source src="video/조선명탐정.mp4" type="video/mp4">
			 	  </video>
				</div>
				<div class="con12">
					<dl>
						<dt>조선 명탐정</dt>
						<dd>
							공포 | 2018. 03 .03  open | 126분 <br>
					    감독 : 김석윤

							<span>
								기이한 불에 사람들이 타 죽는 미스터리한 사건이 계속되자 명탐정 김민과 파트너 서필이 다시 뭉친다. <br>
								그러던 중 사건 현장에서 자꾸 의문의 여인과 마주치게 되고, <br>
 								그녀와 관련되어 있음을 느낀 명탐정 콤비는 여인과 함께 사건을 쫓기 시작한다.
					 </dd>
					</dl>
					<ul class="con12Btn">
						<li>
							<a href="#!" class="heart" onclick="alert('로그인후 이용하실수 있습니다.')"
							title="팝업창이동">영화 기대중 클릭</a>
						</li>
						<li>
							<a href="#!" class="trailer" title="동영상페이지로이동">동영상 바로가기</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- con1 e -->
			<div class="con2">
				<h2>
					QUICK MENU
				</h2>
				<ul>
					<li><a href="#!" class="nowmore">
					  <p>MOVIES IN THEATER <i class="fas fa-angle-double-right"></i></p>
					</a></li>
					<li><a href="#!" class="preview">
						<p>PREVIEW EVENT <i class="fas fa-angle-double-right"></i></p>
					</a></li>
					<li><a href="#!" class="ticket">
						<p>BUY TICKEES <i class="fas fa-angle-double-right"></i></p>
					</a></li>
				</ul>
			</div>
			<!-- con2 e -->
		</section>
		<!-- conTop e -->

	  <section class="conMiddleWrap">
			<div class="conMiddle">
	  	<div class="con3">
	  		<h2>COMING SOON</h2>
				<ul class="arrow">
					<li><a href="#!" class="left" title="다른 영화리스트보기"><i class="fas fa-angle-left"></i></a></li>
					<li><a href="#!" class="right" title="다른 영화리스트보기"><i class="fas fa-angle-right"></i></a></li>
				</ul>
				<ul class="list">
					<li>
						<div class="con31">지금 만나러 갑니다 포스터 보기</div>
						<div class="con32">
							<dl>
								<dt>지금 만나러 갑니다</dt>
								<dd>
									액션 | 2018. 03 .14  open | 131분 <br>
							    감독 : 이장훈
									<span>
										비가 오는 날 다시 돌아오겠다는 믿기 힘든 약속을 남기고 세상을 떠난 ‘수아’. <br>
									 그로부터 1년 뒤 장마가 시작되는 어느 여름 날, <br>
									 세상을 떠나기 전과 다름없는 모습의 ‘수아’가 나타난다. <br>
									 하지만 ‘수아’는 ‘우진’이 누구인지조차도 기억하지 못한다.
							 </dd>
							</dl>
							<ul class="con12Btn">
								<li>
									<a href="#!" class="heart" onclick="alert('로그인후 이용하실수 있습니다.')">영화 기대중 클릭</a>
								</li>
								<li>
									<a href="#!" class="trailer" title="동영상페이지로이동">동영상 바로가기</a>
								</li>
							</ul>
						</div>
				<!-- con32 e -->
					</li>
					<li>
						<div class="con31 two">레디 플레이어 원 포스터 보기</div>
						<div class="con32">
							<dl>
								<dt>레디 플레이어 원</dt>
								<dd>
									액션 | 2018. 03 .28  open | 140분 <br>
							    감독 : 스티븐 스필버그
									<span>
										2045년, 암울한 현실과 달리 가상현실 오아시스(OASIS)에서는 <br>
									 누구든 원하는 캐릭터로 어디든지 갈 수 있고, 뭐든지 할 수 있고 상상하는 모든 게 가능하다. <br>
									 웨이드 와츠(타이 쉐리던) 역시 유일한 낙은 대부분의 사람들이 하루를 보내는 오아시스에 접속하는 것이다.

							 </dd>
							</dl>
							<ul class="con12Btn">
								<li>
									<a href="#!" class="heart" onclick="alert('로그인후 이용하실수 있습니다.')"
									title="팝업창이동">영화 기대중 클릭</a>
								</li>
								<li>
									<a href="#!" class="trailer" title="동영상페이지로이동">동영상 바로가기</a>
								</li>
							</ul>
						</div>
				<!-- con32 e -->
					</li>
				</ul>
	  	</div>
			<!-- con3 e -->
	  	<div class="con4">
					<h2>MOVIE NEWS</h2>
					<div class="border">
						<div class="con41">
						 <div class="img">7년의밤 포스터</div>
						 <dl>
						 	<dt> [7년의 밤] <span>2018.03.28</span></dt>
							<dd>

							 가족이 지낼 사택을 보러 가는 날,  <br>
							 안개가 짙게 깔린 세령마을 입구에서 길을 잃고 헤매던 중 갑자기 뛰어나온 여자 아이를 쳐 교통사고를 낸다.

							</dd>
						 </dl>
						</div>
						<div class="con42">
						 <div class="img img2">바람 바람 바람포스터</div>
						 <dl>
							 <dt>[바람 바람 바람] <span>2018.04.05</span></dt>
							 <dd>
								 "왜 사랑을 해도, 결혼을 해도 외로운 거죠?" 	 끝도 없이 사랑 받고 싶은  	철부지  <br>
						어른들이 온다! 	'미영'의 남편 '봉수'를 ‘바람’의 세계로 인도한다.

							 </dd>
						 </dl>
						</div>
				</div>
			</div>
			<!-- con4 e -->
		</div>
	  </section>
	  <!-- conMiddle e -->

		<section class="conBottom">
			<div class="con5">
				<h2>
					SOCIAL UPDATES
				</h2>
				<div class="fblike">
					<div class="img">페이스북사진1</div>
					<div class="img2">페이스북사진2</div>
					<div class="snsContent">
						<ul>
              <li>
                  <span>쇼박스(SHOWBOX)</span>님이 사진을 4장 추가하셨습니다.
                  <span class="date">4월 22일 오전 10:00</span>
                  <p>웃겨주다가 듬직하다가 ㅋㅋ 이렇게 유쾌한 맏형 보았나요~?</p>
              </li>
              <li>
                  <span>쇼박스(SHOWBOX)</span>님이 새로운 동영상을 추가했습니다.
                  <span class="date">4월 20일 오후 09:00</span>
                  ‪<p>#실시간 현장.avi 오늘 여기 오신분들 심장 다 떨어졌다면서요..?ㅠㅠ #‎황정민‬ ‪#‎강동원‬ ‪#‎심쿵팬서비스‬</p>
              </li>
              <li>
                  <span>쇼박스(SHOWBOX)</span>
                  <span class="date">4월 21일 오전 10:00</span><p>눈 깜빡할 사이에 매.진.주.의..!</p>
              </li>
          </ul>
					</div>
				</div>
			</div>
			<!-- con5 e -->
			<div class="con6">
				<h2>
					RECRULITING
				</h2>
				<div class="recruit">
					<ul>
            <li><a href="sub4/sub4_2_1.php"><span>[합격발표]</span> 한국영화팀 1차 합격자 합격자발표 안내</a></li>
            <li><a href="sub4/sub4_2_1.php"><span>[합격발표]</span> (주)쇼박스 배급팀, 한국영화팀 1차 합격자 발표 안내</a></li>
            <li><a href="sub4/sub4_2_1.php"><span>[채용공고]</span> ㈜쇼박스 인턴 및 경력채용공고</a></li>
            <li><a href="sub4/sub4_2_1.php"><span>[합격발표]</span> (주)쇼박스 기획/총무팀, 홍보팀 1차 합격자 발표 완료</a></li>
            <li><a href="sub4/sub4_2_1.php"><span>[채용공고]</span> ㈜쇼박스 인턴 및 경력 채용공고 마감</a></li>
        </ul>
				</div>
			</div>
			<!-- con6 e -->
			<div class="con7">
				<h2>
					EVENT
				</h2>
				<ul class="banner">
					<li>
								<P>
							 쇼박스 소식 구독하고 <br>
							 가장 빠른 영화소식을 받아보세요! <br>
							 	</P>
							 <form action="" method="post">
								 <fieldset>
									 <legend class="hidden">메일 입력</legend>
										 <label for="email" class="hidden">메일입력칸</label>
										 <input type="text" id="email" value="이메일을 입력하세요">
										 <button type="submit">검색</button>
								 </fieldset>
							 </form>
					</li>
					<li>
						<div class="submit">


					 	</div>
					</li>
				</ul>
			</div>
			<!-- con7 e -->
    </section>
		<!-- conBottom e	 -->
		<section class="historyWrap">
			<div class="left"></div>
			<div class="right"></div>
			<div class="history">
				<h3></h3>
				<ul class="history-contents">
					<li><a href="#!" class="content1">
						<ul class="thumb">
							<li><a href="#!" class="heart" onclick="alert('로그인후 이용하실수 있습니다.')"></a></li>
							<li><a href="#!" class="trailer" title="동영상페이지로이동"></a></li>
						</ul>
					</a></li>
					<li><a href="#!" class="content2">
						<ul class="thumb">
							<li><a href="#!" class="heart" onclick="alert('로그인후 이용하실수 있습니다.')"></a></li>
							<li><a href="#!" class="trailer" title="동영상페이지로이동"></a></li>
						</ul>
					</a></li>
					<li><a href="#!" class="content3">
						<ul class="thumb">
							<li><a href="#!" class="heart" onclick="alert('로그인후 이용하실수 있습니다.')"></a></li>
							<li><a href="#!" class="trailer" title="동영상페이지로이동"></a></li>
						</ul>
					</a></li>
					<li><a href="#!" class="content4">
						<ul class="thumb">
							<li><a href="#!" class="heart" onclick="alert('로그인후 이용하실수 있습니다.')"></a></li>
							<li><a href="#!" class="trailer" title="동영상페이지로이동"></a></li>
						</ul>
					</a></li>
					<li><a href="#!" class="content5">
						<ul class="thumb">
							<li><a href="#!" class="heart" onclick="alert('로그인후 이용하실수 있습니다.')"></a>/li>
							<li><a href="#!" class="trailer" title="동영상페이지로이동"></a></li>
						</ul>
					</a></li>
					<li><a href="#!" class="content6">
						<ul class="thumb">
							<li><a href="#!" class="heart" onclick="alert('로그인후 이용하실수 있습니다.')"></a></li>
							<li><a href="#!" class="trailer" title="동영상페이지로이동"></a></li>
						</ul>
					</a></li>
					<li><a href="#!" class="content7">
						<ul class="thumb">
							<li><a href="#!" class="heart" onclick="alert('로그인후 이용하실수 있습니다.')"></a></li>
							<li><a href="#!" class="trailer" title="동영상페이지로이동"></a></li>
						</ul>
					</a></li>
					<li><a href="#!" class="content8">
						<ul class="thumb">
							<li><a href="#!" class="heart" onclick="alert('로그인후 이용하실수 있습니다.')"></a></li>
							<li><a href="#!" class="trailer" title="동영상페이지로이동"></a></li>
						</ul>
					</a></li>
				</ul>
				<h3></h3>
			</div>
		</section>
		<!-- historyWrap e -->
	</div>
	<!-- contents e -->

	<?php
		include 'footer.php'
	 ?>

	 <div id="showimage" style="z-index:99; width:364px; position: absolute; left: 59%; top: 150px;">
		 <script language="javascript" type="text/javascript">
			 function closeWin(){
					var chk = document.getElementById('Notice')
					if ( chk.checked ) {
								setCookie( "Notice", "done" , 1); //1이란 숫자는 1일간 안보임을 뜻합니다. 날짜는 자신에 맞게 수정하세요
					 }
			 }
			if ( getCookie( "Notice" ) == "done" ) {
					hidebox();
			}
		</script>
			<table summary="공지사항 : 저작권에 대한 공지">
				<caption class="hidden">공지사항</caption>
				<tr>
					<td>
						<img src="popup/pop.png" alt="본 사이트는 상업적 목적이 아닌 개인 포트폴리오 용도로 만들어졌습니다. 홈페이지의 일부 내용과 기타 이미지 등은 그 출처가 따로 있음을 밝힙니다.">
					</td>
				</tr>
				<tr>
					<td style="height: 15px;">
						<p style="font:bold 12px/1px; color: #aaa; margin-top: 5px; text-indent: 163px;">
             <input type="checkbox" id="Notice"><label for="notice">오늘은 이창을 열지 않음.<label>
						 <a style="color: #aaa; cursor:pointer;" onclick="closeWin();hidebox();return false;" >[close]</a>
						</p>
					</td>
				</tr>
			</table>
	 </div>

</body>
</html>
