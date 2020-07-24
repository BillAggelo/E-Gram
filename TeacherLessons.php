<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/TeacherLessons.css" type="text/css">
    <title><?php echo $_SESSION['surname'] ; echo ": Μαθήματα";?></title>
  </head>
  <body>
    <p><h2 class="text">Σε αυτήν την σελίδα μπορείτε να βλέπετε όλα τα ελεύθερα μαθήματα που υπάρχουν, και να δηλώσετε ποιο
    απ'όλα θέλετε να το διδάσκετε εσείς</h2></p>
    <?php include_once('TeacherLessonsTake.php');
    $sql = "SELECT idlessons, Title FROM lessons WHERE Taken=0";
    $result = $conn-> query($sql);?>
    <div class="lessonTable">
      <h2>Παραλαβή μαθημάτων</h2>
      <table>
        <tr>
          <th colspan="2">Μαθήματα</th>
        </tr>
        <?php while ($row = $result-> fetch_assoc()): ?>
      <tr>
        <td><b><?php echo $row['Title'];?></b></td>
        <td><a href="TeacherLessons.php?take=<?php echo $row['idlessons']; ?>" class="btn btn-success" style="border-radius: 20px">Παραλαβή</a></td>
      </tr>
      <?php endwhile; ?>
      <a href="TeacherInfo.php" style="color:white;text-decoration:none;position:absolute;top:93%;left:3%;">Επιστροφή</a></p>
      </table>
    </div>
  </body>
</html>
