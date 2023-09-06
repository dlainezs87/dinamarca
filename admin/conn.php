<?php 

$server = "localhost:3306";
$user = "atheneal_dinamarca";
$pass = "j!m1Rd046";
$database = "atheneal_dinamarca";

$mysqli = new mysqli($server,$user,$pass,$database);

if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
//$mysqli->close();
?>
