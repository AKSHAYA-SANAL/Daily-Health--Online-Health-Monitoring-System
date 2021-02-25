<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="icon" href="images/DAILY HEALTH icon.png" type="image/icon type">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Daily Health</title>
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <div class="cont">
    <header>
    <div class = "tab">
      <nav>
        <ul class="nav">
          <li><img src="images/DAILY HEALTH.png" alt ="icon"></li>
          <li><a href="index.php">HOME</a></li>
          <li><a href="http://192.168.15.221/">LIVE MONITOR</a></li>
          <li><a href="">EMERGENCY</a></li>
          <li><a href="">APPOINTMENTS</a></li>
          <li><a href="subscription.php">SUBSCRIPTIONS</a></li>
          <li><a href="health.php">HEALTH TIPS</a></li>
          <li><a href="navigation.php" class="active">NAVIGATION</a></li>
          <li style="float:right"><a href="logout.php">LOGOUT</a></li>
        </ul>
      </nav>
   </div>
   </header>
    <div style="width: 100%">
      <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=kochi+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
      </iframe>
    </div>
    <footer class="nav">
      <div class="foot">
      <p>Have Queries?   Contact us: </p>
      <div class="sub">
        <p><li><a href="">PhoneNumber <span class="material-icons">call</span></a></li><li><a href="#">|    GMail <span class="material-icons">email</span></a></li>
          <li><a href="#">|    FaceBook <i class="fa fa-facebook"></i></a></li><li><a href="#">|    Instagram <i class="fa fa-instagram"></i></a></li>
          <li><a href="#">|    Twitter <i class="fa fa-twitter"></i></a></li>
      </div>
    </div>

     </footer>
  </body>
</html>
