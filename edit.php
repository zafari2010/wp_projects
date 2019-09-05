<body>
<?php
include "connection.php";

if (isset($_GET['id']))
{

$id = $_GET['id'];
$result = mysql_query("SELECT * FROM mytable WHERE id='$id' ");
$row = mysql_fetch_array($result);

}
    
    if( isset($_POST['newName']) )
	{
		$newName = $_POST['newfirstname'];
		$id  	 = $_POST['id'];
		$sql     = "UPDATE test SET firstname='$newName' WHERE id='$id'";
		$res 	 = mysql_query($sql) ;
                                   
	}

?>

<form method='get' action=''>

ID<br>

<input type="text" name="id"><br>
    
First Name<br>

<input type="text" name="newfirstname" value="<?php echo  $row[1];?>"><br>

Email<br>

<input type="text" name="newemail"><br>

<input type="Submit" name="submit"> 
</form>
    

    </body>