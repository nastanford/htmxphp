<!-- index.php -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
  <title>Multi-step Form Wizard with HTMX</title>
  <script src="https://unpkg.com/htmx.org@1.9.6"></script>
</head>

<body>
  <div id="form-wizard"
    hx-get="step1.php"
    hx-trigger="load"></div>
</body>

</html>