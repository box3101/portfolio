$(document).ready(function(){

	//박스에 마우스 오버시 영상 재생
	$(".front").on("mouseenter",function(){
		var vid = $(this).children("video").get(0);
		vid.play();
	});

	//박스에 마우스 오버시 영상 재생
	$(".front").on("mouseleave",function(){
		var vid = $(this).children("video").get(0);
		vid.pause();
	});
	
	//박스 활성화
	$(".front>span").on("click",function(){

		//클릭한 순서에 해당하는 박스만 클래스 플립
		var i = $(this).parent().parent().index();
		$("#wrap>div").removeClass("on");
		$("#wrap>div").eq(i).addClass("on");

		//1초 뒤에 플립된 박스만 넓게 변경
		setTimeout(function(){
			$("#wrap>div.on").addClass("wide");
		},1000);	

		//클릭한 박스의 아이디명으로 wrap에 클래스명을 붙여 활성화
		var target = $(this).parent().parent().attr("id");
		$("#wrap").removeClass().addClass(target);		
	});


	//박스 초기화
	$(".back>span").on("click",function(){	
		
		//플립된 박스 다시 원래 크리고 폭을 좁게
		$("#wrap>div").removeClass("wide");

		//0.5초뒤에 박스 다시 뒤집고 초기화면으로
		setTimeout(function(){
			$("#wrap").removeClass();
			$("#wrap>div").removeClass("on");
		},500);
	});


	
});
