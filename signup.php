<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['signupName'];
    $email = $_POST['signupEmail'];
    $password = password_hash($_POST['signupPassword'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful. You can now log in.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
