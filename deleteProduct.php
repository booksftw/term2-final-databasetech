<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
<?php 
    $socket = new mysqli('localhost', 'nicho', 'password', 'grocerystore');

    // Check connection
    if ($socket->connect_error) {
        die("Connection failed: " . $socket->connect_error);
    }
    
    echo "Connected successfully";

    //Extract id to delete
    $numID = $_GET["id"];

    // Create MySQL Statement
    $sql="DELETE FROM `products` WHERE id = $numID";        
    $result=mysqli_query($socket, $sql);


    if($result){

        //Redirect to index
        header("Location: http://localhost:8888/databasetech/index.php");
    }
    
    else {

        die(mysqli_error($con));

    }
?>
</body>
</html>