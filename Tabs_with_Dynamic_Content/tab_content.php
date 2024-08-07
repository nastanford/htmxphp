<!-- tab_content.php -->
<?php
$tab = $_GET['tab'] ?? 1;
echo "<h2>Content for Tab $tab</h2>";
echo "<p>This is the dynamic content for tab $tab.</p>";
?>