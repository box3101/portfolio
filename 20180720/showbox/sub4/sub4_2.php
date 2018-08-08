<!DOCTYPE html >
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" charset="utf-8"/>
	<title> showbox </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/sub4_content2.css" />
	<link rel="stylesheet" href="../css/common.css" />
	<link rel="stylesheet" href="css/sub4_common.css" />
	<link href="http://vjs.zencdn.net/6.6.3/video-js.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">

	<script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/sub4_2.js"></script>
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
        <h2>인재채용</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </section>
      <!-- titleArea e -->
         <div class="contentArea">
           <img src="img/visual.jpg" alt="인성과 전문성을 바탕으로 쇼박스와 함께 걸어나갈 인재를 기다립니다." />
           <div class="process">
             <h3>채용절차</h3>
             <img src="img/processimg.jpg" alt="1.서류심사 2.실무면접 3.임원면접 4.건강검진 및 최종합격" />
             <ol>
               <li>지원자격 및 자기소개서 전반의 서류를 심사합니다.</li>
               <li>직군/직무 분야에 따라 면접을 진행합니다.</li>
               <li>실무진, 임원과의 면접을 진행합니다.</li>
               <li class="last">건강검진 후 최종합격이 결정됩니다.</li>
             </ol>
           </div>
           <!--process e-->
           <div class="faq" id="recruit">
           <h3>자주 묻는 질문 FAQ</h3>
             <dl class="faq1">
                <dt><a href="#"><img src="img/faq1.jpg" alt="입사 지원은 어떻게 하면 되나요?" /></a></dt>
                <dd>지원 접수는 쇼박스 인사팀 이메일 접수와 우편접수 모두 가능합니다.</dd>
             </dl>
             <dl class="faq2">
                <dt><a href="#"><img src="img/faq2.jpg" alt="서류심사에서는 주로 무엇을 평가하나요?" /></a></dt>
                <dd>지원자의 자기소개서 등을 종합적으로 평가하여 개인의 가치관이 쇼박스가 지향하는 인재상과 얼마나 일치하는가를 검증합니다.</dd>
             </dl>
             <dl class="faq3">
                <dt><a href="#"><img src="img/faq3.jpg" alt="면접방식은 어떻게 되나요?" /></a></dt>
                <dd>면접은 실무진(1차), 임원진(2차) 면접으로 구성되어 있습니다. 1차 실무진 면접은 지원자의 기본 소양과 직무 역량을 검증하기 위한 과정이며,
										2차 면접은 주로 인성을 중점적으로 검증하게 됩니다. 면접 방식은 직무에 따라 다를 수 있으며 다대 다로 진행됩니다.</dd>
             </dl>
             <dl class="faq4">
                <dt><a href="#"><img src="img/faq4.jpg" alt="채용시기가 궁금합니다." /></a></dt>
                <dd>채용은 상시로 진행되며, 홈페이지 게시판 확인을 부탁드립니다.</dd>
             </dl>
           </div>
           <!--faq e-->
           <div class="info">
           찾으시는 질문이 없다면, 쇼박스 고객센터를 통해 문의주시기 바랍니다.<br />
					- 쇼박스 고객센터 : <strong>02-4218-5500</strong><br />
					- E-MAIL 문의 : <strong>recruit@showbox.co.kr</strong>
           </div>
         </div>
         <!--contentArea e-->
     	</div>
     <!--content e-->
  </div>
  <!-- .container e -->

	<?php
		include '../footer.php'
	 ?>
</body>
</html>
