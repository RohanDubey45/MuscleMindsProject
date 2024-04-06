<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MuscleMinds - Register</title>
    <!-- Bootstrap CSS via CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <style>
        body {
            background-color: #f8f9fa;
            background-image: url(images/Pink-Gradient-Wallpaper.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .register-container {
            max-width: 400px;
            margin: auto;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container register-container">
        <h2 class="text-center mb-4">MuscleMinds Registration</h2>

        <?php
        // Assuming you have a database connection
        // Replace 'your_database_host', 'your_database_user', 'your_database_password', and 'your_database_name' with your actual database credentials
        $conn = new mysqli('localhost', 'root', '', 'muscleminds');
        
        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Collect user input
            $username = $_POST['username'];
            $password = $_POST['password'];
        
            // Hash the password for security
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
            // Insert user details into the login table
            $sql = "INSERT INTO login (username, password_hash) VALUES ('$username', '$hashed_password')";
        
            if ($conn->query($sql) === TRUE) {
                echo "<script>
                        alert('Account registered successfully');
                        window.location.href = 'MMlogin.html';
                      </script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        
        // Close the database connection
        $conn->close();
        ?>
        
        

        <form action="register.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password" pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$"
                title="Enter a password of minimum 8 letters which inlcude one uppercase, one lowercase,
                minimum one digit from (0-9) and one special character." required>
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Confirm Password:</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" title="password and confirm password should match" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>

        <p class="mt-3">Already have an account? <a href="MMlogin.html">Login here</a></p>
    </div>

    <!-- Bootstrap JS via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>