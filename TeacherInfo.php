<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/TeachersInfo.css" type="text/css">
    <title>Στοιχεία καθηγητή</title>
  </head>
  <body>
    <?php include_once('database.connection.php');
    $teacher = $_SESSION['idteacher'];
    $sql = "SELECT * FROM teachers_lessons INNER JOIN lessons ON teachers_lessons.idlessons
    = lessons.idlessons WHERE teachers_lessons.idteachers = $teacher";
    $result = $conn-> query($sql);?>
    <h4 class="welcome"><?php echo "Διδάσκων κ. "; echo $_SESSION['surname'] ?></h4>
    <div class="lessonTable">
      <h2>Τα μαθήματά μου</h2>
      <table>
        <tr>
          <th>Μαθήματα</th>
        </tr>
        <?php while ($row = $result-> fetch_assoc()): ?>
          <tr>
            <td><b><?php echo $row['Title'];?></b></td>
          </tr>
        <?php endwhile; ?>
      </table>
    </div>
    <div class="menu-wrap">
      <input type="checkbox" class="toggler">
      <div class="hamburger">
        <div>
          </div>
          </div>
          <div class="menu">
            <div>
              <div>
                <ul>
                  <li><a title="Δηλώστε τι θα διδάσκετε" href="TeacherLessons.php">Παραλαβή Μαθημάτων</a></li>
                  <li><a href="logoutTeacher.php">Αποσύνδεση</a></li>
                </ul>
              </div>
            </div>
         </div>
      </div>
  </body>
</html>
