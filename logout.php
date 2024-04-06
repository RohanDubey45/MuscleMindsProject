<!-- <?php
// logout.php

// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Respond with a success message or any other relevant information
    echo json_encode(['status' => 'success']);
    exit();
} else {
    // If the user is not logged in, respond with an error message or handle it accordingly
    echo json_encode(['status' => 'error', 'message' => 'User not logged in']);
    exit();
}
?> -->
