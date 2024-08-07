
<?php
session_start();
$messages = file_exists('messages.json') ? json_decode(file_get_contents('messages.json'), true) : [];
$newMessage = [
  'username' => $_SESSION['username'],
  'text' => $_POST['message']
];
$messages[] = $newMessage;
file_put_contents('messages.json', json_encode($messages));
echo "<p><strong>{$newMessage['username']}:</strong> {$newMessage['text']}</p>";
?>