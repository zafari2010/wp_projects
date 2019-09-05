

<?php

include "connection.php";
// Updating the table row with submited data according to rowid once form is submited

if (isset($_GET['id']))
{

 

    // Gets the data from post

    $id = $_GET['id'];

    $firstname = $_GET['firstname'];

    $email = $_GET['email'];

 

    // Makes query with post data

    $query = "UPDATE mytable set firstname='$firstname', email='$email' WHERE id=$id";

     

    // Executes the query

    // If data inserted then set success message otherwise set error message

    // Here $db comes from "db_connect.php"



}

 

$id = $_GET['id']; // rowid from url

// Prepar the query to get the row data with rowid

$query = "SELECT  * FROM students WHERE id=$id";

$result =mysqli_query($conn,$query);

$data= mysqli_fetch_array($result);


?>

 

<!DOCTYPE html>

<html>

<head>

    <title>Update Data</title>

</head>

<body>

    <div style="width: 500px; margin: 20px auto;">

 

        <!-- showing the message here-->

       
 

        <table width="100%" cellpadding="5" cellspacing="1" border="1">

            <form action="" method="post">

            <input type="hidden" name="id" value="<?php echo $id;?>">

            <tr>

                <td>Name:</td>

                <td><input name="name" type="text" value="<?php echo $data['firstname'];?>"></td>

            </tr>

            <tr>

                <td>Email:</td>

                <td><input name="email" type="text" value="<?php echo $data['email'];?>"></td>

            </tr>

            <tr>

                <td><a href="list.php">Back</a></td>

                <td><input name="submit_data" type="submit" value="Update Data"></td>

            </tr>
            </form>

        </table>

    </div>

</body>

</html>