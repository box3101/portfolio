$(document).ready(function(){

new Swiper('.swiper', {
  loop : true, // 무한 반복
  pagination : { // 페이징 설정
  el : '.swiper-pagination',
  clickable : true, // 페이징을 클릭하면 해당 영역으로 이동, 필요시 지정해 줘야 기능 작동
},
  navigation : { // 네비게이션 설정
    nextEl : '.swiper-button-next', // 다음 버튼 클래스명
    prevEl : '.swiper-button-prev' // 이번 버튼 클래스명
  },
});

});
