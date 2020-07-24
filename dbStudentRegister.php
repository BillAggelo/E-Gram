<?php
   include_once('database.connection.php');

$studentName = $_POST['name'];
$studentSubname = $_POST['subname'];
$studentTown = $_POST['town'];
$studentAddress = $_POST['address'];
$studentUsername = $_POST['username'];
$studentPassword = $_POST['password'];
$studentDepartment = $_POST['option'];


$sql = "INSERT INTO students (Name, Surname, Town, Address, Username, Password, Department)
VALUES ('$studentName', '$studentSubname', '$studentTown', '$studentAddress', '$studentUsername', '$studentPassword', '$studentDepartment');";

mysqli_query($conn, $sql);
header("Location: StartingPage.html");
