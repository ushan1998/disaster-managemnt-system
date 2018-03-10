<?php

//connect to database

$conn = mysqli_connect("127.0.0.1", "root", "", "dms");

if ($conn) {
//echo "database connected";
}

// if upload button is processed
if (isset($_POST['userupload'])) {

  $filename = $_FILES['userimage']['name'];
  $tempname = $_FILES['userimage']['tmp_name'];

  $folder = 'image/';

  move_uploaded_file($tempname, $folder.$filename);


  //get allsubmited data from the form

  $Reportername = $_POST['userReportername'];
  $headlines = $_POST['userheadlines'];
  $Description = $_POST['userDescription'];
  $image = $_FILES['userimage']['name'];
  $Latitude = $_POST['userLatitude'];
  $Longitude = $_POST['userLongitude'];



          $sql="INSERT INTO `add_alert`(`reporter`, `headlines`, `description`, `image`, `long`, `lat`) VALUES ('$Reportername','$headlines','$Description','$image','$Latitude','$Longitude')";
          $query = mysqli_query($conn, $sql);
          if ($query) {
          //  echo "image is uploaded";
          }



}











 ?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <!--java script framework link : https://github.com/axios/axios -->
     <script src="https://unpkg.com/axios/dist/axios.min.js"></script>


    <title>User |  Dashboard</title>

 <link rel="shortcut icon" type="img/png" href="img/life.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="starter-template.css" rel="stylesheet">
      <link href="main.css" rel="stylesheet">

<style>

    #Clockdisplay{
      margin: 10px;
      color: black;
      font-weight: bold;


    }
    .bluearea{
      height: 40px;
      width: 100%;
      background-color: LightGray;

    }
    #user-addalert{
      margin: 4px;
      padding: 10px;
    }

    #user-alertsubmit{
      padding-top: 30px;
    }
    .quick_msg{

    padding-top: 28px;

    }
    #location-form{
      padding-left: 25px;
    }

    #adminaddalert{
      padding-left: 25px;
    }

    #text-center{
      padding-left: 25px;
    }
</style>

  </head>

  <body onload="renderTime();">

    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">User </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="user-index.php">Dashboard</a></li>
            <li><a href="user-alerts.php">Alerts</a></li>
            <li><a href="user-index.php">Map</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li style="padding-top:8px;"><button type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-sm">Admin Details</button></li>
                <li><a href=""></a></li>


            <!--admin details modal start over here-->

                <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" style="margin-top:10px;">
              <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                  <div class="admin-details">
                    <img src="img/user.png" alt="" height="100px" height="100px" style="padding-left:100px;padding-top:10px;">
                      <h3 style="margin:10px;">Welcome <small> <?php session_start(); echo $_SESSION['fname']; ?> </small></h3>


                  </div>

                </div>
              </div>
            </div>

            <!--end of the admin details modal-->



              <li><a href="logout.php">Log out</a></li>

          </ul>
        </div>
      </div>
    </nav>

    <header id="header">
      <div class="container">
          <div class="row">
                <div class="col-md-9">
                    <h1 style="color:black;"><span class="glyphicon glyphicon-cog"></span>Dashboard <small>User Acoount</small></h1>

                </div>
                <div class="col-md-3">
                  <div id="Clockdisplay">
                      </div>
            </div>
      </div>
  </header>

<section id="breadcumb">

  <div class="container">
        <ol class="breadcumb">
          <li class="active">Dashboard</li>
        </ol>

  </div>

</section>

<section id="main">

  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="list-group">
            <a href="user-index.php" class="list-group-item list-group-item-success"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              Dashboard
            </a>

            <a href="user-addalerts.php" class="list-group-item"><span class="glyphicon glyphicon-flash" aria-hidden="true"></span>Add Alerts</a>
            <a href="user-contacts.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Contacts</a>

        </div>

        <div class="quick_msg">
          <h3>Quick Messege</h3>
          <form method="post" action="quickmsg.php" enctype="multipart/form-data" class="form-horizontal">
            <div class="form-group">
                    <label for="" class="control-label">Author </label>
                <input type="text" class="form-control" name="user_q_msg_author" placeholder="Author">
            </div>
            <div class="form-group">
                    <label for="" class="control-label">Contact No </label>
                <input type="text" class="form-control" name="user_q_msg_contact" placeholder="Contact No">
            </div>
            <div class="form-group">
                    <label for="" class="control-label">Email </label>
                <input type="text" class="form-control" name="user_q_msg_email" placeholder="E mail">
            </div>
            <div class="form-group">

                <textarea id="" name="user_q_msg_msg" rows="8" cols="38" placeholder="Messege"></textarea>
            </div>
            <div class="form-group">
                <button name="user_q_msg_submit" type="submit" class="btn btn-info">Submit</button>
              </div>
          </form>


        </div>
      </div>
      <div class="col-md-9">
        <div class="page-header">
              <h3>Mark  Alert <small>Disaster Managment System</small></h3>
        </div>

        <div class="bluearea">
              <h3 id="user-addalert">Add a Alert</h3>
        </div>

          <h4 id="text-center" style="padding-top:50px;">Enter Location: </h4>
          <form id="location-form">
            <input type="text" id="location-input" class="form-control form-control-lg">
            <br>
            <button type="submit" class="btn btn-primary btn-block">Show the Location</button>
          </form>
          <div class="card-block" id="formatted-address"></div>
          <div class="card-block" id="address-components"></div>
          <div class="card-block" id="geometry"></div>



        <form method="post" action="user-addalerts.php" enctype="multipart/form-data" id="adminaddalert">

              <div class="form-group has-success">
                  <label for="Reporter">Reporter</label>
                  <input type="text" class="form-control" name="userReportername" placeholder="Reporter">
                </div>
              <div class="form-group">
                <label for="headlines">Headlines</label>
                <input type="text" class="form-control" name="userheadlines" placeholder="Headlines">
              </div>

              <div class="form-group">
                <label for="headlines">Description</label>
              <textarea name="userDescription" class="form-control" rows="4" placeholder="Description"></textarea>
              </div>

                <div class="form-group">
                    <label for="exampleInputFile">Upload image</label>
                    <input type="file" name="userimage">
                    <p class="help-block">please upload images less than 5mb</p>
                  </div>

                  <div class="form-group">
                    <label for="headlines">Longitude</label>
                    <input type="text" class="form-control" name="userLatitude" placeholder="Latitude">
                  </div>

                  <div class="form-group">
                    <label for="headlines">Latitude</label>
                    <input type="text" class="form-control" name="userLongitude" placeholder="Longitude">
                  </div>


                    <button type="submit" name="userupload" class="btn btn-info">Send</button>
                  </form>


      </div>
    </div>


  </div>

