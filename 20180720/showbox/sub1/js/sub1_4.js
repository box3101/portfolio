$(document).ready(function(){

 initMap();

});


function initMap() {
        var uluru = {lat: 37.522444, lng: 127.035418};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          title:"(주)쇼박스"
        });
}
