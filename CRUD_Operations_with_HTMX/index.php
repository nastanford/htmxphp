<!-- index.php -->
<!DOCTYPE html>
<html lang="en"
  data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
  <title>CRUD Operations with HTMX</title>
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
    <h3>User Management</h3>
    <div id="user-list"
      hx-get="get_users.php"
      hx-trigger="load, userChange from:body"></div>
    <hr>
    <h3>Add New User</h3>
    <form hx-post="add_user.php"
      hx-target="#user-list"
      hx-swap="beforeend">
      <input type="text"
        name="name"
        placeholder="Name"
        required>
      <input type="email"
        name="email"
        placeholder="Email"
        required>
      <button type="submit"
        class="btn btn-sm btn-primary btn-rounded m-2">Add User</button>
    </form>
  </div>
</body>

</html>