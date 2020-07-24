<?php
$name_error = $subname_error = $town_error = $address_error = $username_error = $password_error = "";
$name = $subname = $town = $address = $username = $password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //elexos gia onoma
  $name = test_input($_POST["name"]);
  if (!preg_match("/^[A-Z][a-z]{3,}$/",$name)) {
    $name_error = "Καταχωρήστε ένα πραγματικό όνομα με Αγγλικούς χαρακτήρες (Το πρώτο κεφαλαίο)";
  }
  //elexos gia epitheto
  $subname = test_input($_POST["subname"]);
  if (!preg_match("/^[A-Z][a-z]{5,}$/",$subname)) {
    $subname_error = "Καταχωρήστε σωστό επίθετο με Αγγλικούς χαρακτήρες (Το πρώτο κεφαλαίο)";
  }
  //elexos gia polh
  $town = test_input($_POST["town"]);
  if (!preg_match("/^[A-Z][a-z]{3,}$/",$town)) {
    $town_error = "Γράψτε ορθή πόλη με Αγγλικούς χαρακτήρες (Το πρώτο κεφαλαίο)";
  }
  //elexos gia dieuthinsh
  $address= test_input($_POST["address"]);
  if (!preg_match("/^[A-Z][a-z ]{5,}[0-9]{1,}/",$address)) {
    $address_error = "Συμπληρώστε σωστά την διεύθυνση με οδό και αριθμό";
  }
  //elexos gia username
  $username = test_input($_POST["username"]);
  if (!preg_match("/^[A-Za-z]{5,}$/",$username)) {
    $username_error = "Αγγλικοί χαρακτήρες με τουλάχιστον 5 γράμματα";
  }
  //elexos gia password
  $password = test_input($_POST["password"]);
  if (!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/",$password)) {
    $password_error = "Πρέπει να περιέχει τουλάχιστον ένα νούμερο, ένα κεφαλαίο και ένα μικρό γράμμα. Το λιγότερο 8 χαρακτήρες";
  }

  if ($name_error == '' and $subname_error == '' and $town_error == '' and $address_error == '' and $username_error == '' and $password_error == '') {
    unset($_POST['submit']);
    include_once('dbStudentRegister.php');
  }
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
