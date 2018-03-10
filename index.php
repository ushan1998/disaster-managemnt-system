<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Life Beyond</title>
 <link rel="shortcut icon" type="img/png" href="img/life.png">
    <link href="css/bootstrap.css" rel="stylesheet" />

    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <link href="css/font-awesome-animation.css" rel="stylesheet" />

    <link href="css/prettyPhoto.css" rel="stylesheet" />

    <link href="css/style.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <style>
     #map {
      height: 800px;
      width: 100%;
     }
     .footer-distributed{
 background-color: #292c2f;
 box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
 box-sizing: border-box;
 width: 100%;
 text-align: left;
 font: bold 16px sans-serif;

 padding: 55px 50px;
 margin-top: 80px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
 display: inline-block;
 vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
 width: 40%;
}

/* The company logo */

.footer-distributed h3{
 color:  #ffffff;
 font: normal 36px 'Cookie', cursive;
 margin: 0;
}

.footer-distributed h3 span{
 color:  #5383d3;
}

/* Footer links */

.footer-distributed .footer-links{
 color:  #ffffff;
 margin: 20px 0 12px;
 padding: 0;
}

.footer-distributed .footer-links a{
 display:inline-block;
 line-height: 1.8;
 text-decoration: none;
 color:  inherit;
}

.footer-distributed .footer-company-name{
 color:  #8f9296;
 font-size: 14px;
 font-weight: normal;
 margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
 width: 35%;
}

.footer-distributed .footer-center i{
 background-color:  #33383b;
 color: #ffffff;
 font-size: 25px;
 width: 38px;
 height: 38px;
 border-radius: 50%;
 text-align: center;
 line-height: 42px;
 margin: 10px 15px;
 vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
 font-size: 17px;
 line-height: 38px;
}

.footer-distributed .footer-center p{
 display: inline-block;
 color: #ffffff;
 vertical-align: middle;
 margin:0;
}

.footer-distributed .footer-center p span{
 display:block;
 font-weight: normal;
 font-size:14px;
 line-height:2;
}

.footer-distributed .footer-center p a{
 color:  #5383d3;
 text-decoration: none;;
}


/* Footer Right */

.footer-distributed .footer-right{
 width: 20%;
}

.footer-distributed .footer-company-about{
 line-height: 20px;
 color:  #92999f;
 font-size: 13px;
 font-weight: normal;
 margin: 0;
}

.footer-distributed .footer-company-about span{
 display: block;
 color:  #ffffff;
 font-size: 14px;
 font-weight: bold;
 margin-bottom: 20px;
}

.footer-distributed .footer-icons{
 margin-top: 25px;
}

.footer-distributed .footer-icons a{
 display: inline-block;
 width: 35px;
 height: 35px;
 cursor: pointer;
 background-color:  #33383b;
 border-radius: 2px;

 font-size: 20px;
 color: #ffffff;
 text-align: center;
 line-height: 35px;

 margin-right: 3px;
 margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

 .footer-distributed{
   font: bold 14px sans-serif;
 }

 .footer-distributed .footer-left,
 .footer-distributed .footer-center,
 .footer-distributed .footer-right{
   display: block;
   width: 100%;
   margin-bottom: 40px;
   text-align: center;
 }

 .footer-distributed .footer-center i{
   margin-left: 0;
 }

}


}

  </style>

   </head>
