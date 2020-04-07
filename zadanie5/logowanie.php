<?php session_start(); ?>
<?php

require('funkcje.php');

if( isSet($_POST["zaloguj"])){
  $login = $_POST['login'];
  $login = test_input($login);
  $passwd = $_POST['passwd'];
  $passwd = test_input($passwd);
  isPerson($login, $passwd, array($osoba1, $osoba2));
  if($_SESSION['zalogowany'] == 1) {
    header("Location: users.php");
  } else {
    header("Location: index.php");
  }
}

?>