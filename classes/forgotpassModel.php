<?php

  class ForgotpassModel extends Database {
    protected function updatePassword($email, $newPassword) {
      $stmt = $this->connect()->prepare('SELECT * FROM users WHERE email = ?;');

      if(!$stmt->execute(array($email))) {
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
      $stmt = $this->connect()->prepare('UPDATE users SET password = ? WHERE email = ?;');

      if(!$stmt->execute(array($hashedPwd, $email))) {
        header('location: ../views/forgotpassForm.php?error=updateError');
        exit();
      }

    }
  }

?>