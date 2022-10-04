<?php
/* Local Database*/

$servername = "localhost";
$username = "root";
$password = "2012116664";
$dbname = "diagnostic";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



?> 