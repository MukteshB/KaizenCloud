<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "automotive_distributor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$purpose = $_POST['purpose'];
$brand = $_POST['brand'];
$model = $_POST['model'];
$city = $_POST['city'];
$branch = $_POST['branch'];
$mobile = $_POST['mobile'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO visitors (name, purpose, brand, model, city, branch
