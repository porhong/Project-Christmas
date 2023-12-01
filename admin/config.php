<?php

$servername = "45.77.250.238:3307";

$username = "root"; 

$password = "Cambodia168"; 

$dbname = "think"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

?> 