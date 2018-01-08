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
      height: 400px;
      width: 100%;
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
<div class="container">
  <div class="rows">
    <div class="col-md-12">

      <h3 style="text-align:center">Disaster Map</h3>
          <hr>
           <div id="map"></div>


             </div>
      </div>
</div>



    <!--END OF THE MAP SECTION-->


    <!--FOOTER SECTION -->


  <footer class="footer-full" style="background-color: #2F4F4F;">


              <div class="footer-right">

                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>


              </div>






              <div class="footer-left">

                  <p id="footer_desc">

                  We provide state of the art academic facilities and boasts a history of producing great graduates since 1976.
                  </p>

                  <p class="footer-links">
                      <a href="#">Home</a>
                      .
                      <a href="#">About</a>
                      .
                      <a href="#">Alerts</a>
                      .
                      <a href="#">Contact</a>






                  </p>

                  <p>Team_Veilux &copy; 2017</p>
              </div>



          </footer>

    <!-- END FOOTER SECTION -->

    <script>
      function initMap() {
        var option = {lat:6.894002899999999, lng:79.90515649999999};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14 ,
          center: option
        });
        var marker = new google.maps.Marker({
          position: option,
          map: map
        });


        marker.addListner('click', function(){
          infoWindow.open(map, marker);
        });
      }

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
