<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
<?php require 'funkcje.php'?>
</head>
<body>
<?php if(isSet($_GET["utworzCookie"])){
  $life_time = $_GET['czas'];
  if(setcookie("cookie", "666", time()+$life_time,"/")){
      echo "Cookie utworzono pomyslnie!";
  }
  else{
      echo "Cookie utworzono niepomyslnie!"; 
  }
}?>
<br></br>
<a href="index.php">wstecz</a>

</body>
</html>
