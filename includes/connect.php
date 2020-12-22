<?php

$host = "localhost";
$user = "dagny";
$password = "123456";
$dbname = "good";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}