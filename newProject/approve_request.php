<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="theme.css">
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
<div class="container">
	<div class="login-box">
		<h1 align="center">Approve Request</h1>
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
            <input type="text" name="issue" placeholder="Issue Date yyyy-mm-dd" required="" >
        </div>
        <div class="textbox">
            <input type="text" name="return" placeholder="Return Date yyyy-mm-dd" required="">
        </div>
        <br></br>
        <input type="submit" value="Approve" name="submit" class="btn"><br><br>
        <input type="reset" value="Reset" class="btn">
		</form>
	</div>
 <?php
	if(isset($_POST['submit']))
  {
    mysqli_query($conn,"UPDATE  `borrow_books` SET  `approve` =  '$_POST[approve]', `issue_date` =  '$_POST[issue]', `return_date` =  '$_POST[return]' WHERE Email='$_POST[Email]' AND book_id='$_POST[book_id]';");

	}
 
mysqli_close($conn);
?>
</div>
</body>
</html>

