<?php
class Connection
{
  function __construtor()
  {
    $server = 'localhost';
    $userName = 'root';
    $password = "";
    $dbName = "bibliotec";
  }
  public $pdo;

  public function execute($server, $userName, $password, $dbName)
  {
    try {
      $pdo = new PDO("mysql:dbname=" . $dbName . "; host=" . $server, $userName, $password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      global $pdo;
    } catch (PDOException $e) {
      echo "Error on Connection: " . $e->getMessage();
      exit;
    }
  }
}
