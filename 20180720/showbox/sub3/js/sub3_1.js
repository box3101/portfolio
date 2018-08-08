/*인덱스 main JavaScript*/

$(document).ready(function(){

  $(".title>ul>li").on("click",function(){

     var i =$(this).index();

     $(".title>ul>li>a").removeClass("on");
     $(".title>ul>li>a").eq(i).addClass("on");

     $(".contents>ul").removeClass("on1");
     $(".contents>ul").eq(i).addClass("on1");

  })

});
