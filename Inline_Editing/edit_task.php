<!-- edit_task.php -->
<?php
$conn = new mysqli('localhost', 'root', '', 'htmxphpdb');
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT title FROM tasks WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$task = $result->fetch_assoc();
?>
<form hx-post="update_task.php"
  hx-target="#task-<?php echo $id; ?>">
  <button type="submit"
    class='btn btn-primary btn-sm m-2'>Save</button>
  <input type="hidden"
    name="id"
    value="<?php echo $id; ?>">
  <input type="text"
    name="title"
    value="<?php echo htmlspecialchars($task['title']); ?>">
</form>
<?php
$conn->close();
?>