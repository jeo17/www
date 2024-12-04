<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve data from the form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Save data to a file
    $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";
    file_put_contents('data.txt', $data, FILE_APPEND);

    echo "<h1>Thank you for your submission!</h1>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Message: $message</p>";
}
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve data from the form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Save data to a file
    $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";
    file_put_contents('data.txt', $data, FILE_APPEND);

    echo "<h1>Thank you for your submission!</h1>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Message: $message</p>";
}
?>
