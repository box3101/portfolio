$(document).ready(function(){



  $("li").on("click",function(){
    var i = $(this).text();
    $("div").text(i).css({"background-color":i});
  })

});


//
