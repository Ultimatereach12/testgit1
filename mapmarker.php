



<!DOCTYPE html>
<html> 
<head> 
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
  <title>Google Maps Multiple Markers</title> 
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyAVESA3O6ilWwM60YmumzwjbWDStUQbN6c&sensor=false" type="text/javascript"></script>
</head> 
<body>
  <div id="map" style="width: 500px; height: 400px;"></div>

  <script type="text/javascript">
    var locations = [
      ['Coogee Beach', -33.923036, 151.259052, 5],
      ['Bondi Beach', -33.890542, 151.274856, 4],
      ['Cronulla Beach', -34.028249, 151.157507, 3],
      ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
      ['Maroubra Beach', -33.950198, 151.259302, 1]
    ];

    var lat_center = -33.923036,
        long_center = 151.259052;

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(lat_center, long_center),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i, text;

    for (i = 0; i < locations.length; i++) {  

      marker = new google.maps.Marker({
          position: new google.maps.LatLng(locations[i][1], locations[i][2]),
          map: map
      });

      text = locations[i][0];

      if(locations[i][1] === lat_center && locations[i][2] === long_center) {

          marker.setAnimation(google.maps.Animation.DROP);
               marker.setIcon('http://maps.google.com/intl/en_us/mapfiles/ms/micons/purple.png');
        text += '<br>' + 'Additionl text for centered marker';
      }

      google.maps.event.addListener(marker, 'click', (function(marker, text) {
        return function() {
          infowindow.setContent(text);
          infowindow.open(map, marker);
        }
      })(marker, text));
    }

  </script>
</body>
</html>