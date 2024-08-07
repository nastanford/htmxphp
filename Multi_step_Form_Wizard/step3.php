<?php
session_start();
$_SESSION['address'] = $_POST['address'];
$_SESSION['city'] = $_POST['city'];
?>
<h2>Step 3: Confirmation</h2>
<p>Name: <?php echo $_SESSION['name']; ?></p>
<p>Email: <?php echo $_SESSION['email']; ?></p>
<p>Address: <?php echo $_SESSION['address']; ?></p>
<p>City: <?php echo $_SESSION['city']; ?></p>
<button hx-post="submit_form.php"
  hx-target="#form-wizard">Submit</button>