<!DOCTYPE html>
<html>
<head>
	<title>NetLibrarian.com</title>
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	   <link rel="stylesheet" type="text/css" href="theme.css">
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
 <div class="container cont2">
 <div class="login-box">
		<h1 align="center">Contact Form</h1>
        <form method="post" action="contact.php">
          <div class="textbox"> 
            <input type="text" name="name" class="txt" placeholder="Name" required="">
          </div>
          <div class="textbox">
            <input type="text" name="mail" class="txt" placeholder="E-mail address" required="">
          </div>
           
            <textarea name="message" placeholder="Message" required="" rows="6" cols="33" style=" background: transparent;font-size: 18px; border-bottom:  2px solid #4caf50;"></textarea>
          
          <input type="submit" name="send" value="Submit" class="btn" ><br><br>
          <input type="reset" name="reset" value="Reset" class="btn" >
        </form>
  </div>
  </div>
 
</body>
</html>