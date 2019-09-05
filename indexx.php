<?php
$session_start
    $_id=$_GET['id'];
	$_firstname= $_GET['firstname'];
	$_email= $_GET['email'];
	
	
	
include "connection.php";

$sql = "INSERT INTO mytable (id,firstname,email)
VALUES ('$_id','$_firstname', '$_email')";

$result1 =mysqli_query($conn,$sql);

 $query =  "SELECT id, firstname,  email FROM mytable";

$result =mysqli_query($conn,$query);

    echo "<table><tr><th>ID</th><th>FrstName</th><th>Email</th><th>Edit</th></tr>";
while($row= mysqli_fetch_array($result))
{
	
	echo "<tr>";
echo '<td>' . $row['id'] . '</td>';
echo '<td>' . $row['firstname'] . '</td>';
echo '<td>' . $row['email'] . '</td>';
echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>';
echo "</tr>";
	
	
}
echo "</table>";


?>  