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
  $email=$_POST['email'];
  $pws=$_POST['psw'];
//$sql = "DELETE FROM username Where user='John'";

  $query = "INSERT INTO register (email,passwrd)
  VALUES ('$email','$pws')";
  // echo($name);
	 if (!mysqli_query($dbconnect, $query)) {
        die('email already exists');
    } else {
      echo "Registration sucessfull";
    }
}
$dbconnect->close();

?> 

<br><br>
<button class="button" onclick="document.location = 'student.html'">ADD STUDENT DETAILS</button><br><br>
<button class="button" onclick="document.location = 'front.html'">BACK</button>

</body>
</html>
