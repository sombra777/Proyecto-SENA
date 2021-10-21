<?php 
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'senasoft';

try {
    $conn = new PDO("mysql:host=$server; bdname = $database;", $username, $password);
  } catch (PDOException $e) {
      die('connetion failed: '.$e->getMessage());
  }                 


?>