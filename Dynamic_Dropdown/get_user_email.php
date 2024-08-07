<!-- get_user_email.php -->
<?php
if (isset($_GET['user'])) {
  $conn = new mysqli('localhost', 'root', '', 'htmxphpdb');
  $stmt = $conn->prepare("SELECT email FROM users WHERE id = ?");
  $stmt->bind_param("i", $_GET['user']);
  $stmt->execute();
  $result = $stmt->get_result();
  if ($row = $result->fetch_assoc()) {
    echo "Email: " . $row['email'];
  }
  $conn->close();
}
?>