<!DOCTYPE html >
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" charset="utf-8"/>
	<title> showbox </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/sub2_content2.css" />
	<link rel="stylesheet" href="../css/common.css" />
	<link rel="stylesheet" href="css/sub2_common.css" />
	<link href="http://vjs.zencdn.net/6.6.3/video-js.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">

	<script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/sub2_2.js"></script>
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
        <h2>상영예정작</h2>
        <p>Lorem ipsum dolor sit amet, elit. Unde, autem!</p>
      </section>
      <!-- titleArea e -->
      <section class="contentArea">
				<div class="movienow">
					<a href="#!" class="readmore open" title="줄거리더보기">줄거리 더보기</a>
					<a href="#!" class="readmore on close" title="줄거리더보기">줄거리 닫기</a>
					<video controls="controls" width="600" height="340"
					       class="video-js vjs-default-skin" data-setup="{}">
						     <source src="/showbox/video/조선명탐정.mp4" type="video/mp4">
			 	  </video>
					<div class="img"></div>
					<div class="info">
						<p class="header">조선명탐정 줄거리</p>
						<p>
						목에 난 두 개의 이빨 자국, 심장을 관통한 화살촉에 새겨진 글자.
						“범인은 뭔가 말하고 싶어한다. <br> 그렇다면 이것은 … 예고살인?!” 
						기이한 불에 사람들이 타 죽는 미스터리한 사건이 계속되자 명탐정 김민과 파트너 서필이 다시 뭉친다. <br>
						 그러던 중 사건 현장에서 자꾸 의문의 여인과 마주치게 되고, <br>
						 직감적으로 그녀와 사건이 관련되어 있음을 느낀 명탐정 콤비는 의문의 여인과 함께 사건을 쫓기 시작한다. <br>


						</p>
						<p class="adds ">
							범인이 남긴 단서들로 다음 목표물을 찾아낸 세 사람,
						 하지만 정체를 알 수 없는 남자 흑도포와 의문의 자객들이 세 사람의 수사를 방해하기 시작하는데… <br>

						 모든 귀(鬼)들의 힘이 가장 세지는 보름!
						 만월에 열리는 달맞이 연회에 일어날 다섯 번째 살인을 막아라!
						</p>
					</div>
				</div>
      </section>
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
