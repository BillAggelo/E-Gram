<?php

if (isset($_POST['login-submit'])) {

  require 'database.connection.php';

  $username = $_POST['name'];
  $password = $_POST['password'];


    $sql = "SELECT * FROM students WHERE Username=? AND Flag = 1;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: Students.php?error=sqlerror");
      exit();
    }
    else {

      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        if ($password != $row['Password']) {
          header("Location: Students.php?error=wrongpassword");
          exit();
        }
        elseif ($password == $row['Password']) {
          session_start();

          $_SESSION['idstudent'] = $row['idStudents'];
          $_SESSION['username'] = $row['Username'];
          $_SESSION['name'] = $row['Name'];
          $_SESSION['surname'] = $row['Surname'];
          $_SESSION['department'] = $row['Department'];
          $_SESSION['town'] = $row['Town'];
          $_SESSION['address'] = $row['Address'];

          header("Location: StudentInfo.php");
          exit();
        }
        else {
          header("Location: Students.php?error=wrongpassword");
          exit();
        }
      }
      else {
        header("Location: Students.php?error=nouser");
        exit();
      }

    }

}
else {
  header("Location: Students.php");
  exit();
}
