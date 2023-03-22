<?php require("./partials/header.php") ?>

<div class="container mt-5 mx-auto">

    <h1 class="text-3xl font-bold inline text-white">Products</h1>
    <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg
         text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800
         h-12 mb-5 relative bottom-3" href="create.php">Add New</a>
    <div class="overflow-x-auto">
        <table class="w-full text-lg text-left text-gray-500 dark:text-gray-400 table-auto drop-shadow-lg">
            <thead class="text-xl text-gray-700 uppercase bg-cyan-300 dark:text-black">
                <tr>
                    <th scope="col">Product ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Manufacturer</th>
                    <th scope="col">Price</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                <?php


                $statement = "SELECT * FROM `products`";
                $result = mysqli_query($socket, $statement);
                // var_dump($result);
                while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <th scope='row'>
                            <?php echo $row['id'] ?>
                        </th>
                        <td class="text-white">
                            <?php echo $row["productName"] ?>
                        </td>
                        <td class="text-white">
                            <?php echo $row["productManufacturer"] ?>
                        </td>
                        </td>
                        <td class="text-white">
                            $
                            <?php echo $row["price"] ?>
                        </td>
                        <td><a class="text-sky-400" href='edit.php?id=<?php echo $row[id] ?>'>Edit</a></td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>

    </div>


    <hr class="mt-5 mb-5">

    <div class="employee-table-container">
        <h1 class="text-3xl font-bold inline text-white">Employees</h1>
        <table class="w-full text-lg text-left text-gray-500 dark:text-gray-400 table-auto drop-shadow-lg">
            <thead class="text-xl text-gray-700 uppercase bg-cyan-300 dark:text-black">
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
                while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <th scope='row'>
                            <?php echo $row['id'] ?>
                        </th>
                        <td class="text-white">
                            <?php echo $row["firstName"] ?>
                        </td>
                        <td class="text-white">
                            <?php echo $row["lastName"] ?>
                        </td>
                        <td class="text-white">
                            <?php echo $row["role"] ?>
                        </td>
                        <!-- <td><a href="#">Edit</a></td> -->
                    </tr>
                <?php } ?>

            </tbody>
        </table>
        <!-- <a href="#">Add New</a> -->
    </div>

    <hr class="mt-5 mb-5">

    <div class="sold-goods-table-container">
        <h1 class="text-3xl font-bold inline text-white">Sold Goods</h1>
        <table class="w-full text-lg text-left text-gray-500 dark:text-gray-400 table-auto drop-shadow-lg">
            <thead class="text-xl text-gray-700 uppercase bg-cyan-300 dark:text-black">
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
                while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td class="text-white">
                            <?php echo $row["ProductId"] ?>
                        </td>
                        <td class="text-white">
                            <?php echo $row["TransactionId"] ?>
                        </td>
                        </td>
                        <!-- <td><a href="#">Edit</a></td> -->
                    </tr>
                <?php } ?>

            </tbody>
        </table>
        <!-- <a href="#">Add New</a> -->
    </div>

    <hr class="mt-5 mb-5">

    <div class="transactions-table-container">
        <h1 class="text-3xl font-bold inline text-white">Transactions</h1>
        <table class="w-full text-lg text-left text-gray-500 dark:text-gray-400 table-auto drop-shadow-lg">
            <thead class="text-xl text-gray-700 uppercase bg-cyan-300 dark:text-black">
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
                while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td>
                            <?php echo $row["id"] ?>
                        </td>
                        <td class="text-white">
                            <?php echo $row["CreatedAt"] ?>
                        </td>
                        <td class="text-white">
                            <?php echo $row["EmployeeId"] ?>
                        </td>
                        <!-- <td><a href="#">Edit</a></td> -->
                    </tr>
                <?php } ?>

            </tbody>
        </table>
        <!-- <a href="#">Add New</a> -->
        <hr class="mt-5 mb-5">

        <div class="transactions-x-employees-table-container">
            <h1 class="text-3xl font-bold inline text-white">Transactions X Employee</h1>
            <p>See who commisioned each transactions</p>
            <table class="w-full text-lg text-left text-gray-500 dark:text-gray-400 table-auto drop-shadow-lg">
                <thead class="text-xl text-gray-700 uppercase bg-cyan-300 dark:text-black">
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
                    while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td>
                                <?php echo $row["id"] ?>
                            </td>
                            <td class="text-white">
                                <?php echo $row["CreatedAt"] ?>
                            </td>
                            <td class="text-white">
                                <?php echo $row["EmployeeId"] ?>
                            </td>
                            <td class="text-white">
                                <?php echo $row["firstName"] ?>
                            </td>
                            <td class="text-white">
                                <?php echo $row["lastName"] ?>
                            </td>>
                            <td class="text-white">
                                <?php echo $row["role"] ?>
                            </td>
                            <!-- <td><a href="#">Edit</a></td> -->
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>

        <hr class="mt-5 mb-5">

        <div class="soldgoods-x-products-table-container">
            <h1 class="text-3xl font-bold inline text-white">SoldGoods X Products</h1>
            <p>Get the price total of each transaction</p>
            <table class="w-full text-lg text-left text-gray-500 dark:text-gray-400 table-auto drop-shadow-lg">
                <thead class="text-xl text-gray-700 uppercase bg-cyan-300 dark:text-black">
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
                    while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td class="text-white">
                                <?php echo $row["TransactionId"] ?>
                            </td>
                            <td class="text-white">$
                                <?php echo $row["TotalPrice"] ?>
                            </td>
                            <!-- <td><a href="#">Edit</a></td> -->
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>

        <hr class="mt-5 mb-5">

        <div class="stats-1-table-container">
            <h1 class="text-3xl font-bold inline text-white">Statistics 1</h1>
            <p>Get the average price of sold goods</p>
            <table class="w-full text-lg text-left text-gray-500 dark:text-gray-400 table-auto drop-shadow-lg">
                <thead class="text-xl text-gray-700 uppercase bg-cyan-300 dark:text-black">
                    <tr>
                        <th scope="col">Average Price Per Sold Goods</th>
                    </tr>
                </thead>
                <tbody>

                    <?php


                    $statement = "SELECT AVG(price) AS AveragePricePerSoldGoods FROM `SoldGoods` JOIN `products` ON products.id = SoldGoods.ProductId;";
                    $result = mysqli_query($socket, $statement);
                    // var_dump($result);
                    while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td class="text-white">$
                                <?php echo $row["AveragePricePerSoldGoods"] ?>
                            </td>
                            <!-- <td><a href="#">Edit</a></td> -->
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>

        <hr class="mt-5 mb-5">

        <div class="stats-2-table-container">
            <h1 class="text-3xl font-bold inline text-white">Statistics 2</h1>
            <p>The number of employees</p>
            <table class="w-full text-lg text-left text-gray-500 dark:text-gray-400 table-auto drop-shadow-lg">
                <thead class="text-xl text-gray-700 uppercase bg-cyan-300 dark:text-black">
                    <tr>
                        <th scope="col">The Number of Employees</th>
                    </tr>
                </thead>
                <tbody>

                    <?php


                    $statement = "SELECT COUNT(id) AS NumberOfEmployees FROM `Employees`;";
                    $result = mysqli_query($socket, $statement);
                    // var_dump($result);
                    while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td class="text-white">
                                <?php echo $row["NumberOfEmployees"] ?>
                            </td>
                            <!-- <td><a href="#">Edit</a></td> -->
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    </body>

    </html>