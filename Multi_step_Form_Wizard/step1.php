<?php
session_start();
?>
<h2>Step 1: Personal Information</h2>
<form hx-post="step2.php"
  hx-target="#form-wizard">
  <input type="text"
    name="name"
    placeholder="Name"
    required>
  <input type="email"
    name="email"
    placeholder="Email"
    required>
  <button type="submit">Next</button>
</form>