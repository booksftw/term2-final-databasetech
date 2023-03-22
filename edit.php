<?php
require("./partials/header.php");
//Get ID var
$numID = $_GET["id"];
?>

<h1 class="text-3xl font-bold inline ml-24 mb-24 text-white block">Edit Page</h1>
<div class="flex justify-center mt-24 gap-4">
    <form action="updateProduct.php" method="POST">
        <table>
            <th scope="col"></th>
            <tr></tr>
            <?php
        //Select specific studednt given an ID (from URL Path)
        $sql = "SELECT * FROM `products` WHERE id = $numID";
        $result = mysqli_query($socket, $sql);
        
        //While to print rows
        while ($row = $result->fetch_assoc()) {
            // echo "
            ?>
            <tr>
                <td name="id">
                    <input type="hidden" name="id" value="<?php echo $row[id] ?>">
                    <?php echo $row[id] ?>
                </td>
                <td class="mr-5">
                    <input type='text' name="productName" placeholder=<?php echo $row[productName] ?> value=<?php echo $row[productName] ?> 
                    style='height: 35px; border-radius: 5px'
                    class="inline p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50
                    sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                    dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </td>
                <td>
                    <input type='text' name="productManufacturer" placeholder=<?php echo $row[productManufacturer] ?>
                    value=<?php echo $row[productManufacturer] ?> style='height: 35px; border-radius: 5px' class="inline p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50
                    sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                    dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </td>
                <td>
                    <input type='number' name="price" placeholder=<?php echo $row[price] ?> value=<?php echo $row[price] ?>
                    style='height: 35px; border-radius: 5px'
                    class="inline p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50
                    sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                    dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </td>
                <td>
                    <a href='./deleteProduct.php?id=<?php echo $row[id] ?>' class='btn btn-danger mt-2 text-white text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700'
                    style='margin-top: 0!important'>
                    Delete
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>
    
    <span class="flex justify-center">
        <button type="submit" class="btn btn-primary mt-2 text-white text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" >
            Save
        </button>
        
        <a href="./index.php" class="btn btn-secondary mt-2 text-white text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
            Cancel
        </a>
    </span>
    
</form>
</div>
</body>

</html>