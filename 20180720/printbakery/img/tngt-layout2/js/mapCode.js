$(document).ready(function(){	


	
	map = new GMaps({
        div: '#map',  /* 구글 아이디 값*/
        lat:37.5562915, /*구글맵의 첫번째 수치*/
        lng: 126.922229,/*구글맵의 두번째 수치*/
		zoom:18,/*줌*/
        enableNewStyle: true
     });
	 
	map.addMarker({
		 lat:37.5562915, /*구글맵의 첫번째 수치*/
         lng: 126.922229,	/*구글맵의 두번째 수치*/
		  title: '홍대입구',
		  click: function(e) {
			alert('클릭시에 각각 이벤트를 연결할수 있습니다');
		 }
	});

	
});