<body>

     <!-- NAV SECTION -->
         <div class="navbar navbar-inverse navbar-fixed-top">

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <img src="img/life.png" height="60px" width="200px">
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="index.php">HOME</a></li>
                  <li><a href="about.php">ABOUT</a></li>
                   <li><a href="alerts.php">ALERTS</a></li>
                  <li><a href="Contact.php">CONTACT</a></li>
                  <li><a href="user_login.php">LOG IN</a></li>
                </ul>
            </div>

        </div>
    </div>
     <!--END NAV SECTION -->
	 <hr>

    <!--BACKGROUND SECTION-->
    <div id="home-sec">


    <div class="container"  >
        <div class="row text-center">
            <div  class="col-md-12" >
				<div id="center-logo">
					<p>"Even with all our technology and the inventions that make modern life so much easier than it once was, it takes just one big natural disaster to wipe all that away and remind us that, here on Earth, we're still at the mercy of nature."</p>
          <i>-Neil degras tyson</i>
				 </div>
                <img src="img/life.png" height="200px" width="800spx">


            </div>
        </div>
    </div>
         </div>
  <!-- END OF BACKGROUND SECTION-->

    <!--MAP SECTION-->

      <h3 style="text-align:center;padding-">Available Disasters <small>In the Srilanka in this moment</small></h3>
          <hr>
           <div id="map"></div>





    <!--END OF THE MAP SECTION-->


    <!--FOOTER SECTION -->


    <footer class="footer-distributed">

  			<div class="footer-left">

  				<img src="img/life.png" alt="" height="60px" width="200px">

  				<p class="footer-links">
  					<a href="index.php">Home</a>
  					·
  					<a href="about.php">ABOUT</a>
  					·
  					<a href="alerts.php">ALERTS</a>
  					·
  					<a href="contact.php">CONTACTS</a>
  					·
  					<a href="user_login.php">LOG IN</a>
  				</p>

  				<p class="footer-company-name">NSBM_Team Veilux &copy; 2018</p>
  			</div>

  			<div class="footer-center">

  				<div>
  					<i class="fa fa-map-marker"></i>
  					<p><span></span> 11 Alwis Avenue Dehiwala, Srilanka</p>
  				</div>

  				<div>
  					<i class="fa fa-phone"></i>
  					<p>+1 555 123456</p>
  				</div>

  				<div>
  					<i class="fa fa-envelope"></i>
  					<p><a href="mailto:support@company.com">headsup@contact.com</a></p>
  				</div>

  			</div>

  			<div class="footer-right">

  				<p class="footer-company-about">
  					<span>Heads Up Disaster Managment System</span>
  					This is the Latest Disaster Managment System Hosts by Heads Up Foundation

  				</p>

  				<div class="footer-icons">

  					<a href="www.facebook.com"><i class="fa fa-facebook"></i></a>
  					<a href="www.twitter.com"><i class="fa fa-twitter"></i></a>
  					<a href="www.linkedin.com"><i class="fa fa-linkedin"></i></a>
  					<a href="www.github.com/ushan1998"><i class="fa fa-github"></i></a>

  				</div>

  			</div>

  		</footer>

    <!-- END FOOTER SECTION -->

    <script>
        var customLabel = {
          restaurant: {
            label: 'R'
          },
          bar: {
            label: 'B'
          }
        };

          function initMap() {
          var map = new google.maps.Map(document.getElementById('map'), {
            center: new google.maps.LatLng(7.8731, 80.7718),
            zoom: 8
          });
          var infoWindow = new google.maps.InfoWindow;

            // Change this depending on the name of your PHP or XML file
            downloadUrl('show_xml.php', function(data) {
              var xml = data.responseXML;
              var markers = xml.documentElement.getElementsByTagName('marker');
              Array.prototype.forEach.call(markers, function(markerElem) {
                var id = markerElem.getAttribute('alert_id');
                var name = markerElem.getAttribute('reporter');
                var address = markerElem.getAttribute('headlines');
                var type = markerElem.getAttribute('description');
                var image = markerElem.getAttribute('image');
                var point = new google.maps.LatLng(
                    parseFloat(markerElem.getAttribute('lat')),
                    parseFloat(markerElem.getAttribute('long')));

                var infowincontent = document.createElement('div');
                var strong = document.createElement('strong');
                strong.textContent = name
                infowincontent.appendChild(strong);
                infowincontent.appendChild(document.createElement('br'));

                var text = document.createElement('text');
                text.textContent = address
                infowincontent.appendChild(text);
                infowincontent.appendChild(document.createElement('br'));

                var text = document.createElement('text');
                text.textContent = type
                infowincontent.appendChild(text);

                var icon = customLabel[type] || {};
                var marker = new google.maps.Marker({
                  map: map,
                  position: point,
                  label: icon.label
                });
                marker.addListener('click', function() {
                  infoWindow.setContent(infowincontent);
                  infoWindow.open(map, marker);
                });
              });
            });
          }



        function downloadUrl(url, callback) {
          var request = window.ActiveXObject ?
              new ActiveXObject('Microsoft.XMLHTTP') :
              new XMLHttpRequest;

          request.onreadystatechange = function() {
            if (request.readyState == 4) {
              request.onreadystatechange = doNothing;
              callback(request, request.status);
            }
          };

          request.open('GET', url, true);
          request.send(null);
        }

        function doNothing() {}
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdBp67pwEBLHGZYSawJs-cuanrHhmn7mk&callback=initMap">
      </script>


    <script src="plugins/jquery-1.10.2.js"></script>

    <script src="plugins/bootstrap.min.js"></script>

    <script src="plugins/jquery.isotope.min.js"></script>

    <script src="plugins/jquery.prettyPhoto.js"></script>

    <script src="js/custom.js"></script>

</body>
</html>
