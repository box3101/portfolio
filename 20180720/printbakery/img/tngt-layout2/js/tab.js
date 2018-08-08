$(document).ready(function(){	
	
	$(".tab li").on("click",function(e){
		e.preventDefault();
		var target = $(this).children("a").attr("href");
		$(".tab li a").removeClass("on");
		$(this).children("a").addClass("on");
		$(".tab>div").hide();
		$(target).show();
		
	});

	
});
