<!-- search_results.php -->
<?php
$search = $_POST['search'] ?? '';
$results = ['Apple', 'Banana', 'Cherry', 'Date', 'Elderberry', 'Donut'];
$filtered = array_filter($results, function ($item) use ($search) {
  return stripos($item, $search) !== false;
});

foreach ($filtered as $item) {
  echo "<p>$item</p>";
}
?>