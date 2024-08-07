<!-- infinite_scroll.php -->
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
  <div class="container-fluid m-5">
    <div id="content">
      <?php for ($i = 1; $i <= 20; $i++) echo "<p>Item $i</p>"; ?>
    </div>
    <div hx-get="more_content.php?page=2"
      hx-trigger="revealed"
      hx-target="#content"
      hx-swap="beforeend">
    </div>
  </div>
</body>

</html>