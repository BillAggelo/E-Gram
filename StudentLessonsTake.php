<?php
   include_once('database.connection.php');

   if (isset($_GET['take'])) {
     $lesson = $_GET['take'];
     $student = $_SESSION['idstudent'];
     $sql = "INSERT INTO students_lessons (idStudents, idlessons) VALUES ('$student', '$lesson');";
     mysqli_query($conn, $sql);
   }
