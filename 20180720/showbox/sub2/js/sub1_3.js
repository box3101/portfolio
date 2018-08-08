/*인덱스 main JavaScript*/

$(document).ready(function(){

  $(".listMenu>li").on("click",function(){

    var i = $(this).index();

    var scrollPosition = $($(".lists>ul").eq(i)).offset().top;

    $("body,html").animate({scrollTop:scrollPosition},1100);

  });

});
