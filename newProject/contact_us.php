 <!DOCTYPE html> 
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8"> 
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
   <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">  
    <style>
      @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
} 
nav{
  display: flex;
  height:  80px;
  width: 100%;
  background: #1b1b1b;
  align-items: center;
  justify-content: space-between;
  padding: 0 10px 0 50px;
  flex-wrap: wrap;
}
nav .logo{
  color: #fff;
  font-size: 26px;
  font-weight: 500;
}
nav ul{
  display: flex;
  flex-wrap: wrap;
  list-style: none;
}
nav ul li{
  margin: 0 2px;
}
nav ul li a{
  color: #f2f2f2;
  text-decoration: none;
  font-size: 16px;
  font-weight: 500; 
  border-radius: 5px;
  letter-spacing: 1px;
  transition: all 0.3s ease;
  padding: 8px 32px 8px 32px; 
  display: block;
 
}
nav ul li a.active,
nav ul li a:hover{
  color: #111;
  background: linear-gradient(135deg,#0066B2FF 0%,#00203fff 100%);
   text-decoration: none;
}
nav .menu-btn i{
  color: #fff;
  font-size: 22px;
  cursor: pointer;
  display: none;
}
input[type="checkbox"]{
  display: none;
}
@media (max-width: 1000px){
  nav{
    padding: 0 40px 0 50px;
  }
}
@media (max-width: 920px) {
  nav .menu-btn i{
    display: block;
  }
  #click:checked ~ .menu-btn i:before{
    content: "\f00d";
  }
  nav ul{
    position: fixed;
    top: 80px;
    left: -100%;
    background: #111;
    height: 100vh;
    width: 100%;
    text-align: center;
    display: block;
    transition: all 0.3s ease;
  }
  #click:checked ~ ul{
    left: 0;
  }
  nav ul li{
    width: 100%;
    margin: 40px 0;
  }
  nav ul li a{
    width: 100%;
    margin-left: -100%;
    display: block;
    font-size: 20px;
    transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  }
  #click:checked ~ ul li a{
    margin-left: 0px;
  }
  nav ul li a.active,
  nav ul li a:hover{
    background: none;
    color: cyan;
  }
}
.content{
  position: absolute;
  top: 43%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  z-index: -1;
  width: 100%; 
  height: 90%;
  color: #1b1b1b;
}
.content div{
  font-size: 40px;
  font-weight: 700;
}
body{
  background-image: url("contact.jpg");
  background-repeat: no-repeat;
  background-position: center ;
  background-attachment: fixed;
  background-size: cover;
   
}
      .login-box
{
 width: 380px; 
 position:  absolute;
 top: 50%;
 left: 50%;
 transform: translate(-50%,-50%);
 color: #fff;
 background-color: rgba(0,0,0,0.8);
 padding: 40px;
 border-radius:20px;
 margin: 2% auto; 
} 
.login-box h1
{
  
  font-size: 40px;
  border-bottom: 6px solid  #00b289;
  margin-bottom: 30px;
  padding: 8px 0;
  margin-top: 0px;
}
.textbox
{
 width: 93%;
 overflow: hidden;
 font-size: 20px;
 padding: 8px 0;
 margin: 8px 0;
 border-bottom: 2px solid #00b289;
}
.textbox i
{
  width: 26px;
  float: left;
  text-align: center;
}
.textbox  input
{
 border: none;
 outline: none;
 background: none;
 color: white;
 font-size: 18px;
 width: 80%;
 float: center;
 margin: 0 10px;
}
.btn
{
 width: 91%;
 background: none;
 border: 2px solid #00b289;
 color: #fff;
 padding: 5px;
 font-size: 18px;
 cursor: pointer;
 margin: auto; 
 border-radius: 30px;
 display: block;
} 
::placeholder 
{
 color: #fff;
}
.header {
  width: 100%;
  height: 110vh;
  position: relative;
  perspective: 100rem;
  overflow: hidden;
}  

@media (max-width: 1000px) {
 

  .footer-content {
    flex-direction: column;
    align-items: center;
    text-align: center;
    width: 50%;
  }

  .name {
    order: 1;
    margin-top: 3rem;
  }
}
 .footer {
  width: 100%;
  height: 10rem;
  background-color: #17181b;
  display: flex;
  justify-content: center;
  align-items: center;
}

.footer-content {
  width: 60%;
  display: flex;
  justify-content: space-between;
}

.name {
  font-family: "Muli", serif;
  font-size: 2rem;
  color: #a7a7a7;
}

.social-list a {
  margin: 0 2rem;
}

.social-list i {
  font-size: 2rem;
  color: #a7a7a7;
}

.scroll-btn {
  position: fixed;
  right: 5rem; 
  width: 4rem;
  height: 4rem;
  background: linear-gradient(135deg,#0066B2FF 0%,#00203fff 100%);
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 2rem;
  color: #fff;
  box-shadow: 0 0.1rem 0.6rem rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
}

@media (max-width: 1500px) {
  
   .footer-content {
    flex-direction: column;
    align-items: center;
    text-align: center;
    width: 50%;
  }
} 
 

@media (max-width: 700px) {
  html {
    font-size: 45%;
  } 

  .footer {
    height: 16rem;
  }
  }

    </style>
  </head>
  <body>
    <nav>
      <div class="logo">Library Management System</div>
      <input type="checkbox" id="click">
      <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
      </label>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="">About Us</a></li>
        <li class="active"><a href="contact_us.php">Contact</a></li>
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </nav>
   <div class="content"> 
   <header class="header">
          <div class="banner">
           <div class="login-box">
    <h1 align="center">Contact Form</h1>
        <form method="post" action=".php">
          <div class="textbox"> 
            <input type=" text" name="name" class="txt" placeholder="Name" required="">
          </div>
          <div class="textbox">
            <input type="text" name="mail" class="txt" placeholder="E-mail address" required="">
          </div>
           
            <textarea name="message" placeholder="Message" required="" rows="6" cols="30" style=" background: transparent;font-size: 18px; border-bottom:  2px solid  #00b289;"></textarea>
          
          <input type="submit" name="send" value="Submit" class="btn" ><br> 
          <input type="reset" name="reset" value="Reset" class="btn" >
        </form>
  </div> 
   </div>
        </header> 
      <footer class="footer">
        <div class="footer-content">
          <p class="name">
            NetLibrarian.com
          </p>
          <div class="social-list">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
         <a href="#" class="scroll-btn" style="text-decoration: none;">
        <i class="fas fa-arrow-up"></i>
      </a>
      </footer>  
    </div>
  </body>
 </html>
 
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
  