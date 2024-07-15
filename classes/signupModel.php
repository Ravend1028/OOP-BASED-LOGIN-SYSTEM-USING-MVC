<?php

  class SignupModel extends Database {
    protected function setUser($username, $email, $firstname, $lastname, $password) {
      $stmt = $this->connect()->prepare('INSERT INTO users (username, email, first_name, last_name, password) VALUES (?, ?, ?, ?, ?);');

      $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

      if(!$stmt->execute(array($username, $email, $firstname, $lastname, $hashedPwd))) {
        $stmt = null;
        header('location: ../index.php?error=dataError');
        exit();
      } 

      $stmt = null;
    }

    protected function checkUser($username, $email) {
      $stmt = $this->connect()->prepare('SELECT username FROM users WHERE username = ? OR email = ?;');

      if(!$stmt->execute(array($username, $email))) {
        $stmt = null;
        header('location: ../index.php?error=dataError');
        exit();
      } 

      $result = true;

      if($stmt->rowCount() > 0) {
        $result = false;
      } 

      return $result;
    }
  }

?>