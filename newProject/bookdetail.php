<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="theme.css">
<body>
 
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

$book_id=$_POST["book_id"];
$genre=$_POST["genre"];
$title=$_POST["title"];
$author=$_POST["author"];
$edition=$_POST["edition"];
$publication=$_POST["publication"];

$query = "INSERT INTO book_detail(book_id,genre,title,author,edition,publication) VALUES('$book_id','$genre','$title','$author','$edition','$publication');";

if($conn->query($query))
{ 
	echo "<center><h2 class='alert alert-success' style='width:450px; margin-top:250px;'>Book information is inserted successfully </h2></center>";
}
else
{
	echo "<center><h2 class='alert alert-dark' style='width:450px; margin-top:250px;'>ERROR...</h2></center> ";
}
 
mysqli_close($conn);
}  
?>

 
<a href="Book.php"><h3 style="color: #fff;"> To search for the Book information click here</h3> </a>

</body>
</html>