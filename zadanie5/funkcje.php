<?php

function test_input($data) {
  $data = trim($data);
  $data = stripcslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

class Osoba {
  public $login;
  public $haslo;
  public $imieNazwisko;
  }
  $osoba1 = new Osoba;
  $osoba1->login = "adam";
  $osoba1->haslo = "adam2020";
  $osoba1->imieNazwisko = "Adam Kowalski";
  $osoba2 = new Osoba;
  $osoba2->login = "agata";
  $osoba2->haslo = "2020agata";
  $osoba2->imieNazwisko = "Agata Nowak";
  

function isPerson($login, $passwd, $accounts) {
  foreach($accounts as $o) {
    if($login == $o->login && $passwd == $o->haslo){
      
      $_SESSION['zalogowany'] = 1;

      $_SESSION['zalogowanyImie'] = $o->imieNazwisko;
    break;
    } else {
      $_SESSION['zalogowany'] = 0;
    }
  } 
    
}

function load_image(){
  $currentDir = getcwd();
  $uploadDirectory = "/zdjeciaUzytkownikow/";

  $fileName = $_FILES['myfile']['name'];
  $fileSize = $_FILES['myfile']['size'];
  $fileTmpName = $_FILES['myfile']['tmp_name'];
  $fileType = $_FILES['myfile']['type'];

  if($fileName != "" && ($fileType == 'image/png' || $fileType == 'image/jpeg' || $fileType == 'image/JPEG' || $fileType == 'image/PNG')){
    $uploadPath = $currentDir . $uploadDirectory . $fileName;

    if(move_uploaded_file($fileTmpName, $uploadPath)){
      echo "Zdjęcie zostało załadowane na serwer FTP";
    }
  }
}

?>