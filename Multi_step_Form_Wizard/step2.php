<?php
session_start();
$_SESSION['name'] = $_POST['name'];
$_SESSION['email'] = $_POST['email'];
?>
<h2>Step 2: Address</h2>
<form hx-post="step3.php"
  hx-target="#form-wizard">
  <input type="text"
    name="address"
    placeholder="Address"
    required>
  <input type="text"
    name="city"
    placeholder="City"
    required>
  <button type="submit">Next</button>
</form>