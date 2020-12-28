<?php
session_start();

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>NetLibrarian.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" /> 
   <script src="https://kit.fontawesome.com/a076d05399.js"></script> 
  <link rel="stylesheet" type="text/css" href="style.css">
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
  height: 80px;
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
  top: 50%;
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

    </style>
</head>
<body style="height: 400px"> 
    <?php
    if(isset($_SESSION['login_user']))
       {
        ?>
         <nav>
      <div class="logo">Library Management System</div>
      <input type="checkbox" id="click">
      <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
      </label> 
            <ul>
              <li class="active"><a href="admin.php">Home</a></li>
              <li><a href="admin_books.php">Book Library</a></li>
              <li><a href="admin_profile.php">Profile</a></li>
              <li><a href="student_details.php">Students Details</a></li> 
              <!--<li><a href="admin_search.php"><span class="glyphicon glyphicon-search"></span> Search</a></li>-->
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
          </div>
        </nav>
      <div class="content"> 
   <header class="header">
          <div class="img-wrapper">
            <img src="background.jpg" />
          </div>
          <div class="banner">
            <h1>NetLibrarian</h1>
            <p>Welcome To Library</p> 
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
    <?php
       }
       else
       {
        ?>
        
      <nav>
      <div class="logo">Library Management System</div>
      <input type="checkbox" id="click">
      <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
      </label>
      <ul>
        <li class="active"><a href="#">Home</a></li>
              <li><a href="">About Us</a></li>
              <li><a href="contact_us.php">Contact</a></li>
              <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </nav>
   <div class="content"> 
   <header class="header">
          <div class="img-wrapper">
            <img src="background.jpg" />
          </div>
          <div class="banner">
            <h1>NetLibrarian</h1>
            <p>Welcome To Library</p> 
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
  <?php
       }
    ?>
</body>
 
</html>