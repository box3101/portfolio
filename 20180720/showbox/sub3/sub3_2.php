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
	<script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/sub2_1.js"></script>
</head>
<body>
  <?php
	include "../header.php"
	 ?>

	 <?php
 	include "subVisual.php"
 	 ?>


  <div class="container">
    <?php
  	include "leftBox.php"
  	 ?>

    <div id="content">
      <section class="titleArea">
        <h2>현재상영작</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </section>
      <!-- titleArea e -->

      <section class="contentArea">
				<div class="movienow">
					<div class="poster">
					</div>
					<!-- poster e -->
					<div class="info">
						<div class="title">
							<span class="rate"></span>
							<h3>Lorem ipsum</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, repellat. </p>
						</div>
						<!-- title e -->
						<div class="text">
							<ul>
								<li>Lorem ipsum dolor sit amet,</li>
								<li>Lorem ipsum dolor sit amet,</li>
								<li>Lorem ipsum dolor sit amet,</li>
								<li>Lorem ipsum dolor sit amet,</li>
								<li>Lorem ipsum dolor sit amet,</li>
							</ul>
						</div>
					</div>
					<!-- info e -->
				</div>
				<!-- movienow e -->
				<div class="plot">
					<h3></h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. consectetur adipisicing elit.<br>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. consectetur adipisicing elit.<br>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. consectetur adipisicing elit.<br>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. consectetur adipisicing elit.<br>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. consectetur adipisicing elit.<br>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. consectetur adipisicing elit.<br>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. consectetur adipisicing elit.<br>
					</p>
				</div>
				<!-- .plot e -->
				<div class="potolist">
					<div class="left"></div>
					<div class="right"></div>
					<h3></h3>
					<div class="listsWrap">
						<ul class="lists">
							<li class="l1"><a href="#!"></a></li>
							<li class="l2"><a href="#!"></a></li>
							<li class="l3"><a href="#!"></a></li>
							<li class="l4"><a href="#!"></a></li>
							<li class="l5"><a href="#!"></a></li>
							<li class="l6"><a href="#!"></a></li>
						</ul>
					</div>
					<div class="background">
						<ul>
							<li></li>
						</ul>
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
