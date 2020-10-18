<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
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


$isbn=$_POST["genre"];
$title=$_POST["title"];
$author=$_POST["author"];
$edition=$_POST["edition"];
$publication=$_POST["publication"];

$query = "INSERT INTO book_detail(genre,title,author,edition,publication) VALUES('$genre','$title','$author','$edition','$publication');";

if($conn->query($query))
{
	echo "<h3>Book information is inserted successfully </h3>";
}
else
{
	echo "ERROR";
}
 
mysqli_close($conn);
}  
?>

 
<a href="SearchBooks.php"> To search for the Book information click here </a>

</body>
</html>