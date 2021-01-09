<?php

// Start the session
session_start();

// PHP Includes always from Root
set_include_path(get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT']);

// Require composer Autoload
require __DIR__ . '/vendor/autoload.php';

// Load setted variables inside .env on $_ENV array
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Database Config
if ($_ENV['DB_ON']) {
    $mysqli = mysqli_init();
    if (!$mysqli->real_connect($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE'])) {
        die('Error trying to connect to the database ' . $mysqli->errno . ': ' . $mysqli->error);
    }
    $mysqli->set_charset('utf8');
}

// PHP require functions
require_once('functions/functions.php');
