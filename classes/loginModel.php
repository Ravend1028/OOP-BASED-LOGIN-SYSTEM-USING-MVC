<?php

  class LoginModel extends Database {
    protected function getUser($username, $password) {
      $stmt = $this->connect()->prepare('SELECT password FROM users WHERE username = ?');

      if(!$stmt->execute(array($username, $password))) {
        $stmt = null;
        header('location: ../index.php?error=dataError');
        exit();
      } 

      if($stmt->rowCount() == 0) {
        $stmt = null;
        header('location: ../index.php?error=userNotFound');
        exit();
      } 

      $pwdHashed = $stmt->fetchAll();
      $checkPwd = password_verify($password, $pwdHashed[0]['password']);

      if($checkPwd == false) {
        $stmt = null;
        header('location: ../index.php?error=wrongPassword');
        exit();
      } elseif ($checkPwd == true) {
        $stmt = $this->connect()->prepare('SELECT * FROM users WHERE username = ? AND password = ?;');

        if(!$stmt->execute(array($username, $password))) {
          $stmt = null;
          header('location: ../index.php?error=dataError');
          exit();
        } 

        if($stmt->rowCount() == 0) {
          $stmt = null;
          header('location: ../index.php?error=userNotFound');
          exit();
        } 

        $user = $stmt->fetchAll();
        
        session_start();
        $_SESSION['user'] = $user[0]['firstname'];
      }

      $stmt = null;
    }
  }

?>