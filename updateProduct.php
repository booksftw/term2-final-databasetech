<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<?php 
    $socket = new mysqli('localhost', 'nicho', 'password', 'grocerystore');

    // Check connection
    if ($socket->connect_error) {
        die("Connection failed: " . $socket->connect_error);
    }

    //Select all Products
    $sql ="SELECT * FROM `products`";
    $result=mysqli_query($socket, $sql);

    //Get ID var
    // $numID = $_GET["id"];
    
    echo "Connected successfully";

    // $FirstName=$_POST['FirstName'];
    var_dump($_POST);
    $id = $_POST['id'];
    $name = $_POST['productName'];
    $manufacturer = $_POST['productManufacturer'];
    $price = $_POST['price'];


    $sql="UPDATE `products` SET productName = '$name', productManufacturer = '$manufacturer', price = '$price' WHERE id = $id ";        
        
    $result=mysqli_query($socket, $sql);

    if($result){

        // echo "New Student Created";

        //Redirect to index
        header("Location: http://localhost:8888/databasetech/index.php");
    }
    
    else {
        var_dump("FAILURE");
        die(mysqli_error($con));

    }
?> 
</body>
</html>