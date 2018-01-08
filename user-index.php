<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">


    <title>User |  Dashboard</title>

 <link rel="shortcut icon" type="img/png" href="img/life.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="starter-template.css" rel="stylesheet">
      <link href="main.css" rel="stylesheet">

      <style>
      #map {
     height: 525px;
     width: 100%;
    }

    #Clockdisplay{
      margin: 10px;
      color: black;
      font-weight: bold;


    }
    .quick_msg{

    padding-top: 28px;

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
            <li class="active"><a href="# ">Welcome !</a></li>
              <li><a href="# ">Ushan</a></li>

            <li><a href="user_login.php">Log out</a></li>

          </ul>
        </div>
      </div>
    </nav>

    <header id="header">
      <div class="container">
          <div class="row">
                <div class="col-md-8">
                    <h1 style="color:black;"><span class="glyphicon glyphicon-cog"></span>Dashboard <small>User Account</small></h1>

                </div>
                <div class="col-md-4">
                  <div id="Clockdisplay">
                      </div>

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
              <h3>Available Alerts <small>Disaster Managment System</small></h3>
        </div>
           <div id="map"></div>
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
     function initMap() {
       var option = {lat:7.2906, lng:80.6337};
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




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


  </body>
</html>
