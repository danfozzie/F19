<?php
include('connect.php');

$department = @$_POST['department'];
$email = @$_POST['email'];
$username = @$_POST['username'];
$password = @$_POST['password'];
$cnfrmpass = @$_POST['cnfrmpass'];
$submit = @$_POST['submit'];

if($submit) {
    if ($department==true){
        if($email==true) {
            if($password==true){
                if($password==$cnfrmpass){
                    if((strlen($department)<50) || (strlen($email)<50)){
                        if((strlen($password)<50) || (strlen($password)>5)){

                            $insert= mysql_query("INSERT INTO `login`(`email`, `department`, `username`, `password`) VALUES ('$email', '$department', '$username', '$password')")
                            or die ("Error: User could not be added");

                        }
                        else
                            echo "Password must be between 5 & 50 characters";
                    }
                    else
                        echo "The department name / email must be < 50 characters";
                }
                else
                    echo "Passwords don't match";
            }
            else
                echo "Please enter a password;";
        }
        else
            echo "Please enter an email id";
    }
    else
        echo "Please enter a department name";
};
?>  