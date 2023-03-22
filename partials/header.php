<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->
        <script src="https://cdn.tailwindcss.com"></script>
    <title>Grocery Store</title>
</head>

<body class="bg-slate-900 pb-20">
    <?php
    $socket = new mysqli('localhost', 'nicho', 'password', 'grocerystore');

    // Check connection
    if ($socket->connect_error) {
        die("Connection failed: " . $socket->connect_error);
    }

    ?>

<div class=" bg-indigo-500 pt-20 pb-5 mb-10">
    <h1 class="text-3xl font-bold underline ml-24">
        <a href="http://localhost:8888/databasetech/index.php"> Grocery Store App</a>
    </h1>
</div>