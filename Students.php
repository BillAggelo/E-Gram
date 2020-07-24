<?php session_start();?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/StudentsLogin.css" type="text/css">
    <title>E-Gram: Είσοδος φοιτητή</title>
  </head>
  <body>
    <div class="box">
      <h2>Σύνδεση φοιτητή</h2>
      <?php
      if (isset($_GET['error'])){
        if ($_GET['error'] == "wrongpassword"){
          echo '<p class="errortext">Λανθασμένος κωδικός!</p>';
        }
        elseif ($_GET['error'] == "nouser") {
          echo '<p class="errortext">Δεν βρέθηκε ο χρήστης! Περιμένετε ενεργοποίηση από την γραμματεία ή κάντε εγγραφή</p>';
        }
      }
       ?>
      <form action="studentLogin.php" method="post">
        <div class="inputBox">
          <input type="text" name="name" required="">
          <label>Όνομα φοιτητή</label>
        </div>
        <div class="inputBox">
          <input type="password" name="password" required="">
          <label>Κωδικός πρόσβασης</label>
        </div>
        <input type="submit" name="login-submit" title="Σύνδεση φοιτητή" value="Είσοδος">
       <p class="register">Νέος φοιτητής; <a href="Register.php" title="Εγγραφή νέου φοιτητή">Εγγραφή φοιτητή</a></p>
       <p class="back"><a href="StartingPage.html" title="Μετάβαση στην αρχική σελίδα">Πίσω στην αρχική</a></p>
      </form>
    </div>
  </body>
</html>
