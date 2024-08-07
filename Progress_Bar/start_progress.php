<!-- start_progress.php -->
<?php
session_start();
$_SESSION['progress'] = 0;
?>
<div hx-get="update_progress.php" hx-trigger="every 1s">0%</div>