<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="theme.css">
</head>
<body>
<h1 align="center" style="color: #fff; border-bottom: 6px solid #4caf50; margin-bottom: 20px;  padding: 13px 0; width: 450px; ">Book Details</h1>
</body>
</html>
<?php

$dbcon=parse_ini_file("dbconfig.ini");
$server=$dbcon['server'];
$user=$dbcon['user'];
$pw=$dbcon['dbpass'];
$db=$dbcon['dbase'];


$conn=mysqli_connect($server,$user,$pw,$db);

if($conn->connect_error)
{
	die("Not Connected Properly".$conn->connect_error);
}
else
{
}
$search = $_REQUEST["search"];

$res=mysqli_query($conn,"SELECT * FROM book_detail WHERE title='$search';");

if(mysqli_num_rows($res)==0)
	{
		echo " <center><h2 class='alert alert-dark' style='width:450px; margin-top:250px;'> No book found. Try again...!</h2></center>";
	}
else
{
 echo "<table class= 'table table-dark table-hover'>";
 echo "<tr style='background-color:#28292d;'>";
 echo "<th>"; echo "Book ID"; echo "</th>";
 echo "<th>"; echo "Genre"; echo "</th>";
 echo "<th>"; echo "Title"; echo "</th>";
 echo "<th>"; echo "Author"; echo "</th>";
 echo "<th>"; echo "Edition"; echo "</th>";
 echo "<th>"; echo "Publication"; echo "</th>";
 echo " </tr>";

 while ($row=mysqli_fetch_assoc($res))
  {
 echo "<tr>";
 echo "<td>"; echo $row['book_id']; echo "</td>";
 echo "<td>"; echo $row['genre']; echo "</td>";
 echo "<td>"; echo $row['title']; echo "</td>";
 echo "<td>"; echo $row['author']; echo "</td>";
 echo "<td>"; echo $row['edition']; echo "</td>";
 echo "<td>"; echo $row['publication']; echo "</td>";
 echo " </tr>";
 }

 echo " </table>";
} 
mysqli_close($conn);

?> 