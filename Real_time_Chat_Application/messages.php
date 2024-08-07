<?php
$messages = file_exists('messages.json') ? json_decode(file_get_contents('messages.json'), true) : [];
foreach ($messages as $message) {
  echo "<p><strong>{$message['username']}:</strong> {$message['text']}</p>";
}