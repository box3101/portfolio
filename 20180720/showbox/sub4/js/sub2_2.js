/*인덱스 main JavaScript*/

$(document).ready(function(){


  $(".readmore").on("click",function(){
    $(this).text("줄거리 닫기");
    $("p.on").slideToggle(function(){
      $(".readmore").text("줄거리 보이기");
    });
  });

});
