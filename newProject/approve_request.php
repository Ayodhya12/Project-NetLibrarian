 <title>NetLibrarian.com</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,minimum-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="theme1.css">
<style>
        .btn1
          {
             width: 10%;
            background: none;
            border: 2px solid  #00b289;
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
          .login-box h2
         {
  
            font-size: 36px;
            border-bottom: 6px solid  #00b289;
            margin-bottom: 30px;
            padding: 8px 0;
            margin-top: 0px;
          }
          @media screen and (max-width: 1000px){
            .container{width: 100%;}
          .btn1{width: 10%;}
          .login-box{width: 40%}
          }
          @media screen and (max-width: 900px){
            .container{width: 100%;}
          .btn1{width: 70%;}
          .login-box{width: 50%}
          }
           @media screen and (max-width: 650px){
            .container{width: 100%;}
          .btn1{width: 10%;}
          .login-box{width: 60%}
          } 
           @media screen and (max-width: 500px){
            .container{width: 100%;}
          .btn1{width: 10%;}
          .login-box{width: 70%}
          }
           @media screen and (max-width: 400px){
            .container{width: 100%;}
          .btn1{width: 10%;}
          .login-box{width: 90%}
          }
            @media screen and (max-width: 300px){
            .container{width: 100%;}
          .btn1{width: 10%;}
          .login-box{width: 100%}
          }
           
    </style>
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
else{
}
?>
</head>
<body>
  <div class="container">
    <div class="form-btn"> 
    <form action="" method="post">
      <button class="btn1" style="margin-top: 20px;   width: 150px;" name="back"><a href="admin_books.php" style="color: #fff; text-decoration: none;">Back</a></button>
    </form>
  </div>
	<div class="login-box" style="margin-top: 12px;">
		<h2 align="center">Approve Request</h2>
		<form method="post" action="" >
	    <div class="textbox">
			<input type="text" name="Email" placeholder="Enter Student Email" required="">
		</div>
		<div class="textbox">
			<input type="text" name="book_id" placeholder="Enter Book ID" required="">
		</div>	
	    <div class="textbox">
            <input  type="text" name="approve" placeholder="Yes or No" required="">
        </div>
        <div class="textbox">
          <label>Issue Date:</label>
            <input type="date" name="issue" placeholder="Issue Date yyyy-mm-dd" required="">
        </div>
        <div class="textbox">
          <label>Return Date:</label>
            <input type="date" name="return" placeholder="Return Date yyyy-mm-dd" required="">
        </div>
        <input type="submit" value="Approve" name="submit" class="btn"><br>
        <input type="reset" value="Reset" class="btn">
		</form>
	</div>
 <?php

  if(isset($_POST['back']))
        {
          ?>
            <script type="text/javascript">
              window.location="admin_request.php"
            </script>
          <?php
        }

	if(isset($_POST['submit']))
  {
    mysqli_query($conn,"UPDATE  `borrow_books` SET  `approve` =  '$_POST[approve]', `issue_date` =  '$_POST[issue]', `return_date` =  '$_POST[return]' WHERE Email='$_POST[Email]' AND book_id='$_POST[book_id]';");
   echo "<h2 class='alert alert-success' style='width:450px; '>Record Added Successfully</h2>";
   mysqli_query($conn,"UPDATE book_detail SET quantity = quantity-1 WHERE book_id='$_POST[book_id]';");

    $r=mysqli_query($conn,"SELECT quantity FROM book_detail WHERE book_id='$_POST[book_id]';");

    while($row=mysqli_fetch_assoc($r))
    {
      if($row['quantity']==0)
      {
        mysqli_query($conn,"UPDATE book_detail SET status='Not-Available' WHERE book_id='$_POST[book_id]';");
      }
    }

	}
 
mysqli_close($conn);
?>
</div>
</body>
</html>

