<?php 
require("connecting.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>

<style>
*{
  background-color:ccc;
}
</style>

  <!-- Links for bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <!-- call the main css file that has all the style -->
        <link rel="stylesheet" href="css/main.css">
  
  <title>Php Insert </title>
</head>
<body>

<div class="container">
<div class="row">
<div class="col-md-6">
<form action="" method="POST">

<h3 class="text-left" style="color:blue;" > Enter Student Information</h3>

<h1>ID Number:</h1> <input type="number" name="id" placeholder="Student ID" required>
<h1>Student Name:</h1> <input type="text" name="name" placeholder="Name" required>
<h1>Class:</h1> <input type="text" name="class" placeholder="Class" required><br><br>











<input  class="btn btn-success btn-lg" type="submit" name="submit" value="submit">

</form>
</div>
</div>
</div>

<?php 

if ($_POST['submit']) {

  $rn = $_POST['id'];
  $sn = $_POST['name'];
  $cl = $_POST['class'];

  $query = "INSERT INTO  student VALUES('$rn', '$sn', '$cl') ";

  $data = mysqli_query($conn, $query);

  if ($data) {
    echo "<h1> Data Inserted Into Datbase </h1>";
  }




}

?>


  
</body>
</html>