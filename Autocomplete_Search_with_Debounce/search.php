<?php
// search.php
$conn = new mysqli('localhost', 'root', '', 'htmxphpdb');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['search'])) {
  $search = $conn->real_escape_string($_GET['search']);
  $sql = "SELECT id, name, email FROM users WHERE name LIKE '%$search%' OR email LIKE '%$search%' LIMIT 5";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<div class='result-item'>";
      echo "<strong>" . htmlspecialchars($row['name']) . "</strong><br>";
      echo htmlspecialchars($row['email']);
      echo "</div>";
    }
  } else {
    echo "<div class='no-results'>No results found</div>";
  }
}

$conn->close();