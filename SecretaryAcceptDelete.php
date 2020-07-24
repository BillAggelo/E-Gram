<?php
   include_once('database.connection.php');

   if (isset($_GET['delete'])) {
     $id = $_GET['delete'];
     $sql = "DELETE FROM students WHERE idStudents=$id";
     mysqli_query($conn, $sql);
   }

   if (isset($_GET['accept'])) {
     $id = $_GET['accept'];
     $sql = "UPDATE students SET Flag=TRUE WHERE idStudents=$id";
     mysqli_query($conn, $sql);
   }
