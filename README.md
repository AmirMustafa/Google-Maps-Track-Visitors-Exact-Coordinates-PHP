# Google Maps Track Visitors Exact Coordinates PHP

Google Maps Track Visitors Exact Coordinates 

1. This project tracks the visitor's exact co-ordinates with the help of HTML5 Geolocation property.

2. User have to give permission to share their location.

3. Co-ordinates are fed to the Google Maps to show equivalent Location

4. Google Maps are having proper Marker and Zoom setting facility.


## Installation
1. Clone or Download the repository and keep it in server or local server(like XAMPP).
2. Now this is API based project, so goto [Google Developers](https://developers.google.com/maps/documentation/javascript/get-api-key) and create you free API. Follow the images below for better understanding.

3. Sign in to Gmail.

4. Click on Get A Key

5. On the next pop up select My Project, check Yes Radio button and click on Create and Enable API

6. Your API will be generated. Copy it

7. One more setting click on API Console on the same Pop Up (Follow preview images below). Goto Credentials Tab. Under Key Restrictions select HTTP referrers(websites) and put * on the textbox save

8. Now goto index.php page Line 82, eg.

```
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=
API_KEY_PASTE_HERE&callback=initMap">



```
You may probably find my API Key so replace it with your free one.

9. Run your code through server(Note you can run this code through any browser, for google chrome Https (secure server is must))

10. Additionally have provided each snippet of the code:

Snippet1: Receives Latutude and Longitude with the help of HTML5 Geolocation

Snippet2: Google Maps with hardcoded co-ordinates

Snippet3: Receives IP plus Coordinates are fetched and Google Maps shown

  
## Preview


![Screenshot of Google Maps ](https://cloud.githubusercontent.com/assets/15896579/25443295/0d1e0fe2-2ac5-11e7-9718-49b1c084e4e7.png?raw=true "Screenshot of Google Maps")
<br/><br/><br/>

![Screenshot of Google Maps ](https://cloud.githubusercontent.com/assets/15896579/25443298/1112de70-2ac5-11e7-9a04-8d7523d4ab99.png?raw=true "Screenshot of Google Maps")
<br/><br/><br/>

![Screenshot of Google Maps ](https://cloud.githubusercontent.com/assets/15896579/25443308/14fa29d0-2ac5-11e7-9b12-dc01184bde67.png?raw=true "Screenshot of Google Maps")
<br/><br/><br/>

![Screenshot of Google Maps ](https://cloud.githubusercontent.com/assets/15896579/25443272/fabc62b8-2ac4-11e7-8b2e-8dc799c425e6.png?raw=true "Screenshot of Google Maps")
<br/><br/><br/>

![Screenshot of Google Maps ](https://cloud.githubusercontent.com/assets/15896579/25443278/fe92006e-2ac4-11e7-9b87-7ca0941a7f4b.png?raw=true "Screenshot of Google Maps")
<br/><br/><br/>

![Screenshot of Google Maps ](https://cloud.githubusercontent.com/assets/15896579/25443282/01b2b928-2ac5-11e7-848e-8b049060fda4.png?raw=true "Screenshot of Google Maps")
<br/><br/><br/>

![Screenshot of Google Maps ](https://cloud.githubusercontent.com/assets/15896579/25443287/04f36e02-2ac5-11e7-9e07-9536df0b04a8.png?raw=true "Screenshot of Google Maps")
<br/><br/><br/>

![Screenshot of Google Maps ](https://cloud.githubusercontent.com/assets/15896579/25443291/09032190-2ac5-11e7-97fb-a9150e6b3a56.png?raw=true "Screenshot of Google Maps")
<br/><br/><br/>


<br/><br/><br/>




## License

(The MIT License)

Copyright (c) 2016 Amir Mustafa

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
'Software'), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

