<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <title>Loughborough University Timetable Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="dropdown.js"></script>
    <link rel="stylesheet" href="main.css" type="text/css">
    <script type="text/javascript">
    </script>
    <style>
        #searchBar {
            width: 30%;
            margin: 0 auto;
        }
    </style>
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
        <li class="active"><a href="form.html">Form</a></li>
        <li><a href="roomav.html">Room Availability</a></li>
        <li><a href="search.html">Search</a></li>
        <li><a href="booking.html">Booking Status</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
        <p>You are logged in as: Bob Murphy</p>
        <div id="button">
          <button type="button" class="btn" id="regButton"><a href="login.html">Logout</a></button>
        </div>
    </div>
  </div>
</nav>

<!--
    SEARCH FORM
-->
  
    <div class="container">
      <h2>Room Search</h2>
        <div id="fBorder">
            <form class="form-horizontal" action="search.php" method="post">
                <div id="search">
                    <p>Choose your room preferences:</p>
                <div class="form-group">
        <label for="inputRooms" class="control-label col-xs-2">Area of Campus</label>
                    <div class="col-xs-2">
                        <select class="form-control" id="park" onchange="selectedPark()" name="park">
                            <option value="Any">Any</option>
                            <option value="East">East</option>
                            <option value="Central">Central</option>
                            <option value="West">West</option>
                        </select>
                    </div>
                    

        
        <label for="inputRooms" class="control-label col-xs-1">Building</label>
                    <div class="col-xs-2" id="buildings">
                        <script type="text/javascript">
                            function selectedPark() {
                                var e = document.getElementById("park");
                                var selected = e.options[e.selectedIndex].text;
                                
                                if(selected == "Any"){
                                    document.getElementById("buildings").innerHTML = "<select class='form-control' id='any' name='building'>         <option>Any</option>                                                                                          <option>Clyde Williams</option>                                                                             <option>Sir John Beckwith</option>                                                                      <option>Ann Packer</option>                                                                             <option>Lboro Design School</option>                                                                          <option>Edward Barnsley</option>                                                                       <option>John Cooper</option>                                                                        <option>Matthew Arnold</option>                                                                             <option>Schofield</option>                                                                      <option>Brockington</option>                                                                            <option>James France (CC)</option>                                                                      <option>James France (D)</option>                                                                            <option>G Block</option>                                                                                   <option>Wavy Top</option>                                                                           <option>Edward Herbert</option>                                                                               <option>Haslegrave</option>                                                                                    <option>Stewart Mason</option>                                                                  <option>Brockington Extension</option>                                                                        <option>Any</option>                                                                                    <option>John Pickford</option>                                                                          <option>Keith Green</option>                                                                            <option>Sir Frank Gibb</option>                                                                 <option>IPTME</option>                                                                                  <option>Wolfson</option>                                                                                <option>Sir David Davies</option>                                                                        </select>";
                                }
                                else if(selected == 'East'){
                                    document.getElementById("buildings").innerHTML = "<select class='form-control' id='east' name='building'>                         <option>Any</option>                                                                                        <option>Clyde Williams</option>                                                                                 <option>Sir John Beckwith</option>                                                                          <option>Ann Packer</option>                                                                             <option>Lboro Design School</option>                                                                <option>Edward Barnsley</option>                                                                        <option>John Cooper</option>                                                                        <option>Matthew Arnold</option>                                                                         </select>"; 
                                }
                                else if(selected == 'Central'){
                                    document.getElementById("buildings").innerHTML = "<select class='form-control' id='central' name='building'>          <option>Any</option>                                                                        <option>Schofield</option>                                                                          <option>Brockington</option>                                                                            <option>James France (CC)</option>                                                                              <option>James France (D)</option>                                                                               <option>G Block</option>                                                                                <option>Wavy Top</option>                                                                           <option>Edward Herbert</option>                                                                                 <option>Haslegrave</option>                                                                         <option>Stewart Mason</option>                                                                      <option>Brockington Extension</option>                                                                  </select>";
                                }
                                else if(selected == 'West'){
                                    document.getElementById("buildings").innerHTML = "<select class='form-control' id='west' name='building'>                     <option>Any</option>                                                                                    <option>John Pickford</option>                                                                          <option>Keith Green</option>                                                                            <option>Sir Frank Gibb</option>                                                                 <option>IPTME</option>                                                                                  <option>Wolfson</option>                                                                                <option>Sir David Davies</option>                                                                           </select>"
                                }
                            }
                            selectedPark();
                        </script>
                    </div>
        <label for="inputRooms" class="control-label col-xs-1">Room Capacity</label>
                    <div class="col-xs-1">
                        Min
                        <input type="range" min="0" max="400" value="0" id="slider" step="5" oninput="outputUpdate(value)">
                        <input type="dept" class="form-control input-sm" id="students" value="0" oninput="sliderUpdate(value)" name='minStudents'>                  
                    </div>
                    <div class="col-xs-1">
                        Max
                        <input type="range" min="0" max="400" value="400" id="slider2" step="5" oninput="outputUpdate2(value)">
                        <input type="dept" class="form-control input-sm" id="students2" value="400" oninput="sliderUpdate2(value)" name="maxStudents">                     
                    </div>
            </div>
                    <hr>
            </div>
            <div id="preferences">
                    
                <div class="form-group">

                    
                    <div class="col-xs-offset-3 col-xs-1">
                        <div class="checkbox">
                            <label><input type="checkbox" checked>Computer</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" checked>Data Projector</label>
                        </div>
                    </div>
                    <div class="col-xs-offset col-xs-1">
                        <div class="checkbox">
                            <label><input type="checkbox">Dual Data Projection</label>
                        </div>    
                        <div class="checkbox">
                            <label><input type="checkbox">Visualiser</label>
                        </div>
                    </div>
                    <div class="col-xs-offset col-xs-1">
                        <div class="checkbox">
                            <label><input type="checkbox">Blu-ray Player</label>
                        </div>                    
                        <div class="checkbox">
                            <label><input type="checkbox">Whiteboard</label>
                        </div>                                        
                    </div>
                    <div class="col-xs-offset col-xs-1">
                        <div class="checkbox">
                            <label><input type="checkbox">Glass Whiteboard</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox">Wheelchair Access</label>
                        </div>   
                    </div>
                    <div class="col-xs-offset col-xs-1">
                        <div class="checkbox">
                            <label><input type="checkbox">PA System</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox">Radio Microphone</label>
                        </div>  
                    </div>
                    <div class="col-xs-offset col-xs-1">
                        <div class="checkbox">
                            <label><input type="checkbox">DVD Player</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox">ReVIEW Capture</label>
                        </div>
                        
                    </div>
                </div>
                <hr>
            </div>
                <div id="submitButton">           
                    <div class="form-group">
                        <div id="searchBar">
                            <input type="submit" class="btn btn-lg btn-block" id="subButton" value="Search">
                        </div>
                    </div>      
                </div>
            </form>
        </div>
        <br>
        <br>

        <table class="table table-bordered"  id="table">
        <thead>
          <tr>
            <th>Area of Campus</th>
            <th>Building</th>
            <th>Room</th>
            <th>Room Capacity</th>
            <th>Computer</th>
            <th>Data Projector</th>
            <th>Dual Data Projection</th>
            <th>Visualiser</th>
            <th>Blu-ray Player</th>
            <th>Whiteboard</th>
            <th>Glass Whiteboard</th>            
            <th>Wheelchair Access</th>
            <th>PA System</th>
            <th>Radio Microphone</th>
            <th>DVD Player</th>
            <th>ReVIEW Capture</th>
            <th>Book Room</th>
          </tr>
        </thead>
        <tbody id="table">
            <?php
                $username='crew18';
                $password='qrp94jnm';
                $host='co-project.lboro.ac.uk';
                $dbName='crew18';

                $dsn = "mysql://$username:$password@$host/$dbName";

                require_once('MDB2.php');
                $db =& MDB2::connect($dsn);

                if (PEAR::isError($db)) { 
                    die($db->getMessage());
                }
                else {
                    if($_POST['minStudents'] <= $_POST['maxStudents']){
                        if ($_POST['park'] != 'Any'){
                            if($_POST['building'] != 'Any') {
                                $sql = "SELECT b.park, b.building, r.building, r.roomCode, r.capacity, f.* FROM building AS b, room AS r, facilities AS f WHERE r.capacity>='".$_POST['minStudents']."' AND r.capacity<='".$_POST['maxStudents']."' AND (b.building = r.building) AND (f.roomCode = r.roomCode) AND (b.park='".$_POST['park']."') AND (r.building='".$_POST['building']."') ORDER BY b.building";
                                $res =& $db->query($sql);
                                if (PEAR::isError($res)) {
                                    die($res->getMessage());
                                }
                                while ($row = $res->fetchRow()) { 
                                    echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[3]."</td><td>".$row[4]."</td>";
                                    for($i=6;$i<=17;$i++){
                                            if($row[$i] == 1) {
                                                echo "<td id='cCodeAS'>Y</td>";
                                            }
                                            else if($row[$i] == 0) {
                                                echo "<td id='cCodeBS'>N</td>";
                                            }
                                    }
                                    echo "<td><input type='button' id='bookButton' value='>>'></td></tr>";
                                }
                            }
                            else {
                                $sql = "SELECT b.park, b.building, r.building, r.roomCode, r.capacity, f.* FROM building AS b, room AS r, facilities AS f WHERE r.capacity>='".$_POST['minStudents']."' AND r.capacity<='".$_POST['maxStudents']."' AND (b.building = r.building) AND (f.roomCode = r.roomCode) AND (b.park='".$_POST['park']."') ORDER BY b.building";
                                $res =& $db->query($sql);
                                if (PEAR::isError($res)) {
                                    die($res->getMessage());
                                }
                                while ($row = $res->fetchRow()) { 
                                    echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[3]."</td><td>".$row[4]."</td>";
                                    for($i=6;$i<=17;$i++){
                                            if($row[$i] == 1) {
                                                echo "<td id='cCodeAS'>Y</td>";
                                            }
                                            else if($row[$i] == 0) {
                                                echo "<td id='cCodeBS'>N</td>";
                                            }
                                    }
                                    echo "<td><input type='button' id='bookButton' value='>>'></td></tr>";
                                }
                            }
                        }
                        else {
                            if($_POST['building'] != 'Any') {
                                $sql = "SELECT b.park, b.building, r.building, r.roomCode, r.capacity, f.* FROM building AS b, room AS r, facilities AS f WHERE r.capacity>='".$_POST['minStudents']."' AND r.capacity<='".$_POST['maxStudents']."' AND (b.building = r.building) AND (f.roomCode = r.roomCode) AND (r.building='".$_POST['building']."') ORDER BY b.building";
                                $res =& $db->query($sql);
                                if (PEAR::isError($res)) {
                                    die($res->getMessage());
                                }
                                while ($row = $res->fetchRow()) { 
                                    echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[3]."</td><td>".$row[4]."</td>";
                                    for($i=6;$i<=17;$i++){
                                            if($row[$i] == 1) {
                                                echo "<td id='cCodeAS'>Y</td>";
                                            }
                                            else if($row[$i] == 0) {
                                                echo "<td id='cCodeBS'>N</td>";
                                            }
                                    }
                                    echo "<td><input type='button' id='bookButton' value='>>'></td></tr>";
                                }
                            }
                            else {
                                $sql = "SELECT b.park, b.building, r.building, r.roomCode, r.capacity, f.* FROM building AS b, room AS r, facilities AS f WHERE r.capacity>='".$_POST['minStudents']."' AND r.capacity<='".$_POST['maxStudents']."' AND (b.building = r.building) AND (f.roomCode = r.roomCode) ORDER BY b.building";
                                $res =& $db->query($sql);
                                if (PEAR::isError($res)) {
                                    die($res->getMessage());
                                }
                                while ($row = $res->fetchRow()) { 
                                    echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[3]."</td><td>".$row[4]."</td>";
                                    for($i=6;$i<=17;$i++){
                                            if($row[$i] == 1) {
                                                echo "<td id='cCodeAS'>Y</td>";
                                            }
                                            else if($row[$i] == 0) {
                                                echo "<td id='cCodeBS'>N</td>";
                                            }
                                    }
                                    echo "<td><input type='button' id='bookButton' value='>>'></td></tr>";
                                }
                            }
                        }
                    }
                    else {
                        echo "Please ensure that Minimum Room Capacity is less than Maximum Room Capacity";
                    }
                }
            ?>
        

        </tbody>
      </table>  
</body>
</html>