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


    </head>


      <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

  <body>
    <hr>
<div class="container">
  <div class="row">
      <div class="col-md-7 col-sm-7 col-xs-7">
          <h1 id="head1">Heads Up</h1>
        <h4 style="font-family:Andale Mono, monospace">Disaster Managment System</h4>
      </div>
      <div class="col-md-5 col-sm-5 col-xs-5">
              <img src="img/life.png" alt="" width="250px" height="100px">

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

 <p style="text-align: center;font-family:Rockwell Extra Bold">  NSBM Team Veilux &copy; 2017</p>

  </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

   <script  src="js/index.js"></script>


    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
