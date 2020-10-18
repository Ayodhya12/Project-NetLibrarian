 
	 
<?php
session_start();

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
else{

$firstname=$_REQUEST["fname"];
$lastname=$_REQUEST["lname"];
$email=$_REQUEST["mail"];
$password=sha1($_REQUEST["pwd"]);

$query="INSERT INTO registration(FirstName,LastName,Email,Password) VALUES('$firstname','$lastname','$email','$password');";

if($conn->query($query))
{
	echo "Record Added Successfully";
}
else
{
	echo "ERROR";
}
 
mysqli_close($conn);
}
 ?>
 