<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the username and password are correct (You should validate against a database)
    $username = $_POST["username"];
    $password = $_POST["password"];

    // In a real application, you would validate the credentials against a database
    // For simplicity, we'll use hardcoded values here.
    $validUsername = "iamnrp7";
    $validPassword = "nihar";

    if ($username === $validUsername && $password === $validPassword) {
        // Successful login
        session_start();
        $_SESSION["username"] = $username;
        header("Location: welcome.php");
    } else {
        // Invalid credentials
        echo "Invalid username or password. Please try again.";
    }
}
?>
