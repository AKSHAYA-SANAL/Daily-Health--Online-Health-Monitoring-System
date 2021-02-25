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
            <li><a href="bot.html">APPOINTMENTS</a></li>
            <li><a href="subscription.php" class="active">SUBSCRIPTIONS</a></li>
            <li><a href="health.php">HEALTH TIPS</a></li>
            <li><a href="navigation.php">NAVIGATION</a></li>
            <li style="float:right"><a href="logout.php">LOGOUT</a></li>
          </ul>
        </nav>
     </div>
     </header>
     <div class="done">
       <h2 style="font-size: 40px;">IN YOUR LIST</h2>
       <div class="box">
            <div id ="fixa" class="fix" style="display: none;float:left;">
              <div class="pic">
                <img src="images/health8.jpg">
              </div>
              <div class="title">
                <h2>MAGAZINE-A</h2>
                <button class="btn btn-danger">Remove Subscription</button>
              </div>
            </div>
          </div>
          <div class="box">
               <div id ="fixb" class="fix" style="display: none; float:left">
                 <div class="pic">
                   <img src="images/health7.jpg">
                 </div>
                 <div class="title">
                   <h2>MAGAZINE-B</h2>
                   <button>Remove Subscription</button>
                 </div>
               </div>
             </div>
           <div class="box">
                <div id ="fixc" class="fix" style="display: none;float:left;">
                  <div class="pic">
                    <img src="images/health6.jpg">
                  </div>
                  <div class="title">
                    <h2>MAGAZINE-C</h2>
                    <button>Remove Subscription</button>
                  </div>
                </div>
              </div>
              <div class="box">
                   <div id ="fixd" class="fix" style="display: none; float:left">
                     <div class="pic">
                       <img src="images/health5.jpg">
                     </div>
                     <div class="title">
                       <h2>MAGAZINE-D</h2>
                       <button>Remove Subscription</button>
                     </div>
                   </div>
                 </div>
                 <div class="box">
                      <div id ="fixe" class="fix" style="display: none;float:left;">
                        <div class="pic">
                          <img src="images/health4.jpg">
                        </div>
                        <div class="title">
                          <h2>MAGAZINE-E</h2>
                          <button class="btn btn-danger">Remove Subscription</button>
                        </div>
                      </div>
                    </div>
                    <div class="box">
                         <div id ="fixf" class="fix" style="display: none; float:left">
                           <div class="pic">
                             <img src="images/health3.jpg">
                           </div>
                           <div class="title">
                             <h2>MAGAZINE-F</h2>
                             <button>Remove Subscription</button>
                           </div>
                         </div>
                       </div>
                     <div class="box">
                          <div id ="fixg" class="fix" style="display: none;float:left;">
                            <div class="pic">
                              <img src="images/health2.jpg">
                            </div>
                            <div class="title">
                              <h2>MAGAZINE-G</h2>
                              <button>Remove Subscription</button>
                            </div>
                          </div>
                        </div>
                        <div class="box">
                             <div id ="fixh" class="fix" style="display: none; float:left">
                               <div class="pic">
                                 <img src="images/health1.jpg">
                               </div>
                               <div class="title">
                                 <h2>MAGAZINE-H</h2>
                                 <button>Remove Subscription</button>
                               </div>
                             </div>
                           </div>
               </div>
           <div class="notdone">
             <h1 style="font-size: 40px;">SUGGESTIONS</h1>
             <div class="box">
                  <div id ="nfixa" class="fix">
                    <div class="pic">
                      <img src="images/health8.jpg">
                    </div>
                    <div class="title">
                      <h2>MAGAZINE-A</h2>
                      <button>Subscribe</button>
                    </div>
                  </div>
                </div>
                <div class="box">
                     <div id ="nfixb" class="fix">
                       <div class="pic">
                         <img src="images/health7.jpg">
                       </div>
                       <div class="title">
                         <h2>MAGAZINE-B</h2>
                         <button>Subscribe</button>
                       </div>
                     </div>
                   </div>
                     <div class="box">
                          <div id ="nfixc" class="fix">
                            <div class="pic">
                              <img src="images/health6.jpg">
                            </div>
                            <div class="title">
                              <h2>MAGAZINE-C</h2>
                              <button>Subscribe</button>
                            </div>
                          </div>
                        </div>
                        <div class="box">
                             <div id ="nfixd" class="fix">
                               <div class="pic">
                                 <img src="images/health5.jpg">
                               </div>
                               <div class="title">
                                 <h2>MAGAZINE-D</h2>
                                 <button>Subscribe</button>
                               </div>
                             </div>
                           </div>
                           <div class="box">
                                <div id ="nfixe" class="fix">
                                  <div class="pic">
                                    <img src="images/health4.jpg">
                                  </div>
                                  <div class="title">
                                    <h2>MAGAZINE-E</h2>
                                    <button>Subscribe</button>
                                  </div>
                                </div>
                              </div>
                              <div class="box">
                                   <div id ="nfixf" class="fix">
                                     <div class="pic">
                                       <img src="images/health3.jpg">
                                     </div>
                                     <div class="title">
                                       <h2>MAGAZINE-F</h2>
                                       <button>Subscribe</button>
                                     </div>
                                   </div>
                                 </div>
                                   <div class="box">
                                        <div id ="nfixg" class="fix">
                                          <div class="pic">
                                            <img src="images/health2.jpg">
                                          </div>
                                          <div class="title">
                                            <h2>MAGAZINE-G</h2>
                                            <button>Subscribe</button>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="box">
                                           <div id ="nfixh" class="fix">
                                             <div class="pic">
                                               <img src="images/health1.jpg">
                                             </div>
                                             <div class="title">
                                               <h2>MAGAZINE-H</h2>
                                               <button>Subscribe</button>
                                             </div>
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
                 var modala = document.getElementById("fixa");
                 var btna = document.getElementById("fixa");
                 var nmodala = document.getElementById("nfixa");
                 var nbtna = document.getElementById("nfixa");

                 nbtna.onclick = function() {
                    nmodala.style.display = "none";
                    modala.style.display = "inline-block";
                 }
                 btna.onclick = function() {
                    modala.style.display = "none";
                    nmodala.style.display = "inline-block";
                 }
                 var modalb = document.getElementById("fixb");
                 var btnb = document.getElementById("fixb");
                 var nmodalb = document.getElementById("nfixb");
                 var nbtnb = document.getElementById("nfixb");

                 nbtnb.onclick = function() {
                    nmodalb.style.display = "none";
                    modalb.style.display = "inline-block";
                 }
                 btnb.onclick = function() {
                    modalb.style.display = "none";
                    nmodalb.style.display = "inline-block";
                 }

                 var modalc = document.getElementById("fixc");
                 var btnc = document.getElementById("fixc");
                 var nmodalc = document.getElementById("nfixc");
                 var nbtnc = document.getElementById("nfixc");

                 nbtnc.onclick = function() {
                    nmodalc.style.display = "none";
                    modalc.style.display = "inline-block";
                 }
                 btnc.onclick = function() {
                    modalc.style.display = "none";
                    nmodalc.style.display = "inline-block";
                 }

                 var modald = document.getElementById("fixd");
                 var btnd = document.getElementById("fixd");
                 var nmodald = document.getElementById("nfixd");
                 var nbtnd = document.getElementById("nfixd");

                 nbtnd.onclick = function() {
                    nmodald.style.display = "none";
                    modald.style.display = "inline-block";
                 }
                 btnd.onclick = function() {
                    modald.style.display = "none";
                    nmodald.style.display = "inline-block";
                 }

                 var modale = document.getElementById("fixe");
                 var btne = document.getElementById("fixe");
                 var nmodale = document.getElementById("nfixe");
                 var nbtne = document.getElementById("nfixe");

                 nbtne.onclick = function() {
                    nmodale.style.display = "none";
                    modale.style.display = "inline-block";
                 }
                 btne.onclick = function() {
                    modale.style.display = "none";
                    nmodale.style.display = "inline-block";
                 }

                 var modalf = document.getElementById("fixf");
                 var btnf = document.getElementById("fixf");
                 var nmodalf = document.getElementById("nfixf");
                 var nbtnf = document.getElementById("nfixf");

                 nbtnf.onclick = function() {
                    nmodalf.style.display = "none";
                    modalf.style.display = "inline-block";
                 }
                 btnf.onclick = function() {
                    modalf.style.display = "none";
                    nmodalf.style.display = "inline-block";
                 }

                 var modalg = document.getElementById("fixg");
                 var btng = document.getElementById("fixg");
                 var nmodalg = document.getElementById("nfixg");
                 var nbtng = document.getElementById("nfixg");

                 nbtng.onclick = function() {
                    nmodalg.style.display = "none";
                    modalg.style.display = "inline-block";
                 }
                 btng.onclick = function() {
                    modalg.style.display = "none";
                    nmodalg.style.display = "inline-block";
                 }

                 var modalh = document.getElementById("fixh");
                 var btnh = document.getElementById("fixh");
                 var nmodalh = document.getElementById("nfixh");
                 var nbtnh = document.getElementById("nfixh");

                 nbtnh.onclick = function() {
                    nmodalh.style.display = "none";
                    modalh.style.display = "inline-block";
                 }
                 btnh.onclick = function() {
                    modalh.style.display = "none";
                    nmodalh.style.display = "inline-block";
                 }
                 </script>
               </body>
               </html>
