<style>
      /* =========== Google Maps CSS:  Start  =========== */
      #map {
        width: 540px;
        height: 400px;
        border: 1px solid #989898;
      }
      @media screen and (min-width:768px) and (max-width: 1200px)
      {
        #map
        {
          width:460px;
          height:400px;
        }

      }

      @media screen and (min-width:0px) and (max-width:767px)
      {
        #map
        {
          width:80%;
          margin-left: 10%;
          height:40%;
          margin-bottom:40px;
        }
      }

      /* =========== Google Maps CSS:  End  =========== */

   
    </style>



<?php

 /*=================== IP Code: Start ==============*/ 
  //include('connection.php');
  //include('header.php');
  include("geo_ip_files/geoipcity.inc");           //for getting info through IP
  include("geo_ip_files/geoipregionvars.php");

  /*START*/

?>


<!-- Receive Latitude in this div via HTML5 Geolocation: Start  -->

    <p id="demo"><?php  ?></p>

<!-- Receive Latitude in this div via HTML5 Geolocation: End  --> 


<?php        

  /*END*/

  $giCity = geoip_open("geo_ip_files/GeoLiteCity.dat", GEOIP_STANDARD);

   //$ip =$_SERVER['REMOTE_ADDR'];
   $ip = file_get_contents('https://api.ipify.org');
    
    //$ip = "106.222.109.18";
    
    
    $record = geoip_record_by_addr($giCity, $ip);


    echo "<br /><br /><br /><br />";
    ?>
   <!-- ========= Google Maps DIV:  Start  =========   -->
  <div class="container">
    <div class="row">
      
    
    <div class="col-md-6 col-sm-5 col-xs-12">
   <!-- ========= Google Maps DIV:  End  =========   -->   

    <?php
    
    //echo $ip; die;
    echo "Getting Country and City detail by IP Address <br /><br />";
    echo "IP: " . $ip . "<br /><br />";

    echo "Country Code: " . $record->country_code .  "<br />" .
    "Country Code3: " . $record->country_code . "<br />" .
    "Country Name: " . $record->country_name . "<br />" .
    "Region Code: " . $record->region . "<br />" .
    "Region Name: " . $GEOIP_REGION_NAME[$record->country_code][$record->region] . "<br />" .
    "City: " . $record->city . "<br />" .
    "Postal Code: " . $record->postal_code . "<br />" .
    "Latitude: " . $record->latitude . "<`enter code here`br />" .
    "Longitude: " . $record->longitude . "<br />" ;
    //"Metro Code: " . $record->metro_code . "<br />" .
   // "Area Code: " . $record->area_code . "<br />" ; 

   // echo $record->latitude;


//include('footer.php');

    $latitude = $record->latitude;       //storing co-ordinates in variable 
    $longitude = $record->longitude;     // to pass in the JS Line 247



 /*================== IP Code: End ======================*/ 

  /*===================Fetching Country Symbol and Code from  DB: Start ==================*/ 

  //$q = "SELECT * FROM currencies WHERE country = '$record->country_name'";//fetching from query
   $q = "SELECT * FROM currencies WHERE country = 'United Arab Emirates'";    //Test hardcoded data
    $r = mysqli_query($conn, $q) or exit(mysqli_error($conn));
    
    //echo $q; die;

    //echo $r; die;

    $fetch = mysqli_fetch_array($r);

    $amount = 500;                    //Your price / value you want to convert

   // echo $fetch[4];
    echo "<br><br>";

    ?>
           <!-- <div  id="map"></div> -->
    <?php


/*===================Fetching Country Symbol and Code from  DB: End ==================*/


   

/* ======================== Currency Layer Conversion: Start ======================== */

/* ==================== Insert Currency Value in INR: Start===================== */ 

$INR = 1;                //Indian Rupees must be set to 1 
$USD = 64.67;            //United States Dollar
$AUD = 48.55;            //Australian Dollar
$CAD = 48.03;            //Canadian Dollar
$EUR = 69.35;            //Euro
$JPY = 0.59;             //Yen
$GBP = 82.73;            //British Pound
$AED = 17.59;            //United Arab Emirates Dirham
$CNY = 9.39;             //Yuan
//$KWD = 212.40;           //Kuwaiti Dinar


                         // *Note: write selected country's equivalent value in INR

