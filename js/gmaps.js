var temp = 0;
       function showMap(){
        var articleDiv = document.getElementById("map-place");
        if(temp==0){
        articleDiv.innerHTML = ' <div id="map">';
        initMap();
        temp++;
        } else {
          var removableNode = document.getElementById("map");
          articleDiv.removeChild(removableNode);
          temp=0;
        }
       }
function initMap() {
    var centerLatLng = new google.maps.LatLng(53.18873585507193, 50.12280992902818);
        var markersData = [
            {
                lat: 53.18873585507193, 
                lng: 50.12280992902818,
                name: "ТАРТАР - Meat market",
                address:"Самара, Спортиваня, 13",
                iconimg: 'img/marker.png'
            }
        ];
      var mapOptions = {
          center: centerLatLng,
          zoom: 16,
          fullscreenControl: false,
          scrollwheel: true,
          panControl: true,
          zoomControl: true,
          scaleControl: true,
          mapTypeControl: false,
          streetViewControl: false,
          zoomControlOptions: {style: google.maps.ZoomControlStyle.SMALL},
          styles: [{"stylers":[{"hue":"#ff1a00"},{"invert_lightness":true},{"saturation":-100},{"lightness":33},{"gamma":0.5}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#2D333C"}]}]
      };
      map = new google.maps.Map(document.getElementById("map"), mapOptions);
      infoWindow = new google.maps.InfoWindow();
      google.maps.event.addListener(map, "click", function() {
          infoWindow.close();
          map.setZoom(16);
          map.setCenter(centerLatLng);
      });
      var bounds = new google.maps.LatLngBounds();
      for (var i = 0; i < markersData.length; i++){
          var latLng = new google.maps.LatLng(markersData[i].lat, markersData[i].lng);
          var name = markersData[i].name;
          var address = markersData[i].address;
          addMarker(latLng, name, address);
          bounds.extend(latLng);
      }
  }
  google.maps.event.addDomListener(window, "load", initMap);
  
  function addMarker(latLng, name, address) {
      var marker = new google.maps.Marker({
          position: latLng,
          map: map,
          animation: google.maps.Animation.DROP,
          icon: 'img/marker.png',
          title: name
      });
   
      google.maps.event.addListener(marker, "click", function() {
   
          var contentString = '<div class="infowindow text-black">' +
                                  '<h3>' + name + '</h3>' +
                                  '<p>' + address + '</p>' +
                              '</div>';
   
          infoWindow.setContent(contentString);
          infoWindow.open(map, marker);
          map.setCenter(marker.getPosition());
          map.setZoom(18);
   
      });
  
          $('.map-zoom-controls').on('click', 'a', function (e){
          var $this = $(this);
          var currentZoom = map.getZoom();
          if($this.is('.plus')){
              map.setZoom(++currentZoom);
          }else if($this.is('.minus')){
              map.setZoom(--currentZoom);
          }
      });
  }