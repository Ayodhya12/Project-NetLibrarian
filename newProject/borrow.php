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

  <div class="h"> <a href="index.php">Home</a></div>
  <div class="h"> <a href="book.php">Books</a></div>
  <div class="h"> <a href="request.php">Book Request</a></div>
  <div class="h"><a href="information.php">Issue Information</a></div>
  <div class="h"><a href="return.php">Return Book</a></div>
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
    <div class="container cont1">
    <div class="login-box">
        <h1 align="center">Book Details</h1>
        <h2 style="color:#b1adad;">Request a book</h2>
        <form method="post" action="">
            <div class="textbox">
                <input id="" name="book_id" type="text" placeholder="Enter Book ID Number" required=""> 
            </div>
            <div class="textbox">
                <input id="" type="text" name="Email"  placeholder="Enter Your Email Address" required="">
            </div> <br><br>
            <input type="submit" name="submit" value="Request"  class=" btn"><br><br>
            <input type="reset" name="Reset"   class=" btn"> 
        </form>
    </div>
  </div>
</body>
</html>
<?php 
if(isset($_POST['submit']))
        {
            if(isset($_SESSION['login_user']))
            {
                mysqli_query($conn,"INSERT INTO borrow_books(book_id,Email,approve,issue_date,return_date,status) VALUES('$_POST[book_id]', '$_POST[Email]', '', '', '','');");
                ?>
                    <script type="text/javascript">
                        window.location="request.php"
                    </script>
                <?php
            }
            else
            {
                 
                echo "<center><h2 class='alert alert-dark' style='width:450px; margin-top:250px;'>Please login first.</h2></center>";
              
            }
        } 
  

mysqli_close($conn);

?> 
</body>
</html> 