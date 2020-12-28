<!DOCTYPE html>
<html>
<head>
	 <title>NetLibrarian.com</title>
	<link rel="stylesheet" type="text/css" href="theme1.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<style> 
 .btn1
{
 width: 40%;
 background: none;
 border: 2px solid #4caf50;
 color: #fff;
 padding: 5px;
 font-size: 18px;
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
.login-box1
{
 width: 350px;
 position: absolute;
 top: 60%;
 left: 80%;
 transform: translate(-50%,-50%);
 color: #fff;
 background-color:rgba(255,255,255,0.1); 
 padding: 40px;
 border-radius:20px;
}
.login-box1 h1
{
 
  font-size: 30px;
  border-bottom: 6px solid #4caf50;
  margin-bottom: 50px;
  padding: 13px 0;
}
.table{
   width:700px; 
   position: absolute;
   top: 30%;
   left:3%;
  
}
</style>
</head>
<body>
 
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

 
  <div class="h"> <a href="index.php"> Home</a></div>
  <div class="h"><a href="book.php"> Book Library</a></div>
  <div class="h"><a href="profile.php"> Profile</a></div>
  <div class="h"><a href="account_details.php"> Account Details</a></div>
  <div class="h"><a href="contact_form.php"> Contact</a></div>
  <div class="h"><a href="search.php"> Search</a></div>
</div>

<div id="main">
  
  <span style="color:#fff; font-size:30px;cursor:pointer" onclick="openNav()">&#9776;  </span>


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
              ?>
<div class="container">
   <button name="submit2" type="submit" class="btn1" style="background-color: #06861a; color: yellow;">RETURNED</button>&nbsp&nbsp
   <button name="submit3" type="submit" class="btn1" style="background-color: red; color: yellow;">EXPIRED</button>
    <!--<div class="table">
      <h1 align="center" style="color: #fff; border-bottom: 6px solid #4caf50; margin-bottom: 20px;  padding: 13px 0; width: 400px; ">Returned Books</h1>-->
    <div class="container2">
      
    </div>
    
</body>
</html>