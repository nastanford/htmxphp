<?php
header('Content-Type: text/html');

echo "<p>Script executed at: " . date('Y-m-d H:i:s') . "</p>";
echo "<p>Received GET parameters: " . htmlspecialchars(json_encode($_GET)) . "</p>";

$conn = new mysqli('localhost', 'root', '', 'htmxphpdb');

if ($conn->connect_error) {
  die("<p>Connection failed: " . htmlspecialchars($conn->connect_error) . "</p>");
}

$allowed_columns = ['name', 'email'];
$column = isset($_GET['column']) && in_array($_GET['column'], $allowed_columns) ? $_GET['column'] : 'name';
$order = isset($_GET['order']) && $_GET['order'] === 'desc' ? 'DESC' : 'ASC';

$query = "SELECT name, email FROM users ORDER BY {$column} {$order}";
echo "<p>Executing query: " . htmlspecialchars($query) . "</p>";

$result = $conn->query($query);

if ($result === false) {
  die("<p>Error executing query: " . htmlspecialchars($conn->error) . "</p>");
}

$rowCount = 0;
while ($row = $result->fetch_assoc()) {
  echo "<tr>";
  echo "<td>" . htmlspecialchars($row['name']) . "</td>";
  echo "<td>" . htmlspecialchars($row['email']) . "</td>";
  echo "</tr>";
  $rowCount++;
}

echo "<p>Returned {$rowCount} rows</p>";

$conn->close();