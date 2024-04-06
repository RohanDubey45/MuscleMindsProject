<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Establish the database connection
    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $dbname = "muscleminds";

    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Validate user credentials using prepared statements
    $sql = "SELECT * FROM login WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row["password_hash"];

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Password is correct, set session variable and redirect
            session_start();
            $_SESSION['user_authenticated'] = true;
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit();
        } else {
            // Password is incorrect, show a pop-up message using JavaScript
            echo "<script>
                    alert('Invalid password');
                    window.location.href = 'MMlogin.html'; // Replace with your actual login page
                  </script>";
        }
    } else {
        // Username not found, show a pop-up message using JavaScript
        echo "<script>
                alert('Username not found');
                window.location.href = 'MMlogin.html'; // Replace with your actual login page
              </script>";
    }

    // Close the database connection
    $conn->close();
}
?>
