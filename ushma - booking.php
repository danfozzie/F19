<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loughborough University Timetable System - Booking</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!--  <script src="booking.js"></script>  -->
    <link rel="stylesheet" href="main.css" type="text/css">
</head>
<body>

<!--
    NAVBAR
-->

<nav id="navbar" class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand">
                <img style="max-width:204px; margin-top: -7px;"
                     src="lulogoW.png">
            </a>
        </div>
        <div>
            <ul class="nav navbar-nav">
            </ul>
        </div>
    </div>
</nav>

<!--
    BODY
-->

<div class="container">
    <?php
    include('connect.php');

    $db->setFetchMode(MDB2_FETCHMODE_ASSOC);
    $sql = "SELECT r.requestID, b.requestID, b.bookID, r.userID, l.userID, l.deptCode,
			 r.modCode, m.modCode, m.modTitle, r.timeID, t.timeID, t.day, t.period, r.length,
			 r.weekID, w.weekID, r.choice1, r.choice2, r.choice3, b.roomCode
			FROM request AS r, booking AS b, login AS l, module AS m, time AS t, weeks AS w
			WHERE (b.requestID = r.requestID)
			AND (r.userID = l.userID)
			AND (r.modCode = m.modCode)
			AND (r.timeID = t.timeID)
			AND (r.weekID = w.weekID)";

    $res =& $db->query($sql);
    if (PEAR::isError($res)) {
        die($res->getMessage().' ::: '.$res->getUserInfo());
    }

    echo '<table border = "1" align = "left">';
    echo '<th>Booking ID</th>
					<th>Department</th> <th>Module Title</th> <th>Module Code</th> <th>Day</th>
					<th>Period</th>  <th>Length</th>  <th>Weeks</th> <th>1st Choice</th>
					<th>2nd Choice</th> <th>3rd Choice</th> <th>Room Given</th> <th>Status</th>';
    while ($row =& $res->fetchRow()) { //iterates through the database using the sql result until reached end of file/results
        echo "<tr><td>";
        echo $row['bookid'];
        echo "</td><td>";
        echo $row['deptcode'];
        echo "</td><td>";
        echo $row['modtitle'];
        echo "</td><td>";
        echo $row['modcode'];
        echo "</td><td>";
        echo $row['day'];
        echo "</td><td>";
        echo $row['period'];
        echo "</td><td>";
        echo $row['length'];
        echo "</td><td>";
        echo $row['weekid'];
        echo "</td><td>";
        echo $row['choice1'];
        echo "</td><td>";
        echo $row['choice2'];
        echo "</td><td>";
        echo $row['choice3'];
        echo "</td><td>";
        echo $row['roomcode'];
        echo "</td><td>";
        //echo ;
        echo "</td></tr>";
    }
    echo '</table>';

    ?>
</div>
</body>
</html>

