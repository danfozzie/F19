<?php

include('connect.php');

$username = @$_POST['username'];
    $email = @$_POST['email'];
    $oldpass = @$_POST['oldpass'];
    $newpass = @$_POST['newpass'];
    $cnfrmpass = @$_POST['cnfrmpass'];
$submit = @$_POST['submit'];


if (isset($_POST['submit'])){
    
    if (!$username || !$email || !$oldpass || !$newpass || !$cnfrmpass) {

        echo ("<script language='JavaScript'>
                window.alert('Warning: All fields needs to be completed');
                window.location = 'password.html';
                </script>");
    }

    if ($newpass == $cnfrmpass) {

        $sql = "SELECT * FROM `login` WHERE `deptCode` = '" . $db->escape($username) . "' AND `email` = '" . $db->escape($email) . "' AND BINARY `password` = BINARY '" . $db->escape($oldpass) . "'";
        $res =& $db->query($sql);
    }
    else {
        echo ("<script language='JavaScript'>
                window.alert('Error: Passwords do not match');
                window.location = 'password.html';
                </script>");
    }


        /*  if (PEAR::isError($res)) {
              die($res->getMessage().' ::: '.$res->getUserInfo());
          }
          echo $res->numRows();    */

        if ($res->numRows() > 0 ) {
            #if ($newemail == $cnfrmemail) {

            $sql2 = "UPDATE `crew18`.`login` SET `password` = '" . $db->escape($newpass) . "' WHERE `login`.`deptCode` = '" . $db->escape($username) . "' ";
            $res2 =& $db->query($sql2);

            /* if (PEAR::isError($res)) {
                 die($res2->getMessage().' ::: '.$res2->getUserInfo());
             }
             echo $res->numRows();  */

            echo ("<script language='JavaScript'>
                window.alert('Password changed Successful!');
                window.location = 'login.html';
                </script> ");

         /*   if ($res2->numRows() > 0 ) {
                echo ("<script language='JavaScript'>
                window.alert('Email changed Successful!');
                window.location = 'login.html';
                </script> ");
            }*/

        }
        else {
            echo ("<script language='JavaScript'>
                window.alert('Error: Invalid Credentials');
                window.location = 'password.html';
                </script> ");
        }

    }

?>