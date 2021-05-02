<!DOCTYPE html>
<html>
<head>
<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 25px;
  text-align: center;
  font-size: 16px;
  cursor: pointer;
}

.button:hover {
  background-color: green;
}
</style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connectionan
$dbconnect=mysqli_connect($servername,$username,$password,$dbname);
if ($dbconnect->connect_error) {
    die("Connection failed: " . $dbconnect->connect_error);
}
if(isset($_POST['submit'])) {
  $name=$_POST['fname'];
  $rno=$_POST['rno'];
  $cno=$_POST['cno'];
  $email=$_POST['email'];
  $mob=$_POST['mono'];
  $dept=$_POST['ct'];

  $query = "INSERT INTO student (name,rollno,cardno,email,mobileno,dept)
  VALUES ('$name','$rno','$cno','$email','$mob','$dept')";
   echo($name);
	 if (!mysqli_query($dbconnect, $query)) {
        die('email already exists');
    } else {
      echo "Registration sucessfull";
    }
}
$dbconnect->close();

?> 
<br><br>
<button class="button" onclick="document.location = 'front.html'">BACK</button>

</body>
</html>