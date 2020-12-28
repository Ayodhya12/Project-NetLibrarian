 
<!DOCTYPE html>
<html>
<head>
	 <title>NetLibrarian.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="theme1.css">
      
	<style>
		.btn1
		{
			width: 10%;
            background: none;
            border: 2px solid  #00b289;
            color: #fff;
            padding-left: 10px;
            padding-right: 30px;
            font-size:18px;
            cursor: pointer;
		}
		.textbox1
		{
			width: 91%;
            overflow: hidden;
            font-size: 20px;
            padding: 8px 0;
            margin: 8px 0;
            border: 2px solid  #00b289;
		}
		.textbox1  input
        {
           border: none;
           outline: none;
           background: none;
           color: white;
           font-size: 18px;
           width: 94%;
           float: center;
           margin: 0 10px;
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

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}
img{
  border-radius: 50%;
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
  
  <span style="color:#fff; font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>


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
	<div style="padding-left: 850px; margin-top: 30px;">
		<form method="post" >
			<div style="width: 260px;" class="textbox1">
                <input  type="text" name="search" placeholder="Enter Student Email Address ">
            </div>
				<button  type="submit" name="submit" class="btn1"> <i class="fa fa-search" aria-hidden="true"></i>
				</button>
		</form>
	</div>

	<h2  align="center" style="color: #fff; border-bottom: 6px solid  #00b289; margin-bottom: 20px;  padding: 13px 0; width: 400px; ">List Of Students</h2>
	<?php

		if(isset($_POST['submit']))
		{
			$q=mysqli_query($conn,"SELECT mem_id,FirstName,LastName,Email FROM `registration` WHERE  Email = '$_POST[search]' AND status_id='2' ");

			if(mysqli_num_rows($q)==0)
			{
				echo "Sorry! No student found with that username. Try searching again.";
			}
			else
			{
		echo "<table class='table table-dark table-hover' >";
			echo "<tr style='background-color:#28292d;'>"; 
			    echo "<th>"; echo "Member ID";  echo "</th>";
				echo "<th>"; echo "First Name";	echo "</th>";
				echo "<th>"; echo "Last Name";  echo "</th>";
				echo "<th>"; echo "Email";  echo "</th>";  
				
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>"; echo $row['mem_id']; echo "</td>";
				echo "<td>"; echo $row['FirstName']; echo "</td>";
				echo "<td>"; echo $row['LastName']; echo "</td>";
				echo "<td>"; echo $row['Email']; echo "</td>";
				 
				echo "</tr>";
			}
		echo "</table>";
			}
		}
		 
		else
		{
			$res=mysqli_query($conn,"SELECT mem_id,FirstName,LastName,Email FROM `registration` WHERE status_id='2' ");

		echo "<table class='table table-dark table-hover' >";
			echo "<tr style='background-color:#28292d;'>";
			    echo "<th>"; echo "Member ID";  echo "</th>";
				echo "<th>"; echo "First Name";	echo "</th>";
				echo "<th>"; echo "Last Name";  echo "</th>";
				echo "<th>"; echo "Email";  echo "</th>";  
				
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['mem_id']; echo "</td>";
				echo "<td>"; echo $row['FirstName']; echo "</td>";
				echo "<td>"; echo $row['LastName']; echo "</td>";
				echo "<td>"; echo $row['Email']; echo "</td>";
				 
				echo "</tr>";
			}
		echo "</table>";
		}

	?>
</div>
</body>
</html>