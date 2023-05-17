<?php
class DataBase {
  private $hostName;
  private $userName;
  private $password;
  private $dbName;

  public function __construct()
  {
    $this->hostName = 'localhost';
    $this->userName = 'Alexandr';
    $this->password = 'qwerty12';
    $this->dbName = 'projectDB'; 

  }

  public function connectDB()
  {
    return mysqli_connect($this->hostName, $this->userName, $this->password, $this->dbName);
  }
}