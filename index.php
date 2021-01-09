<?php
require_once('app.php');

# Page basic config #
$pageTitle = '';
$pageDescription = '';
$pageKeyWords = array('HTML', 'CSS', 'JavaScript');
?>
<!doctype html>
<html lang="<?= $_ENV['LANG'] ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="
    <?php foreach ($pageKeyWords as $pageKeyword) { ?>
        <?= $pageKeyword ?>,
    <?php } ?>">

    <!-- HeadScripts -->
    <?php include_once('includes/headScripts.php') ?>

    <title><?= $pageTitle ?></title>
    <description><?= $pageDescription ?></description>
</head>

<body>
    <h1>Hello, world!</h1>
    <?php include_once('includes/footerScripts.php') ?>
</body>

</html>