/* ==================== Insert Currency Value in INR: End===================== */
$fetch[3];

if($fetch[3] == 'USD') {
  $currency_rate = $USD;
  $currency_symbol = $fetch[4];
}

else if($fetch[3] == 'INR') {                 //Indian Currency 
  $currency_rate = $INR;
  $currency_symbol = $fetch[4];
}

else if($fetch[3] == 'AUD') {                 //Australian Dollars
  $currency_rate = $AUD;
  $currency_symbol = $fetch[4];
}

else if($fetch[3] == 'CAD') {                 //Canadian Dollars
  $currency_rate = $CAD;
  $currency_symbol = $fetch[4];
}

else if($fetch[3] == 'EUR') {                 //Euros
  $currency_rate = $EUR;
  $currency_symbol = $fetch[4];
}


else if($fetch[3] == 'JPY') {                 //Yen
  $currency_rate = $JPY;
  $currency_symbol = $fetch[4];
}

else if($fetch[3] == 'GBP') {                 //British Pounds
  $currency_rate = $GBP;
  $currency_symbol = $fetch[4];
}

else if($fetch[3] == 'AED') {                 //United Arab Emirates dirham
  $currency_rate = $AED;
  $currency_symbol = $fetch[4];
}

else if($fetch[3] == 'CNY') {                 //Yuan
  $currency_rate = $CNY;
  $currency_symbol = $fetch[4];
}

else {                                   //For other countries accept Dollars
  $currency_rate = $USD;
  $currency_symbol = '&#x0024';          //Dollar Symbol HTML Code

}

//echo $currency_rate;

$converted_currency = ($amount/$currency_rate);  //Formula to convert into equivalent


/* ======================== Currency Layer Conversion: End ======================== */

/* ============== Displaying Currency Code with Symbols: Start ================ */

 echo "<h5>Currency: &emsp;$fetch[4]</h5>";

 echo "<h5>Currency Name:  &emsp; $fetch[2] &emsp;  </h5>";

 echo "<h5>Indian Currency: &emsp;&#8377; $amount</h5>";

 echo "<h5>Equivalent Value: &emsp;$currency_symbol $converted_currency</h5>";

 echo "<br/><br/>*Disclaimer: We are using your IP Address for best experience possible(Manual Method).";

/* ============== Displaying Currency Code with Symbols: End ================ */
    //$country = $record->country_name;   //receiving country by IP
    $country = "United Arab Emirates";                 //hardcoded value for Testing

    $array = ['Brazil', 'China', 'India', 'Mexico', 'South Africa', 'Germany', 'United Arab Emirates' ];


echo "<select>";
foreach($array as $value){
  echo "<option value = '$value'";
  if($value == $country){
    echo " selected='selected' ";
  }
  echo ">$value</option>";
}

echo "</select>";

?>

</div>
      <div class="col-md-6 col-sm-7 col-xs-12">
        <div  id="map"></div>
      </div>

</div>
</div>


    <script>

    var latitude;
    var longitude;

/* ================= RECEIVING CO-ORDINATE FROM GEO IP: Start =================*/ 

    var x = document.getElementById("demo");

window.onload = function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    latitude = position.coords.latitude;
    longitude = position.coords.longitude;

    //alert($latitude);
    //alert($longitude);

    initMap(latitude, longitude);         //passing the received co-ordinate to initMap function to feed the google map

    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
    


    

}

 /*================= RECEIVING CO-ORDINATE FROM GEO IP: End =================*/

 /*  ===========JavaScript Added of Google Maps: Start ================== */


  


</script>
 <script>
      function initMap(latitude, longitude) {
        var uluru = {lat: latitude, lng: longitude};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 20,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=
AIzaSyD0i7kWi0RNaN867PflD7a6zK-JIk9Ut6Q&callback=initMap">
    </script>

    <!--  ===========JavaScript Added of Google Maps: End ================== -->