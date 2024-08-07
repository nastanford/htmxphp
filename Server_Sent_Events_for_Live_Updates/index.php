<!-- index.php -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
  <title>Server-Sent Events with HTMX</title>
  <script src="https://unpkg.com/htmx.org@1.9.6"></script>
  <script src="https://unpkg.com/htmx.org/dist/ext/sse.js"></script>
</head>

<body>
  <div hx-ext="sse"
    sse-connect="sse.php"
    sse-swap="message">
    Waiting for updates...
  </div>
</body>

</html>