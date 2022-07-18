<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'bm');
$q="SELECT * FROM book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
   <style type="text/css">
    table
	{
	border-style:solid;
	border-color:black;
	background-color:pink;
	width:1000px;
	}
	tr#a1
	{
	background-color:purple;	
	}
   </style>
   <body>
    <h2 align="center">Book Record Management </h2>
	<table align="center">
	<tr id="a1">
	<th>Book-ID</th>
	<th>Book Name</th>
	<th>Price</th>
	<th>Author</th>
	</tr>
	<?php
	  for ($i=1;$i<=$num;$i++)
	  {
		$row=mysqli_fetch_array($result);
	  ?>
	<tr id="a2" align="center">
	<td><?php echo $row['bid']; ?></td>
	<td><?php echo $row['bname']; ?></td>
	<td><?php echo $row['PRICE']; ?></td>
	<td><?php echo $row['author']; ?></td>
	</tr>
	<?php 
	  }
	?>
	</table>
  </body>
</html>