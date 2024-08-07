<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
  <title>HTMX Autocomplete Search</title>
  <script src="https://unpkg.com/htmx.org@1.9.6"></script>
  <style>
  .result-item {
    padding: 10px;
    border-bottom: 1px solid #eee;
  }

  .no-results {
    padding: 10px;
    color: #666;
  }
  </style>
</head>

<body>
  <h1>User Search</h1>
  <input type="text"
    name="search"
    placeholder="Search users..."
    hx-get="search.php"
    hx-trigger="keyup changed delay:500ms"
    hx-target="#search-results"
    hx-indicator="#spinner">
  <div id="spinner"
    class="htmx-indicator">Searching...</div>
  <div id="search-results"></div>
</body>

</html>