<?php

class Dbh {
  private $servername = "localhost";
  private $username = "raven";
  private $password = "123456";
  private $dbname = "";

  protected function connect() {
    $dsn = 'mysql:host=' . $this->servername . ';dbname=' . $this->dbname;
    $conn = new PDO($dsn, $this->username, $this->password);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $conn;
  }
}

?>