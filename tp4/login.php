<?php
session_start();

// Load users from JSON
$users = json_decode(file_get_contents("users.json"), true);

// Handle login
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    foreach ($users as $user) {
        if ($user["email"] === $email && $user["password"] === $password) {
            $_SESSION["user"] = $email;
            header("Location: home.php");
            exit;
        }
    }
    $error = "Invalid email or password!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0; }
        .container { max-width: 400px; margin: 50px auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); }
        input { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 4px; }
        button { width: 100%; padding: 10px; background-color: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background-color: #218838; }
    </style>
</head>
<body>
<div class="container">
    <h2>Login</h2>
   <?php if (!empty($error)): ?>
    <p style="color: red;"><?php echo $error . " for email: " . $_POST["email"]; ?></p>
   <?php endif; ?>
    <form method="POST" action="login.php" novalidate>
    <input type="text" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>
</body>
</html>
