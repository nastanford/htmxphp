<!-- update_progress.php -->
<?php
session_start();
$_SESSION['progress'] += 10;
if ($_SESSION['progress'] > 100) {
  echo "100% - Complete!";
  session_destroy();
} else {
  echo $_SESSION['progress'] . "%";
  echo "<div hx-get='update_progress.php' hx-trigger='every 1s'></div>";
}
?>