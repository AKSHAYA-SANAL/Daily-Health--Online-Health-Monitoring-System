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


    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <div class="cont">
      <header>
      <div class = "tab">
        <nav>
          <ul class="nav">
            <li><img src="images/DAILY HEALTH.png" alt ="icon"></li>
            <li><a class="active" href="index.php">HOME</a></li>
            <li><a href="http://192.168.15.221/">LIVE MONITOR</a></li>
            <li><a href="appointment.php">APPOINTMENTS</a></li>
            <li><a href="subscription.php">SUBSCRIPTIONS</a></li>
            <li><a href="health.php">HEALTH TIPS</a></li>
            <li><a href="navigation.php">NAVIGATION</a></li>
            <li style="float:right"><a href="logout.php">LOGOUT</a></li>
          </ul>
        </nav>
     </div>
     </header>
 </div>

   <section>
     <img src="images/profile.png">
     <h2 class="one"><?php echo htmlspecialchars($_SESSION["username"]); ?></h2>
     <button style="float:right; background-color: red;height: 50px;width:50px;"><a href="tel:123-456-7890"><span style="color:#ffffff;"class="material-icons">call</span></a></button>
   </section>
   <section>
     <h1>PERSONAL DETAILS<i class="material-icons">create</i></h1>
   </section>
   <section>
     <h3>Age <span class="material-icons">arrow_right_alt</span>67</h3>
     <h3>|  Height <span class="material-icons">arrow_right_alt</span> 150 cm</h3>
     <h3>|  Weight <span class="material-icons">arrow_right_alt</span> 70 kg</h3>
     <h3>|  Blood Group <span class="material-icons">arrow_right_alt</span> A+</h3>
     <h3>Hereditory diseases(if any)<span class="material-icons">arrow_right_alt</span>None</h3>
     <h3>|  Address <span class="material-icons">arrow_right_alt</span> </h3>
     <h3>|  Contact Number <span class="material-icons">arrow_right_alt</span>81********</h3>
     <h3>|  E-mail ID <span class="material-icons">arrow_right_alt</span>***@***.com</h3>
   </section>
   <section>
     <h1>HEALTH REPORT<i class="material-icons">add_circle</i></h1>
     <ul>
     <li class="ll"><a href =""class="list">Whole Body Check Up - 10-09-2019</a> <i class="material-icons">save_alt</i></li>
     <li class="ll"><a href =""class="list">Cardiac Check Up - 20-10-2018</a> <i class="material-icons">save_alt</i></li>
     </ul>
   </section>
   <section>
     <h1>INSURANCE<i class="material-icons">add_circle</i></h1>
     <ul>
     <li class="ll"><a href =""class="list">Latest policy - 01-12-2019</a> <i class="material-icons">save_alt</i></li>
     <li class="ll"><a href =""class="list">Family Health Insurance - 10-11-2018</a> <i class="material-icons">save_alt</i></li>
     </ul>
   </section>
   <section>
     <h1>FREQUENTLY CONSULTED</h1>
     <ul>
       <li class="sep">
         <li class="in">
         <img src = "images/profile.png"></li>
       <li class="in">DR. PQR<br>MBBS, MD (General Medicine), DNB (Cardiology)</li>
       <li class="sep"><li class="in">
         <img src = "images/profile.png"></li>
       <li class="in">DR. STQ<br>MBBS, MD (General Medicine)
       </li>
     </ul>
   </section>

 <footer class="nav">
   <div class="foot">
   <p>Have Queries?   Contact us: </p>
    </div>
   <div class="sub">
     <p><li><a href="">PhoneNumber <span class="material-icons">call</span></a></li><li><a href="#">|    GMail <span class="material-icons">email</span></a></li>
       <li><a href="#">|    FaceBook <i class="fa fa-facebook"></i></a></li><li><a href="#">|    Instagram <i class="fa fa-instagram"></i></a></li>
       <li><a href="#">|    Twitter <i class="fa fa-twitter"></i></a></li>
   </div>


  </footer>
  </body>
</html>
