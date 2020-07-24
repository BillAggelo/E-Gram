<?php

if (isset($_POST['teacher-login'])) {

  require 'database.connection.php';

  $surname = $_POST['surname'];
  $password = $_POST['password'];


    $sql = "SELECT * FROM teachers WHERE Surname=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: Teachers.php?error=sqlerror");
      exit();
    }
    else {

      mysqli_stmt_bind_param($stmt, "s", $surname);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        if ($password != $row['Password']) {
          header("Location: Teachers.php?error=wrongpassword");
          exit();
        }
        elseif ($password == $row['Password']) {
          session_start();

          $_SESSION['idteacher'] = $row['idteachers'];
          $_SESSION['name'] = $row['Name'];
          $_SESSION['surname'] = $row['Surname'];

          header("Location: TeacherInfo.php");
          exit();
        }
        else {
          header("Location: Teachers.php?error=wrongpassword");
          exit();
        }
      }
      else {
        header("Location: Teachers.php?error=nouser");
        exit();
      }

    }

}
else {
  header("Location: Teachers.php");
  exit();
}
