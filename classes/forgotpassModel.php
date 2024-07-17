<?php

  class ForgotpassModel extends Database {
    protected function updatePassword($username, $email, $newPassword) {
      $stmt = $this->connect()->prepare('SELECT * FROM users WHERE username = ? AND email = ?;');

      if(!$stmt->execute(array($username, $email))) {
        $stmt = null;
        header('location: ../views/forgotpassForm.php?error=dataError');
        exit();
      } 

      if($stmt->rowCount() == 0) {
        $stmt = null;
        header('location: ../views/forgotpassForm.php?error=userNotFound');
        exit();
      } 

      $hashedPwd = password_hash($newPassword, PASSWORD_DEFAULT);
      $stmt = $this->connect()->prepare('UPDATE users SET password = ? WHERE username = ? AND email = ?;');

      if(!$stmt->execute(array($hashedPwd, $username, $email))) {
        header('location: ../views/forgotpassForm.php?error=updateError');
        exit();
      }

    }
  }

?>