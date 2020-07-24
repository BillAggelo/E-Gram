<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/SecretaryInfo.css" type="text/css">
    <title>Γραμματεία Αρχική</title>
  </head>
  <body>
    <?php include_once('SecretaryAcceptDelete.php');
    $sql = "SELECT idStudents, Name, Surname, Department, Town, Address from students
    WHERE Flag = 0";
    $result = $conn-> query($sql);?>
    <div class="registerTable">
      <h2><u>Νέοι Φοιτητές</u></h2>
      <table>
        <tr>
          <th>Όνομα</th>
          <th>Επίθετο</th>
          <th>Τμήμα</th>
          <th>Πόλη</th>
          <th>Οδός</th>
          <th>Επιλογή</th>
        </tr>
        <?php while ($row = $result-> fetch_assoc()): ?>
        <tr>
          <td><?php echo $row['Name'];?></td>
          <td><?php echo $row['Surname'];?></td>
          <td><?php echo $row['Department'];?></td>
          <td><?php echo $row['Town'];?></td>
          <td><?php echo $row['Address'];?></td>
          <td>
            <a href="Secretary.php?accept=<?php echo $row['idStudents']; ?>" class="btn btn-info">Αποδοχή</a>
            <a href="Secretary.php?delete=<?php echo $row['idStudents']; ?>" class="btn btn-danger">Διαγραφή</a>
          </td>
        </tr>
      <?php endwhile; ?>
      </table>
    </div>
    <?php include_once('dbTeacherRegister.php'); ?>
    <div class="teachers">
      <h2><b>Προσθήκη Καθηγητή</b></h2>
      <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="data">
          <label><b>Όνομα Καθηγητή</b></label>
          <input type="text" name="name" required="">
          <label><b>Επίθετο Καθηγητή</b></label>
          <input type="text" name="surname" required="">
          <label><b>Κωδικός πρόσβασης</b></label>
          <input type="password" name="password" required="">
        </div>
        <div class="button">
          <input type="submit" name="teacher" title="Καταχώρηση καθηγητή" value="Καταχώρηση">
        </div>
      </form>
    </div>
    <?php include_once('dbLessonMake.php'); ?>
    <div class="lessons">
      <h3><b>Δημιουργία Μαθήματος</b></h3>
      <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="data">
          <label><b>Όνομα Μαθήματος</b></label>
          <input type="text" name="lesson" required="">
        </div>
        <div class="button">
          <input type="submit" name="lesson-add" title="Καταχώρηση Μαθήματος" value="Δημιουργία">
        </div>
      </form>
    </div>
    <a href="SecretaryLogin.html" style="text-decoration: none;">Αποσύνδεση</a>
  </body>
</html>
