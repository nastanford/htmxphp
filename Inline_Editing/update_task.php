<!-- update_task.php -->
<?php
$conn = new mysqli('localhost', 'root', '', 'htmxphpdb');
$id = $_POST['id'];
$title = $_POST['title'];
$stmt = $conn->prepare("UPDATE tasks SET title = ? WHERE id = ?");
$stmt->bind_param("si", $title, $id);
$stmt->execute();
?>
<button hx-get="edit_task.php?id=<?php echo $id; ?>"
  class='btn btn-primary btn-sm m-2'
  hx-target="#task-<?php echo $id; ?>">Edit</button>
<span><?php echo htmlspecialchars($title); ?></span>
<?php
$conn->close();
?>