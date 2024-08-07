<!-- tabs.php -->
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/htmx.org@1.9.6"></script>
</head>

<body>
  <div class="container-fluid m-4">
    <div>
      <button hx-get="tab_content.php?tab=1" hx-target="#tab-content">Tab 1</button>
      <button hx-get="tab_content.php?tab=2" hx-target="#tab-content">Tab 2</button>
      <button hx-get="tab_content.php?tab=3" hx-target="#tab-content">Tab 3</button>
    </div>
    <div id="tab-content">
      <!-- Initial content -->
      <p>Click a tab to load content</p>
    </div>
  </div>
</body>

</html>