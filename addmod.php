<?php

include('connect.php');

$modcode = @$_POST['modcode'];
$modtitle = @$_POST['modtitle'];
$deptcode = @$_POST['deptcode'];
$part = @$_POST['part'];
$submit = @$_POST['submit'];

if(isset($_POST['submit'])) {
    if (!$modcode || !$modtitle || !$deptcode || !$part) {

        echo ("<script language='JavaScript'>
                window.alert('Warning: All fields needs to be completed');
                window.location = 'addmod.html';
                </script>");
    }
 /*   if ($modcode == true) {
        if ($modtitle == true) {
            if ($deptcode == true) {
                if ($part == true) { */
                    if ((strlen($modcode) == 6)) {
                        if ((strlen($deptcode)== 2)) {

                            $sql = "INSERT INTO `module`(`modCode`, `modTitle`, `deptCode`, `part`) VALUES ('$modcode', '$modtitle', '$deptcode', '$part')";
                            if ($db->query($sql)) {
                                echo ("<script language='JavaScript'>
                window.alert('Moudle added Successful!');
                window.location = 'addmod.html';
                </script> ");
                            } else {
                                echo "Error: " . $sql . "<br>" . $db->error;
                            }

                        } else {
                            echo("<script language='JavaScript'>
                window.alert('Error: Department Code must be 2 characters long');
                window.location = 'addmod.html';
                </script> ");
                        }

                    } else {
                        echo("<script language='JavaScript'>
                window.alert('Error: The Module Code must be 6 characters long');
                window.location = 'addmod.html';
                </script> ");
                    }
/*
                }  else {
                    echo("<script language='JavaScript'>
                window.alert('Warning: Please enter Module Part');
                window.location = 'addmod.html';
                </script> ");
                }

            } else {

                echo("<script language='JavaScript'>
                window.alert('Warning: Please enter Department Code');
                window.location = 'addmod.html';
                </script> ");
            }
        } else {
            echo("<script language='JavaScript'>
                window.alert('Warning: Please enter corresponding Module Title');
                window.location = 'addmod.html';
                </script> ");
        }
    } else {


        echo("<script language='JavaScript'>
                window.alert('Warning: Please enter a Module Code');
                window.location = 'addmod.html';
                </script> ");
    }   */
}
?>