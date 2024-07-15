<?php

  class Database {
    // Change the variable value, when using to your local machine.
    private $servername = "localhost";
    private $username = "raven";
    private $password = "123456";
    private $dbname = "login-system";

    protected function connect() {
      $dsn = 'mysql:host=' . $this->servername . ';dbname=' . $this->dbname;
      $conn = new PDO($dsn, $this->username, $this->password);
      $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      return $conn;
    }
  }

?>