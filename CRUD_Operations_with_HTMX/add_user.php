<!-- add_user.php -->
<?php
$conn = new mysqli('localhost', 'root', '', 'htmxphpdb');
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);

$conn->query("INSERT INTO users (name, email) VALUES ('$name', '$email')");
$id = $conn->insert_id;

echo "<div id='user-$id'>";
echo "$name ($email) ";
echo "<button hx-get='edit_user.php?id=$id' hx-target='#user-$id' class='btn btn-sm btn-primary btn-rounded m-2'>Edit</button> ";
echo "<button hx-delete='delete_user.php?id=$id' hx-target='#user-$id' hx-swap='outerHTML' class='btn btn-sm btn-primary btn-rounded m-2'>Delete</button>";
echo "</div>";

$conn->close();
?>