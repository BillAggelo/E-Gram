<?php
   include_once('database.connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['lesson-add'])) {
$lesson = $_POST['lesson'];

$sql = "INSERT INTO lessons (Title) VALUES ('$lesson');";
mysqli_query($conn, $sql);
}
