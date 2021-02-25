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
    <link rel="stylesheet" href="css/health.css">
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
          <li><a href="health.php" class="active">HEALTH TIPS</a></li>
          <li><a href="navigation.php">NAVIGATION</a></li>
          <li style="float:right"><a href="logout.php">LOGOUT</a></li>
        </ul>
      </nav>
   </div>
   </header>
   <div class="health">
    <div class="box">
      <div id ="fixa" class="fix">
        <div class="pic">
          <img src="images/water.jpg">
        </div>
        <div class="title">
          <h2>WATER</h2>
        </div>
      </div>
      <div id ="modala" class="modal">
        <div class="modal-content">
          <span class="closea">&times;</span>
          <ul>
            <li>Drink 8 glasses (2-3 liters) of water a day.</li>
            <li>Increases energy and relieves fatigue</li>
            <li>Flushes out toxins </li>
            <li>Prevents kidney damage and aids digestion</li>
            <li>Boosts performance during exercise</li>
            <li>Helps in weight loss by increasing metabolism</li>
            <li>Improves skin complexion, sleep quality and cognition</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="box">
      <div class="fix" id="fixb">
        <div class="pic">
          <img src="images/excersice.jpg">
        </div>
        <div class="title">
          <h2>EXERCISE</h2>
        </div>
      </div>
      <div id ="modalb" class="modal">
        <div class="modal-content">
          <span class="closeb">&times;</span>
          <ul>
            <li>Regular physical activity helps keep your thinking, learning and judgement skills sharp as you age</li>
            <li>Reduce risk of depression and anxiety and help you sleep better and improves mental health</li>
            <li>Helps you to maintain your weight and stay fit</li>
            <li>Reduce risks of cardiovascular diseases, type2 diabetes and other chronic diseases</li>
            <li>Can also help reduce risk of certain type of cancer</li>
            <li>Makes your skin healthy</li>
            <li>Increases your chances of living longer</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="box">
      <div class="fix" id="fixc">
        <div class="pic">
          <img src="images/diet.png">
        </div>
        <div class="title">
          <h2>BALANCED DIET</h2>
        </div>
      </div>
      <div id ="modalc" class="modal">
        <div class="modal-content">
          <span class="closec">&times;</span>
          <ul>
            <li>Helps control body weight</li>
            <li>Helps in diabetes management</li>
            <li>Body gets the right amount of nutrients it needs</li>
            <li>Reduces cancer risk, improves heart health</li>
            <li>Increases your energy level</li>
            <li>Helps to develop a strong immune system</li>
            <li>Aids digestion and other body functions</li>
            <li>Improves brain function</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="box">
      <div class="fix" id="fixd">
        <div class="pic">
          <img src="images/skin.png">
        </div>
        <div class="title">
          <h2>SKIN CARE</h2>
        </div>
      </div>
      <div id ="modald" class="modal">
        <div class="modal-content">
          <span class="closed">&times;</span>
          <ul>
            <li>Drink lots of water</li>
            <li>Have adequate amount of exercise</li>
            <li>Eat healthy, sleep well</li>
            <li>Eat fruits and vegetables that keeps your skin hydrated</li>
            <li>Protect your skin from the harsh afternoon sun</li>
            <li>Aloe vera keeps your skin strong and healthy</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="box">
      <div class="fix" id="fixe">
        <div class="pic">
          <img src="images/mental.jpg">
        </div>
        <div class="title">
          <h2>MENTAL HEALTH</h2>
        </div>
      </div>
        <div id ="modale" class="modal">
          <div class="modal-content">
            <span class="closee">&times;</span>
            <ul>
              <li>Eat healthy, sleep well</li>
              <li>Share your thoughts with others </li>
              <li>Do things which gives you happiness </li>
              <li>Practice meditation</li>
              <li>Surround yourself with positivity</li>
              <li>Give some me time</li>
              <li>Believe in yourself</li>
            </ul>
          </div>
        </div>
    </div>
    <div class="box">
      <div class="fix" id="fixf">
        <div class="pic">
          <img src="images/kid.jpg">
        </div>
        <div class="title">
          <h2>TIPS FOR STUDENTS</h2>
        </div>
      </div>
      <div id ="modalf" class="modal">
        <div class="modal-content">
          <span class="closef">&times;</span>
          <ul>
            <li>Stay hydrated</li>
            <li>Eat healthy, sleep well</li>
            <li>Never skip breakfast</li>
            <li>Exercise regularly</li>
            <li>Indulge in healthy competition</li>
            <li>Think before you choose your friends</li>
            <li>Stay active and manage time efficiently</li>
            <li>Choose a right place to set up your workspace as your surroundings can impact your work</li>
            <li>Sleep for an adequate amount of time</li>
          </ul>
        </div>
      </div>
    </div>
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
     <script>
     var modala = document.getElementById("modala");
     var btna = document.getElementById("fixa");
     var spana = document.getElementsByClassName("closea")[0];
     btna.onclick = function() {
        modala.style.display = "block";
     }
     spana.onclick = function() {
        modala.style.display = "none";
     }
     window.onclick = function(event) {
        if (event.target == modala) {
          modala.style.display = "none";
        }
     }

     var modalb = document.getElementById("modalb");
     var btnb = document.getElementById("fixb");
     var spanb = document.getElementsByClassName("closeb")[0];
     btnb.onclick = function() {
        modalb.style.display = "block";
     }
     spanb.onclick = function() {
        modalb.style.display = "none";
     }
     window.onclick = function(event) {
        if (event.target == modalb) {
          modalb.style.display = "none";
        }
     }

     var modalc = document.getElementById("modalc");
     var btnc = document.getElementById("fixc");
     var spanc = document.getElementsByClassName("closec")[0];
     btnc.onclick = function() {
        modalc.style.display = "block";
     }
     spanc.onclick = function() {
        modalc.style.display = "none";
     }
     window.onclick = function(event) {
        if (event.target == modalc) {
          modalc.style.display = "none";
        }
     }

     var modald = document.getElementById("modald");
     var btnd = document.getElementById("fixd");
     var spand = document.getElementsByClassName("closed")[0];
     btnd.onclick = function() {
        modald.style.display = "block";
     }
     spand.onclick = function() {
        modald.style.display = "none";
     }
     window.onclick = function(event) {
        if (event.target == modald) {
          modald.style.display = "none";
        }
     }

     var modale = document.getElementById("modale");
     var btne = document.getElementById("fixe");
     var spane = document.getElementsByClassName("closee")[0];
     btne.onclick = function() {
        modale.style.display = "block";
     }
     spane.onclick = function() {
        modale.style.display = "none";
     }
     window.onclick = function(event) {
        if (event.target == modale) {
          modale.style.display = "none";
        }
     }

     var modalf = document.getElementById("modalf");
     var btnf = document.getElementById("fixf");
     var spanf = document.getElementsByClassName("closef")[0];
     btnf.onclick = function() {
        modalf.style.display = "block";
     }
     spanf.onclick = function() {
        modalf.style.display = "none";
     }
     window.onclick = function(event) {
        if (event.target == modalf) {
          modalf.style.display = "none";
        }
     }

      </script>
  </body>
</html>
