<!DOCTYPE html >
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" charset="utf-8"/>
	<title> showbox </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/sub1_content4.css" />
	<link rel="stylesheet" href="../css/common.css" />
	<link rel="stylesheet" href="css/sub1_common.css" />
	<link href="http://vjs.zencdn.net/6.6.3/video-js.css" rel="stylesheet">
	<script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfGgDKdna1GVLZRuK2AL55N49rauTxX7A&callback=initMap"></script>
	<script src="js/sub1_4.js"></script>
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
        <h2>오시는길</h2>
        <p>쇼박스 본사와 위치 정보를 쉽게 찾아볼 수 있습니다.</p>
      </section>
      <!-- titleArea e -->
      <section class="contentArea">
        <h3>한국영화산업을 선도하는 기업, 쇼박스</h3>
				<div id="map"style="width:600px; height:300px;"></div>
				<div class="contact">
					<h3>CONTACT US</h3>
					<table>
						<tbody>
                <tr>
                    <th scope="row" class="border" width="20%">본사 주소</th>
                    <td>우)06054 서울특별시 강남구 도산대로 310(논현동) 916빌딩 7~9층</td>
                </tr>
                <tr>
                    <th scope="row">대표 전화</th>
                    <td>TEL : 02-3218-5500</td>
                </tr>
                <tr>
                    <th scope="row">FAX</th>
                    <td>FAX : 02-3218-5688(7층)  l  02-3218-5588(8층)  l  02-3218-6699(9층)</td>
                </tr>
                <tr>
                    <th scope="row">E-MAIL</th>
                    <td>showmaster@showbox.co.kr</td>
                </tr>
            </tbody>
					</table>
				</div>
				<!-- contact e -->

				<div class="public">
					<h3>대중교통 이용안내</h3>
					<ul class="publicBox">
						<li class="bus">
							<div class="img"></div>
							<p>
								호림센터 앞 <br>
								4212, 30111, 154, 440 <br>
								씨네시티 앞<br>
								4212,3011,145 <br>
							</p>
						</li>
						<li class="subway">
							<div class="img2"></div>
							<p>
								분당선 압구정 로데오역 <br>
								5번 출구 <br>
								3호선 앞구정역 3번 출구 <br>
								7호선/분당선 <br>
							</p>
						</li>
					</ul>
				</div>
				<!-- public e -->
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
