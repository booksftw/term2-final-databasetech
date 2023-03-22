<?php require("./partials/header.php") ?>

<h1 class="text-3xl font-bold inline ml-24 mb-24 text-white">Add New Product Form</h1>
<div class="ml-24 mt-24">
    <form method="POST" action="creationSubmission.php">
        <div class="inline-block mr-5">
            <label for="name" class="inline mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input type="text" name="name" class="inline p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50
            sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="inline-block mr-5">
            <label for="manufacturer" class="inline mb-2 text-sm font-medium text-gray-900 dark:text-white">Manufacturer</label>
            <input type="text" name="manufacturer" class="inline p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50
            sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="inline-block mr-5">
            <label for="price" class="inline mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
            <input type="number" name="price" class="inline p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50
            sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <button type="submit" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100
         focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white
          dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Submit</button>
    </form>
</div>
    
</body>

</html>