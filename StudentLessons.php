<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/StudentLessons.css" type="text/css">
    <title><?php echo $_SESSION['name'] ; echo " "; echo $_SESSION['surname'] ; echo ": Μαθήματα";?></title>
  </head>
  <body>
    <?php include_once('StudentLessonsTake.php');
    $sql = "SELECT idlessons, Title FROM lessons";
    $result = $conn-> query($sql);?>
    <div class="lessonTable">
      <h2>Τα μαθήματα</h2>
      <table>
        <tr>
          <th colspan="2">Εγγραφή σε μαθήματα</th>
        </tr>
        <?php while ($row = $result-> fetch_assoc()): ?>
      <tr>
        <td><?php echo $row['Title'];?></td>
        <td><a href="StudentLessons.php?take=<?php echo $row['idlessons']; ?>" class="btn btn-warning">Εγγραφή</a></td>
      </tr>
      <?php endwhile; ?>
      <a href="StudentInfo.php" style="color:white;text-decoration:none;position:absolute;top:93%;left:3%;">Επιστροφή</a></p>
    </table>
    </div>
    <?php include_once('StudentLessonsTake.php');
    $student = $_SESSION['idstudent'];
    $sql = "SELECT * FROM students_lessons INNER JOIN lessons ON students_lessons.idlessons
    = lessons.idlessons WHERE students_lessons.idStudents = $student";
    $result = $conn-> query($sql);?>
    <div class="mylessons">
      <h2>Τα μαθήματά μου</h2>
      <table>
        <tr>
          <th colspan="2">Μαθήματα</th>
        </tr>
        <?php while ($row = $result-> fetch_assoc()): ?>
      <tr>
        <td><?php echo $row['Title'];?></td>
      </tr>
      <?php endwhile; ?>
    </table>
  </body>
</html>
