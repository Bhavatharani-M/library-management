<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>Library Management System</h2></center>
<br>

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

$search = $_REQUEST["search"];

$query = "select BOOKID,BOOKNAME,BOOKAUTHOR,BOOKCATEGORY,BOOKFINE,BOOKSTATUS  from books where BOOKNAME like '%$search%'"; 
$result = mysqli_query($dbconnect,$query);

if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)

{
?>

<table border="2" align="center" cellpadding="5" cellspacing="5">

<tr>
<th> Bookid </th>
<th> Title </th>
<th> Author </th>
<th> Category </th>
<th> LostFine </th>
<th> Status </th>
</tr>

<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["BOOKID"];?> </td>
<td><?php echo $row["BOOKNAME"];?> </td>
<td><?php echo $row["BOOKAUTHOR"];?> </td>
<td><?php echo $row["BOOKCATEGORY"];?> </td>
<td><?php echo $row["BOOKFINE"];?> </td>
<td><?php echo $row["BOOKSTATUS"];?> </td>
</tr>
<?php
}
}
else
echo "<center>No books found in the library by the name $search </center>" ;
?>
</table>
<br><br>
<button class="button" onclick="document.location = 'front.html'">BACK</button>
</body>
</html>
<br>