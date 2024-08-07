<!-- inline_edit.php -->
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
    <?php
    $conn = new mysqli('localhost', 'root', '', 'htmxphpdb');
    $result = $conn->query("SELECT id, title, completed FROM tasks");
    while ($row = $result->fetch_assoc()) {
      echo "<div id='task-{$row['id']}'>";
      echo "<button class='btn btn-primary btn-sm m-2' hx-get='edit_task.php?id={$row['id']}' hx-target='#task-{$row['id']}'>Edit</button>";
      echo "<span>{$row['title']}</span> ";
      echo "</div>";
    }
    $conn->close();
    ?>
  </div>
</body>

</html>