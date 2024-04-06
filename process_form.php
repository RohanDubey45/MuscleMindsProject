<?php
$host = 'localhost';  // Replace with your MySQL host
$username = 'root';  // Replace with your MySQL username
$password = '';  // Replace with your MySQL password
$database = 'muscleminds';

// Create a connection to the MySQL database
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];  // Retrieve the name from the form
    $weight = $_POST["weight"];
    $height = $_POST["height"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $waterIntake = $_POST["waterIntake"];

    // Insert data into the database
    $sql = "INSERT INTO user_health_info (name, weight, height, age, gender, water_intake) 
            VALUES ('$name', '$weight', '$height', '$age', '$gender', '$waterIntake')";
    
    if ($conn->query($sql) === TRUE) {
        echo '<script>
                alert("Thank you for providing feedback!");
                window.location.href = "health.html";
            </script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
