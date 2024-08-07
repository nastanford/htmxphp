<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
  <title>Sortable Data Tables with HTMX</title>
  <script src="https://unpkg.com/htmx.org@1.9.6"></script>
  <style>
  table {
    border-collapse: collapse;
  }

  th,
  td {
    border: 1px solid black;
    padding: 5px;
  }

  th {
    cursor: pointer;
  }

  th::after {
    content: "";
    margin-left: 5px;
  }

  th.asc::after {
    content: "▲";
  }

  th.desc::after {
    content: "▼";
  }
  </style>
</head>

<body>
  <div id="debug"></div>
  <table>
    <thead>
      <tr>
        <th id="name-header"
          hx-get="/Sortable_Data_Tables/sort.php?column=name&order=asc"
          hx-target="#data-body"
          hx-swap="innerHTML"
          hx-trigger="click">Name</th>
        <th id="email-header"
          hx-get="/Sortable_Data_Tables/sort.php?column=email&order=asc"
          hx-target="#data-body"
          hx-swap="innerHTML"
          hx-trigger="click">Email</th>
      </tr>
    </thead>
    <tbody id="data-body"
      hx-get="/Sortable_Data_Tables/sort.php"
      hx-trigger="load">
      <tr>
        <td colspan="2">Loading...</td>
      </tr>
    </tbody>
  </table>

  <script>
  document.body.addEventListener('htmx:afterRequest', function(event) {
    document.getElementById('debug').innerText = 'Last request: ' + event.detail.pathInfo.requestPath;
    console.log('Request completed:', event.detail.pathInfo.requestPath);
  });

  document.body.addEventListener('htmx:afterOnLoad', function(event) {
    const headers = document.querySelectorAll('th[id$="-header"]');
    headers.forEach(header => {
      header.classList.remove('asc', 'desc');
      const hxGet = header.getAttribute('hx-get');
      if (hxGet.includes(event.detail.pathInfo.requestPath)) {
        const order = new URLSearchParams(hxGet.split('?')[1]).get('order');
        header.classList.add(order);
        header.setAttribute('hx-get', hxGet.replace(/order=(asc|desc)/,
          `order=${order === 'asc' ? 'desc' : 'asc'}`));
      }
    });
  });
  </script>
</body>

</html>