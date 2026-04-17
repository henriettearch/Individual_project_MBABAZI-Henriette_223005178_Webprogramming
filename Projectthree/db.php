<?php
$conn = new mysqli("localhost", "root", "", "hotels");

if ($conn->connect_error) {
    die("Connection failed");
}
?>