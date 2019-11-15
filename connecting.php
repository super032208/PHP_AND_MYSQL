<?php 

$servename = "localhost";
$username = "root";
$password = "testing";
$dbname = "class_php";

$conn = mysqli_connect($servename, $username, $password, $dbname);

if ($conn) {
  echo " Connection Ok!";
}
else{
  die("Connection failed ");
}

?>