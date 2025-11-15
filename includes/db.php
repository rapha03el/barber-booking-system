<?php
// database connection settings
$host = 'localhost';
$username = "root";
$password = "";
$database = "barber_booking";

// creating the connection 
$conn = new mysqli($host, $username, $password, $database); 

// checking the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully.";

?>
