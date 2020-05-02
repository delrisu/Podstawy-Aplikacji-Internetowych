<?php
if (!isset($_SESSION)) { session_start(); }
print<<<KONIEC
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POST</title>
</head>
<body>

<form action="form06_redirect.php" method="POST">
id_prac <input type="text" name="id_prac">
nazwisko <input type="text" name="nazwisko">
<input type="submit" value="Wstaw">
<input type="reset" value="Wyczysc">
</form>


<a href="form06_get.php"> LINK </a>


</body>
</html>
KONIEC;

if(isset($_SESSION['message'])){
  printf($_SESSION['message']);
  unset($_SESSION['message']);
}

?>