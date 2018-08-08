$(document).ready(function(){	
	
	$("#gnb li").on("mouseenter",function(){
		$(this).children("div").show();
		$(this).children("a").addClass("on");
	});
	
	$("#gnb li").on("mouseleave",function(){
		$(this).children("div").hide();
		$(this).children("a").removeClass("on");
	});

	
});
