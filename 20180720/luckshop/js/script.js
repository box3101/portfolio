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

$(document).ready(function(){
  var tabsSwiper = new Swiper('.swiper-container',{
      speed:500,
      onSlideChangeStart: function(){
        console.log(123);
      $(".tabs li").removeClass('active')
      $(".tabs li").eq(tabsSwiper.activeIndex).addClass('active')
    }
  })
  $(".tabs li").on('touchstart mousedown',function(e){
  e.preventDefault()
  $(".tabs li").removeClass('active')
  $(this).addClass('active')
  tabsSwiper.swipeTo( $(this).index() )
  })
  $(".tabs li").click(function(e){
  e.preventDefault()
  })

})
