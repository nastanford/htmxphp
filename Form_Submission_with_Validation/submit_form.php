<!-- submit_form.php -->
<?php
if (empty($_POST['name']) || empty($_POST['email'])) {
  http_response_code(400);
  echo "Please fill out all fields.";
} else {
  echo "Form submitted successfully for " . htmlspecialchars($_POST['name']);
}
?>