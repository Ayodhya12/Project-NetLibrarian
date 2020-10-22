 
 <!DOCTYPE html>
 <html>
 <head>
 	<title> </title>
 	<link rel="stylesheet" type="text/css" href="theme.css">
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
 </head>
 <body>
 	<div class="container">
 		<form action="" method="post">
 			<button class="btn" style="margin-top: 20px; float: right; width: 70px;" name="submit">Settings</button>
 		</form>
 		 
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

 				if(isset($_POST['submit']))
 				{
 					?>
 						<script type="text/javascript">
 							window.location="settings.php"
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