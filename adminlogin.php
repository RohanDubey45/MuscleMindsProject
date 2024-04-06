<?php
// Start the session
session_start();

// Database connection
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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query to check if the entered username and password match the records in the database
    $sql_select = "SELECT * FROM adminlogin WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql_select);

    if ($result->num_rows == 1) {
        // Authentication successful
        // Set session variables
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;

        // Redirect to the admin dashboard or wherever you want to go after successful login
        header("Location:adminpanel.php");
        exit;
    } else {
        // Authentication failed
        echo '<script>
                alert("Invalid username or password")
                         window.location.href = "adminlogin.html"
                   </script>';
    }
}

// Close connection
$conn->close();
?>

