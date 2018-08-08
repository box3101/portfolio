/*인덱스 main JavaScript*/

$(document).ready(function(){

  $(".title>ul>li").on("click",function(){

     var i =$(this).index();

     $(".title>ul>li>a").removeClass("on2");
     $(".title>ul>li>a").eq(i).addClass("on2");

     $(".contents>ul").removeClass("on1");
     $(".contents>ul").eq(i).addClass("on1");

  })

});

//갤러리

$(function(){

    var op1 = 0.7;
    var op2 = 0.5;
	var num = 180;
	var speed = 500;
	var pos = parseInt($(".panel li").eq(2).css("margin-left"));
	init();

	$(".prev").on("click",function(e){
		e.preventDefault();
		mask();
		$(".panel li").last().prependTo(".panel");
		doSlider();
	});

	$(".next").on("click",function(e){
		e.preventDefault();
		mask();
		$(".panel li").first().appendTo(".panel");
		doSlider();
	});

	function init(){
		$("<div class='mk'></div>").appendTo(".wrap");
		$(".mk").css({"position":"absolute", "top":"0px", "left":"0px", "width":"100%", "height":"100%", "display":"none","z-index":"11"});
		$(".panel li:eq(0)").css({ "z-index": "1", "margin-left": pos - num*1.7, "opacity": op2 },speed);
		$(".panel li:eq(1)").css({ "z-index": "1", "margin-left": pos - num, "opacity": op1 }, speed);
		$(".panel li:eq(2)").css({ "z-index": "2", "margin-left": pos , "opacity": "1" }, speed);
		$(".panel li:eq(3)").css({ "z-index": "1", "margin-left": pos + num, "opacity": op1 }, speed);
		$(".panel li:eq(4)").css({ "z-index": "1", "margin-left": pos + num*1.7, "opacity": op2 }, speed);
	}

	function doSlider(){
		$(".panel li").removeClass("on3");
	    $(".panel li:eq(0)").css("z-index", "1").animate({ "margin-left": pos - num * 1.7, "opacity": op2 }, speed);
		$(".panel li:eq(1)").css("z-index", "1").animate({ "margin-left": pos - num, "opacity": op1 }, speed);
		$(".panel li:eq(2)").css("z-index", "2").animate({ "margin-left": pos, "opacity": "1" }, speed,function(){
			$(this).addClass("on3");
		});
		$(".panel li:eq(3)").css("z-index", "1").animate({ "margin-left": pos + num, "opacity": op1 }, speed);
		$(".panel li:eq(4)").css("z-index", "1").animate({ "margin-left": pos + num * 1.7, "opacity": op2 }, speed);
	}

	function mask(){
		$(".mk").show();
		setTimeout(function(){
			$(".mk").hide();
		},speed);
	}




});
