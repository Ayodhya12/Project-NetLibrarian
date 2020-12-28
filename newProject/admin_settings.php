<link rel="stylesheet" type="text/css" href="theme1.css">
<!DOCTYPE html>
<html>
<head>
	 <title>NetLibrarian.com</title>
	<style>
        .btn1
          {
            width: 10%;
            background: none;
            border: 2px solid  #00b289;
            color: #fff;
            padding-left: 10px;
            padding-right: 10px;
            font-size:18px;
            cursor: pointer;
          }
          @media (max-width: 500px) {
          html {
               font-size: 45%;
              } 

          .container {
                  height: 10rem;
                } 
          b,text {
             font-size: 14px;
            }

           }
    </style>
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
 <div class="container">
   <form action="" method="post">
      <button class="btn1" style="margin-top: 20px; float: right; width: 150px;" name="back">Back</button>
    </form> 
   
 <div class="login-box">
         <h1 align="center" style="margin-top:30px;">Edit Information</h1>
        <form action="" method="post" enctype="multipart/form-data">
          <div class="textbox">
            <label><h4><b>Profile Picture</b></h4></label> 
          	<input type="file" name="file">
          <label><h4><b>First Name</b></h4></label> 
            <input type="text" name="FirstName" class="txt" value="<?php echo $fname; ?>">
          </div>
          <div class="textbox">
          	<label><h4><b>Last Name</b></h4></label>
            <input type="text" name="LastName" class="txt" value="<?php echo $lname; ?>">
          </div>
          <div class="textbox">
          	<label><h4><b>Email</b></h4></label>
            <input id="email" type="text" name="Email" class="txt" value="<?php echo $email; ?>">
          </div>
          <!--<div class="textbox">
          	 <label><h4><b>Password</b></h4></label>
            <input id="password" class="txt" name="pwd" type="text"  value="<?/*php echo "password";*/ ?>">
          </div>--> <br>  
          <input type="submit" name="sign" value="Save" class="btn" >
        </form>
    </div>
</div>
	<?php 
	 if(isset($_POST['back']))
        {
          ?>
            <script type="text/javascript">
              window.location="admin_profile.php"
            </script>
          <?php
        }

		if(isset($_POST['sign']))
		{
			move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$_FILES['file']['name']); 

			$FirstName=$_POST['FirstName'];
			$LastName=$_POST['LastName'];
			$Email=$_POST['Email'];
			/*$pwd=$_POST['Password'];
			$epwd=sha1($pwd);*/
			$pic=$_FILES['file']['name'];
 
			$res= "UPDATE registration SET  pic='$pic', FirstName='$FirstName', LastName='$LastName', Email='$Email' WHERE FirstName='".$_SESSION['user']."';";

			if(mysqli_query($conn,$res))
			{
				?>
					<script type="text/javascript">
						alert("Saved Successfully.");
						window.location="admin_profile.php";
					</script>
				<?php
			}
		}
 	?>
 
</body>
</html>