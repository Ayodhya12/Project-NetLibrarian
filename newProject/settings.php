<link rel="stylesheet" type="text/css" href="theme.css">
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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
else
{

}
		
		$sql = "SELECT * FROM registration WHERE Email='$_SESSION[login_user]'";
		$result = mysqli_query($conn,$sql);

		while ($row = mysqli_fetch_assoc($result)) 
		{
			$fname=$row['FirstName'];
			$lname=$row['LastName'];
			$email=$row['Email'];
			$pwd=$row['Password'];
		}
		$_SESSION['user']=$fname;

	?>
  
	<!--<div class="profile_info" style="text-align: center;">
		<span style="color: white;">Welcome,</span>	
		<h4 style="color: white;"><?php echo $_SESSION['user']; ?></h4>
	</div>-->
  
 <div class="login-box">
         <h1 align="center" style="margin-top:150px;">Edit Information</h1>
        <form action="" method="post" enctype="multipart/form-data">
          <div class="textbox">
          <label><h4><b>First Name</b></h4></label> 
            <input type="text" name="fname" class="txt" value="<?php echo $fname; ?>">
          </div>
          <div class="textbox">
          	<label><h4><b>Last Name</b></h4></label>
            <input type="text" name="lname" class="txt" value="<?php echo $lname; ?>">
          </div>
          <div class="textbox">
          	<label><h4><b>Email</b></h4></label>
            <input id="email" type="text" name="mail" class="txt" value="<?php echo $email; ?>">
          </div>
          <div class="textbox">
          	<label><h4><b>Password</b></h4></label>
            <input id="password" class="txt" name="pwd" type="text"  value="<?php echo $pwd; ?>">
          </div> <br>  
          <input type="submit" name="sign" value="Save" class="btn" >
        </form>
    </div>
	<?php 

		if(isset($_POST['submit']))
		{
			move_uploaded_file($_FILES['file']['tmp_name']);

			$fname=$_POST['FirstName'];
			$lname=$_POST['LastName'];
			$email=$_POST['Email'];
			$pwd=$_POST['Password']; 
 
			$res= "UPDATE registration SET FirstName='$fname', LastName='$last', Email='$email', Password='$pwd' WHERE FirstName='".$_SESSION['user']."';";

			if(mysqli_query($conn,$res))
			{
				?>
					<script type="text/javascript">
						alert("Saved Successfully.");
						window.location="profile.php";
					</script>
				<?php
			}
		}
 	?>
 
</body>
</html>
