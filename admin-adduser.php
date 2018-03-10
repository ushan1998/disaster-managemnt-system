
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">


    <title>Admin |  Dashboard</title>
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

      </style>


  </head>

  <body>

    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Admin </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="admin-index.php">Dashboard</a></li>
            <li><a href="admin-req.php">Requests</a></li>
            <li><a href="admin-index.php">Alerts</a></li>
            <li><a href="admin-addalert.php">Add Alert</a></li>
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


            <li><div class="dropdown create" style="padding-top:7px;padding-left:10px;">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              User Managment
              <span class="caret"></span>
              </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a href="admin-adduser.php">Add Users</a></li>
                  <li><a href="admin-users.php">View Users</a></li>
                  <li><a href="#"></a></li>

                </ul>
              </div></li>
            <li><a href="logout.php">Log out</a></li>

          </ul>
        </div>
      </div>
    </nav>

    <header id="header">
      <div class="container">
          <div class="row">
                <div class="col-md-9">
                    <h1 style="color:black;"><span class="glyphicon glyphicon-cog"></span>Dashboard <small>Manage the System</small></h1>

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
            <a href="admin-index.php" class="list-group-item list-group-item-success"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              Dashboard
            </a>
            <a href="admin-req.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="margin:4px;"></span>Requests</a>
            <a href="admin-contacts.php" class="list-group-item"><span class="glyphicon glyphicon-earphone" aria-hidden="true" style="margin:4px;"></span>Contacts</a>
            <a href="admin-msg.php" class="list-group-item"><span class="glyphicon glyphicon-envelope" aria-hidden="true" style="margin:4px;"></span>Messeges</a>


        </div>
        <div class="onlineusers">
          <h3>System Overviwe</h3>
          <div class="panel panel-default">
            <div class="panel-heading">
                  <h3 class="panel-title">Count Visitors</h3>
            </div>
                <div class="panel-body">
                    <div class="well">
                      <!-- hitwebcounter Code START -->
                <a href="http://www.hitwebcounter.com" target="_blank">
                <img src="http://hitwebcounter.com/counter/counter.php?page=6882005&style=0001&nbdigits=5&type=page&initCount=0" title="free hits" Alt="free hits"   border="0" >
                </a>  <br/>
                                          <!-- hitwebcounter.com -->
                                          <a href="http://www.hitwebcounter.com" title="" target="_blank" style="font-family: ;
                                          font-size: px; color: #; text-decoration:  ;">
                                          </a>
                    </div>
                </div>

          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
                  <h3 class="panel-title">Calendar</h3>
            </div>
                <div class="panel-body">
                    <div class="well">
                    <iframe src="https://calendar.google.com/calendar/embed?height=300&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=ushanalwis81%40gmail.com&amp;color=%231B887A&amp;ctz=Asia%2FColombo" style="border:solid 1px #777" width="200" height="300" frameborder="0" scrolling="no"></iframe>

                    </div>
                </div>

          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="page-header">
              <h3>Add User <small>Disaster Managment System</small></h3>
        </div>
              <div class="adduser-form">
                      <h3 style="text-align:center;">Create a New Account </h3>
                      <hr>
                <form class="form-horizontal" method="post" action="signin.php">
                   <div class="form-group">
                           <label for="inputuserfname" class="col-sm-2 control-label">First Name </label>
                       <div class="col-sm-10">
                       <input type="text" class="form-control" name="inputuserfname" placeholder="first name">
                       </div>
                   </div>
                   <div class="form-group">
                       <label for="inputuserlname" class="col-sm-2 control-label">Last Name </label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" name="insputlname" placeholder="last name">
                         </div>
                   </div>

                   <div class="form-group">
                       <label for="inputage" class="col-sm-2 control-label">Age</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" name="inputage" placeholder="age">
                         </div>
                   </div>
                   <div class="form-group">
                       <label for="inputposition" class="col-sm-2 control-label">Position</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" name="inputposition" placeholder="position">
                         </div>
                   </div>
                   <div class="form-group">
                       <label for="inputnumber" class="col-sm-2 control-label">Contact No</label>
                         <div class="col-sm-10">
                           <input type="number" class="form-control" name="inputnumber" placeholder="contact number">
                         </div>
                   </div>
                   <div class="form-group">
                       <label for="inputemail" class="col-sm-2 control-label">E mail</label>
                         <div class="col-sm-10">
                           <input type="inputemail" class="form-control" name="insputemail" placeholder="email">
                         </div>
                   </div>
                   <hr>
                   <div class="form-group" style="padding-left: 160px;">
			            <select class="form-control" style="width: 100px;" name="role">


						 		<option value="user">User</option>
									<option value="admin">Admin</option>
								</div>
						</select>
                   </div>
                   <div class="form-group">
                       <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                         <div class="col-sm-10">
                           <input type="password" class="form-control" name="insputPassword" placeholder="Password">
                         </div>
                   </div>
                   <div class="form-group">
                       <div class="col-sm-offset-2 col-sm-10">
                           <div class="checkbox">
                                   <label>
                                     <input type="checkbox"> Agree for all conditions & Terms
                                   </label>
                           </div>
                       </div>
                   </div>
                   <div class="form-group">
                       <div class="col-sm-offset-2 col-sm-10">
                             <button type="submit" class="btn btn-info">Sign in</button>
                       </div>
                   </div>
             </form>
              </div>
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







    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


  </body>
</html>
