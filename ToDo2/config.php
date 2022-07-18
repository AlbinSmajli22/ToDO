<?php
   $host = 'localhost';
   $user = 'root';
   $password= '';
   $db= 'Todo';

   try {
      $con= new PDO("mysql:host=$host; dbname=$db;", $user, $password);
  } catch (Exception $e) {
      echo "Eshte paraqitur nje error <br>".$e;
  }

?>