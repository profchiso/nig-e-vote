<?php
session_start();
include 'inc/config.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nigeria E-Voting </title>
    <!-- Core CSS - Include with every page -->
    <link rel="icon" type="image/png" href="assets/img/coatofarms.jpg">
    <link href="asset2/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="asset2/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="asset2/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="asset2/css/style.css" rel="stylesheet" />
      <link href="asset2/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <h3>E-Voting User Login</h3>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign in</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="#">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" name="email" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button name="submit" class="btn btn-lg btn-success btn-block">Login</button>
                                <a href="index.php">Back</a>
                            </fieldset>
                        </form>
                        <?php
                            if (isset($_POST['submit'])) {
                                $username = $_POST['email'];
                                $password = $_POST['password'];
                                $validate = mysql_query("SELECT * FROM citizens WHERE 	email = '$username' AND password = '$password'");
                                if (mysql_num_rows($validate)) {
                                    $_SESSION['email'] = $username;
                                    header("location: users/index.php");
                                }else{
                                    echo "<script>alert('Incorrect Login Details')</script>";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="asset2/plugins/jquery-1.10.2.js"></script>
    <script src="asset2/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="asset2/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
