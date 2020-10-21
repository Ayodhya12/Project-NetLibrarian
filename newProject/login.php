 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="theme.css">
<?php

$email=$_REQUEST["mail"];
$pwd=$_REQUEST["pwd"];

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
/*$phash=sha1($pwd);*/


$sql="SELECT EXISTS(SELECT * FROM `registration` WHERE `Email`='$email' AND `Password`='$pwd')";


$r=mysqli_query($conn,$sql);
  

if($r){
	 $row=mysqli_fetch_array($r,MYSQLI_NUM);
	 if ($row[0]==1) {
	 	session_start();
		$_SESSION["email"]=$email;
		$_SESSION["pwd"]=$pwd;

        $_SESSION['login_user']=$email;
	 	echo "<script type='text/javascript'>location.href= 'index.php';</script>";
	 }
	 else{
	 	echo "<center><h2 class='alert alert-dark' style='width:450px; margin-top:250px;'> User not found. Please check your e-mail and password and try again.</h2></center>";
	 }
}
else{
	echo "<center><h2 class='alert alert-dark' style='width:450px; margin-top:250px;'>Conection Faild..!</h2></center>";
}
 
 
mysqli_close($conn);
?>
</body>
</html>

