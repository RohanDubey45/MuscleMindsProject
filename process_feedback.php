<?php
// Replace these values with your actual database credentials
$servername = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "muscleminds";

// Create a connection
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$feedbackType = $_POST['feedbackType'];
$feedbackMessage = $_POST['feedbackMessage'];

// Prepare and execute the SQL query
$sql = "INSERT INTO feedback (full_name, email, feedback_type, feedback_message) 
        VALUES ('$fullName', '$email', '$feedbackType', '$feedbackMessage')";

if ($conn->query($sql) === TRUE) {
    echo  ' <script>
            window.alert("Thanks for providing your feedback");
            window.location.href = "index.php";
            </script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
