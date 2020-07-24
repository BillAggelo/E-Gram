<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Student_Info.css" type="text/css">
    <title>Στοιχεία φοιτητή</title>
  </head>
  <body>
    <h4 class="welcome"><?php echo "Καλώς όρισες "; echo $_SESSION['username'] ?></h4>
   <div class="studentinfo">
     <h1>Καρτέλα φοιτητή</h1>
     <div class="name">
       <?php echo "Όνομα: "; echo $_SESSION['name'] ?>
     </div>
     <div class="subname">
       <?php echo "Επώνυμο: "; echo $_SESSION['surname'] ?>
     </div>
     <div class="class">
       <?php echo "Τμήμα: "; echo $_SESSION['department'] ?>
     </div>
     <div class="town">
       <?php echo "Πόλη: "; echo $_SESSION['town'] ?>
     </div>
     <div class="address">
       <?php echo "Οδός: "; echo $_SESSION['address'] ?>
     </div>
   </div>
   <div class="options">
     <div class="menu">
       <h2>E-Gram</h2>
       <ul>
         <li><a title="Προβολή μαθημάτων" href="StudentLessons.php">Μαθήματα</a></li>
         <li><a href="logout.php">Αποσύνδεση</a></li>
       </ul>
     </div>
   </div>
  </body>
</html>
