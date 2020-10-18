 
<?php
 
$email=$_REQUEST["mail"];
$password=$_REQUEST["pwd"];

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
}
$sql="SELECT EXISTS(SELECT * FROM registration WHERE 'Email'='$email' AND 'Password'='$password');";
 
 
if($conn->query($sql))
{
	/*$row=mysqli_fetch_array($conn->query($sql) ,MYSQLI_NUM);
	 if ($row[0]==1) {
	 	session_start();
		$_SESSION["Email"]=$email;
		$_SESSION["Password"]=$password;*/

	 }
	 else{
	 	echo "<h2>Try again.</h2>";
	 
}
 
}
else{
	echo "<h2>Conection Faild..!</h2>";
}
 
 
mysqli_close($conn);



?>
 