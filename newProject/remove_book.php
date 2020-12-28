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
<!DOCTYPE HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="theme1.css">
	<style>
        .btn1
          {
            width: 10%;
            background: none;
            border: 2px solid #00b289;
            color: #fff;
            padding-left: 10px;
            padding-right: 10px;
            font-size:18px;
            cursor: pointer;
          } 
          .form-btn{
             position: absolute;
              left: 70%;
          }
          h1,h2{
            font-family: Arial, Helvetica, sans-serif;
          }
    </style>
</head>
<body>
  <div class="container">
    <div class="form-btn"> 
    <form action="" method="post">
      <button class="btn1" style="margin-top: 20px;   width: 150px;" name="back"><a href="admin_books.php" style="color: #fff; text-decoration: none;">Back</a></button>
    </form>
    </div>
    <div class="login-box">
		<h1 align="center">Book Details</h1>
        <h2 style="color:#b1adad;">Delete a book</h2>
	    <form method="post" action="">
             <div class="textbox">
                <input id="" name="book_id" type="text" placeholder="Enter book ID" required=""> 
            </div> 
            <input type="submit" name="submit"  class=" btn"><br><br>
            <input type="reset" name="Reset"   class=" btn"> 
        </form>
    </div>
  </div>
<?php

  if(isset($_POST['back']))
        {
          ?>
            <script type="text/javascript">
              window.location="admin_books.php"
            </script>
          <?php
        }
if(isset($_POST['submit']))

 {  
$book_id=$_POST["book_id"];
 
$query = mysqli_query($conn,"DELETE FROM book_detail WHERE book_id='$book_id'");

if($conn->query($query))
{ ?>
	 
	<script type="text/javascript"> 
	 alert("Book Details are deleted");
	</script>
<?php
}
else
{
	?>
	 <script type="text/javascript"> 
	 alert("Error");
	</script>
	<?php
}
 
mysqli_close($conn);
}  
?>
 
 
</body>
</html>