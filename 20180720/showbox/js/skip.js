$(function(){


	//키보드용 (포커스이동)
	$("#gnb>li>a").on("focusin",function(){
		$(this).siblings("ul:not(:animated)").slideDown();
	});
	$("#gnb>li>ul>li>a.la").on("focusout",function(){
		$(this).parent("li").parent("ul").slideUp();
	});



	//스킵네비게이션
	$("#skipNavi a").on("focusin",function(){
		$(this).css({"top":"0px"});
	});
	$("#skipNavi a").on("focusout",function(){
		$(this).css({"top":"-42px"});
	});



});
