/*인덱스 main JavaScript*/

$(document).ready(function(){

  var $steel = $(".steel>ul>li>a");
  var bg = $(".background>a")
  var $left = $(".left")
  var $right = $(".right")

 $steel.on("click",function(){

   var tg = $(this).attr('href');
   var $this = $(this);

   activeBtn($this);
   showTab(tg);

 });

  $right.on("click",function(){
    $(".steel>ul>li").last().prependTo(".steel>ul");
  });

  $left.on("click",function(){
    $(".steel>ul>li").first().appendTo(".steel>ul");
  });

   function activeBtn($this){
     $steel.removeClass("on");
     $this.addClass("on");
   }

   function showTab(tg){
     bg.removeClass("on");
     $(tg).addClass("on");
   }

























});
