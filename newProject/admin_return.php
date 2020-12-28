<!DOCTYPE html>
<html>
<head>
	 <title>NetLibrarian.com</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="theme1.css">
<style>
 .btn1
{
 width: 40%;
 background: none;
 border: 2px solid  #00b289;
 border-radius: 30px;
 color: #fff;
 padding: 5px;
 font-size: 18px;
 cursor: pointer;

} 
img{
  border-radius: 50%;
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
  border-bottom: 6px solid  #00b289;
  margin-bottom: 50px;
  padding: 13px 0;
}
.table{
   width:700px; 
   position: absolute;
   top: 30%;
   left:5.4%;
  
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

  <div class="h"> <a href="admin.php">Home</a></div>
  <div class="h"> <a href="admin_books.php">Books</a></div>
  <div class="h"> <a href="admin_request.php">Book Request</a></div>
  <div class="h"><a href="bookinfo.php">Issue Book</a></div>
  <div class="h"><a href="admin_return.php">Return Book</a></div>
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
<div class="container">
  <div class="login-box1">
        <h1 align="center">Details</h1>
        <form method="post" action="">
            <div class="textbox">
                <input id="" name="book_id" type="text" placeholder="Enter Book ID Number" required=""> 
            </div>
            <div class="textbox">
                <input id="" type="text" name="Email"  placeholder="Enter Student Email Address" required="">
            </div><br>
            <input type="submit" name="submit" value="Return"  class="btn1">&nbsp&nbsp
            <input type="reset" name="Reset"  class="btn1">
        </form>
    </div>
    <h1 align="center" style="color: #fff; border-bottom: 6px solid  #00b289; margin-bottom: 20px;  padding: 20px 0; width: 400px; ">Returned Books</h1>
    <div class="table">
      <?php
      $res=mysqli_query($conn,"SELECT registration.Email,book_detail.book_id,title,author,edition,borrow_books.issue_date,return_books.currnt_date FROM registration inner join borrow_books ON registration.Email=borrow_books.Email inner join book_detail ON borrow_books.book_id=book_detail.book_id inner join return_books ON return_books.book_id=borrow_books.book_id AND registration.Email=return_books.Email  WHERE return_books.status='returned' AND borrow_books.approve='yes' ORDER BY book_id ;");
 
 

 echo "<table class='table table-dark table-hover'>";
 echo "<tr style='background-color:#28292d;'>";
 echo "<th>"; echo "Email"; echo "</th>";
 echo "<th>"; echo "Book ID"; echo "</th>"; 
 echo "<th>"; echo "Title"; echo "</th>";
 echo "<th>"; echo "Author"; echo "</th>";
 echo "<th>"; echo "Edition"; echo "</th>";
 /*echo "<th>"; echo "Issue Date"; echo "</th>";
 echo "<th>"; echo "Return Date"; echo "</th>";
 echo "<th>"; echo ""; echo "</th>";*/
 echo " </tr>";

 while ($row=mysqli_fetch_assoc($res))
  {
 echo "<tr>";
 echo "<td>"; echo $row['Email']; echo "</td>";
 echo "<td>"; echo $row['book_id']; echo "</td>";
 echo "<td>"; echo $row['title']; echo "</td>";
 echo "<td>"; echo $row['author']; echo "</td>";
 echo "<td>"; echo $row['edition']; echo "</td>";
 /*echo "<td>"; echo $row['issue_date']; echo "</td>";
 echo "<td>"; echo $row['return_date']; echo "</td>"; 
 echo "<td>"; echo $row['currnt_date']; echo "</td>"; */
 echo " </tr>";
 }

 echo " </table>";
  ?>
    </div>
  </div>
  <?php 
   if(isset($_POST['submit']))
        {
    $res=mysqli_query($conn,"SELECT * FROM  borrow_books WHERE book_id='$_POST[book_id]' AND Email='$_POST[Email]';");
      
            while($row=mysqli_fetch_assoc($res))
           {
            $d= strtotime($row['return_date']);
            $c= strtotime(date("Y-m-d"));
        $diff= $c-$d; 
        if($diff>=0)
        {
          $day= $diff/(60 * 60 * 24); 
          $fine= $day * 5;
        }
      }
          
          $x= date("Y-m-d"); 
            mysqli_query($conn,"INSERT INTO fine VALUES ('$_POST[book_id]', '$_POST[Email]', '$x', '$day', '$fine','not paid') ;");  
            mysqli_query($conn,"UPDATE  `borrow_books` SET   status='return' WHERE Email='$_POST[Email]' AND book_id='$_POST[book_id]';"); 
            mysqli_query($conn,"UPDATE book_detail SET quantity = quantity+1 WHERE book_id='$_POST[book_id]';");
            mysqli_query($conn,"UPDATE return_books SET status='okay' WHERE book_id='$_POST[book_id]' AND Email='$_POST[Email]';");

            $r=mysqli_query($conn,"SELECT quantity FROM book_detail WHERE book_id='$_POST[book_id]';");

            while($row=mysqli_fetch_assoc($r))
            {
             if($row['quantity']!=0)
             {
              mysqli_query($conn,"UPDATE book_detail SET status='Available' WHERE book_id='$_POST[book_id]';");
             }
            } 
        } 

mysqli_close($conn);

?> 
</div>
</body>
</html>