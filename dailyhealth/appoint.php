<?php if(!isset($_SESSION)){
	session_start();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
	<div class="container">
		<div class="form">
			<div class="row">
				<div class="col-sm-12">
					<div class="wrapper">



				   <h1> Appointment Form</h1>
					 <form enctype="multipart/form-data" class="col-md-12" method="post">
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
				<div class="form group" style="display: inline-block;">
					<button name="back" class="btn btn-info" type="submit" style="margin-left:60px;width: 85px;border-radius: 3px;" href="appointment.php">BACK</button> <br>
				</div>
				<div class="form group" style="display: inline-block;">
					<button name="submit" class="btn btn-primary" type="submit" style="margin-left:60px;width: 85px;border-radius: 3px;">SUBMIT</button> <br>
				</div>

			</div>


				</form>
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

	<script src="js/bootstrap.min.js"></script>
	<script>
	onClick

			</body>
			</html>
