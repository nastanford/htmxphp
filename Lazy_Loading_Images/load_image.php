<!-- load_image.php -->
<?php
$images = [
  'https://picsum.photos/id/1/200/300',
  'https://picsum.photos/id/2/200/300',
  'https://picsum.photos/id/3/200/300',
  'https://picsum.photos/id/4/200/300',
  'https://picsum.photos/id/5/200/300'
];
$index = $_GET['index'] ?? 0;
echo "<img src='{$images[$index]}' alt='Lazy loaded image'>";
?>