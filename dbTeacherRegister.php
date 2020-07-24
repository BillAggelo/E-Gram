<?php
   include_once('database.connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['teacher'])) {
$teacherName = $_POST['name'];
$teacherSubname = $_POST['surname'];
$teacherPassword = $_POST['password'];

$sql = "INSERT INTO teachers (Name, Surname, Password) VALUES ('$teacherName' , '$teacherSubname', '$teacherPassword');";
mysqli_query($conn, $sql);
}
