<!DOCTYPE html>
 <html>
 <head>
  <title>NetLibrarian.com</title>
 	<link rel="stylesheet" type="text/css" href="theme1.css">
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 	<style>
 			.btn1
		{
			width: 10%;
      background: none;
      border: 2px solid #00b289;
      color: #fff;
      padding-left: 10px;
      padding-right: 70px;
      font-size:18px;
      cursor: pointer;
		}
	.sidenav {
  height: 100%;
  margin-top: 0px;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #222;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}
img{
  border-radius: 50%;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: white;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.h:hover
{
	color:white;
	width: 300px;
	height: 50px;
	background-color: #00544c;
}
</style>
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
}
?>
 
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div style="color: white; margin-left: 60px; font-size: 20px;">

                <?php
                session_start();
                if(isset($_SESSION['login_user']))

                {    
                    $q=mysqli_query($conn,"SELECT * FROM registration where Email='$_SESSION[login_user]' ;");
                    $row=mysqli_fetch_assoc($q);
                    echo "<div style='align: center'>
                    <img height=110 width=120 src='upload/".$row['pic']."'>
                    </div>";  
                    echo "Welcome "."<br>"./*$_SESSION['login_user']*/$row['FirstName']." ".$row['LastName']; 
                }
                
                ?>
            </div><br><br>

  <div class="h"> <a href="admin.php">Home</a></div>
  <div class="h"> <a href="admin_books.php">Book Library</a></div>
  <div class="h"><a href="admin_profile.php">Profile</a></div>
  <div class="h"><a href="student_details.php">Students Details</a></div>
  

</div>

<div id="main">
  
  <span style="color:#fff; font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
 
 	<div class="container">
 		<form action="" method="post">
 			<button class="btn1" style="margin-top: 20px; float: right; width: 70px;" name="submit">Settings</button>
 		</form>
 		 
           <?php

 				if(isset($_POST['submit']))
 				{
 					?>
 						<script type="text/javascript">
 							window.location="admin_settings.php"
 						</script>
 					<?php
 				}
 				$q=mysqli_query($conn,"SELECT * FROM registration where Email='$_SESSION[login_user]' ;");
 			?>
 			<div class="login-box">
 			<h1 style="text-align: center;">My Profile</h1>
            
 			<?php
 				$row=mysqli_fetch_assoc($q);

  			?>
 			<div style="text-align: center;"> <b><h3>Welcome,</h3></b>
	 			<h2>
	 				<?php echo /*$_SESSION['login_user']*/$row['FirstName']; ?>
	 			</h2><br><br>
 			</div>
 			<?php

 			if($row['status_id']==1)
 			{
 				$status="Admin";
 			}
 			else
 			{
 				$status="User";
 			}
 				echo "<b>";
 				echo "<table class='table table-dark table-hover'>";
	 				echo "<tr>"; 
	 					echo "<td>";
	 						echo "<b> First Name: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['FirstName'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Last Name: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['LastName'];
	 					echo "</td>";
	 				echo "</tr>";
 
	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Email: </b>";	
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['Email'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> User Type: </b>";	
	 					echo "</td>";
	 					echo "<td>";
	 						echo $status;
	 					echo "</td>";
	 				echo "</tr>";

	 				
 				echo "</table>";
 				echo "</b>";
 			?>
 		</div>
 	</div>
 </body>
 </html>