<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = $_POST['message'] ?? '';
    $email = $_POST['email'] ?? '';
    $data = "Email: $email\nMessage: $message\n\n";
    file_put_contents('contact.txt', $data, FILE_APPEND | LOCK_EX);
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}
?>
