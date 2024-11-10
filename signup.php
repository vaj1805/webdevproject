<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashed password
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];

    $stmt = $conn->prepare("INSERT INTO users (username, password, email, contact_number) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $password, $email, $contact_number);

    if ($stmt->execute()) {
        // Redirect to login page after successful signup
        header("Location: loginpage.html");
        exit(); // Ensures no further code is executed
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
