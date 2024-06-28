<?php
$servername = "localhost";
$username = "root";  // Replace with your actual MySQL username
$password = "";  // Replace with your actual MySQL password
$dbname = "register";              // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$userid = $_POST['userid']
$Lastname $_POST['Lastname']
$Firtname = $_POST['Firstname'];
$email = $_POST['email'];
$age = $_POST['age'];
$phonenumber = $_POST['phonenumber'];
$address = $_POST['address'];
$createdAt = date("Y-m-d H:i:s");

$sql = "INSERT INTO users (userid,Firstname,Lastname,e_mail,age,Phonenumber,address) VALUES ('$userid','$Firtname','$Lastname','$email', '$age','$phonenumber','$address')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>