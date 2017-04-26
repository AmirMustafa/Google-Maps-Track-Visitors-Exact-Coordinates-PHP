<!DOCTYPE html>
<html>
<body>

<!-- STEP1: TO RECEIVE CO-ORDINATES THROUGH HTML5 GEO IP LOCATION: START -->

<!-- Receive Latitude in this div via HTML5 Geolocation: Start  -->

<p id="demo"><?php  ?></p>

<!-- Receive Latitude in this div via HTML5 Geolocation: Start  -->

<script>
var x = document.getElementById("demo");   //Receive id of div where you want to print o/p

window.onload = function getLocation() {//This function will auto trigger co-ordinates
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    latitude = position.coords.latitude;    //Latitude received from Geolocation
    longitude = position.coords.longitude;  //Longitude received from Geolocation

    //alert($latitude);
    //alert($longitude);
    
    initMap(latitude, longitude); //Passing the received co-ordinate to Init Function to put in Google Maps

    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
    

    

}


</script>

<!-- STEP1: TO RECEIVE CO-ORDINATES THROUGH HTML5 GEO IP LOCATION: END -->


<!-- STEP2: FEEDING THE RECEIVED COORDINATES TO GOOGLE MAPS: START -->

    <style>
    /* =========== Google Maps CSS:  Start  =========== */
    
       #map {
        height: 400px;
        width: 50%;
        border: 1px solid #ccc;
       }

    /* =========== Google Maps CSS:  End  =========== */
    </style>
  
    <h3>My Google Maps Demo</h3>
    <div id="map"></div>
    <script>
      function initMap(latitude, longitude) {      //Receiving Passed Coordinates

       //alert(latitude);
       //alert(longitude);

        //var uluru = {lat: -25.363, lng: 131.044};
        var uluru = {lat: latitude, lng: longitude};//Passing Received coordinates here
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 20,                     //You can set zoom leve of the map
          center: uluru
        });
        var marker = new google.maps.Marker({      //For Map Marker
          position: uluru,
          map: map
        });
      }
    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=
AIzaSyD0i7kWi0RNaN867PflD7a6zK-JIk9Ut6Q&callback=initMap">
    </script>  <!-- I have used my Free API Key, please create yours -->

    <!-- <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=
    YOUR_API_KEY&callback=initMap">
    </script> -->


    <!-- STEP2: FEEDING THE RECEIVED COORDINATES TO GOOGLE MAPS: END -->

    </body>
</html>


