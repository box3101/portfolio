$(document).ready(function(){

   var i =0;
   var len = $(".panel>li").length;
   var isAnimated = false;
   var timer;


   //네비버튼 클릭시
   $(".navi>li").on("click",function(e){
      e.preventDefault();

      var curNum = $(".panel>li.on").index();
      i = $(this).index();

      stop();
      //클릭한 패널 순서가 현재 패널순서보다 크면
      if(curNum>i){
         doPrev(i);  //next함수 호출
      }else{
         doNext(i);   //prev함수 호출
      }
   });


   //다음버튼 클릭시
   $(".next").on("click",function(e){
      e.preventDefault();
      i = $(".panel>li.on").index();

      if(i==len-1){
         i=0;
      }else{
         i++;
      }
      stop();
      doNext(i);
   });


   //이전버튼 클릭시
   $(".prev").on("click",function(e){
      e.preventDefault();
      i = $(".panel>li.on").index();

      if(i==0){
         i=len-1;
      }else{
         i--;
      }

      stop();
      doPrev(i);
   });


   $(".start").on("click",function(e){
      e.preventDefault();
      start(i);
   });

   $(".stop").on("click",function(e){
      e.preventDefault();
      stop();
   })


   /*-------------------함수 선언-------------------*/


   //prev 함수
   function doPrev(i){
      if(!isAnimated){
         isAnimated=true;
         prevSlide(i);
         activateBtn(i);
      }
   }


   //next 함수
   function doNext(i){
      if(!isAnimated){
         isAnimated=true;
         nextSlide(i);
         activateBtn(i);
      }
   }


   //이전패널 이동함수
   function prevSlide(i){
      $(".panel>li").not(".on").css("left","-100%");
      $(".panel>li.on").stop().animate({"left":"100%"},1000,function(){
         $(this).css("left","-100%").removeClass("on");
      });
      $(".panel>li").eq(i).stop().animate({"left":"0%"},1000,function(){
         $(this).addClass("on");
         isAnimated = false;
      });
   }


   //다음패널 이동함수
   function nextSlide(i){
      $(".panel>li").not(".on").css("left","100%");
      $(".panel>li.on").stop().animate({"left":"-100%"},1000,function(){
         $(this).css("left","100%").removeClass("on");
      });
      $(".panel>li").eq(i).stop().animate({"left":"0%"},1000,function(){
         $(this).addClass("on");
         isAnimated = false;
      });
   }

   //버튼 활성화 함수
   function activateBtn(i){
      $(".navi>li>a").removeClass("on");
      $(".navi>li").eq(i).children("a").addClass("on");
   }


   //자동롤링 시작 함수
   function start(i){
      $(".start").hide();
      $(".stop").show();

      timer = setInterval(function(){
         if(i==len-1){
            i=0;
         }else{
            i++;
         }
         doNext(i);
      },2000);

   }


   //자동롤링 정지 함수
   function stop(){
      $(".start").show();
      $(".stop").hide();
      clearInterval(timer);
   }



});
