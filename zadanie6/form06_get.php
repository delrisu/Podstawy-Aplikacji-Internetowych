<?php if (!isset($_SESSION)) { session_start(); }

$link = mysqli_connect("localhost", "scott", "tiger", "instytut");
if (!$link) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}

$sql = "SELECT * FROM pracownicy";
$result = $link->query($sql);
foreach ($result as $v) {
echo $v["ID_PRAC"]." ".$v["NAZWISKO"]."<br/>";
}
$result->free();
$link->close();

if(isset($_SESSION['message'])){
  printf($_SESSION['message']);
  unset($_SESSION['message']);
}

?>

