<?php
include 'db.php';

$fullname = $_POST['fullname'] ?? "";
$email = $_POST['email'] ?? "";
$phone = $_POST['phone'] ?? "";
$location = $_POST['location'] ?? "";
$message = $_POST['message'] ?? "";

$sql = "INSERT INTO contacts 
(fullname,email,phone,location,message)
VALUES 
('$fullname','$email','$phone','$location','$message')";

$conn->query($sql);

echo "Message sent!";
?>