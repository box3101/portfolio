var $naviBar, $gnb_li, $gnb_li_a, $btn, $btn2, $btn3, $click_btn, $close;

/*인덱스 main JavaScript*/

$(document).ready(function(){
  initDOM();
  bindingEvent();
});

//DOM 초기화
function initDOM(){
  $naviBar = $(".headerWrap");
  $gnb_li = $("#gnb li");
  $gnb_li_a = $("#gnb li a");
  $btn = $(".btn");
  $btn2 = $(".btn2");
  $btn3 = $(".btn3");
  $click_btn = $(".click_btn");
  $close = $(".close")
}

//이벤트 바인딩
function bindingEvent(){

// Wow.js

     new WOW().init();

// navi s
  $(window).on("scroll",function(){

    if($naviBar.offset().top>50){
      $naviBar.addClass("nav-collapse");
    }else{
      $naviBar.removeClass("nav-collapse");
    }
  })

// main_txt shown

 $click_btn.on("click",function(){
   showLine();
   $click_btn.fadeOut(500);
 })

 $close.on("click",function(){
   hideLine()
   removePop();
 })

// Page scroll s

 $gnb_li_a.on("click",function(e){
   e.preventDefault();

   var i = $(this).index();
   var x = $($(this).eq(i)).attr("href");
   var scrollPosition = $(x).offset().top;

   $("body, html").stop().animate({scrollTop:scrollPosition},600,function(){
   moveContent(x,scrollPosition);

 });

 });

 // move ptMove
 $gnb_li.eq(4).children("a").on("click",function(){
   ptMove();
 })

 $btn3.on("click",function(){
   ptMove();
 })

 // full width

  var slideHeight = $(window).height();

  $('#welcome').css('height', slideHeight);
  $('#services').css('height', slideHeight);
  $('#vision').css('height', slideHeight);



  $(window).resize(function () {
      $('#welcome').css('height', slideHeight);
      $('#services').css('height', slideHeight);
      $('#vision').css('height', slideHeight);
  });

 // Contact ptMove

 $gnb_li.eq(5).children("a").on("click",function(){
   CtMove()
 })

  // Btn scroll  1sssssssssssssssss

  $btn.on("click",function(e){
   e.preventDefault();
    var x = $(this).attr("href");
    var scrollPosition = $(x).offset().top;

    $("body, html").stop().animate({scrollTop:scrollPosition},600);

  });
  $btn2.on("click",function(e){
   e.preventDefault();
    var x = $(this).attr("href");
    var scrollPosition = $(x).offset().top;

    $("body, html").stop().animate({scrollTop:scrollPosition},600,function(){
    moveContent(x,scrollPosition);
  });

  });


  $(window).on("scroll",function(){
    var visual_top = $("#visual").offset().top;
    var visual_bottom = $("#visual").offset().top + $("#visual").height();
    var welcome_top = $("#welcome").offset().top;
    var welcome_bottom = $("#welcome").offset().top + $("#welcome").height();
    var service_top = $("#services").offset().top;
    var service_bottom = $("#services").offset().top + $("#services").height();
    var vision_top = $("#vision").offset().top;
    var vision_bottom = $("#vision").offset().top + $("#vision").height();
    var portfolio_top = $("#portfolio").offset().top;
    var portfolio_bottom = $("#portfolio").offset().top + $("#portfolio").height();
    var contact_top = $("#contact").offset().top;
    var contact_bottom = $("#contact").offset().top + $("#contact").height();

    var scroll = $(this).scrollTop();


    if(scroll>=visual_top && scroll<visual_bottom){

         $gnb_li_a.removeClass("on")
         $gnb_li_a.eq(0).addClass("on")

      }

    if(scroll>=welcome_top && scroll<welcome_bottom){

         $gnb_li_a.removeClass("on")
         $gnb_li_a.eq(1).addClass("on")


         $("#welcome .info").stop().animate({"right":"0px", "opacity":"1"},500,function(){
           $("#welcome h2").stop().animate({"opacity":"1",},200,function(){
             $("#welcome p").stop().animate({"opacity":"1",});
           });
         });
      }

    if(scroll>=service_top && scroll<service_bottom){
        $gnb_li_a.removeClass("on")
        $gnb_li_a.eq(2).addClass("on")

        $("#services .info").stop().animate({"left":"50%", "margin-left":-500, "opacity":"1"},500,function(){
           $("#services h2").stop().animate({"opacity":"1",},200,function(){
             $("#services p").stop().animate({"opacity":"1",});
           });
         });
      }

    if(scroll>=vision_top && scroll<vision_bottom){
        $gnb_li_a.removeClass("on")
        $gnb_li_a.eq(3).addClass("on")

       $("#vision .info").stop().animate({"left":"50%", "opacity":"1"},500,function(){
         $("#vision h2").stop().animate({"opacity":"1",},200,function(){
           $("#vision p").stop().animate({"opacity":"1",});
         });
       });
    }


    if(scroll>=portfolio_top && portfolio_bottom){
        $gnb_li_a.removeClass("on")
        $gnb_li_a.eq(4).addClass("on")

       ptMove();
    }

    if(scroll>=contact_top && scroll<contact_bottom){
      $gnb_li_a.removeClass("on")
      $gnb_li_a.eq(5).addClass("on")

       CtMove()
    }
  })

  //  togleGnb slideDown 메뉴

  $(".menuBtn").on("click",function(){
    $("#togleGnb").stop().slideToggle(1000);
  });

  $(".pt>li.active").on("click",function(){
    createPop();
    $close.stop().fadeIn();
  })

  //스크롤 제어 API
  $(".info").mCustomScrollbar({
  theme:"my-theme",
  scrollButtons:{ enable: true }
});

  $(".sch_ham").on("click",function(){
    $(".sch_lists").stop().fadeIn(300);
    $(this).css({"opacity":"0"});
  })

  $(".btn_close").on("click",function(){
    $(".sch_lists").stop().fadeOut(300);
    $(".sch_ham").css({"opacity":"1"});
  })


}

	function showLine(){
		var speed = 400;
    $(".click_btn>a").removeClass("swing")
		$(".top").stop().delay(1000).animate({"width":"100%"},speed,function(){ //윗선 그리기
			$(".right").stop().animate({"height":"100%"},speed,function(){ //오른선 그리기
				$(".bottom").stop().animate({"width":"100%"},speed,function(){ //아랫선 그리기
					$(".left").stop().animate({"height":"100%"},speed,function(){ //왼선 그리기
						$(".main_txt").stop().fadeIn(1000);
            $(".btn").addClass("animated swing infinite");
            $(".btn2").addClass("animated swing infinite");
            $close.stop().fadeIn();
					});
				});
			});
		});
	}
  function hideLine(){
		var speed2 = 600;
			$(".con11").stop().fadeOut(speed2);
			$(".top").stop().animate({"width":"0%"},speed2);
			$(".right").stop().animate({"height":"0%"},speed2);
			$(".bottom").stop().animate({"width":"0%"},speed2);
			$(".left").stop().animate({"height":"0%"},speed2,function(){
        $(".main_txt").stop().fadeOut();
        // $close.stop().fadeOut();
        $(".click_btn>a").stop().delay(1200).addClass("swing");
       $click_btn.fadeIn(500);
      });

	}

