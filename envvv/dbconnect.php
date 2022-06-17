<?php
require realpath("vendor/autoload.php");
$dotenv = Dotenv\dotenv::createImmutable(__DIR__);
$dotenv->load();
echo $_ENV['HOST'];
$connectDb= new mysqli($_ENV['HOST'],$_ENV['USERNAME'],$_ENV['PASSWORD'],$_ENV['DBNAME']);

if ($connectDb->connect_error) {
    die("Unable to connect".$connectDb->connect_error);
} else {
    echo("Connected");
};
?>