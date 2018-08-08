$(document).ready(function(){
	

		var i =0;
		var speed = 600;
		var timing = 2000;
		var $slider = $(".slider");		
		var $nav = $(".slider .navi li ");		
		var $panel = $(".slider .panel");
		var $play = $(".slider .play");
		var $stop = $(".slider .stop");
		var wid = $slider.width();
		var num = $nav.length;
	
		start();
		doSlider();	
		auto();		
		
		$(window).on("resize",function(){
			wid = $slider.width();
			$nav.eq(0).click();
		});
		
		
		//정지 버튼 클릭 시
		$stop.on("click",function(e){
			e.preventDefault();
			$play.removeClass("on");
			$(this).addClass("on");
			end();
		});
		
		//시작 버튼 클릭 시
		$play.on("click",function(e){
			e.preventDefault();
			$stop.removeClass("on");
			$(this).addClass("on");
			start();
		});
		
		
		
	
		//클릭시 슬라이더 동작
		function doSlider(){
			$nav.on("click",function(e){	
				e.preventDefault();
				var index = $(this).index();
				i=index;
				$nav.children("a").removeClass();
				$(this).children("a").addClass("on");
				$panel.stop().animate({"margin-left": -wid*i},speed);					
			});
		}		
		
		//자동롤링시작
		function start(){		
			timer = setInterval(function(){				 
				i++;
				if(i==num) i=0;				
				$nav.children("a").removeClass();
				$nav.eq(i).children("a").addClass("on");
				$panel.stop().animate({"margin-left": -wid*i},speed);					
			},timing);
		}
		
		//자동롤링 종료
		function end(){
			clearInterval(timer);
		}
		
		
		//마우스 오버시 자동 시작, 정지
		
		function auto(){
			$slider.hover(function(){
				$play.removeClass("on");
				$stop.addClass("on");
				end();
			},function(){
				$stop.removeClass("on");
				$play.addClass("on");
				start();
			});
		}
	
	
	
	

	
});















