<!-- edit_user.php -->
<?php
$conn = new mysqli('localhost', 'root', '', 'htmxphpdb');
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id = $id");
$user = $result->fetch_assoc();

echo "<form hx-post='update_user.php' hx-target='#user-$id'>";
echo "<input type='hidden' name='id' value='$id'>";
echo "<input type='text' name='name' value='{$user['name']}' required>";
echo "<input type='email' name='email' value='{$user['email']}' required>";
echo "<button type='submit' class='btn btn-sm btn-primary btn-rounded m-2'>Update</button>";
echo "<button hx-get='get_users.php' hx-target='#user-list' class='btn btn-sm btn-primary btn-rounded m-2'>Cancel</button>";
echo "</form>";

$conn->close();
?>