function moveContent(x,scrollPosition){
    $(x).children(".info").stop().animate({"left":"50%", "opacity":"1"},300,function(){
       $(x).find("h2").stop().animate({"opacity":"1"},300,function(){
          $(x).find("p").stop().animate({"opacity":"1"});
       });
    });
}

function ptMove(){
  $(".pt li").eq(0,2,4).animate({"left":0, "opacity":"1"},600);
  $(".pt li").eq(2).animate({"left":0, "opacity":"1"},600);
  $(".pt li").eq(4).animate({"left":0, "opacity":"1"},600);
  $(".pt li").eq(1).animate({"right":0, "opacity":"1"},600);
  $(".pt li").eq(3).animate({"right":0, "opacity":"1"},600);
  $(".pt li").eq(5).animate({"right":0, "opacity":"1"},600);
}

function CtMove(){
  $(".form").animate({"margin-top":0, "opacity":"1" },800);
}

function createPop(){
		//마스크 생성
		$(".mask").stop().css({"opacity":"1","z-index":"10"});

		//팝업생성
		$(".pop").stop().css({"opacity":"1","z-index":"10"});
	}

	function removePop(){
			$(".mask").stop().delay(600).css({"opacity":"0","z-index":"0"});
			$(".pop").stop().delay(600).css({"opacity":"0","z-index":"0"});

	}
