<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Grocery Store</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Hello World!</h1>
        <?php 
            $socket = new mysqli('localhost', 'nicho', 'password', 'grocerystore');

            // Check connection
            if ($socket->connect_error) {
                die("Connection failed: " . $socket->connect_error);
            }
            
            echo "Connected successfully";

            
        ?>
        <div class="products-table-container">
            <h1>Products</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Product ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Manufacturer</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
    
                <?php
    
    
                $statement = "SELECT * FROM `products`";
                $result = mysqli_query($socket, $statement);
                // var_dump($result);
                while($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <th scope='row'><?php echo $row['id']?></th>
                                <td><?php echo $row["productName"] ?></td>
                                <td><?php echo $row["productManufacturer"] ?></td></td>
                                <td><?php echo $row["price"] ?></td>
                                <td><a href='edit.php?id=<?php echo $row[id] ?>'>Edit</a></td>
                            </tr>
                <?php   } ?>
                
                </tbody>
            </table>
            <a href="create.php">Add New</a>
        </div>

        <div class="employee-table-container">
            <h1>Employees</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Employee ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Role</th>
                    </tr>
                </thead>
                <tbody>
    
                <?php
    
    
                $statement = "SELECT * FROM `Employees`";
                $result = mysqli_query($socket, $statement);
                // var_dump($result);
                while($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <th scope='row'><?php echo $row['id']?></th>
                                <td><?php echo $row["firstName"] ?></td>
                                <td><?php echo $row["lastName"] ?></td></td>
                                <td><?php echo $row["role"] ?></td>
                                <!-- <td><a href="#">Edit</a></td> -->
                            </tr>
                <?php   } ?>
                
                </tbody>
            </table>
            <!-- <a href="#">Add New</a> -->
        </div>

        <div class="sold-goods-table-container">
            <h1>Sold Goods</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Product ID</th>
                        <th scope="col">Transaction Id</th>
                    </tr>
                </thead>
                <tbody>
    
                <?php
    
    
                $statement = "SELECT * FROM `SoldGoods`";
                $result = mysqli_query($socket, $statement);
                // var_dump($result);
                while($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row["ProductId"] ?></td>
                                <td><?php echo $row["TransactionId"] ?></td></td>
                                <!-- <td><a href="#">Edit</a></td> -->
                            </tr>
                <?php   } ?>
                
                </tbody>
            </table>
            <!-- <a href="#">Add New</a> -->
        </div>


        <div class="transactions-table-container">
            <h1>Transactions</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Employee ID</th>
                    </tr>
                </thead>
                <tbody>
    
                <?php
    
    
                $statement = "SELECT * FROM `Transactions`";
                $result = mysqli_query($socket, $statement);
                // var_dump($result);
                while($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row["id"] ?></td>
                                <td><?php echo $row["CreatedAt"] ?></td></td>
                                <td><?php echo $row["EmployeeId"] ?></td></td>
                                <!-- <td><a href="#">Edit</a></td> -->
                            </tr>
                <?php   } ?>
                
                </tbody>
            </table>
            <!-- <a href="#">Add New</a> -->

        <div class="transactions-x-employees-table-container">
            <h1>Transactions X Employee</h1>
            <p>See who commisioned each transactions</p>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Employee ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Role</th>
                    </tr>
                </thead>
                <tbody>
    
                <?php
    
    
                $statement = "SELECT * FROM `Transactions` JOIN Employees ON Transactions.EmployeeId = Employees.id;";
                $result = mysqli_query($socket, $statement);
                // var_dump($result);
                while($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row["id"] ?></td>
                                <td><?php echo $row["CreatedAt"] ?></td></td>
                                <td><?php echo $row["EmployeeId"] ?></td></td>
                                <td><?php echo $row["firstName"] ?></td></td>
                                <td><?php echo $row["lastName"] ?></td></td>
                                <td><?php echo $row["role"] ?></td></td>
                                <!-- <td><a href="#">Edit</a></td> -->
                            </tr>
                <?php   } ?>
                
                </tbody>
            </table>
        </div>

        <div class="soldgoods-x-products-table-container">
            <h1>SoldGoods X Products</h1>
            <p>Get the price total of each transaction</p>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Total Price</th>
                    </tr>
                </thead>
                <tbody>
    
                <?php
    
    
                $statement = "SELECT TransactionId, SUM(price) AS TotalPrice from SoldGoods JOIN products ON SoldGoods.ProductId = products.id GROUP BY TransactionId;";
                $result = mysqli_query($socket, $statement);
                // var_dump($result);
                while($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row["TransactionId"] ?></td>
                                <td>$<?php echo $row["TotalPrice"] ?></td></td>
                                <!-- <td><a href="#">Edit</a></td> -->
                            </tr>
                <?php   } ?>
                
                </tbody>
            </table>
        </div>

        <div class="stats-1-table-container">
            <h1>Statistics 1</h1>
            <p>Get the average price of sold goods</p>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">AveragePricePerSoldGoods</th>
                    </tr>
                </thead>
                <tbody>
    
                <?php
    
    
                $statement = "SELECT AVG(price) AS AveragePricePerSoldGoods FROM `SoldGoods` JOIN `products` ON products.id = SoldGoods.ProductId;";
                $result = mysqli_query($socket, $statement);
                // var_dump($result);
                while($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td>$<?php echo $row["AveragePricePerSoldGoods"] ?></td>
                                <!-- <td><a href="#">Edit</a></td> -->
                            </tr>
                <?php   } ?>
                
                </tbody>
            </table>
        </div>

        <div class="stats-2-table-container">
            <h1>Statistics 2</h1>
            <p>The number of employees</p>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">The Number of Employees</th>
                    </tr>
                </thead>
                <tbody>
    
                <?php
    
    
                $statement = "SELECT COUNT(id) AS NumberOfEmployees FROM `Employees`;";
                $result = mysqli_query($socket, $statement);
                // var_dump($result);
                while($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row["NumberOfEmployees"] ?></td>
                                <!-- <td><a href="#">Edit</a></td> -->
                            </tr>
                <?php   } ?>
                
                </tbody>
            </table>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>