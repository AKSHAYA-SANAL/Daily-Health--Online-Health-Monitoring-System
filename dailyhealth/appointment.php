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
          <li><a href="appointment.php" class="active">APPOINTMENTS</a></li>
          <li><a href="subscription.php">SUBSCRIPTIONS</a></li>
          <li><a href="health.php">HEALTH TIPS</a></li>
          <li><a href="navigation.php">NAVIGATION</a></li>
          <li style="float:right"><a href="logout.php">LOGOUT</a></li>
        </ul>
      </nav>
   </div>
   </header>
 </div>
 <div class="body">


   <div class="modal1" >
   <div class="container">
 		<div class="form">
 			<div class="row">
 				<div class="col-sm-12">
 					<div class="wrapper">



 				   <h1>BOOK AN APPOINTMENT</h1>
 					 <form enctype="multipart/form-data" class="col-md-12" method="post">
             <div class="app" style="display: inline-block;">

               <h2> Patient's details</h2>

     					 <div class="form group">
     						 <label> Name <input type="text" name="name" class="col-md-12" class="form-control" value="" placeholder="Full name" required>
     						 </label><br><br>
     					</div>
     					<div class="form group">
     					<label>
     						Gender                 <select class="col-md-12"  class="form-control" name="gender" required>
     						             <option>--select--</option>
     						             <option>Female</option>
     						             <option>Male</option>
     						        </select>
     					</label><br><br>
     				</div>
     				<div class="form group">

     					<label>
     						Email                     <input type="email" class="col-md-12"  name="email" class="form-control" value="" placeholder="email" required>
     					</label><br><br>
     				</div>
     				<div class="form group">

     					<label>
     						Phone                      <input type="number" name="contact" class="col-md-12"  class="form-control"  placeholder="contact no" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no."/>
     					</label><br><br>
     				</div>
     				<div class="form group">

      					<label>
     						Address                     <input type="text" name="address" value="" class="col-md-12"  class="form-control" placeholder="address" required>
     					</label><br><br>
     				</div>
          </div>
          <div class="app">
          <div style="display: inline-block;">
            <h2>Appointment details</h2>
     				<div class="form group">

     					<label>
     						Symptoms                     <select name="symptoms" class="col-md-12"  class="form-control" required>
     										<option>--Select--</option>
     										<option>Cold</option>
     										<option>Cough</option>
     										<option>Fever</option>
     										<option>Throat infection</option>
     										<option>Stomach pain</option>
     										<option>Bacterial infection</option>
     										<option>Headache</option>
     										<option>Breathing difficulty</option>
     										<option>Others</option>
     									</select>
     					</label><br><br>
     				</div>
     				<div class="form group">
     					<label>
     						Doctor                      <select name="doctor" class="col-md-12"  class="form-control" required>
     										<option>--Select--</option>
     										<option>General physician</option>
     										<option>Cardiologist</option>
     										<option>Paediatrician</option>
     										<option>Neurologist</option>
     										<option>Surgeon</option>
     										<option>Dentist</option>
     										<option>Gynaecologist</option>
     										<option>Ophthalmologist</option>
     										<option>ENT specialist</option>
     										<option>Orthipaediatrics</option>
     										<option>Psyciartist</option>
     										<option>Nutritionist</option>
     										<option>Dermatologist</option>
     										<option>Gastroenterologist</option>
     										<option>Others</option>
     									</select>
     					</label><br><br>
     				</div>
     				<div class="form group">

     					<label>
     						Date                       <input type="date" name="date" class="col-md-12"  class="form-control" placeholder="choose ur date" >
     					</label><br><br>
     				</div>
     				<div class="form group">

     					<label>
     						Time                       <select name="time" class="col-md-12" class="form-control">
     									<option value="">-Select time-</option>
     									<option value="9.00am-10.00am">09.00am-10.00am</option>
     									<option value="10.00am-11.00am">10.00am-11.00am</option>
     									<option value="11.00am-12.00pm">11.00am-12.00pm</option>
     									<option value="12.00pm-01.00pm">12.00pm-01.00pm</option>
     									<option value="03.00pm-04.00pm">03.00pm-04.00pm</option>
     									<option value="04.00pm-05.00pm">04.00pm-05.00pm</option>
     									<option value="05.00pm-06.00pm">05.00pm-06.00pm</option>
     									<option value="07.00pm-08.00pm">07.00pm-08.00pm</option>
     									<option value="08.00pm-09.00pm">08.00pm-09.00pm</option>
         						  </select>

     					</label><br><br>
     				</div>
     				<div class="form group">

     					<label>
     						Have you visited the hospital before ? <select class="col-md-12"  class="form-control" name="visit" required>
     							<option>--Select--</option>
     							<option>Yes</option>
     							<option>No</option>
     						</select>
     					</label><br><br>
     				</div>
     				<div class="form group">
     					<label>
     						If yes, enter your patient id number:<input class="col-md-12"  class="form-control" type="text" name="Patient Id" value="" placeholder="Id no:" required>
     					</label><br><br>
     				</div>



     			</div>
        </div>
      </div>
        <div class="form group" style="display: inline-block;">
          <button name="submit" style="margin-top: 10px;background-color: green; color: white; padding:1%;width: 330px; height:30px; font-weight: bold;" type="submit" >SUBMIT</button> <br>
        </div>

 				</form>
 		</div>
 	</div>
</div>
</div>
 	</div>
 </div>

 <?php

 						include('config.php');
 						if(isset($_POST['submit'])){


 						$sql = " INSERT INTO booking (name,gender,Id no:,symptoms,contact,doctor,email,address,Patient Id,date,time)
 							VALUES (?,?,?,?,?,?,?,?,?,?,?)";

 							if ($link->query($sql) === TRUE) {
 							    echo "<script>alert('Your booking has been accepted!');</script>";
 							} else {
 							    echo "<script>alert('There was an Error')<script>";
 							}

 							$link->close();
 						}
 					?>
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
     <script src="js/bootstrap.min.js"></script>
     <script>
     var modal1 = getElementById("modal1");
     var fix = getElementById("fix");
     fix.onClick = function(){
       modal1.style.display = "block";
     }
     </script>
   </body>
</html>
