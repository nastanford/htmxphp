<?php
session_start();
// Here you would typically save the data to a database
echo "<h2>Form Submitted Successfully!</h2>";
echo "<p>Thank you for your submission.</p>";
session_destroy();