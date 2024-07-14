<?php
include 'config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    die("You must be logged in to post an ad.");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $sql = "INSERT INTO ads (user_id, title, description, price) VALUES ('$user_id', '$title', '$description', '$price')";

    if ($conn->query($sql) === TRUE) {
        echo "Ad posted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
