<?php
// index.php
session_start();
$_SESSION['username'] = $_SESSION['username'] ?? 'User' . rand(1000, 9999);
?>
<!DOCTYPE html>
<html>

<head>
  <script src="https://unpkg.com/htmx.org@1.9.10"></script>
</head>

<body>
  <h1>Real-time Chat</h1>
  <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
  <div id="chat-messages"
    hx-get="./messages.php"
    hx-trigger="load, every 2s"></div>
  <form hx-post="./send-message.php"
    hx-target="#chat-messages"
    hx-swap="beforeend">
    <input type="text"
      name="message"
      placeholder="Type a message">
    <button type="submit">Send</button>
  </form>
</body>

</html>