<?php
    require("./partials/header.php");

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