var mySite = {
  init : function(){
    mySite.slider();
  },
  //slider
  slider : function(){
    $(".slider").slick({
      dots : true,
      dotsClass : 'slick-pager',
      autoplay: true, /* 자동으로 슬라이드 넘어감 */
      autoplaySpeed: 5000,
    })
  }
}
mySite.init();
