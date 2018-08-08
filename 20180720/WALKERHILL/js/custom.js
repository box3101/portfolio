$(document).ready(function(){

  $(".con8>ul>li").on("click",function(){
    var i = $(this).index();

    $(".con8>ul>li").removeClass("on");
    $(".con8>ul>li").eq(i).addClass("on");

    $(".con81>p").removeClass("on");
    $(".con81>p").eq(i).addClass("on");
  })

});
