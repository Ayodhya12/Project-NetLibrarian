
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
$search = $_REQUEST["search"];

$query = "SELECT isbn,title,author,edition,publication FROM book_detail WHERE title='$search'";

 
if(($conn->query($query))->num_rows>0)
	 {
	 	echo"<table>
<tr>
<th> ISBN </th>
<th> Title </th>
<th> Author </th>
<th> Edition </th>
<th> Publication </th>
</tr>";

while($row = mysqli_fetch_assoc($conn->query($query)))
{
echo"<tr>
<td>".$row["isbn"]."</td>
<td>".$row["title"]."</td>
<td>".$row["author"]."</td>
<td>".$row["edition"]."</td>
<td>".$row["publication"]."</td>
</tr>";
echo"</table>";

	 }
}

else
{
	echo "Error..No books found in the library by the name $search";
}
 
mysqli_close($conn);

?> 