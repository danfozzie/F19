<?php

$host='co-project.lboro.ac.uk';
$dbName='crew18';
$username='crew18';
$password='qrp94jnm'; # For security, authentication use an include file
$dsn = "mysql://$username:$password@$host/$dbName";

require_once('MDB2.php'); # API package supports portable SQL statements

$db =& MDB2::connect($dsn); # make connection
if (PEAR::isError($db)) { # alert for errors or use global error handler
 die($db->getMessage());
} 


/*$hostname = "co-project.lboro.ac.uk";
$username = "crew18";
$password = "qrp94jnm";
$dbName = "crew18";

$db = mysql_connect ($hostname, $username, $password) or die ("Error: Could not connect to the database");

mysql_select_db ($dbName, $db)
or die ("Error: Could not select the Database"); */

?>