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
   $name=$_POST['name'];
  $email=$_POST['email'];
  $cmt=$_POST['comments'];
//$sql = "DELETE FROM username Where user='John'";

  $query = "INSERT INTO feedback (name,email,comments)
  VALUES ('$name','$email','$cmt')";
  // echo($name);
	 if (!mysqli_query($dbconnect, $query)) {
        die('your name already exits');
    } else {
      echo "Thanks for your feedback!!";
    }
}
$dbconnect->close();

?> 

<br><br>
<button class="button" onclick="document.location = 'front.html'">BACK</button>

</body>
</html>