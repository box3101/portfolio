/*인덱스 main JavaScript*/

$(document).ready(function(){


    // 상영예정작 Tap메1

    $(".arrow>li>a.left").on("click",function(){
      $(".list>li").first().appendTo(".list");
    });

    $(".arrow>li>a.right").on("click",function(){
      $(".list>li").last().prependTo(".list");
    });

    // 검색어 입력칸 클릭시

    $(".topSearch input").on("click",function(){
      $(this).attr({"value":" "});
    });


    // 이메일 입력칸 클릭시

	  $(".submit>form input").click(function(){
      $(this).attr('value','');
  	});

    //History animate, setInterval

    var timeonoff; // 자동기능 구현시 변수 (재생/중지)

    $(".historyWrap .right").on("click",function(){
      $(".history-contents").animate({"left":"-1020px"},"slow");
      $(this).stop().fadeOut("slow")
    });

    $(".historyWrap .left").on("click",function(){
      $(".history-contents").animate({"left":"0"},"slow",function(){
        $(".historyWrap .right").stop().fadeIn("fast");
      })
    });

    function move1(){
      $(".history-contents").stop().animate({"left":"0"},"slow")
    };
    function move2(){
      $(".history-contents").stop().animate({"left":"-1020px"},"slow")
    };

    var timeonoff = setInterval(function(){move2()},6000);
    var timeonoff1 = setInterval(function(){move1()},6000);

    $(".history-contents").hover(function(){
      clearInterval(timeonoff);
      clearInterval(timeonoff1); // 타이머 중지
    },function(){
      timeonoff= setInterval(move2,4000);
      timeonoff1= setInterval(move1,8000); //타이머 재 실행
    });

    // history mask

    $("ul.history-contents>li>a").on("mouseleave",function(){
      mask();
    })


    function mask(){
      var mask = '<div class="mask">'
      $(mask).appendTo(".history")
      $(".mask").css({
        "position":"fixed", "width":"100%", "height":"100%",
        "top":0, "left":0, "z-index":"100"
      })

      setTimeout(function(){
        $(".mask").remove();
      },0)
    }

     //  togleGnb slideDown 메뉴

     $(".menuBtn").on("click",function(){
       $("#togleGnb").stop().slideToggle(1000);
     })

});
