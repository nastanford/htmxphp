<!-- dynamic_dropdown.php -->
<!DOCTYPE html>
<html lang="en"
  data-bs-theme="dark">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
  <script defer
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/htmx.org@1.9.6"></script>
</head>

<body>
  <div class="container-fluid m-4">
    <select name="user"
      hx-get="get_user_email.php"
      hx-target="#user-email">
      <option value="">Select a user</option>
      <?php
    $conn = new mysqli('localhost', 'root', '', 'htmxphpdb');
    $result = $conn->query("SELECT id, name FROM users");
    while ($row = $result->fetch_assoc()) {
      echo "<option value='{$row['id']}'>{$row['name']}</option>";
    }
    $conn->close();
    ?>
    </select>
    <div id="user-email"></div>
  </div>

</body>

</html>