/*인덱스 main JavaScript*/

$(document).ready(function(){

  $(".l1").on("click",function(){
    $(".background>ul>li").css({"background-color":"red"});
  });
  $(".l2").on("click",function(){
    $(".background>ul>li").css({"background-color":"green"});
  });
  $(".l3").on("click",function(){
    $(".background>ul>li").css({"background-color":"yellow"});
  });
  $(".l4").on("click",function(){
    $(".background>ul>li").css({"background-color":"tomato"});
  });
  $(".l5").on("click",function(){
    $(".background>ul>li").css({"background-color":"pink"});
  });
  $(".l6").on("click",function(){
    $(".background>ul>li").css({"background-color":"blue"});
  });

  $(".right").on("click",function(){

     $(".listsWrap>ul>li").last().prependTo(".listsWrap>ul");
  });

  $(".left").on("click",function(){

     $(".listsWrap>ul>li").first().appendTo(".listsWrap>ul");
  });

});
