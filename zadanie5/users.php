<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>PHP</title>
    <meta charset='UTF-8' />
  </head>
  <body>
    <?php
      require_once("funkcje.php");
      if($_SESSION['zalogowany'] != 1) {
        header("Location: index.php");
      } else {
      echo "Zalogowano jako " . $_SESSION['zalogowanyImie'];
      }
    ?>
    <form action="index.php" method="post">
    <input type="submit" name="wyloguj" value="wyloguj">
    </form>
    <form action='users.php' method='POST' enctype='multipart/form-data'> 
    <fieldset>
    <label for="myfile">Wczytaj plik <label>
    <input name="myfile" id="myfile" type="file">
    <input type="submit" value="ZaladujZdjecie" name="ZaladujZdjecie">
    </fieldset>
    </form>
    <?php 
    if(isset($_POST['ZaladujZdjecie'])){
      load_image();
    }
    ?>
    <img src="/zdjeciaUzytkownikow/twarz.png" alt="twarz">
    <?php
  echo '<a href="/index.php">Index</a>';
  ?>
  </body>
</html>
