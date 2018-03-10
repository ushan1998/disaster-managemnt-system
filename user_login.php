<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Disaster Managment System</title>
    <link rel="shortcut icon" type="img/png" href="img/life.png">

    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome-animation.css" rel="stylesheet" />
    <link rel="stylesheet"type="text/css" href="style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <style>
    .footer-distributed{
background-color: #292c2f;
box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
box-sizing: border-box;
width: 100%;
text-align: left;
font: normal 16px sans-serif;

padding: 45px 50px;
margin-top: 80px;
}

.footer-distributed .footer-left p{
color:  #8f9296;
font-size: 14px;
margin: 0;
}

/* Footer links */

.footer-distributed p.footer-links{
font-size:18px;
font-weight: bold;
color:  #ffffff;
margin: 0 0 10px;
padding: 0;
}

.footer-distributed p.footer-links a{
display:inline-block;
line-height: 1.8;
text-decoration: none;
color:  inherit;
}

.footer-distributed .footer-right{
float: right;
margin-top: 6px;
max-width: 180px;
}

.footer-distributed .footer-right a{
display: inline-block;
width: 35px;
height: 35px;
background-color:  #33383b;
border-radius: 2px;

font-size: 20px;
color: #ffffff;
text-align: center;
line-height: 35px;

margin-left: 3px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 600px) {

.footer-distributed .footer-left,
.footer-distributed .footer-right{
  text-align: center;
}

.footer-distributed .footer-right{
  float: none;
  margin: 0 auto 20px;
}

.footer-distributed .footer-left p.footer-links{
  line-height: 1.8;
}
}

    </style>


    </head>


      <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

  <body>
    <hr>
<div class="container">
  <div class="row">
      <div class="col-md-6 col-sm-7 col-xs-7">


              <img src="img/life.png" alt="" width="400px" height="150px">

      </div>

  </div>
    <hr>

    <div class="row" style="padding-top:50px">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div id="home-section">
            <h3 id="login"style="text-align:center;letter-spacing:2px">LOG IN</h3>
            <form action="user_login2.php" method="POST" class="form-horizontal">
                  <div class="form-group">
                          <label for="inputuserid" class="col-sm-2 control-label">Email Address</label>
                      <div class="col-sm-10">
                      <input type="useremail" name="email" class="form-control" id="inputusermail" placeholder="E mail">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" name="password" class="form-control" id="insputPassword3" placeholder="Password">
                        </div>
                  </div>
                  <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                          <div class="checkbox">
                                  <label>
                                    <input type="checkbox"> Remember me
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
  <div id="hr" style="padding-top:50px">
  <hr>
  </div>
</div>

<footer class="footer-distributed">

			<div class="footer-right">

				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>

			</div>

			<div class="footer-left">

				<p class="footer-links">
					<a href="index.php">Home</a>

				</p>

				<p>NSBM_Team Veilux &copy; 2018</p>

			</div>

		</footer>


  </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

   <script  src="js/index.js"></script>

   <script src="plugins/jquery-1.10.2.js"></script>

   <script src="plugins/bootstrap.min.js"></script>


   <script src="js/custom.js"></scr


    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
