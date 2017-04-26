<!DOCTYPE html>
<html>
<body>

<!-- <button onclick="getLocation()">Try It</button> -->

<p id="demo"><?php  ?></p>

<script>
var x = document.getElementById("demo");

window.onload = function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
	$latitude = position.coords.latitude;
    $longitude = position.coords.longitude;

    //alert($latitude);
    //alert($longitude);

    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
    return true;

    

}


</script>

</body>
</html>
