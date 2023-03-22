<?php
    require("./partials/header.php");

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