<?php
$bname=$_POST['bname'];
$price=$_POST['price'];
$author=$_POST['author'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'bm');
$q="INSERT INTO book (bname,PRICE,author)values ('$bname',$price,'$author')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
  <head><h1>Insertion Form<h1>
  </head>
  <style type="text/css">
   body
   {
	background-image:url("record1.jpg");
   } 
  </style>
  <body>
    <h2>Book Record Management </h2>
	<p>
      <?php
	  if($status==1)
		echo "Book Record inserted successfully"; 
	  else 
	    echo "Book Record insertion failed"; 
	  ?>
	</p>
 If you want insert more record <a href= "http://localhost/app/BRM/insertform.php">Click Here</a>
  </body>
 </html>