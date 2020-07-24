<?php session_start();?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Teachers.css" type="text/css">
    <title>E-Gram: Είσοδος καθηγητή</title>
  </head>
  <body>
    <div class="box">
      <h2>Σύνδεση καθηγητή</h2>
      <?php
      if (isset($_GET['error'])){
        if ($_GET['error'] == "wrongpassword"){
          echo '<p class="errortext">Καταχωρήσατε λανθασμένο κωδικό!</p>';
        }
        elseif ($_GET['error'] == "nouser") {
          echo '<p class="errortext">Ελέγξτε αν γράψατε σωστά το επίθετο!</p>';
        }
      }
       ?>
      <form action="teacherLogin.php" method="post">
        <div class="inputBox">
          <input type="text" name="surname" required="" placeholder="Επώνυμο Καθηγητή">
        </div>
        <div class="inputBox">
          <input type="password" name="password" required="" placeholder="Κωδικός Πρόσβασης">
        </div>
        <input type="submit" name="teacher-login" title="Σύνδεση καθηγητή" value="Συνδεθείτε">
        <p class="back"><a href="StartingPage.html" title="Μετάβαση στην αρχική σελίδα">Μεταβείτε στην αρχική</a></p>
      </form>
    </div>
  </body>
</html>
