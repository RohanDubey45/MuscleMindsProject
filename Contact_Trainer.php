<?php
// Assuming your MySQL database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "muscleminds";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Escape user inputs for security
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$phone = $conn->real_escape_string($_POST['phone']); // New phone field
$message = $conn->real_escape_string($_POST['message']);

// Attempt insert query execution
$sql = "INSERT INTO contacts (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')"; // Include phone field in the query
if ($conn->query($sql) === TRUE) {
    echo '<script>window.alert("Thanks for contacting the trainer...");
                    window.location.href ="mainWorkout.html"; </script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
