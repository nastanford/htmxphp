<!-- get_page.php -->
<?php
$conn = new mysqli('localhost', 'root', '', 'htmxphpdb');

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perPage = 5;
$start = ($page - 1) * $perPage;

$result = $conn->query("SELECT * FROM users LIMIT $start, $perPage");

while ($row = $result->fetch_assoc()) {
  echo "<p>{$row['name']} ({$row['email']})</p>";
}

$totalResults = $conn->query("SELECT COUNT(*) as count FROM users")->fetch_assoc()['count'];
$totalPages = ceil($totalResults / $perPage);

echo "<div>";
for ($i = 1; $i <= $totalPages; $i++) {
  echo "<button hx-get='get_page.php?page=$i' hx-target='#content'>$i</button> ";
}
echo "</div>";

$conn->close();
?>