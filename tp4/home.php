<?php
session_start();

// Protect page if user is not logged in
if (empty($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}

// Display logged-in user's email
$userEmail = htmlspecialchars($_SESSION["user"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #eaeaea; margin: 0; padding: 0; }
        .container { max-width: 600px; margin: 50px auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); }
        .logout { color: red; text-decoration: none; }
    </style>
</head>
<body>
<div class="container">
    <h2>Welcome, <?php echo $userEmail; ?></h2>
    <p>This is your secure home page.</p>
    <a href="logout.php" class="logout">Logout</a>
</div>
</body>
</html>
