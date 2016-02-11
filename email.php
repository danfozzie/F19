<?php

include('connect.php');

$username = @$_POST['username'];
    $password = @$_POST['password'];
    $oldemail = @$_POST['oldemail'];
    $newemail = @$_POST['newemail'];
    $cnfrmemail = @$_POST['cnfrmemail'];
$submit = @$_POST['submit'];

if (isset($_POST['submit'])){

    if (!$username || !$password || !$oldemail || !$newemail || !$cnfrmemail) {

        echo ("<script language='JavaScript'>
                window.alert('Warning: All fields needs to be completed');
                window.location = 'email.html';
                </script>");
    }

    if ($newemail == $cnfrmemail) {

        $sql = "SELECT * FROM `login` WHERE `deptCode` = '" . $db->escape($username) . "' AND `email` = '" . $db->escape($oldemail) . "' AND BINARY `password` = BINARY '" . $db->escape($password) . "'";
        $res =& $db->query($sql);
    }
    else {
        echo ("<script language='JavaScript'>
                window.alert('Error: Email IDs do not match');
                window.location = 'email.html';
                </script>");
    }


        /*  if (PEAR::isError($res)) {
              die($res->getMessage().' ::: '.$res->getUserInfo());
          }
          echo $res->numRows();    */

        if ($res->numRows() > 0 ) {
            #if ($newemail == $cnfrmemail) {

            $sql2 = "UPDATE `crew18`.`login` SET `email` = '" . $db->escape($newemail) . "' WHERE `login`.`deptCode` = '" . $db->escape($username) . "' ";
            $res2 =& $db->query($sql2);

            /* if (PEAR::isError($res)) {
                 die($res2->getMessage().' ::: '.$res2->getUserInfo());
             }
             echo $res->numRows();  */

            echo ("<script language='JavaScript'>
                window.alert('Email changed Successful!');
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
                window.location = 'email.html';
                </script> ");
        }

    }

?>