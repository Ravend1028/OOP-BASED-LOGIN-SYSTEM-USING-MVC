<?php

  class ForgotpassController extends ForgotpassModel {
    private $email;
    private $newPassword;

    public function __construct($email, $newPassword) {
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

      $this->updatePassword($this->email, $this->newPassword);
    }

    private function emptyInput() {
      $result = true;

      if(empty($this->email) || empty($this->newPassword) ) {
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