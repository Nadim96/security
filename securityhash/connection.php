<?php
session_start();

//$conn = mysqli_connect('localhost','username','password','database');
$conn = mysqli_connect('localhost','root','','security');

if (!$conn) {
    echo "Error: Geen connectie met de database." . PHP_EOL . "<br>";
    echo "Error nummer " . mysqli_connect_errno() . PHP_EOL . "<br>";
    echo "Error informatie: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>