<!DOCTYPE html >
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" charset="utf-8"/>
	<title> showbox </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/sub2_content1.css" />
	<link rel="stylesheet" href="../css/common.css" />
	<link rel="stylesheet" href="css/sub2_common.css" />
	<link href="http://vjs.zencdn.net/6.6.3/video-js.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">

	<script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/sub2_1.js"></script>
</head>
<body>
  <?php
	include "../header.php"
	 ?>

  <div class="container">
    <?php
  	include "leftBox.php"
  	 ?>

    <div id="content">
      <section class="titleArea">
        <h2>현재상영작</h2>
        <p>현재 상여중인 영화의 정보와 스틸컷,예고를 제공합니다.</p>
      </section>
      <!-- titleArea e -->

      <section class="contentArea">
				<div class="movienow">
					<div class="poster">
					</div>
					<!-- poster e -->
					<div class="info">
						<div class="title">
							<span class="rate">15</span>
							<h3>레디 플레이어 원</h3>
							<p>
								<dl>
									<dt>
									액션 | 2018. 03 .28 open | 140분  <br>
									감독 : 스티븐 스필버그 <br>
									</dt>
									<dd>
									2045년, 암울한 현실과 달리 가상현실 오아시스(OASIS)에서는  <br>
									누구든 원하는 캐릭터로 어디든지 갈 수 있고, 뭐든지 할 수 있고 상상하는 모든 게 가능하다. <br>
									웨이드 와츠(타이 쉐리던) 역시 유일한 낙은 대부분의 사람들이 하루를 보내는 오아시스에 접속하는 것이다.
							   	</dd>
						  	</dl>
							</p>
						</div>
						<!-- title e -->
					</div>
					<!-- info e -->
				</div>
				<!-- movienow e -->
				<div class="plot">
					<h3>줄거리</h3>
					<p>
						2045년, 암울한 현실과 달리 가상현실 오아시스(OASIS)에서는  <br>
					 누구든 원하는 캐릭터로 어디든지 갈 수 있고, 뭐든지 할 수 있고 상상하는 모든 게 가능하다.  <br>
					 웨이드 와츠(타이 쉐리던) 역시 유일한 낙은 대부분의 사람들이 하루를 보내는 오아시스에 접속하는 것이다. <br>

					 어느 날 오아시스의 창시자인 괴짜 천재 제임스 할리데이(마크 라이런스)는 자신이 가상현실 속에 숨겨둔  <br>
					 3개의 미션에서 우승하는 사람에게 오아시스의 소유권과 막대한 유산을 상속한다는 유언을 남기고,  <br>
					 그가 사랑했던 80년대 대중문화 속에 힌트가 있음을 알린다.  <br>
					 제임스 할리데이를 선망했던 소년 ‘웨이드 와츠’가 첫 번째 수수께끼를 푸는 데 성공하자  <br>
					 이를 저지하기 위해 현실에서 살인도 마다하지 않는 ‘IOI’라는 거대 기업이 뛰어든다.  <br>

					 모두의 꿈과 희망이 되는 오아시스를 지키기 위해서는 반드시 우승해야 한다!  <br>
					 그리고 우승을 위해서는 가상현실이 아닌 현실세계의 우정과 사랑의 힘이 필요하기만 한데…
					</p>
				</div>
				<!-- .plot e -->
				<div class="potolist">
					<div class="left"></div>
					<div class="right"></div>
					<h3>예고/스틸컷</h3>
					<div class="steel">
            <ul>
            	<li><a href="#tab1" class="t1 on"></a></li>
							<li><a href="#tab2" class="t2"></a></li>
							<li><a href="#tab3" class="t3"></a></li>
							<li><a href="#tab4" class="t4"></a></li>
							<li><a href="#tab5" class="t5"></a></li>
							<li><a href="#tab6" class="t6"></a></li>
            </ul>
					</div>
					<div class="background">
					 <a id="tab1" class="box on"></a>
					 <a id="tab2" class="box"></a>
					 <a id="tab3" class="box"></a>
					 <a id="tab4" class="box"></a>
					 <a id="tab5" class="box"></a>
					 <a id="tab6" class="box"></a>
					</div>
				</div>
				<!-- potolist e -->
      <section>
      <!-- contentArea e -->
    </div>
    <!-- content e -->
  </div>
  <!-- .container e -->


	<?php
		include '../footer.php'
	 ?>
</body>
</html>
