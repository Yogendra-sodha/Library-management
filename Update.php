<?php 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'bm');
$qu="select*from book";
$result=mysqli_query($con,$qu);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
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
   <form action="Updation.php" method="post">
		<h2 align="center">Update Form </h2><hr/>
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
	<td><?php echo $row['bid']; ?>
	<input type="hidden" name="bid<?php echo$i;?>" value="<?php echo $row['bid']; ?>"/></td>
	<td><input type="text" name="bname<?php echo$i;?>" value="<?php echo $row['bname'];?>"/></td>
	<td><input type="text" name="PRICE<?php echo$i;?>"value="<?php echo $row['PRICE'];?>"/></td>
	<td><input type="text" name="author<?php echo$i;?>" value="<?php echo $row['author'];?>"/></td>
	</tr>
	<?php 
	  }
	?>
	<td><input type="Submit" value="Update"/>
	</table>
	</form>
  </body>
</html>