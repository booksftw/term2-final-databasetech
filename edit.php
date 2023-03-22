<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
<?php 
    $socket = new mysqli('localhost', 'nicho', 'password', 'grocerystore');

    // Check connection
    if ($socket->connect_error) {
        die("Connection failed: " . $socket->connect_error);
    }

    //Select all Students
    $sqlStudents ="SELECT * FROM `products`";
    $result=mysqli_query($socket, $sqlStudents);

    //Get ID var
    $numID = $_GET["id"];

    
    echo "Connected successfully";
?>

    <form action="updateProduct.php" method="POST">
        <table>
            <th scope="col"></th>
            <tr></tr>
            <?php
                    //Select specific studednt given an ID (from URL Path)
                    $sql ="SELECT * FROM `products` WHERE id = $numID";
                    $result=mysqli_query($socket, $sql);

                    //While to print rows
                    while($row = $result->fetch_assoc()){ 
                        // echo "
                        ?>
                            <tr>
                                <td name="id">
                                    <input type="hidden" name="id" value="<?php echo $row[id] ?>">
                                    <?php echo $row[id] ?>
                                </td>    
                                <td>
                                    <input type='text' name="productName" placeholder=<?php echo $row[productName] ?> value=<?php echo $row[productName] ?> style='height: 35px; border-radius: 5px'>
                                </td>    
                                <td>
                                    <input type='text' name="productManufacturer" placeholder=<?php echo $row[productManufacturer] ?> value=<?php echo $row[productManufacturer] ?> style='height: 35px; border-radius: 5px'>
                                </td>    
                                <td>
                                    <input type='number' name="price" placeholder=<?php echo $row[price] ?> value=<?php echo $row[price] ?> style='height: 35px; border-radius: 5px'>
                                </td>  
                                <td>
                                    <a href='./deleteProduct.php?id=<?php echo $row[id] ?>' class='btn btn-danger mt-2' style='margin-top: 0!important'>
                                        Delete
                                    </a>
                                </td>
                            </tr>    
                   <?php } ?>
        </table>

        <span style ="display: flex; justify-content: space-between;">
                <button type="submit" class="btn btn-primary mt-2" style="width: 20%">
                    Save
                </button>

                <a href="./index.php" class="btn btn-secondary mt-2" style="width: 20%">
                    Cancel
                </a>
            </span>

    </form>
</body>
</html>