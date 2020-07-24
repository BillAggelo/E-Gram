<?php
   include_once('database.connection.php');

   if (isset($_GET['take'])) {
     $lesson = $_GET['take'];
     $teacher = $_SESSION['idteacher'];
     $sql = "INSERT INTO teachers_lessons (idteachers, idlessons) VALUES ('$teacher', '$lesson');";
     mysqli_query($conn, $sql);

     $sql2 = "UPDATE lessons SET Taken=TRUE WHERE idlessons=$lesson";
     mysqli_query($conn, $sql2);
   }
