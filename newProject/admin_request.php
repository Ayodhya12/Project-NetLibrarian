<!DOCTYPE html>
<html>
<head>
     <title>NetLibrarian.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="theme1.css">
<style>
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
.btn1
{
	width: 10%;
  background: none;
  border: 2px solid  #00b289;
  color: #fff;
  padding-left: 10px;
  padding-right: 70px;
  font-size:18px;
  cursor: pointer;
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
  <div class="h"> <a href="admin_books.php">Books</a></div>
  <div class="h"> <a href="admin_request.php">Book Request</a></div>
  <div class="h"><a href="bookinfo.php">Issue Book</a></div>
  <div class="h"><a href="admin_return.php">Return Book</a></div>
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
 			<button class="btn1" style="margin-top: 20px; float: right; width: 170px;" name="submit">Approve_Request</button>
 		</form>

	<h1 align="center" style="color: #fff; border-bottom: 6px solid  #00b289; margin-bottom: 20px;  padding: 13px 0; width: 400px; ">Request of Book</h1>
   <?php

   if(isset($_POST['submit']))
 				{
 					?>
 						<script type="text/javascript">
 							window.location="approve_request.php"
 						</script>
 					<?php
 				}

	if(isset($_SESSION['login_user']))
	{
		$sql= "SELECT registration.Email,book_detail.book_id,genre,title,author,edition/*,status,quantity*/ FROM registration inner join borrow_books ON registration.Email=borrow_books.Email inner join book_detail ON  book_detail.book_id=borrow_books.book_id WHERE borrow_books.approve =''";
		$res= mysqli_query($conn,$sql);

		if(mysqli_num_rows($res)==0)
			{
				echo "<h2><b>";
				echo "There's no pending request.";
				echo "</h2></b>";
			}
		else
		{
		echo "<table class='table table-dark table-hover'>";
    echo "<tr style='background-color:#28292d;'>";
    echo "<th>"; echo "Student Email"; echo "</th>";
    echo "<th>"; echo "Book ID"; echo "</th>";
    echo "<th>"; echo "Genre"; echo "</th>";
    echo "<th>"; echo "Title"; echo "</th>";
    echo "<th>"; echo "Author"; echo "</th>";
    echo "<th>"; echo "Edition"; echo "</th>";
    /*echo "<th>"; echo "Status"; echo "</th>";
    echo "<th>"; echo "Quantity"; echo "</th>";*/
    echo " </tr>";

 while ($row=mysqli_fetch_assoc($res))
  {
    echo "<tr>";
    echo "<td>"; echo $row['Email']; echo "</td>";
    echo "<td>"; echo $row['book_id']; echo "</td>";
    echo "<td>"; echo $row['genre']; echo "</td>";
    echo "<td>"; echo $row['title']; echo "</td>";
    echo "<td>"; echo $row['author']; echo "</td>";
    echo "<td>"; echo $row['edition']; echo "</td>";
   /* echo "<td>"; echo $row['status']; echo "</td>";
    echo "<td>"; echo $row['quantity']; echo "</td>";*/
    echo " </tr>";
			}
		echo "</table>";
		}
	}
	else
	{
		?>
		<br>
    <center><h2 class='alert alert-dark' style='width:450px; margin-top:250px;'>You need to login to see the request.</h2></center>
			  
		<?php
	}


mysqli_close($conn);

?>
</div> 
</body>
</html> 