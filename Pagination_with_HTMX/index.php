<!-- index.php -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
  <title>Pagination with HTMX</title>
  <script src="https://unpkg.com/htmx.org@1.9.6"></script>
</head>

<body>
  <div id="content"
    hx-get="get_page.php?page=1"
    hx-trigger="load"></div>
</body>

</html>