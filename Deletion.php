<?php
  $size=sizeof($_POST);
  $j=1;
  for($i=1;$i<=$size;$i++,$j++)
  {
	$index="b".$j;
	if(isset($_POST[$index]))
	   $b_id[$i]=$_POST[$index];
    else 
	 $i--;
  }
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'bm');
for ($k=1;$k<=$size;$k++)
{
  $q="delete from book where bid=".$b_id[$k];
  mysqli_query($con,$q);
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>Delete form</head>
<body>
<p> <?php echo$size." rows deleted succesfully"; ?> </p>
Do you want delete another row then<a href="http://localhost/app/BRM/Delete.php"> Click here</a>
</body>
</html>