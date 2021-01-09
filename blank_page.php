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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="<?= generatePageKeywords($pageKeyWords) ?>">
    <meta name="description" content="<?= $pageDescription ?>">
    <meta name="author" content="<?= $_ENV['AUTHOR_NAME'] ?>">

    <!-- HeadScripts -->
    <?php include_once('includes/headScripts.php') ?>

    <title><?= $pageTitle ?></title>
</head>

<body>
    <div class="container w-100 h-100">
        <header>
            <h1 class="text-center">Hello, this is Simple PHP Skeleton!</h1>
        </header>
        <main>
            <p class="text-center">Copy and paste this page as template to start.</h1>
        </main>
        <footer>
            <p class="text-center">Simple PHP Skeleton</p>
        </footer>
    </div>

    <?php include_once('includes/footerScripts.php') ?>
</body>

</html>
