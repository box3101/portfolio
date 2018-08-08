//줄거리 더보기 SILDE

$(document).ready(function(){

  $(".open").on("click",function(){
    $(this).hide();
    $(".close").show();
    $(".adds").slideDown();
  });
  $(".close").on("click",function(){
    $(this).hide();
    $(".open").show();
    $(".adds").slideUp();
  });


});
