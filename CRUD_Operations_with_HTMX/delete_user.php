<!-- delete_user.php -->
<?php
$conn = new mysqli('localhost', 'root', '', 'htmxphpdb');
$id = $_GET['id'];
$conn->query("DELETE FROM users WHERE id = $id");
$conn->close();
?>