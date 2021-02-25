
<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = $confirm_password = $age = $height = $weight = $bloodgroup = $disease = $address = $phonenumber = $email = "";
$username_err = $password_err = $confirm_password_err = $age_err = $height_err = $weight_err = $bloodgroup_err = $disease_err = $address_err = $phonenumber_err = $email_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    if(empty(trim($_POST["age"]))){
        $age_err = "Please enter your age.";
    } else{
        $age = trim($_POST["age"]);
    }

    if(empty(trim($_POST["height"]))){
        $height_err = "Please enter your height.";
    } else{
        $height = trim($_POST["height"]);
    }

    if(empty(trim($_POST["weight"]))){
        $weight_err = "Please enter your weight.";
    } else{
        $weight = trim($_POST["weight"]);
    }

    if(empty(trim($_POST["bloodgroup"]))){
        $bloodgroup_err = "Please enter your Blood Group.";
    } else{
        $bloodgroup = trim($_POST["bloodgroup"]);
    }

    if(empty(trim($_POST["disease"]))){
        $disease_err = "Give a valid response.";
    } else{
        $disease = trim($_POST["disease"]);
    }

    if(empty(trim($_POST["address"]))){
        $address_err = "Please enter your address.";
    } else{
        $address = trim($_POST["address"]);
    }

    if(empty(trim($_POST["phonenumber"]))){
        $phonenumber_err = "Please enter your phonenumber.";
    } else{
        $phonenumber = trim($_POST["phonenumber"]);
    }

    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter your Email-Id.";
    } else{
        $email = trim($_POST["email"]);
    }

    // Check input errors before inserting in database
//    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($age) && empty($height) && empty($weight) && empty($bloodgroup) && empty($disease) && empty($address) && empty($phonenumber) && empty($email)){

        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password, age, height, weight, bloodgroup, disease, address, phonenumber, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
  //          mysqli_stmt_close($stmt);
        }
  //  }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <div class="container">
    <div class="form">
      <div class="row">
        <div class="col-sm-11">
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($age_err)) ? 'has-error' : ''; ?>" class="line">
                <label>Age</label>
                <input type="text" name="age" class="form-control" value="<?php echo $age; ?>">
                <span class="help-block"><?php echo $age_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($height_err)) ? 'has-error' : ''; ?>" class="line">
                <label>Height</label>
                <input type="text" name="height" class="form-control" value="<?php echo $height; ?>">
                <span class="help-block"><?php echo $height_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($weight_err)) ? 'has-error' : ''; ?>" class="line">
                <label>Weight</label>
                <input type="text" name="weight" class="form-control" value="<?php echo $weight; ?>">
                <span class="help-block"><?php echo $weight_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($bloodgroup_err)) ? 'has-error' : ''; ?>" class="line">
                <label>Blood Group</label>
                <input type="text" name="bloodgroup" class="form-control" value="<?php echo $bloodgroup; ?>">
                <span class="help-block"><?php echo $bloodgroup_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($disease_err)) ? 'has-error' : ''; ?>">
                <label>Hereditory Diseases(if any)</label>
                <input type="text" name="disease" class="form-control" value="<?php echo $disease; ?>">
                <span class="help-block"><?php echo $disease_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                <label>Address</label>
                <input type="text" name="address" class="form-control" value="<?php echo $bloodgroup; ?>">
                <span class="help-block"><?php echo $bloodgroup_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($phonenumber_err)) ? 'has-error' : ''; ?>">
                <label>Phone Number</label>
                <input type="text" name="phonenumber" class="form-control" value="<?php echo $phonenumber; ?>">
                <span class="help-block"><?php echo $phonenumber_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email-Id</label>
                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>
