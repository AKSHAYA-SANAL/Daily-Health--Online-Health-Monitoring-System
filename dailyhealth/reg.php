<?php
session_start();

  include("connection.php");
  include("functions.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DAILY HEALTH-REGISTRATION</title>
    <link rel ="stylesheet" type = "text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel ="stylesheet" href="css/open.css">
    <link rel ="stylesheet" href="css/login.css">
  </head>
  <body>
    <div>
      <?php
      if(isset($_POST['create'])){
        $firstname    = $_POST['firstname'];
        $lastname     = $_POST['lastname'];
        $email        = $_POST['email'];
        $password     = $_POST['password'];
        $firstname    = $_POST['firstname'];
        $lastname     = $_POST['lastname'];
        $email        = $_POST['email'];
        $password     = $_POST['password'];

        $sql = "INSERT INTO users (firstname, lastname, email, password, passwordconf) VALUES(?,?,?,?,?) ";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$firstname, $lastname, $email, $password, $passwordconf]);
        if($result){

        }else{
          echo 'There were errors while saving the data.';
        }

      }
      ?>

    </div>
    <div>
      <form class="form" action="registration.php" method="post">
        <div class="container">
          <div class="row">
            <div class="col-sm-11" >
              <h1>Registration</h1>
              <hr class="mb-3">
              <label for="firstname">First Name</label>
              <input class="form-control" type="text" id="firstname" name="firstname" required>

              <label for="lastname">Last Name</label>
              <input  class="form-control" type="text" id="lastname" name="lastname" required>

              <label for="email">E-Mail ID</label>
              <input  class="form-control" type="email" id="email" name="email" required>

              <label for="password">Password</label>
              <input  class="form-control" type="password" id="password" name="password" required>

              <label for="passwordconf">Confirm Password</label>
              <input class="form-control" type="password" id="passwordconf" name="passwordconf" required>
              <hr class="mb-3">
              <input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
             </div>
             <span style="float: left"><a href="open.html"><--Back</a></span>
             <span style="float: right"><a href="login.php">Registered..?? Click to LOGIN</a></span>
          </div>
        </div>
      </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript">
      var password = document.getElementById("password");
      var passwordconf = document.getElementById("passwordconf");
        if(password == passwordconf)
        {
            alert("Passwords did not match");
        } else {
                alert("Password created successfully");
               }
        }
        </script>
        <script>
      $(function(){
        $('#register').click(function(){

          Swal.fire({
            'title': 'Successfull',
            'text': 'Successfully Registered.',
            'type': 'success'
          })
          var valid = this.form.checkValidity();
          if(valid){
            var firstname = $('#firstname').val();
            var lastname = $('#lastname').val();
            var email = $('#email').val();
            var password = $('#password').val();
            var passwordconf = $('#passwordconf').val();

            e.preventDefault();

            Swal.fire({
              'title': 'Successfull',
              'text': 'Successfully Registered.',
              'type': 'success'
            })
            $ajax({
              type: 'POST',
              url: 'process.php',
              data: {firstname: firstname, lastname: lastname, email: email, password: password, passwordconf: passwordconf },
              success: function(data){

              },
              error: function(data) {
                Swal.fire({
                  'title': 'Errors',
                  'text': 'Error in registration',
                  'type': 'error'
                })
              }
            });

          }else{

          }



        });


      });

    </script>
  </body>
</html>
