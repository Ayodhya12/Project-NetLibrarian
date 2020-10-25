<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="theme.css">
</head>
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
 
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

 
  <div class="h"> <a href="index.php">Home</a></div>
  <div class="h"> <a href="book.php">Book Library</a></div>
  <div class="h"><a href="profile.php">Profile</a></div>
  <div class="h"><a href="#">Account Details</a></div>
  <div class="h"><a href="contact_form.php">Contact</a></div>
  <div class="h"><a href="search.php">Search</a></div>
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
<body>
 
 <div class="container">
    <div class="login-box">
		<h1 align="center">Search</h1>
  <form action = "display.php" method="post">
  	<div class="textbox">
<input type="text" name="search" placeholder="Enter the title of the book ">
</div>
<br></br>
<input type="submit" value="submit" class="btn"><br><br>
<input type="reset" value="Reset" class="btn">
</form>
</div>
</div>
</body>
</html>