<!-- load_more.php -->
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
    <div id="items">
      <p>Item 1</p>
      <p>Item 2</p>
      <p>Item 3</p>
    </div>
    <button hx-get="get_more_items.php"
      hx-target="#items"
      hx-swap="beforeend">
      Load More
    </button>
  </div>
</body>

</html>