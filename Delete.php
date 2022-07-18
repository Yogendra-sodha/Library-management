<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'bm');
$q="select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
 <head></head>
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
   <form action="deletion.php" method="post">
		<h2 align="center">Delete Form </h2><hr/>
		<table align="center">
		<tr id="a1">
		<th>Book-ID</th>
		<th>Book Name</th>
		<th>Price</th>
		<th>Author</th>
		<th>Select to delete</th>
		</tr>
	<?php 
	for ($i=1;$i<=$num;$i++)
	{   
	$row=mysqli_fetch_array($result);
	?>
	<tr id="a2" align="center">
	<td><?php echo $row['bid']; ?></td>
	<td><?php echo $row['bname'];?></td>
	<td><?php echo $row['PRICE'];?></td>
	<td><?php echo $row['author'];?></td>
	<td><input type="checkbox" value="<?php echo $row['bid'];?>" name="b<?php echo$i;?>"/></td>
	</tr>
	<?php 
	  }
	?>
	<tr>
	<td colspan="5"><input type="submit" value="delete"/><td>
	</tr>
	</form>
   </table>
 </body>
</html>