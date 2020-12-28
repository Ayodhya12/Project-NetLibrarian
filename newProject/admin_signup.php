<link rel="stylesheet" type="text/css" href="theme1.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
$count=0;
$firstname=$_REQUEST["fname"];
$lastname=$_REQUEST["lname"];
$email=$_REQUEST["mail"];
$pwd=sha1($_REQUEST["pwd"]);

$r="SELECT Email from registration";
$res=mysqli_query($conn,$r); 

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['Email']==$email)
          {
            $count=$count+1;
          }
        }
if($count==0)
{
$query="INSERT INTO registration(FirstName,LastName,Email,Password,status_id) VALUES('$firstname','$lastname','$email','$pwd','1');";

if($conn->query($query))
{
	echo "<center><h2 class='alert alert-success' style='width:450px; margin-top:250px;'>Record Added Successfully</h2></center>";
}
else
{
	echo "<center><h2 class='alert alert-dark' style='width:450px; margin-top:250px;'>ERROR</h2></center>";
}
}
else
{
	echo "<center><h2 class='alert alert-dark' style='width:450px; margin-top:250px;'>The Email Already Exist</h2></center>";
}
 
mysqli_close($conn);
}
 ?>
<center><h2 class='alert alert-dark' style='width:450px; margin-top:40px;'><a href="index.php" style=" text-decoration: none;"> click here </a></h2></center>
 