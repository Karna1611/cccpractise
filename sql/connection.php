<?php

$severname = "localhost";
$username = "root";
$password = "";
$database = "ccc_practice";
$conn = new mysqli($severname,$username,$password,$database);
if($conn->connect_error)
{
    die("Connection Failed" . $conn->connect_error);
}

?>