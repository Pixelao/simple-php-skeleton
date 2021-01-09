<?php
require_once('../app.php');

$t = $_ENV['MODE'];
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">

    <title>Hello, world!</title>
</head>

<body>
    <h1>Hello, world! <?= $t ?></h1>

    <!-- jQuery, Popper.js, and Bootstrap JS -->
    <script src="dist/js/jquery-3.5.1.min.js"></script>
    <script src="dist/js/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/axios.min.js"></script>
</body>

</html>