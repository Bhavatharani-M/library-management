<!DOCTYPE html>
<html>
  <head>
    <title>New Books</title>
  </head>
  <body>
    <?php
      if (isset($_POST['submit'])) {
        $server="localhost";
        $username="root";
        $password="";
        $db="project";

        $conn= new mysqli($server,$username,$password,$db);
        if ($conn->connect_error) {
          echo "Server Error Occured Please Try Again Later";
        }

        $bid=$_POST['bid'];
        $bname=$_POST['bname'];
        $baut=$_POST['baut'];
        $bc=$_POST['bc'];
        $blf=$_POST['blf'];
        $bs=$_POST['bs'];

        $sql="INSERT INTO books(BOOKID,BOOKNAME,BOOKAUTHOR,BOOKCATEGORY,BOOKFINE, BOOKSTATUS) VALUES('$bid','$bname','$baut','$bc','$blf','$bs')";
        $result=$conn->query($sql);
		echo ($bname);
        if ($conn->query($sql)===TRUE) {
          echo "New Book Added Successfully";
        }
        else{
          echo "Please Recheck The Values Entered" . $conn->error;
          $secondsWait = 5;
          header("Refresh:$secondsWait");
        }
      }
    ?>
    <div class="header">
      <div class="header-right">
		<button class="active" onclick="document.location = 'front.html'">MAIN PAGE</button><br><br>
      </div>
    </div>
    <form action="" method="POST">
      <input type="text" name="bid" placeholder="BOOK ID"><br><br>
      <input type="text" name="bname" placeholder="TITLE"><br><br>
      <input type="text" name="baut" placeholder="BOOK AUTHOR"><br><br>
      <input type="text" name="bc" placeholder="BOOK CATEGORY"><br><br>
      <input type="number" name="blf" placeholder="BOOK LOST FINE"><br><br>
      <input type="text" name="bs" placeholder="BOOK STATUS"><br><br>
      <input type="submit" name="submit" value="Add Book"><br><br>
      <input type="reset" name="reset" value="Clear Fields">
    </form>
  </body>
</html>