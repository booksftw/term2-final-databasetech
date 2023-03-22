<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation Submission</title>
</head>
<body>
    <?php 
    $socket = new mysqli('localhost', 'nicho', 'password', 'grocerystore');

    // Check connection
    if ($socket->connect_error) {
        die("Connection failed: " . $socket->connect_error);
    }
    
    echo "Connected successfully";


    $name = $_POST['name'];
    $manufacturer = $_POST['manufacturer'];
    $price = $_POST['price'];

    // Create MySQL Statement
    $sql="insert into `products`(productName, productManufacturer, price) values ('$name', '$manufacturer', '$price')";        
    $result=mysqli_query($socket, $sql);


    if($result){

        // echo "New Student Created";

        //Redirect to index
        header("Location: http://localhost:8888/databasetech/index.php");
    }
    
    else {

        die(mysqli_error($con));

    }
?>
    
</body>
</html>