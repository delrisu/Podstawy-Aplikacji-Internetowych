<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>PHP</title>
    <meta charset='UTF-8' />
    <script>
      if()
    </script>
  </head>
  <body>
    <?php
    if(isSet($_POST["wyloguj"])){
      $_SESSION['zalogowany'] = 0;
    }
      echo '<h1> Nasz system </h1>';
      
    ?>
    <form action="logowanie.php" method="post"> <fieldset>
    <label for="login">
    Login:</label> <input type="text" id="login" name="login"><br>
    <label for="passwd">
    Hasło:</label> <input type="password" id="passwd" name="passwd"><br>
    <input type="submit" name="zaloguj" value="Zaloguj">
    </fieldset>
    </form>

    <form action="cookie.php" method="get">
    <fieldset>
    <label for="czas"> Czas: </label>
    <input type="number" name="czas"><br>
    <input type="submit" name="utworzCookie" value="utworzCookie">
    </fieldset>
    </form>

    
<?php
  echo '<a href="/users.php">Users</a><br><br>';
  if(isSet($_COOKIE['cookie']))
{
  echo "cookie: ".$_COOKIE['cookie'];
}
else
{
  echo "cookie straciło ważność!";
}
?>
    
  </body>
</html>
