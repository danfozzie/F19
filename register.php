<!DOCTYPE html>
<html lang="en">
<head>
    
<meta charset="UTF-8">
<title>Loughborough University Timetable Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="main.css" type="text/css">
        

    
<?php
include('connect.php');

$department = @$_POST['department'];
$email = @$_POST['email'];
$username = @$_POST['username'];
$password = @$_POST['password'];
$cnfrmpass = @$_POST['cnfrmpass'];
$submit = @$_POST['submit'];

if($submit) {
    if ($department == true) {
        if ($email == true) {
            if ($username == true) {
                if ($password == true) {
                if ($password == $cnfrmpass) {
                    if ((strlen($department) < 50) || (strlen($email) < 50)) {
                        if ((strlen($password) < 50) || (strlen($password) > 5)) {


                            $sql = "INSERT INTO `login`(`email`, `department`, `username`, `password`) VALUES ('$email', '$department', '$username', '$password')";
                            if ($db->query($sql)) {
                                echo '<div class="alert alert-success alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <strong>Success!</strong> User has been added. Please login in now.
                                      </div>';
                            } else {
                                echo "Error: " . $sql . "<br>" . $db->error;
                            }

                        } else
                            echo '<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> Password muct be between 5 & 50 characters.
</div>';
                    } else
                        echo '<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> The department name / email must be < 50 characters.
</div>';
                } else
                    echo '<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> Password do not match.
</div>';
            } else
                echo '<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> Please enter a password.
</div>';
                } else
                echo '<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> Please enter a username.
</div>';
        } else
            echo '<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> Please enter an email id.
</div>';
    } else
        echo '<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> Please enter a department name.
</div>';
}
?> 

</head>
<body>
    
<!--
    NAVBAR
-->
    
<nav id="navbar" class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <div class="navbar-brand">
        <img style="max-width:204px; margin-top: -7px;"
             src="lulogoW.png">
        </div>
    </div>
    <div>
      <ul class="nav navbar-nav">
      </ul>
        <div class="btn-group" role="group" aria-label="..." id="button">
          <button type="submit" class="btn" id="regButton"><a href="login.html">Login</a></button>
<!--          <button type="button" class="btn" id="regButton"><a    
               href="register.html">Register</a></button>                -->
        </div>
    </div>
  </div>
</nav>
    
<!--
    REGISTER FORM
-->
    <div class="container">
        <div class="bs-example" id="fBorderP">
            <h1>
                Register
            </h1>
            <br>
            <hr>
            <form class="form-horizontal" method="post">
                <div class="form-group">
                    <label for="lbdepartment" class="control-label col-xs-4">Department Name</label>
                    <div class="col-xs-5">
                        <input name="department" type="text" class="form-control" id="inputFName">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="control-label col-xs-4">Email ID</label>
                    <div class="col-xs-5">
                        <input name="email" type="email" class="form-control" id="inputLName" placeholder="@lboro.ac.uk">
                    </div>
                </div>
                <div class="form-group">
                    <label for="username" class="control-label col-xs-4">User Name</label>
                    <div class="col-xs-5">
                        <input name="username" type="text" class="form-control" id="inputLName" placeholder="Department Code e.g. CO">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password" class="control-label col-xs-4">Password</label>
                    <div class="col-xs-5">
                        <input name="password" type="password" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="form-group">
                    <label for="cnfrmpass" class="control-label col-xs-4">Confirm Password</label>
                    <div class="col-xs-5">
                        <input name="cnfrmpass" type="password" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="form-group">
                    <strong> Already have an account?</strong><p><a href="login.html">Sign in now?</a></p>
                </div>
                
                <hr>
                <div class="form-group">
                    <div class="col-xs-offset-1 col-xs-10">
                        <button name="submit" type="submit" value="Submit" class="btn btn-lg btn-block" id="subB">Register</button>
                    </div>
                </div>
            </form>
        </div>
</div>
</body>
</html>
