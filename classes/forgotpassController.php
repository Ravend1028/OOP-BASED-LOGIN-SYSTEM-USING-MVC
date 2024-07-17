<?php

  class ForgotpassController extends ForgotpassModel {
    private $username;
    private $email;
    private $newPassword;

    public function __construct($username, $email, $newPassword) {
      $this->username = $username;
      $this->email = $email;
      $this->newPassword = $newPassword;
    }

    public function updateUser() {
      if($this->emptyInput() == false) {
        header('location: ../views/forgotpassForm.php?error=emptyInput');
        exit();
      }

      if($this->invalidEmail() == false) {
        header('location: ../views/forgotpassForm.php?error=invalidEmail');
        exit();
      }

      $this->updatePassword($this->username, $this->email, $this->newPassword);
    }

    private function emptyInput() {
      $result = true;

      if(empty($this->username) || empty($this->email) || empty($this->newPassword) ) {
        $result = false;
      } 

      return $result;
    }

    private function invalidEmail() {
      $result = true;

      if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
        $result = false;
      }

      return $result;
    }
  }

?>