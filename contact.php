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

$name=$_REQUEST["name"]; 
$email=$_REQUEST["mail"];
$message=$_REQUEST["message"];

$query="INSERT INTO  contact( Name,Email,Message) VALUES('$name','$email','$message');";

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