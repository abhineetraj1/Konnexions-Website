<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = $_POST['event'] ?? '';
    $email = $_POST['email'] ?? '';
    $data = "Email: $email\nMessage: $message\n\n";
    file_put_contents('enroll.txt', $data, FILE_APPEND | LOCK_EX);
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}
?>