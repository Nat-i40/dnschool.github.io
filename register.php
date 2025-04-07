<?php
// Include the database connection file
include('db-config.php');

// Get user input from the registration form
$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // Hash the password

// Default package_id (Free Package) is 1
$package_id = 1;

// SQL to insert user data into the database
$sql = "INSERT INTO users (name, email, password, package_id) VALUES ('$name', '$email', '$password', $package_id)";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "New user registered successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
