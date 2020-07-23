<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "commercesystem";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if(!$conn) {
    die("Did not connect: ".mysqli_connect_error());
}

