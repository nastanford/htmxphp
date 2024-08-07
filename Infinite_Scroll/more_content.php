<?php
$page = $_GET['page'] ?? 2;
$start = ($page - 1) * 20 + 1;
$end = $start + 19;

for ($i = $start; $i <= $end; $i++) {
  echo "<p>Example Item $i</p>";
}

$nextPage = $page + 1;
echo "<div hx-get='more_content.php?page=$nextPage' hx-trigger='revealed' hx-target='#content' hx-swap='beforeend'></div>";
