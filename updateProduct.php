<?php
    require("./partials/header.php");

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