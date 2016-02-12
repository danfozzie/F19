<?php

include('connect.php');

if (isset($_POST['submit'])){
    $username = @$_POST['username'];
    $password = @$_POST['password'];

    if (!$username || !$password){
        echo ("<script language='JavaScript'>
                window.alert('Warning: Required fields missing');
                window.location = 'login.html';
                </script>");
    }

    $sql = "SELECT * FROM `login` WHERE (`deptCode` = '" . $db->escape($username) . "' OR `email` = '" . $db->escape($username) . "') AND BINARY `password` = BINARY '" . $db->escape($password) . "'";
    $res =& $db->query($sql);

   if (PEAR::isError($res)) {
        die($res->getMessage().' ::: '.$res->getUserInfo());
    }
    #echo $res->numRows();

    if ($res->numRows() > 0 ) {
        echo ("<script language='JavaScript'>
                window.alert('Login Successful!');
                window.location = 'login.html';
                </script> ");
    }
    else {
        echo ("<script language='JavaScript'>
                window.alert('Error: Invalid Credentials');
                window.location = 'login.html';
                </script>");
    }
}


?>