 
<!DOCTYPE html>
<html>
<head>
	 <title>NetLibrarian.com</title>
     <link rel="stylesheet" type="text/css" href="theme1.css">
</head>
<body>
	<div class="login-box">
		<h1 align="center">Change Password </h1>
	    <form method="post" action="">
            <div class="textbox">
	            <input   type="email" name="email"  placeholder="Your E-mail Address" required="">
            </div>
            <div class="textbox">
                <input  name="pwd" type="password" placeholder="New Password" required="">
               
            </div>
            <div class="textbox">
                <input  name="cpwd" type="password" placeholder="Confirm Password" required="">
               
            </div><br><br>
              
            <input type="submit" name="sign" value="Update" class="btn">
    
        </form>
    </div>
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

		if(isset($_POST['submit']))
		{
			if(mysqli_query($conn,"UPDATE registration SET Password='$_POST[pwd]' WHERE  Email='$_POST[email]'"))
			{
				 
				echo "<center><h2 class='alert alert-success' style='width:450px; margin-top:250px;'>Record Added Successfully</h2></center>";	 
 
			}
		}
	?>
	</div>
</body>
</html>