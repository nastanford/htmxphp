<!-- get_users.php -->
<?php
$conn = new mysqli('localhost', 'root', '', 'htmxphpdb');
$result = $conn->query("SELECT * FROM users order by name limit 10");

while ($row = $result->fetch_assoc()) {
  echo "<div id='user-{$row['id']}'>";
  echo "{$row['name']} ({$row['email']}) ";
  echo "<button hx-get='edit_user.php?id={$row['id']}' hx-target='#user-{$row['id']}' class='m-2 btn btn-primary btn-rounded btn-sm'>Edit</button> ";
  echo "<button hx-delete='delete_user.php?id={$row['id']}' hx-target='#user-{$row['id']}' hx-swap='outerHTML' class='m-2 btn btn-primary btn-rounded btn-sm'>Delete</button>";
  echo "</div>";
}

$conn->close();
?>