<?php

$server = '127.0.0.1';
$username = 'root';
$password = 'xcocuy32@';
$database = 'LegalID';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();

}

?>