</section>


<footer id="dash-footer">

<p>Copyright NSBM_Team Veilux &copy; 2018</p>

  <div class="footer-right">
    <img src="img/life.png" alt="logo" height="40px" width="150px">
  </div>


</footer>
<script type="text/javascript">

		function renderTime(){

	//Date

	var mydate = new Date();
	var year = mydate.getYear();


	if (year < 1000) {
		year +=1900
	}

	var day = mydate.getDay();
	var month = mydate.getMonth();
	var daym = mydate.getDate();
	var dayarray = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
	var montharray = new Array("January","February","March","April","May","June","July","Augest","September","October","November","December");

	//Date section End

	//Time


	var currentTime = new Date();
	var h = currentTime.getHours();
	var m = currentTime.getMinutes();
	var s = currentTime.getSeconds();

		if (h == 24) {
			h =0;
		}else if (h > 12) {
			h = h - 0;
		}

		if (h < 10) {
			h = "0 " + h;

		}

		if (m < 10) {

			m = "0" + m;

		}

		if (s < 10) {
			s = "0" +s;

		}

		var myClock = document.getElementById("Clockdisplay");
		myClock.textContent = "" +dayarray[day]+" " +daym+ " " +montharray[month]+ " " +year+ " | " +h+ ":" +m+ ":" +s;
		myClock.innerText = "" +dayarray[day]+" " +daym+ " " +montharray[month]+ " " +year+ "  " +h+ ":" +m+ ":" +s;


		setTimeout("renderTime()", 1000);
}

renderTime();



	</script>
  <script>
   // Call Geocode
   //geocode();

   // Get location form
   var locationForm = document.getElementById('location-form');

   // Listen for submiot
   locationForm.addEventListener('submit', geocode);

   function geocode(e){
     // Prevent actual submit
     e.preventDefault();

     var location = document.getElementById('location-input').value;

     axios.get('https://maps.googleapis.com/maps/api/geocode/json',{
       params:{
         address:location,
         key:'AIzaSyBnlaoTsU8vxYwdsKPhaylgpWxIBhEzOP4'
       }
     })
     .then(function(response){
       // Log full response
       console.log(response);

       // Formatted Address
       var formattedAddress = response.data.results[0].formatted_address;
       var formattedAddressOutput = `
         <ul class="list-group">
           <li class="list-group-item">${formattedAddress}</li>
         </ul>
       `;

       // Address Components
       var addressComponents = response.data.results[0].address_components;
       var addressComponentsOutput = '<ul class="list-group">';
       for(var i = 0;i < addressComponents.length;i++){
         addressComponentsOutput += `
           <li class="list-group-item"><strong>${addressComponents[i].types[0]}</strong>: ${addressComponents[i].long_name}</li>
         `;
       }
       addressComponentsOutput += '</ul>';

       // Geometry
       var lat = response.data.results[0].geometry.location.lat;
       var lng = response.data.results[0].geometry.location.lng;
       var geometryOutput = `
         <ul class="list-group">
           <li class="list-group-item"><strong>Latitude</strong>: ${lat}</li>
           <li class="list-group-item"><strong>Longitude</strong>: ${lng}</li>
         </ul>
       `;

       // Output to app
       document.getElementById('formatted-address').innerHTML = formattedAddressOutput;
       document.getElementById('address-components').innerHTML = addressComponentsOutput;
       document.getElementById('geometry').innerHTML = geometryOutput;
     })
     .catch(function(error){
       console.log(error);
     });
   }
 </script>







    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


  </body>
</html>
