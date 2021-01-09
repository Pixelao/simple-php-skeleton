<?php
require_once('app.php');

# Page basic config #
$pageTitle = 'Simple PHP Skeleton';
$pageDescription = 'Simple PHP skeleton to start your project.';
$pageKeyWords = array('PHP', 'Simple PHP Skeleton', 'Bootstrap 5', 'Skeleton');
?>
<!doctype html>
<html lang="<?= $_ENV['LANG'] ?>" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="<?= generatePageKeywords($pageKeyWords) ?>">
    <meta name="description" content="<?= $pageDescription ?>">
    <meta name="author" content="<?= $_ENV['AUTHOR_NAME'] ?>">

    <!-- HeadScripts -->
    <?php include_once('includes/headScripts.php') ?>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        /* Custom default button */
        .btn-secondary,
        .btn-secondary:hover,
        .btn-secondary:focus {
            color: #333;
            text-shadow: none;
            /* Prevent inheritance from `body` */
        }

        body {
            text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
            box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
        }

        .cover-container {
            max-width: 42em;
        }

        .nav-masthead .nav-link {
            padding: .25rem 0;
            font-weight: 700;
            color: rgba(255, 255, 255, .5);
            background-color: transparent;
            border-bottom: .25rem solid transparent;
        }

        .nav-masthead .nav-link:hover,
        .nav-masthead .nav-link:focus {
            border-bottom-color: rgba(255, 255, 255, .25);
        }

        .nav-masthead .nav-link+.nav-link {
            margin-left: 1rem;
        }

        .nav-masthead .active {
            color: #fff;
            border-bottom-color: #fff;
        }
    </style>
    <title><?= $pageTitle ?></title>
</head>

<body class="d-flex h-100 text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0">Simple PHP Skeleton</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link active" aria-current="page" href="https://github.com/Pixelao/simple-php-skeleton">GitHub</a>
                    <a class="nav-link" href="https://github.com/Pixelao/">Author</a>
                    <a class="nav-link" href="mailto:contacto@adrianmr.com">Contact</a>
                </nav>
            </div>
        </header>

        <main class="px-3">
            <h1>Simple PHP Skeleton</h1>
            <p class="lead">A set of files that will allow you to start your PHP project in an orderly, simple, fast way.</p>
            <p class="lead">Copy and paste blank_page.php as starter template.</p>
            <p class="lead">
                <a href="https://github.com/Pixelao/simple-php-skeleton" class="btn btn-lg btn-secondary fw-bold border-white bg-white">More info</a>
            </p>
        </main>

        <footer class="mt-auto text-white-50">
            <p><a href="https://github.com/Pixelao/simple-php-skeleton" class="text-white">Simple PHP Skeleton</a>, <a href="https://github.com/Pixelao/" class="text-white">@Pixelao</a>.</p>
        </footer>
    </div>
    <?php include_once('includes/footerScripts.php') ?>
</body>

</html>
