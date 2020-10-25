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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="theme.css">
</head>
<body style="height: 400px"> 
    <?php
    if(isset($_SESSION['login_user']))
       {
        ?>
        <nav class=" navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
             <a class="navbar-brand" href="#">Library Management System</a>
            </div>
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="book.php">Book Library</a></li>
              <li><a href="profile.php">Profile</a></li>
              <li><a href="#">Account Details</a></li>  
              <li><a href="contact_form.php">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="search.php"><span class="glyphicon glyphicon-search"></span> Search</a></li>
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
          </div>
        </nav>
         <section style="height: 400px"> 
 <div class="container" style="margin-top:50px">
  <h3>Fixed Navbar</h3>
  <div class="row">
    <div class="col-md-4">
      <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
      <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>    
    </div>
    <div class="col-md-4"> 
      <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
      <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
    </div>
    <div class="col-md-4"> 
      <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
      <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p> 
    </div>
  </div>
</div>

<h1>Scroll this page to see the effect</h1>
</section>
 <?php
  include 'footer.php';
 ?>
    <?php
       }
       else
       {
        ?>
        <nav class=" navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
             <a class="navbar-brand" href="#">Library Management System</a>
            </div>
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="">pg</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="admin_signup.html"><span class="glyphicon glyphicon-user"></span> Admin-Sign Up</a></li> 
              <li><a href="user_signup.html"><span class="glyphicon glyphicon-user"></span> User-Sign Up</a></li>
              <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
          </div>
        </nav>
      <section style="height: 400px"> 
       
         <center><h1 style='color:#fff; font-size: 90px;  margin-top:300px;'>WELCOME TO LIBRARY</h1></center>
       
      </section>
 <?php
  include 'footer.php';
 ?>
  <?php
       }
    ?>
</body>
</html>