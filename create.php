<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
<?php 
            $socket = new mysqli('localhost', 'nicho', 'password', 'grocerystore');

            // Check connection
            if ($socket->connect_error) {
                die("Connection failed: " . $socket->connect_error);
            }
            
            echo "Connected successfully";
        ?>
    <h1>Add new product</h1>
    <form method="POST" action="creationSubmission.php">
        <label for="name">Name</label>
        <input type="text" name="name">
        <label for="manufacturer">Manufacturer</label>
        <input type="text" name="manufacturer">
        <label for="price">Price</label>
        <input type="number" name="price">
        <button type="submit">Submit</button>
    </form>

</body>
</html>