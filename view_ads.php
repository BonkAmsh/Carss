<?php
include 'config.php';

$sql = "SELECT ads.*, users.name FROM ads JOIN users ON ads.user_id = users.id ORDER BY ads.created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Ads</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>View Ads</h1>
            <nav>
                <a href="index.html">Home</a>
                <a href="post_ad.php">Post an Ad</a>
                <a href="view_ads.php">View Ads</a>
                <a href="login.php">Login</a>
                <a href="signup.php">Sign Up</a>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <h2>Ads List</h2>
            <ul>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<li><strong>" . htmlspecialchars($row["title"]). "</strong> by " . htmlspecialchars($row["name"]) . " - " . htmlspecialchars($row["description"]). " - $" . htmlspecialchars($row["price"]). " (Posted on: " . htmlspecialchars($row["created_at"]). ")</li>";
                    }
                } else {
                    echo "<p>No ads found.</p>";
                }
                ?>
            </ul>
        </div>
    </main>
</body>
</html>
