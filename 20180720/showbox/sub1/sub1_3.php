<!DOCTYPE html >
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" charset="utf-8"/>
	<title> showbox </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/sub1_content3.css" />
	<link rel="stylesheet" href="../css/common.css" />
	<link rel="stylesheet" href="css/sub1_common.css" />
	<link href="http://vjs.zencdn.net/6.6.3/video-js.css" rel="stylesheet">
	<script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/sub1_3.js"></script>
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
        <h2>회사연혁</h2>
        <p>L쇼박스는 한국 영화의 역사에 함께 성장하고 있습니다.</p>
      </section>
      <!-- titleArea e -->
      <section class="contentArea">
        <h3>한국영화산업을 선도하는 기업, 쇼박스</h3>
				<div class="lists">
					<ul class="listMenu">
						<li><a href="#year1">2018~2013</a></li>
						<li><a href="#year2">2013~2008</a></li>
						<li><a href="#year3">2008~2003</a></li>
						<li><a href="#year4">2003~2000</a></li>
					</ul>
					<ul class="list" >
						<li>2018~2013</li>
						<span>
	               2015.06 (주)미디어플렉스 -> (주)쇼박스 상호명 변경/상호와 브랜드 통일<br/>
	               2015.03 중국 화이브라더스와 독점 파트너십 체결<br/>
	               2015.02 조선명탐성 : 사라진 놉의 딸 387만명 -<span> 15년 상반기 한국영화 최고 흥행작</span><br/>
	               2013.09 관상 913만명<br/>
	               2013.06 은밀하게 위대하게 695만명 . 역대 웹툰영화 중 흥행신기록 수립<br/>
	               2012.07 도둑들 1,298만명/12년 최고 흥행작<br/>
	               2012.02 범죄와의 전쟁 :나쁜놈들 전성시대 471만명
	 					 </span>
							<ul class="contents">
								<li class="g1"></li>
								<li class="g2"></li>
								<li class="g3"></li>
							</ul>
						</span>
					</ul>
					<ul class="list">
						<li>2013~2008</li>
						<span>
							2010.02 의형제 550만명 <br>
							2009.07 국가대표 848만명 <br>
							2008.02 추격자 507만명 / 08년 상반기 최고 흥행작 <br>
							2007.07 자회사(주)메가박스 매각 <br>
							2007.08 디워 842만명/07년 최고 흥행작 <br>
							2006. 07 괴물 1,301만명- 흥행신기록 수립
					</span>
						<ul class="contents">
							<li class="g4">영화포스터1</li>
							<li class="g5">영화포스터2</li>
							<li class="g6">영화포스터3</li>
						</ul>
					</ul>
					<ul class="list">
						<li>2008~2003</li>
						<span>
							2005.08 웰컴투 동막골 800만명 <br>
							2004.02 2월 태극기 휘날라며 1,174만명- 흥행신기록 수립 <br>
							2002.12 색즉시공 흥행/성공적인 시장 진입 <br>
							2002.01 쇼박스 브랜드 설립/영화 투자배급 시작
					</span>
						<ul class="contents">
							<li class="g7">영화포스터4</li>
							<li class="g8">영화포스터5</li>
							<li class="g9">영화포스터6</li>
						</ul>
					</ul>
					<ul class="list" >
						<li>2003~2000</li>
						<span>
							1999.11 (주)메가박스 설립/영화관 사업 시작 <br>
							1996.06 (주)미디어 플렉스 설립/영화사업 진출
					</span>
						<ul class="contents">
							<li class="g10">영화포스터7</li>
							<li class="g11">영화포스터8</li>
							<li class="g12">영화포스터9</li>
						</ul>
					</ul>
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
