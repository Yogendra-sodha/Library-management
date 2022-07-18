<!DOCTYPE HTML>
<html>
<title >Insert form</title>
<style>
body
{
color:white;
background-image:url("Book.jpg");
}
</style>
<head> <h1>Book Record Management</h1>
</head>
 <body>
   <form action="a.php" method="post">
    <table>
	 <tr><th>Book Name:</th>
	  <td><input type="text" placeholder= "Enter book name" name="bname" required /></td>
	
	  <th>Price:</th>
	  <td><input type="text" placeholder= "Enter Price" name="price" required /></td>
	  
	  <th>Author Name:</th>
	  <td><input type="text" placeholder= "Enter Author name" name="author"/></td>
      </tr>
	 <tr>
	  <td><input type="Submit" value="Insert"/></td>
	  
	 </tr><br/>
	</table>
  </body>
 </html>