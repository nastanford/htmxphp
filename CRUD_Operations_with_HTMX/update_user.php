<?php
$conn = new mysqli('localhost', 'root', '', 'htmxphpdb');

// Check if id, name, and email are set in $_POST
if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email'])) {
  $id = $_POST['id'];
  $name = $conn->real_escape_string($_POST['name']);
  $email = $conn->real_escape_string($_POST['email']);

  // Check if id is not empty and is numeric
  if (!empty($id) && is_numeric($id)) {
    $conn->query("UPDATE users SET name = '$name', email = '$email' WHERE id = $id");

    echo "$name ($email) ";
    echo "<button hx-get='edit_user.php?id=$id' hx-target='#user-$id'>Edit</button> ";
    echo "<button hx-delete='delete_user.php?id=$id' hx-target='#user-$id' hx-swap='outerHTML'>Delete</button>";
  } else {
    echo "Invalid ID.";
  }
} else {
  echo "ID, name, or email is not set.";
}

$conn->close();